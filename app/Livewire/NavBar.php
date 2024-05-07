<?php

namespace App\Livewire;

use Livewire\Component;

class NavBar extends Component
{
    public $logo;

    public function mount($logo = null)
    {
        $this->logo = $logo;
    }
    public function render()
    {
        return view('livewire.nav-bar');
    }
}
