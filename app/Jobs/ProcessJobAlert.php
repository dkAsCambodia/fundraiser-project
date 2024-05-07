<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\SendJobAlert;
use App\Models\Job;
use App\Models\JobAlert;
use Illuminate\Support\Facades\Mail;

class ProcessJobAlert implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $categoryId;

    public $jobId;

    /**
     * Create a new job instance.
     */
    public function __construct($categoryId, $jobId)
    {
        $this->categoryId = $categoryId;
        $this->jobId      = $jobId;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $job = Job::find($this->jobId);
        $emails = JobAlert::getEmailByCategoryId($this->categoryId);
        foreach ($emails as $email) {
            Mail::to($email)->queue(new SendJobAlert($job));
        }
    }
}

