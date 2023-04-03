<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registerPage');
    }
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // if (User::where('email', $this )->exists()) {
        //     print('Not Good');
        //     return redirect()->to('/');
        // }
        $users = User::create(request(['name', 'email', 'password']));
        auth()->login($users);
        return redirect()->to('/home')->with('success', 'User add Succes.');
    }
}
