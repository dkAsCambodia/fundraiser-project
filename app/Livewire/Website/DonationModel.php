<?php

namespace App\Livewire\Website;

use Livewire\Component;

class DonationModel extends Component
{
    public $causeDetails;
    public function render()
    {
        return view('livewire.website.donation-model');
    }

}
