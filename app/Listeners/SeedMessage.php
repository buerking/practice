<?php

namespace App\Listeners;

use App\Events\RegisterOK;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;


class SeedMessage
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
     * @param  RegisterOK  $event
     * @return void
     */
    public function handle(RegisterOK $event)
    {
        //
        Log::alert('欢迎'.$event->user->name);
    }
}
