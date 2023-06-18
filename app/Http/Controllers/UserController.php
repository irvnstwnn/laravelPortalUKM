<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $nama = auth()->check() ? auth()->user()->nama : null;
        return view('profile.index', compact('user', 'nama'));
    }
    public function edit()
    {
        $user = Auth::user();
        $nama = auth()->check() ? auth()->user()->nama : null;
        return view('profile.edit', compact('user', 'nama'));
    }
    public function update(Request $request)
    {
        $user = Auth::user();
    
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:255',
            'prodi' => 'required|string|max:255',
            'fakultas' => 'required|string|max:255',
            'password' => 'nullable|string|min:8|confirmed',
            'aboutme' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        // Memperbarui nama dan tentang saya
        $user->nama = $request->input('nama');
        $user->nim = $request->input('nim');
        $user->prodi = $request->input('prodi');
        $user->fakultas = $request->input('fakultas');
    
        // Memperbarui password jika diisi
        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }
    
        // Memperbarui foto profil jika diunggah
  if ($request->hasFile('foto')) {
    $oldFoto = $user->foto;
    if ($oldFoto) {
        Storage::delete($oldFoto); // Menghapus foto lama
    }

    $foto = $request->file('foto');
    $imageName = time() . '.' . $foto->getClientOriginalExtension();
    $foto->move(public_path('profile_pictures'), $imageName);
    
        $user->foto = 'profile_pictures/' . $imageName;
}

        $user->save();
    
        return redirect()->route('profile.edit')->with('success', 'Profil berhasil diperbarui.');
    }
}
