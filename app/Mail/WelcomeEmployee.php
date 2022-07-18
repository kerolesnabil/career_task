<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class WelcomeEmployee extends Mailable
{
    use Queueable, SerializesModels;

    public $user_obj;

    public function __construct($user_obj)
    {
        $this->user_obj = $user_obj;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('malis.welcomeEmailToEmployee');
    }
}
