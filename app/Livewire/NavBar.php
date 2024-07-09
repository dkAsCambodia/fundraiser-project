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
                $ip= request()->ip()=='127.0.0.1' ? '103.246.195.106' : request()->ip();
                // dd($ip);   India IP Address : 103.246.195.106 for testing 103.146.44.34 130.58.218.30
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
