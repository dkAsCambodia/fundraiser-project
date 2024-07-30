<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Models\Transaction;
use App\Models\CauseDetail as ModelsCauseDetail;
use Session;

class PaypalPaymentController extends Controller
{
    private $gateway;

     function __construct()
    {
    	$this->gateway = Omnipay::create('PayPal_Rest');
    	$this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
    	$this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
    	$this->gateway->setTestMode(true);
    }

    public function paypalForm($Final_amount, $Final_currency, $Final_currencySymbol, $account_id, $cause_detail_id, $frequency)
    {
        // echo "<pre>";  print_r($Final_amount); die;
        return view('paypal.paypal-form',compact('Final_amount', 'Final_currency', 'Final_currencySymbol', 'account_id', 'cause_detail_id', 'frequency')
        );
    }

    public function paypalCheckout(Request $request)
    {
    	try {
    		$response = $this->gateway->purchase(array(
    			'amount' => $request->amount,
    			'currency' => $request->currency,
    			'returnUrl' => route('paypalCheckout.success'),
    			'cancelUrl' => route('paypalCheckout.cancel'),

                // Additional parameters
                // 'firstName' => 'first_name',
                // 'lastName' => 'last_name',
                // 'email' => 'email@gmail.com',
                // 'line1' => 'address1',
                // 'line2' => 'address2',
                // 'city' => 'city',
                // 'state' => 'state',
                // 'countryCode' => 'country',
                // 'postalCode' => 'postal_code',
    		))->send();
            $data = $response->getData();
            //    echo "<pre>";  print_r($data); die;
    		if ($response->isRedirect()) {
                 // Code for Inser data into DB START
                Transaction::create([
                    'user_id' => auth()?->user()->id ?? null,
                    'account_id' => $request->account_id,
                    'cause_detail_id' => $request->cause_detail_id,
                    'transaction_id' => $data['id'],
                    'main_transaction_id' => $data['id'],
                    'receipt_url' => $data['links']['1']['href'],
                    'total_campaign' => '1',
                    'total_amount' => $request->amount,
                    'currency' => $request->currency,
                    'currency_symbol' => $request->currencySymbol,
                    'frequency' => $request->frequency,
                    'gateway_name' => 'Paypal',
                    'payment_timezone' => 'Asia/Bangkok',
                    'message' => 'Donation with Paypal',
                ]);
                // Code for Inser data into DB END
    			$response->redirect();
    		}else{
    			return $response->getMessage();
    		}
    		
    	} catch (Exception $e) {
    		return $this->getMessage();
    	}
    }

    public function paypalSuccess(Request $request)
    {
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId')
            ));
            $response = $transaction->send();
            if ($response->isSuccessful()) {
                $arr = $response->getData();
              
                date_default_timezone_set('Asia/Phnom_Penh');
                $created_date=date("Y-m-d H:i:s");
                Transaction::where('transaction_id', $arr['id'])
                ->update([
                    'response_all' => json_encode($arr, true),
                    'payment_time' => $created_date,
                    'future_payment_custId' => $arr['payer']['payer_info']['payer_id'],
                    'status' => 'success',
                ]);

                //  Code for new campaign slug START
                $transaction = Transaction::where('transaction_id', $arr['id'])->first();
                //   echo "<pre>"; print_r($transaction); die;
                $MainTransactionId=$arr['id'];
                Session::put('MainTransactionId', $MainTransactionId);
                $stripeController = new StripePaymentController();
                $NewSlug = $stripeController->generateNewSlug($transaction->cause_detail_id, $campaign_upsellId=null, $arr['id']);
                 //  Code for new campaign slug START
                 if($NewSlug=='summary'){
                    $summaryMainSlug = ModelsCauseDetail::select('slug')->where('status', 1)->where('id', $transaction->cause_detail_id)->first();
                        return redirect('/summary'.'/'.$summaryMainSlug->slug.'/'.base64_encode($transaction->total_amount).'/'.$transaction->currency_symbol.'/'.base64_encode($transaction->currency).'/'.base64_encode($MainTransactionId))->withsuccess('Thank for your donation of '.$transaction->currency_symbol.$transaction->total_amount);    
                }else{
                    return redirect('/thank-you'.'/'.$NewSlug.'/'.base64_encode($transaction->total_amount).'/'.$transaction->currency_symbol.'/'.base64_encode($transaction->currency).'/'.base64_encode('paypal.oneclickPayment'))->withsuccess('Thank for your donation of '.$transaction->currency_symbol.$transaction->total_amount);    
                }

                

            }
            else{
                return $response->getMessage();
            }
        }
        else{
            return 'Payment declined!!';
        }
    }

    public function paypalCancel(Request $request)
    {
        return redirect()->back()->with('error', 'You have cancel the Payment for this donations!');
    }

    public function oneclickPayment(Request $request)
    {
        $session_upsellRecord= Session::get('upsellRecord');
        $transactionId = Session::get('transactionId');
        $transactionData = Transaction::where('transaction_id', $transactionId)->first();

        try {
    		$response = $this->gateway->purchase(array(
    			'amount' => $request->amount,
    			'currency' => $request->currency,
    			'returnUrl' => route('upsellPaypal.upsellSuccess'),
    			'cancelUrl' => route('paypalCheckout.cancel'),

                // Additional parameters
                // 'firstName' => 'first_name',
                // 'lastName' => 'last_name',
                // 'email' => 'email@gmail.com',
                // 'line1' => 'address1',
                // 'line2' => 'address2',
                // 'city' => 'city',
                // 'state' => 'state',
                // 'countryCode' => 'country',
                // 'postalCode' => 'postal_code',
    		))->send();
            $data = $response->getData();
            //    echo "<pre>";  print_r($data); die;
    		if ($response->isRedirect()) {
                $MainTransactionId = Session::get('MainTransactionId');
                 // Code for Inser data into DB START
                Transaction::create([
                    'user_id' => $transactionData->user_id,
                    'account_id' => $request->account_id,
                    'cause_detail_id' => $request->cause_detail_id,
                    'upsell_campaignId' => $session_upsellRecord->mainCampaign_id,
                    'transaction_id' => $data['id'],
                    'main_transaction_id' => $MainTransactionId,
                    'receipt_url' => $data['links']['1']['href'],
                    'total_campaign' => '1',
                    'total_amount' => $request->amount,
                    'currency' => $request->currency,
                    'currency_symbol' => $request->currencySymbol,
                    'frequency' => $request->frequency,
                    'gateway_name' => 'Paypal',
                    'payment_timezone' => 'Asia/Bangkok',
                    'message' => 'Upsell Paypal',
                ]);
                // Code for Inser data into DB END
    			$response->redirect();
    		}else{
    			return $response->getMessage();
    		}
    		
    	} catch (Exception $e) {
    		return $this->getMessage();
    	}
    }

    
    public function upsellPaypalSuccess(Request $request)
    {

        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId')
            ));
            $response = $transaction->send();
            if ($response->isSuccessful()) {
                $arr = $response->getData();

               
                    // echo "<pre>"; print_r($arr); die;

                date_default_timezone_set('Asia/Phnom_Penh');
                $created_date=date("Y-m-d H:i:s");
                Transaction::where('transaction_id', $arr['id'])
                ->update([
                    'response_all' => json_encode($arr, true),
                    'payment_time' => $created_date,
                    'future_payment_custId' => $arr['payer']['payer_info']['payer_id'],
                    'status' => 'success',
                ]);

                //  Code for new campaign slug START
                $transaction = Transaction::where('transaction_id', $arr['id'])->first();
        
                $stripeController = new StripePaymentController();
                $NewSlug = $stripeController->generateNewSlug($transaction->upsell_campaignId, $transaction->cause_detail_id , $arr['id']);
                 //  Code for new campaign slug START
                 if($NewSlug=='summary'){
                    $MainTransactionId = Session::get('MainTransactionId');
                    $summaryMainSlug = ModelsCauseDetail::select('slug')->where('status', 1)->where('id', $transaction->upsell_campaignId)->first();
                    return redirect('/summary'.'/'.$summaryMainSlug->slug.'/'.base64_encode($transaction->total_amount).'/'.$transaction->currency_symbol.'/'.base64_encode($transaction->currency).'/'.base64_encode($MainTransactionId))->withsuccess('Thank for your donation of '.$transaction->currency_symbol.$transaction->total_amount);    
                }else{
                    return redirect('/thank-you'.'/'.$NewSlug.'/'.base64_encode($transaction->total_amount).'/'.$transaction->currency_symbol.'/'.base64_encode($transaction->currency).'/'.base64_encode('paypal.oneclickPayment'))->withsuccess('Thank for your donation of '.$transaction->currency_symbol.$transaction->total_amount);
                }

            }
            else{
                return $response->getMessage();
            }
        }
        else{
            return 'Payment declined!!';
        }
    }

    
}
