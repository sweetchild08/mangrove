<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Donations;

class DonationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $donation;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Donations $donation)
    {
        $this->donation=$donation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.donation');
    }
}
