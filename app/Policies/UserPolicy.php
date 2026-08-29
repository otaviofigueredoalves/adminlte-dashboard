<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function edit(User $user)
    {
        return $user->roles()
            ->where('name','Editor')
            ->orWhere('name','Admin')
            ->exists();
    }

    public function admin(User $user)
    {
        return $user->roles()
            ->where('name','Admin')
            ->exists();
    }
}
