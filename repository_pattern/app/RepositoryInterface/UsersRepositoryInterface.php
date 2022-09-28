<?php

namespace App\RepositoryInterface;

interface UsersRepositoryInterface
{
    public function all();
    public function create($attrubutes);
}