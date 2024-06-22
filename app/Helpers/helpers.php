<?php


use App\Models\TransactionDetail;
use App\Models\User;
use App\Models\UserInformation;
use Carbon\Carbon;
use Illuminate\Support\Str;

/**
 * add k, M, B after thousand number
 */
if (!function_exists('numberLimit')) {
    function numberLimit($num)
    {
        $displayNum = [];

        if ($num > 9999) {
            $roundNum = round($num);
            $numberFormat = number_format($roundNum);
            $array = explode(',', $numberFormat);
            $parts = ['K', 'M', 'B', 'T'];
            $countParts = count($array) - 1;
            $displayNum[0] = $array[0];
            $displayNum[1] = $parts[$countParts - 1];

            return $displayNum;
        }

        return $displayNum = [0 => $num, 1 => '.00'];
    }
}

if (!function_exists('generateUniqueCode')) {
    function generateUniqueCode($key = '')
    {
        $mytime = Carbon::now();
        $currentDateTime = str_replace(' ', '', $mytime->parse($mytime->toDateTimeString())->format('Ymd His'));
        $transectionId = $currentDateTime . random_int(1000, 9999);

        return $key . $transectionId;
    }
}

if (!function_exists('getFillPercentage')) {
    function getFillPercentage($goal, $raisedValue)
    {
        return ($raisedValue/$goal)*100 . '%';
    }
}

if (!function_exists('raisedValue')) {
    function raisedValue($causeId)
    {
        return TransactionDetail::where('cause_detail_id', $causeId)->sum('amount');
    }
}

if (!function_exists('accountName')) {
    function accountName($accountId)
    {
        return User::where('id', $accountId)->first()->account_name;
    }
}

if (!function_exists('userInfor')) {
    function userInfor()
    {
        return UserInformation::where('user_id', Auth::user()->id)->first();
    }
}

if(!function_exists('currency')) {
    function currency($amount)
    {
        $currency = Session::get('sessLocation') ? Session::get('sessLocation') : 'USD';
        $response = Http::get('https://api.exchangerate-api.com/v4/latest/'.'USD');
        $rates = $response->json()['rates'];
        if(Session::get('sessLocation'))
        $result = floor($amount * $rates[$currency->curency_code]);
        else
        $result = floor($amount * $rates['USD']);
        return $result;
    }

}
