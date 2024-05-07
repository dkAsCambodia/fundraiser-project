<?php
namespace App\Livewire\Website;
use Livewire\Component;

class ThankyouPopup extends Component
{   
    public $causeDetails;
    public function render()
    {
        return view('livewire.website.thankyou-popup');
    }
}
