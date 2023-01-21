<?php

namespace App\Broadcasting;

use App\User;
use Illuminate\Support\Facades\Log;

class UserChannel
{
    /**
     * Create a new channel instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Authenticate the user's access to the channel.
     *
     * @param  \App\User  $user
     * @return array|bool
     */
    public function join(User $user, User $userClient)
    {
        Log::info("message user = " . json_encode($user));
        Log::info("message userclient = " . json_encode($userClient));
        return $user->id == $userClient->id;
        // return true;
    }
}
