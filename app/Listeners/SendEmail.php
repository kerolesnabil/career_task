<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use App\Mail\WelcomeEmployee;
use Illuminate\Support\Facades\Mail;

class SendEmail
{

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

        Log::info('user_obj');

    }


    public function handle($event)
    {
        Mail::To($event->user_obj->email)->send(new WelcomeEmployee($event->user_obj));
    }
}
