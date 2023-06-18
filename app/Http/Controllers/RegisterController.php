<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('daftar.index', [  ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'nim' => 'required|max:255',
            'prodi' => 'required|max:255',
            'fakultas' => 'required|max:255',
            'password' => 'required|max:255|min:3',
        ]);
    
        // Set a default value for aboutme if it is empty
        if (empty($validatedData['foto'])) {
            $validatedData['foto'] = ''; // Set your desired default value here
        }
    
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/login');
    }
}
