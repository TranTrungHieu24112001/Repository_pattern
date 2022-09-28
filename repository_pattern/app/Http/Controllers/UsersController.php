<?php

namespace App\Http\Controllers;

use App\RepositoryInterface\UsersRepositoryInterface;
use App\Repository\DBUsersRepository;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public $userRepository;

    public function __construct(UsersRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $user = $this->userRepository->all();
        return view('welcome', ['user' => $user]);
    }

    public function store(Request $request)
    {
        $user = $this->userRepository->create($request->all());
        return redirect()->back()->with('message', 'Success');
    }
}