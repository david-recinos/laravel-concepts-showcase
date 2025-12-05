<?php

namespace App\Services;

use App\Models\User;

class UserRegistrationService
{
    public function registerUser(array $data): User
    {
        // $user = User::create($data);
        // $this->sendWelcomeEmail($user);
        // return $user;
    }

    protected function sendWelcomeEmail(User $user)
    {
        // Mail::to($user)->send(new WelcomeMail());
    }
}
