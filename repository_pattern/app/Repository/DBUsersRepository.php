<?php

namespace App\Repository;

use App\RepositoryInterface\UsersRepositoryInterface;
use App\Models\User;

class DBUsersRepository implements UsersRepositoryInterface
{
    public function all()
    {
        return User::all();
    }

    public function create($attrubutes)
    {
        return User::create($attrubutes);
    }
}