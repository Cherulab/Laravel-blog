<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller
{
    public function update(Request $request)
    {
        $user = $request->user();
 
        // ...
 
        return redirect()->to('/');
    }
    public function homecheck()
    {
        $users = User::findOrFail(request(['name', 'email', 'password']));
        auth()->login($users);
        return redirect()->to('/home')->with('success', 'User add Succes.');
    }
}
