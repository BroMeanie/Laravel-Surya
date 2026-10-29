<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Menampilkan semua data form
        dd($request->all());

        // Mengambil input secara spesifik
        $username = $request->input('username');
        $password = $request->input('password');
    }
}
