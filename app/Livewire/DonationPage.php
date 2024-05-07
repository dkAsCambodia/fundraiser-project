<?php

namespace App\Livewire;

use App\Models\TransactionDetail;
use Livewire\Component;

class DonationPage extends Component
{
    public $selectActive = false;

    public $status = ['success', 'pending', 'failed'];

    public function statusSelect(){
        if($this->selectActive == false){
            $this->selectActive = true;
        }else{
            $this->selectActive = false;
        }
    }

    public function render()
    {
        $donation = TransactionDetail::with(['userDetail:id,name', 'accountDetail:id,account_name', 'causeDetail:id,title']);

        $donation = $donation->where('user_id', auth()->user()->id);
        $donation = $donation->whereIn('status', $this->status);
        $donationData = $donation->paginate(10);

        return view('livewire.donation-page', [
            'donationData' => $donationData,
        ]);
    }
}
