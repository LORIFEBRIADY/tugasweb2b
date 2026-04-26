<?php

namespace App\Http\Controllers;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = [
            ['nama' => 'Lori Febriady', 'kelas' => 'XII', 'umur' => 18],
            ['nama' => 'Budi Santoso', 'kelas' => 'XI', 'umur' => 17],
            ['nama' => 'Siti Walinah', 'kelas' => 'X', 'umur' => 16],
            ['nama' => 'Andi Taufik', 'kelas' => 'IX', 'umur' => 15],
            ['nama' => 'Rina Mariana', 'kelas' => 'VIII', 'umur' => 14]
        ];

        return view('daftar_siswa', compact('siswa'));
    }
}