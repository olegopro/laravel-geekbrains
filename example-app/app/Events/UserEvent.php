<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Foundation\Events\Dispatchable;

class UserEvent
{
    use Dispatchable;

    public User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
}
