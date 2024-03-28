<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        $users = User::query()->with('profiles')->get();

        return view('users', ['users' => $users]);
    }

    function count()
    {
        return view('users-count');
    }
}
