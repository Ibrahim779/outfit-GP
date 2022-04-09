<?php

namespace App\Listeners;

use App\Events\Verification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendOtp
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\Verification  $event
     * @return void
     */
    public function handle(Verification $event)
    {
        $otp = random_int(1000, 9999);
        
        $event->user->otp = $otp;

        $event->user->save();
    }
}
