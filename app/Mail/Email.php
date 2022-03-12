<?php

namespace App\Mail;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;

class Email extends Mailable
{
    use Queueable, SerializesModels;

    public $subject, $addressee, $message, $user_id;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $addressee, $message, $user_id)
    {
        $this->subject   = $subject;
        $this->addressee = $addressee;
        $this->message   = $message;
        $this->user_id   = $user_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('users.email');
    }
}
