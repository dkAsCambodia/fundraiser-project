<?php

namespace App\Livewire\Website;

use App\Models\CauseCategory;
use App\Models\CauseDetail;
use Illuminate\Support\Facades\App;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Component;

class HomePage extends Component
{
    use LivewireAlert;

    public $causeCategory;

    public $causeDetails;

    public function mount()
    {
        // if (auth()->user() && auth()->user()->hasRole(['admin', 'super_admin'])) {
        //     return App::abort(403);
        // }
        $categoryQuery = CauseCategory::where('status', 1);

        $this->causeCategory = $categoryQuery->get();

        $query = CauseDetail::where('status', 1);

        $this->causeDetails = $query->with('causeCate')->orderBy('created_at', 'desc')->get();
    }

    #[Title('Home page')]
    public function render()
    {
        if (session()->has('account-appeal')) {
            $this->displayMessage(session()->get('account-appeal'));
        }

        return view('livewire.website.home-page');
    }
}
