<?php

namespace App\Listeners;

use App\Events\OrderCreated;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendOrderNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     //
    // }

    /**
     * Handle the event.
     *
     * @param  \App\Events\OrderCreated  $event
     * @return void
     */
    public function handle(OrderCreated $event)
    {
        $order = $event->order;

        Mail::send('ordercreated', ['order' => $order], function(Message $message) use ($order) {
            $message->subject('Order has been completed');
            $message->to('user@email.com');
            // $message->to($order->vendor_email);
        });
    }
}
