<?php

namespace App\Http\Controllers;

class UjianController extends Controller
{
    public function index()
    {
        $siswa = [
            'nama' => 'Lori Febriady',
            'nilai' => 99
        ];

        return view('hasil_ujian', compact('siswa'));
    }
}