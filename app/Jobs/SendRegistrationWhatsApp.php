<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use App\Models\Registration;
use App\Services\WhatsAppService;

class SendRegistrationWhatsApp implements ShouldQueue
{
    use Queueable;
    public int $tries = 3;

    /**
     * Create a new job instance.
     */
    public function __construct(public Registration $registration)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(WhatsAppService $whatsapp): void
    {
        $whatsapp->sendTemplate(
            $this->registration
        );
    }
}
