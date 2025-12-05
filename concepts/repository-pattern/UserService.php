<?php

namespace App\Services;

use App\Repositories\UserRepositoryInterface;

class UserService
{
    protected UserRepositoryInterface $repository;

    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function registerUser(array $data)
    {
        // $user = $this->repository->create($data);
        // return $user;
    }
}
