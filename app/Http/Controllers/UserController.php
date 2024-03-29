<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        $users = User::select(['id', 'name', 'email', 'active', 'created_at', 'description'])->where('active', true)->get();

        return view('users', ['users' => $users]);
    }

    function count()
    {
        return view('users-count');
    }
}
