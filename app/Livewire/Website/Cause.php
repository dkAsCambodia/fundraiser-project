<?php

namespace App\Livewire\Website;

use App\Models\CauseCategory;
use App\Models\CauseDetail;
use Livewire\Attributes\Title;
use Livewire\Component;
use Carbon\Carbon;

class Cause extends Component
{
    public $causeDetails;
    public $causeCategory;
    public $category;
    public $categoryId = 0;

    protected $queryString = ['category'];

    public function mount()
    {
        // if (auth()->user() && auth()->user()->hasRole(['admin', 'super_admin'])) {
        //     return App::abort(403);
        // }

        $CurrentDate = Carbon::now()->toDateString();
        
        $categoryQuery = CauseCategory::where('status', 1);

        $this->causeCategory = $categoryQuery->get();

        $categoryQuery->when($this->category, function ($categoryQuery) {
            $categoryQuery->where('slug', $this->category);
        });

        $this->categoryId = $categoryQuery->first()?->id;

        $query = CauseDetail::where('status', 1)->whereDate('end_date', '>=',  $CurrentDate);

        $query->when($this->categoryId, function ($query) {
            $query->where('cause_category_id', $this->categoryId);
        });

        $this->causeDetails = $query->with('causeCate')->orderBy('created_at', 'desc')->get();
    }

    #[Title('Cause')]
    public function render()
    {
        return view('livewire.website.cause');
    }
}
