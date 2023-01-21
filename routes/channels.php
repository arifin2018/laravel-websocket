<?php

use App\Broadcasting\UserChannel;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    Log::info("Broadcast USER  = " . json_encode($user));
    Log::info("ID  =   " . json_encode($id));
    return (int) $user->id === (int) $id;
    // return true;
});
Broadcast::channel('User.{id}', function ($user, $id) {
    Log::info('json_encode = ' . json_encode($user));
    Log::info('json_encode id = ' . json_encode($id));
    return true;
});

// Broadcast::channel('User.{id}', UserChannel::class);
