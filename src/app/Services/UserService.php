<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService extends Service
{
    public function setModel()
    {
        return User::class;
    }
}
