<?php

namespace App\Policies;

use App\Models\Alumni;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AlumniPolicy
{

    public function update(User $user, Alumni $alumni): bool
    {
        return $user->is_admin;
    }
}
