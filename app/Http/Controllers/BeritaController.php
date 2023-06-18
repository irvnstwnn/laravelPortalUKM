<?php

namespace App\Http\Controllers;
use App\Models\berita;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BeritaController extends Controller
{
    public function index()
{
    $beritas = Berita::orderBy('created_at', 'desc')->get();
    $user = Auth::user();
    $nim = auth()->check() ? auth()->user()->nim : null;
    $nama = auth()->check() ? auth()->user()->nama : null;

    if (auth()->check()) {
        return view('dashboard.index', compact('beritas', 'nim', 'nama', 'user'));
    } else {
        return view('dashboard.beranda', compact('beritas'));
    }
}

public function upload()
{

    $user = Auth::user();
    $nim = auth()->check() ? auth()->user()->nim : null;
    $nama = auth()->check() ? auth()->user()->nama : null;
    return view('dashboard.upload', compact( 'nim', 'nama'));
}
public function destroy($id)
    {
        $berita = berita::find($id);

      

        $berita->delete();

        
    return redirect()->back()->with('success', 'Data berhasil diupload');
    }
public function store(Request $request)
{
    
    $request->validate([
        'judul' => 'required',
        'isi' => 'required',
        'foto' => 'image|mimes:jpeg,png,jpg|max:2048', // Menambahkan validasi untuk jenis dan ukuran file foto
    ]);

    $berita = new berita();
    $berita->judul = $request->input('judul');
    $berita->isi = $request->input('isi');

    if ($request->hasFile('foto')) {
        $foto = $request->file('foto');
        $fotoName = time() . '.' . $foto->getClientOriginalExtension();
        $foto->move(public_path('image'), $fotoName);
        $berita->foto = 'image/' . $fotoName;
    }

    $berita->save();

    return redirect()->back()->with('success', 'Data berhasil diupload');
}
public function show( $id)
{
    $user = Auth::user();
    $berita = berita::findOrFail($id);
    $nama = auth()->check() ? auth()->user()->nama : null;
    
    return view('/dashboard.selengkapnya', compact('berita','nama','user'));
}

}
