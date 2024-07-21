<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\PaymentDetail;
use App\Models\CauseDetail as ModelsCauseDetail;
use App\Models\User;
use App\Models\Upsell;
use App\Models\UserInformation;
use Stripe;
use Session;
use URL;
use Http;

class StripePaymentController extends Controller
{
    public $totalAmount = 0;
    public $totalCampaign = 0;

    public function stripeCheckoutProcess2(Request $request)
    {
          $response = Http::get('https://api.exchangerate-api.com/v4/latest/'.'USD');
            $rates = $response->json()['rates'];
            return $rates;
    }

    public function stripeCheckoutProcess22(Request $request)
    {

        //return 'test';
        if(!empty($request->currencyValue)){
            $response = Http::get('https://api.exchangerate-api.com/v4/latest/'.'USD');
            $rates = $response->json()['rates'];
            $amount= $request->amount;
        $result = floor($amount * $rates[$request->currencyValue]);
        }
        else{
        $result = floor($amount * $rates['USD']);
        }
        return $result;
       /* $currency = Session::get('sessLocation') ? Session::get('sessLocation') : 'USD';
        $response = Http::get('https://api.exchangerate-api.com/v4/latest/'.'USD');
        $rates = $response->json()['rates'];
        if(Session::get('sessLocation'))
        $result = floor($amount * $rates[$currency->curency_code]);
        else
        $result = floor($amount * $rates['USD']);*/
       

    }

     public function stripeCheckoutProcess(Request $request)
    {
       
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));
        $customer = \Stripe\Customer::create(array(
          'name' => $request->Fname.' '.$request->lname ,
          'description' => 'test description',
          'email' => $request->email,
          'source' => $request->input('stripeToken'),
          "address" => ["city" => $request->city, "country" => $request->country, "line1" => $request->address, "postal_code" => $request->zip, "state" => $request->state]

      ));

        try {
            $data = \Stripe\Charge::create ( array (
                    "amount" => $request->amount.'00',
                    "currency" => $request->currency,
                    "customer" =>  $customer["id"],
                    "description" => $request->description
            ) );

            if($data->status == 'succeeded' || $data->status == 'success'){
                $payment_status ='success';
                date_default_timezone_set('Asia/Phnom_Penh');
                $created_date=date("Y-m-d H:i:s");
                list($exp_month, $exp_year) = explode("/", $request->expiration);
                $userId = $this->getuserId($request->Fname, $request->lname, $request->email);
                // Code for Inser data into DB START
                Transaction::create([
                    'user_id' => $userId,
                    'account_id' => $request->account_id,
                    'cause_detail_id' => $request->cause_detail_id,
                    'transaction_id' => $data->id,
                    'main_transaction_id' => $data->id,
                    'total_campaign' => '1',
                    'total_amount' => $request->amount,
                    'currency' => $request->currency,
                    'currency_symbol' => $request->currencySymbol,
                    'frequency' => $request->frequency,
                    'response_all' => $data,
                    'receipt_url' => $data->receipt_url,
                    'gateway_name' => 'Stripe',
                    'payment_timezone' => 'Asia/Bangkok',
                    'payment_time' => $created_date,
                    'message' => $request->description,
                    'card_number' => $request->card_number,
                    'cvv' => $request->cvv,
                    'exp_month' => $exp_month,
                    'exp_year' => $exp_year,
                    'future_payment_custId' => $data->customer,
                    'status' => $payment_status,
                ]);
                // Code for Inser data into DB END

                //Payment details create
                $transactionId = generateUniqueCode('TR');
                $totalCampaign = 1;
                
                $paymentDetail = PaymentDetail::create([
                    'user_id' => $userId,
                    'total_amount' => $request->amount,
                    'total_campaign' => $this->totalCampaign,
                    'transaction_id' => $transactionId,
                    'status' => 'success',
                ]);

                 //Transcation details create
                 TransactionDetail::create([
                    'user_id' => $userId,
                    'account_id' => $request->account_id,
                    'cause_detail_id' => $request->cause_detail_id,
                    'amount' => $request->amount,
                    'transaction_id' =>  $data->id,
                    'payment_details_id' => $paymentDetail->id,
                    'status' => $payment_status,
                ]);

                // Update the user's information START

                User::where('id', $userId)
                ->update([
                    'name' => $request->Fname.' '.$request->lname,
                ]);
                UserInformation::where('user_id', $userId)
                ->update([
                    'mobile' => $request->mobile,
                    'mobile_country_code' => $request->mobile_country_code,
                    'donate_anonymously' => $request->donate_anonymously,
                    'organization_name' => $request->organization_name,
                    'company_name' => $request->company_name,
                    'address' => $request->address,
                    'appartment_flour' => $request->appartment_flour,
                    'city' => $request->city,
                    'state' => $request->state,
                    'zip' => $request->zip,
                    'country' => $request->country,
                ]);
                 // Update the user's information END
                    $NewSlug = $this->generateNewSlug($request->cause_detail_id, $campaign_upsellId=null ,$data->id);
                    $MainTransactionId=$data->id;
                    Session::put('MainTransactionId', $MainTransactionId);
                    if($NewSlug=='summary'){
                        $summaryMainSlug = ModelsCauseDetail::select('slug')->where('status', 1)->where('id', $request->cause_detail_id)->first();
                        return $URL = URL::to('/summary'.'/'.$summaryMainSlug->slug.'/'.base64_encode($request->amount).'/'.$request->currencySymbol.'/'.base64_encode($request->currency).'/'.base64_encode($MainTransactionId));    
                    }else{
                        return $URL = URL::to('/thank-you'.'/'.$NewSlug.'/'.base64_encode($request->amount).'/'.$request->currencySymbol.'/'.base64_encode($request->currency).'/'.base64_encode('stripe.oneclickPayment'));
                    }
            }
            
            
        } catch ( \Stripe\Error\Card $e ) {
            return 'failed';
        }

    }

    
     public function getuserId($fname, $lname, $email)
    {
        if( !empty(auth()->user()->id) ){
            $existUserInfo = UserInformation::where('user_id', auth()->user()->id)->first();
            if(empty($existUserInfo)){
                UserInformation::create([
                    'user_id' => auth()->user()->id,
                ]);
            }
            return auth()->user()->id;
        }else{
            $emailExists = User::where('email', $email)->first();
            if (!empty($emailExists)) {
                $existUserInfo = UserInformation::where('user_id', $emailExists->id)->first();
                if(empty($existUserInfo)){
                    UserInformation::create([
                        'user_id' => $emailExists->id,
                    ]);
                }
                return $emailExists->id;
            }else{
                $NewUser = User::create([
                    'name' => $fname.' '.$lname,
                    'email' => $email,
                    'password' => '$2y$12$d3i8/KSuGg1eBLFC3ZTTBuYQ25klbUQ53slLjkZyGiXtwP5gK7zXK',
                ]);
                UserInformation::create([
                    'user_id' => $NewUser->id,
                ]);
                return $NewUser->id;
            }
        }

       
    }

    public function oneclickPayment(Request $request)
    {
        $session_upsellRecord= Session::get('upsellRecord');
        $transactionId = Session::get('transactionId');
        $transactionData = Transaction::where('transaction_id', $transactionId)->first();
        // echo "<pre>";  print_r($request->all()); die;

        try {
            \Stripe\Stripe::setApiKey(config('services.stripe.secret'));
            $data = \Stripe\Charge::create ( array (
                    "amount" => $request->amount.'00',
                    "currency" => $request->currency,
                    "customer" =>  $transactionData->future_payment_custId,
                    "description" => 'upsell payment with Stripe Pay'
            ) );

            if($data->status == 'succeeded' || $data->status == 'success'){
                $payment_status ='success';
                date_default_timezone_set('Asia/Phnom_Penh');
                $created_date=date("Y-m-d H:i:s");
               
                $MainTransactionId = Session::get('MainTransactionId');
                // Code for Inser data into DB START
                Transaction::create([
                    'user_id' => $transactionData->user_id,
                    'account_id' => $request->account_id,
                    'cause_detail_id' => $request->cause_detail_id,
                    'upsell_campaignId' => $session_upsellRecord->mainCampaign_id,
                    'transaction_id' => $data->id,
                    'main_transaction_id' => $MainTransactionId,
                    'total_campaign' => '1',
                    'total_amount' => $request->amount,
                    'currency' => $request->currency,
                    'currency_symbol' => $request->currencySymbol,
                    'frequency' => $request->frequency,
                    'response_all' => $data,
                    'receipt_url' => $data->receipt_url,
                    'gateway_name' => 'Stripe',
                    'payment_timezone' => 'Asia/Bangkok',
                    'payment_time' => $created_date,
                    'message' => 'upsell payment with Stripe Pay',
                    // 'card_number' => $request->card_number,
                    // 'cvv' => $request->cvv,
                    // 'exp_month' => $exp_month,
                    // 'exp_year' => $exp_year,
                    'future_payment_custId' => $data->customer,
                    'status' => $payment_status,
                ]);

                //Payment details create
                $transactionId = generateUniqueCode('TR');
                $totalCampaign = 1;
                
                $paymentDetail = PaymentDetail::create([
                    'user_id' => $transactionData->user_id,
                    'total_amount' => $request->amount,
                    'total_campaign' => $this->totalCampaign,
                    'transaction_id' => $transactionId,
                    'status' => 'success',
                ]);

                //Transcation details create
                TransactionDetail::create([
                    'user_id' => $transactionData->user_id,
                    'account_id' => $request->account_id,
                    'cause_detail_id' => $request->cause_detail_id,
                    'amount' => $request->amount,
                    'transaction_id' =>  $data->id,
                    'payment_details_id' => $paymentDetail->id,
                    'status' => $payment_status,
                ]);
                // Code for Inser data into DB END
    
                    $NewSlug = $this->generateNewSlug($session_upsellRecord->mainCampaign_id, $session_upsellRecord->campaign_upsellId ,$data->id);
                    if($NewSlug=='summary'){
                        $summaryMainSlug = ModelsCauseDetail::select('slug')->where('status', 1)->where('id', $session_upsellRecord->mainCampaign_id)->first();
                        return redirect('/summary'.'/'.$summaryMainSlug->slug.'/'.base64_encode($request->amount).'/'.$request->currencySymbol.'/'.base64_encode($request->currency).'/'.base64_encode($MainTransactionId))->withsuccess('Thank for your donation of '.$request->currencySymbol.$request->amount);    
                    }else{
                        return redirect('/thank-you'.'/'.$NewSlug.'/'.base64_encode($request->amount).'/'.$request->currencySymbol.'/'.base64_encode($request->currency).'/'.base64_encode('stripe.oneclickPayment'))->withsuccess('Thank for your donation of '.$request->currencySymbol.$request->amount);
                    }
            }
            
            
        } catch ( \Stripe\Error\Card $e ) {
            return 'failed';
        }

    }

    public static function generateNewSlug($mainCampaign_id, $campaign_upsellId=null, $transactionId)
    {
        Session::put('transactionId', $transactionId);
        if(empty($campaign_upsellId)){
            $upsellRecords = Upsell::where('mainCampaign_id', $mainCampaign_id)->first();
        }else{
            $getOrder = Upsell::where('mainCampaign_id', $mainCampaign_id)->where('campaign_upsellId', $campaign_upsellId)->first();
            $newOrder = $getOrder->order+1;
            //  echo "<pre>"; print_r($newOrder); die;
            $upsellRecords = Upsell::where('mainCampaign_id', $mainCampaign_id)->where('order', $newOrder)->first();
            if(empty($upsellRecords)){
                $newOrder = $getOrder->order+2;
                $upsellRecords = Upsell::where('mainCampaign_id', $mainCampaign_id)->where('order', $newOrder)->first();
                if(empty($upsellRecords)){
                    $newOrder = $getOrder->order+3;
                    $upsellRecords = Upsell::where('mainCampaign_id', $mainCampaign_id)->where('order', $newOrder)->first();
                    if(empty($upsellRecords)){
                        $newOrder = $getOrder->order+4;
                        $upsellRecords = Upsell::where('mainCampaign_id', $mainCampaign_id)->where('order', $newOrder)->first();
                        if(empty($upsellRecords)){
                            $newOrder = $getOrder->order+5;
                            $upsellRecords = Upsell::where('mainCampaign_id', $mainCampaign_id)->where('order', $newOrder)->first();
                        }
                    }
                }
                
            }
        }

        if(!empty($upsellRecords)){
            $slug1 = ModelsCauseDetail::select('slug')->where('status', 1)->where('id', $upsellRecords->campaign_upsellId)->first();
            Session::put('upsellRecord', $upsellRecords);
            return $slug1->slug;
        }else{
            return "summary";
        }
    }

    public function declineOffer(Request $request)
    {
        $session_upsellRecord= Session::get('upsellRecord');
        $transactionId = Session::get('transactionId');
        // $transactionData = Transaction::where('transaction_id', $transactionId)->first();
        // echo "<pre>";  print_r($request->all()); die;
        $NewSlug = $this->generateNewSlug($session_upsellRecord->mainCampaign_id, $request->cause_detail_id ,$transactionId);
        if($NewSlug=='summary'){
            $MainTransactionId = Session::get('MainTransactionId');
            $summaryMainSlug = ModelsCauseDetail::select('slug')->where('status', 1)->where('id', $session_upsellRecord->mainCampaign_id)->first();
            return redirect('/summary'.'/'.$summaryMainSlug->slug.'/'.base64_encode($request->amount).'/'.$request->currencySymbol.'/'.base64_encode($request->currency).'/'.base64_encode($MainTransactionId))->withsuccess('Thank for your donation of '.$request->currencySymbol.$request->amount);    
        }else{
            return redirect('/thank-you'.'/'.$NewSlug.'/'.base64_encode($request->amount).'/'.$request->currencySymbol.'/'.base64_encode($request->currency).'/'.base64_encode($request->gateway_name))->with('warning', 'You have declined the donation!');
        }
          
    }

     // public function makePayment(Request $request)
    // {
    //     // echo "<pre>"; print_r($request->all()); die;
    //    \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    //     $data=\Stripe\Charge::create(array(
    //         "amount" => $request->amount.'00',
    //         "currency" => $request->currency,
    //         "description" => $request->description,
    //         "source" => $request->stripeToken,
    //     ));
    //     // Code for Inser data into DB START
    //     Transaction::create([
    //         'user_id' => auth()->user()->id,
    //         'account_id' => $request->account_id,
    //         'cause_detail_id' => $request->cause_detail_id,
    //         'transaction_id' => $data->id,
    //         'total_campaign' => '1',
    //         'total_amount' => $request->amount,
    //         'currency' => $request->currency,
    //         'frequency' => $request->frequency,
    //         'response_all' => $data,
    //         'receipt_url' => $data->receipt_url,
    //         'message' => $request->description,
    //         'status' => $data->status,
    //     ]);
    //     // Code for Inser data into DB END
    //     $NewSlug = $this->generateNewSlug($request->slug);
    //     return redirect('/thank-you'.'/'.$NewSlug.'/'.base64_encode($request->amount).'/'.base64_encode($request->currencySymbol));

    // }
    



}
