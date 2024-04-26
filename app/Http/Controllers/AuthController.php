<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        return view('login');
    }

    public function register(Request $request)
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $data = $request->only(
            'name',
            'email',
            'password'
        );
        
        $user = User::create($data);
    }
}
