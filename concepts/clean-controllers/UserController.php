<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Services\UserService;

class UserController extends Controller
{
    protected UserService $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function store(UserRequest $request)
    {
        // Business logic is delegated to the service
        // $user = $this->service->registerUser($request->validated());

        // Controller only returns a formatted response
        // return new UserResource($user);
    }
}
