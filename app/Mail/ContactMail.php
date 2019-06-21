<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $mail;

    /**
     * Create a new message instance.
     * @param array $mail
     * @return void
     */
    public function __construct($mail)
    {
        $this->mail = $mail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Neue Nachricht von yogaemmental.ch')
            ->from('info@sothegra.ch', 'Yoga Emmental')
            ->to('info@sothegra.ch')
            ->view('email')
            ->with(['email'=>$this->mail]);
    }
}
