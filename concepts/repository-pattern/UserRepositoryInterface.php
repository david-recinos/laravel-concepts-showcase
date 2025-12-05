<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    public function create(array $data);
    public function find(int $id);
    public function all();
}
