<?php

namespace App\Jobs;

use App\Mail\CompanyActivated;
use App\Mail\CompanyApproved;
use App\Mail\CompanyDeactivated;
use App\Mail\CompanyRejected;
use App\Mail\JobActivated;
use App\Mail\JobApproved;
use App\Mail\JobInactive;
use App\Mail\JobInvitation;
use App\Mail\JobRejected;
use App\Mail\ResetPassword;
use App\Mail\VerifyMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $mail;

    public $record;

    public $type;

    /**
     * Create a new job instance.
     */
    public function __construct($mail, $record, $type)
    {
        $this->mail = $mail;

        $this->record = $record;

        $this->type = $type;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->mail)
            ->send(match ($this->type) {
                // for company
                'deactivated' => new CompanyDeactivated($this->record),
                'activated' => new CompanyActivated($this->record),
                'rejected' => new CompanyRejected($this->record),
                'approved' => new CompanyApproved($this->record),

                // for jobs
                'jobApproved' => new JobApproved($this->record),
                'jobInactive' => new JobInactive($this->record),
                'jobActivated' => new JobActivated($this->record),
                'jobDeactivated' => new JobInactive($this->record),
                'jobRejected' => new JobRejected($this->record),

                // invitations
                'invitation' => new JobInvitation($this->record),

                'verifyMail' => new VerifyMail($this->record),
                'forgotPassword' => new ResetPassword($this->record),
            });
    }
}
