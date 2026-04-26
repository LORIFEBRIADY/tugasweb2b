<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
    //public function index() {
     //   return view('welcome', ['nama' => 'Lori']);
     public function index()
     {
         return view('greeting', ['pesan' => 'Selamat Belajar Laravel Lori Blade']);
    }
}

