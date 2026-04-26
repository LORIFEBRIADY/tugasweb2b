<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function profile()
    {
        $user = [
            'nama' => 'Lori Febriady',
            'email' => 'lorifebriady81@gmail.com',
            'alamat' => 'Praya Lombok Tengah NTB'
        ];

        return view('profile', compact('user'));
    }
}