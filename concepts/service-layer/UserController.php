<?php

namespace App\Http\Controllers;

use App\Services\UserRegistrationService;

class UserController extends Controller
{
    protected UserRegistrationService $service;

    public function __construct(UserRegistrationService $service)
    {
        $this->service = $service;
    }

    public function register()
    {
        // $data = request()->validate([...]);
        // $user = $this->service->registerUser($data);
        // return response()->json($user);
    }
}
