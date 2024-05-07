<?php
namespace App\Livewire\Website;
use Livewire\Component;
use App\Models\CauseDetail as ModelsCauseDetail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use App\Models\Transaction;

class SummaryPage extends Component
{
    use LivewireAlert;
    protected $rules = [
        'getSimilarRecord.selected' => '',
        'getSimilarRecord.default_amount' => '',
    ];
    public $mainAmount;
    public $mainCurrencySymbol;
    public $mainCurrency;
    public $MainTransactionId;

    public $upsellTransactionsList;
    public $TotalTransactionAmount;

    public $modalStatus = true;
    public $causeDetails;
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
        $this->modalStatus = true;
    }
    public function closeModal(){
        $this->modalStatus = false;
    }


    // For share with social media START
    public function shareToTwitter()
    {
        $url = 'https://twitter.com/intent/tweet?url=' . urlencode(url()->current());
        return redirect()->away($url);
    }

    public function shareToFacebook()
    {
        $url = 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode(url()->current());
        return redirect()->away($url);
    }

    public function shareToTelegram()
    {
        $url = 'https://t.me/share/url?url=' . urlencode(url()->current());
        return redirect()->away($url);
    }

    public function shareToYouTube()
    {
        // Replace 'VIDEO_ID' with the actual video ID you want to share
        $url = 'https://www.youtube.com/watch?v=VIDEO_ID';
        return redirect()->away($url);
    }

    public function shareViaEmail()
    {
        // Set recipient email, subject, and body
        $recipient = 'dilipkumargupta631@gmail.com';
        $from = 'nitindamo50@gmail.com'; // Include "from" email in the body
        $subject = 'Check out this link';
        $body = 'I thought you might be interested in this link: ' . url()->current() . "\n\n" . $from;
    
        // Log the email content
        \Log::info("Recipient: $recipient, Subject: $subject, Body: $body");
    
        // Create the mailto link with recipient, subject, and body
        $url = 'mailto:' . urlencode($recipient) . '?subject=' . urlencode($subject) . '&body=' . urlencode($body);
    
        // Redirect to open the mailto link
        return redirect()->away($url);
    }
    // For share with social media END



    public function mount($slug)
    {
        // Fetch records where main_transaction_id is 1
        $this->upsellTransactionsList = Transaction::where(['main_transaction_id'=> base64_decode($this->MainTransactionId), 'status' => 'success'])->get();
        // Calculate total amount
        $this->TotalTransactionAmount = $this->upsellTransactionsList->sum('total_amount'); 

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

        return view('livewire.website.summary-page');
    }

}
