<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($password_link)
    {
        $this->password_link = $password_link;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
    return $this->from("beast@test.com")
                ->subject("Password Reset")
                ->view("mail.ResetEmail")
                ->with(["password_link"=>$this->password_link])
                ->text("mail.ResetEmail_plain");
    }
}
