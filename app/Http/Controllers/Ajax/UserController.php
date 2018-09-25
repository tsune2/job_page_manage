<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    public function index() {
        return User::all();
    }

    public function show() {
        return Auth::user();
    }

    public function edit(Request $request) {
        $user = Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->updated_at = now();
        return $user->save();
    }
}
