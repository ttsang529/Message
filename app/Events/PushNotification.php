<?php

namespace App\Events;

use App\User;
use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Support\Facades\Log;

class PushNotification extends Event implements ShouldBroadcast
{
    use SerializesModels;

    /**
     * @var string
     */
    public $token;
    /**
     * @var string
     */
    public $message;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user, $message)
    {
        $this->token = sha1($user->id . '|' . $user->email);
        $this->message = $message;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {   
        Log::info('Showing broadcastOn notification');
        return ['notification'];
    }
}
