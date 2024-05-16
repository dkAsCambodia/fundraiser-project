<?php
namespace App\Livewire\Website;
use Livewire\Component;
use App\Models\CauseDetail as ModelsCauseDetail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;

class ThankyouPage extends Component
{

    use LivewireAlert;
    protected $rules = [
        'getSimilarRecord.selected' => '',
        'getSimilarRecord.default_amount' => '',
    ];
    public $donatedAmount;
    public $donatedCurrencySymbol;
    public $donatedCurrency;
    public $donatedGatewayName;
    public $modalStatus = true;
    public $causeDetails;
    public $getSimilarRecord;
    public $customDonation;
    public $totalAmount = 0;
    public $totalCampaign = 0;
    public $mainId, $mainPageId;
    public $suggestedAmountKey = [
        'three',
        'two',
        'one',
    ];

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
        $this->modalStatus = true;
    }
    public function closeModal(){
        $this->modalStatus = false;
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

    #[Title('Thanks For Donation!')]
    public function render()
    {
        if (session()->has('redirectURL')) {
            session()->forget('redirectURL');
        }

        return view('livewire.website.thankyou-page');
    }

    
}
