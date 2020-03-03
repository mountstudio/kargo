<?php

namespace App\Observers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ClientObserver
{
    public function creating(Client $client)
    {
        $user = new User(request()->all());
        $user->password = Hash::make(request('password'));
        $user->save();

        $client->user_id = $user->id;
    }

    /**
     * Handle the client "created" event.
     *
     * @param  \App\Client  $client
     * @return void
     */
    public function created(Client $client)
    {
        //
    }

    public function updating(Client $client)
    {
        /**
         * @var User $user
         */
        $user = User::find($client->user->id);
        $user->fill(request()->except('password'));
        if (request('password')) {
            $user->password = Hash::make(request('password'));
        }
        $user->save();
    }

    /**
     * Handle the client "updated" event.
     *
     * @param  \App\Client  $client
     * @return void
     */
    public function updated(Client $client)
    {
        //
    }

    /**
     * Handle the client "deleted" event.
     *
     * @param  \App\Client  $client
     * @return void
     */
    public function deleted(Client $client)
    {
        //
    }

    /**
     * Handle the client "restored" event.
     *
     * @param  \App\Client  $client
     * @return void
     */
    public function restored(Client $client)
    {
        //
    }

    /**
     * Handle the client "force deleted" event.
     *
     * @param  \App\Client  $client
     * @return void
     */
    public function forceDeleted(Client $client)
    {
        //
    }
}
