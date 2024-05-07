<?php

namespace App\Livewire\Website;

use Livewire\Component;

class SummaryPopup extends Component
{
    public $causeDetails;
    public function render()
    {
        return view('livewire.website.summary-popup');
    }
}
