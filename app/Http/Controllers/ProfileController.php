<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = "Nadya Maharani", $kelas = "C", $npm = "2217051095")
    {
    $data = [
        'nama' => $nama,
        'kelas' => $kelas,
        'npm' => $npm
    ];

    return view('profile', $data);
}
}