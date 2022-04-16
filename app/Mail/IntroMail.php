<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class IntroMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($intromail)
    {
        $this->intromail = $intromail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.intro')
                    ->with('intromail', $this->intromail)
                    ->from(config('mail.from.address'), config('app.name'))
                    ->subject('Welcome to '.config('app.name'));
    }
}
