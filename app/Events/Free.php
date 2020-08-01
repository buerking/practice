<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Free implements ShouldBroadcast           // 1. 事件是要广播出去的
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $msg;

    public function __construct($msg)           // 2. 广播出去的内容
    {
        $this->msg = $msg;
    }

    public function broadcastOn()               // 3. 对哪些频道进行广播
    {
        return [new Channel('countryside'), new Channel('a')];
    }
}