<?php

namespace App\Livewire\Website;

use App\Models\CauseDetail as ModelsCauseDetail;
use App\Models\PaymentDetail;
use App\Models\TransactionDetail;
use App\Models\Country;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Component;
use Stevebauman\Location\Facades\Location;
use Session;

class CauseDetail extends Component
{
    use LivewireAlert;

    public $modalStatus = true;
    public $donateType = 'once';

    public $seletedCurrency = 'USD';

    public $suggestedAmountKey = [
        'six',
        'five',
        'four',
        'three',
        'two',
        'one',
    ];
    protected $rules = [
        'getSimilarRecord.selected' => '',
        'getSimilarRecord.default_amount' => '',
    ];
    public $causeDetails, $currencies, $countries;
    public $getSimilarRecord;
    public $customDonation;
    public $totalAmount = 0;
    public $totalCampaign = 0;
    public $mainId, $mainPageId;
    public function updated()
    {
        $this->totalAmount = 0;
        $this->totalCampaign = 0;

        foreach ($this->getSimilarRecord as $item) {
            if ($item['selected']) {
                $this->totalAmount = $this->totalAmount + (int) $item['default_amount'];
                $this->totalCampaign++;
            }
        }
    }

    public function openModal(){
        if(raisedValue($this->causeDetails->id) >= $this->causeDetails->goal){
            $this->alert('warning', 'Campaign Goal Completed.');
        }else{
            $this->modalStatus = true;
        }
    }

    public function closeModal(){
        $this->modalStatus = false;
    }
    public function donateTypeFun($val){
        $this->donateType = $val;
    }

    public function mount($slug)
    {
        $query = ModelsCauseDetail::where('status', 1)->whereSlug($slug);

        $this->causeDetails = $query->orderBy('created_at', 'desc')->first();
        $this->mainPageId = $this->causeDetails->id;
        $this->mainId = $this->causeDetails->id;

        if (!empty($this->causeDetails->default_amount)) {
            $this->customDonation = $this->causeDetails->default_amount;
            $this->totalAmount = $this->causeDetails->default_amount;
        }
        $this->totalCampaign = 1;

        $getSimilarRecordData = ModelsCauseDetail::where('status', 1)
            ->select('id', 'slug', 'suggested_amounts', 'photo', 'title', 'default_amount', 'account_id')
            ->where('account_id', $this->causeDetails->account_id)
            // ->where('id', '!=', $this->causeDetails->id)
            ->latest()->get();

        $getSimilarRecordData->map(function ($value, $key) use ($slug) {
            $value['selected'] = false;
            $value['desabled'] = false;
            if ($value['slug'] == $slug) {
                $value['selected'] = true;
                $value['desabled'] = true;
            }
            return $value;
        });

        $this->getSimilarRecord = $getSimilarRecordData->toArray();
        
        $this->currencies = Country::where( 'status', '1')->orderBy('curency_code', 'ASC')->get();
        //$this->currencies = Country::where( 'status', '1')->get();
        $this->countries = Country::where( 'status', '1')->orderBy('country_name', 'ASC')->get();

        $SESSLOCAATION= Session::get('sessLocation');
        if(empty($SESSLOCAATION)){
                $ip= request()->ip()=='127.0.0.1' ? '103.246.195.106' : request()->ip();
                // dd($ip);   India IP Address : 103.246.195.106 for testing 103.146.44.34, US 130.58.218.30
                $IpLocation = Location::get($ip);
                $Query = Country::where(['curency_code' => $IpLocation->currencyCode, 'status'=> '1'])->first();
                Session::put('sessLocation', $Query);
        }
    }
    public function checkountNow()
    {

        $transactionId = generateUniqueCode('TR');

        $paymentDetail = PaymentDetail::create([
            'user_id' => auth()->user()->id,
            'total_amount' => $this->totalAmount,
            'total_campaign' => $this->totalCampaign,
            'transaction_id' => $transactionId,
            'status' => 'success',
        ]);
        TransactionDetail::create([
            'user_id' => auth()->user()->id,
            'account_id' => $this->causeDetails->account_id,
            'cause_detail_id' => $this->causeDetails->id,
            'amount' => $this->causeDetails->default_amount,
            'transaction_id' => $transactionId,
            'payment_details_id' => $paymentDetail->id,
            // 'status' => 'success',
        ]);
        return $transactionId;
        // return redirect($callPaymentUrl);
    }

    public function payinResponseUrl()
    {
        $pt_transactionId = base64_decode($_GET['pt_transactionId']);
        $pt_email = base64_decode($_GET['pt_email']);
        $pt_reference = base64_decode($_GET['pt_reference']);
        $pt_amount = base64_decode($_GET['pt_amount']);
        $pt_timestamp = base64_decode($_GET['pt_timestamp']);
        $pt_status = base64_decode($_GET['pt_status']);
        if (!empty($_GET)) {
            echo "Transaction Information as follows" . '<br/>' .
                "TransactionId : " . $pt_transactionId . '<br/>' .
                "Email : " . $pt_email . '<br/>' .
                "ReferenceNo : " . $pt_reference . '<br/>' .
                "Amount : " . $pt_amount . '<br/>' .
                "Datetime : " . $pt_timestamp . '<br/>' .
                "Status : " . $pt_status;
            $this->alert('success', 'Donated Successfully');
        } else {
            echo "No Data Available or Invalid Request";
        }

        //dd($_GET);
    }

    public function openCam($selectedData, $id)
    {
        if ($selectedData) {
            $query = ModelsCauseDetail::where('status', 1)->where('id', $id);
            $this->causeDetails = $query->orderBy('created_at', 'desc')->first();

        }else{
            $query = ModelsCauseDetail::where('status', 1)->where('id', $this->mainPageId);
            $this->causeDetails = $query->orderBy('created_at', 'desc')->first();

        }

        $this->mainId = $this->causeDetails->id;
    }

    #[Title('Cause Details')]
    public function render()
    {
        if (session()->has('redirectURL')) {
            session()->forget('redirectURL');
        }

        return view('livewire.website.cause-detail')->layoutData(['logo' => $this->causeDetails->logo]);
    }
}
