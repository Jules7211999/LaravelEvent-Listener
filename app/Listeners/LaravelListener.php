<?php

namespace App\Listeners;

use App\Events\LaravelEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LaravelListener
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
     * @param  LaravelEvent  $event
     * @return void
     */
    public function handle(LaravelEvent $event)
    {
        return dd($event->message);
    }
}
