<?php
namespace App\Livewire;
use Livewire\Component;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use App\Models\Country;
use Session;

class NavBar extends Component
{
    public $logo;
    public $IpLocation;

    public function mount($logo = null)
    {
        $SESSLOCAATION= Session::get('sessLocation');
        if(empty($SESSLOCAATION)){
                $ip= request()->ip()=='127.0.0.1' ? '103.146.44.34' : request()->ip();
                // dd($ip);
                $IpLocation = Location::get($ip);
                $Query = Country::where(['curency_code' => $IpLocation->currencyCode, 'status'=> '1'])->first();
                Session::put('sessLocation', $Query);
        }
        
        $this->logo = $logo;
    }
    public function render()
    {
        return view('livewire.nav-bar');
    }
}
