<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorepengumumanRequest;
use App\Http\Requests\UpdatepengumumanRequest;
use App\Models\pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $pengumumans = pengumuman::orderBy('created_at', 'desc')->get();
        $nim = auth()->check() ? auth()->user()->nim : null;
        $nama = auth()->check() ? auth()->user()->nama : null;
        return view('pengumuman.index', compact('pengumumans', 'nim', 'nama','user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function upload()
    {
    
        $user = Auth::user();
        $nim = auth()->check() ? auth()->user()->nim : null;
        $nama = auth()->check() ? auth()->user()->nama : null;
        return view('pengumuman.upload', compact( 'nim', 'nama','user'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
          
        ]);
    
        $pengumuman = new pengumuman();
        $pengumuman->judul = $request->input('judul');
        $pengumuman->penggalan = $request->input('penggalan');
        $pengumuman->isi = $request->input('isi');
    
    
    
    
        $pengumuman->save();
    
        return redirect()->back()->with('success', 'Data berhasil diupload');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $pengumumans = pengumuman::findOrFail($id);
        $nama = auth()->check() ? auth()->user()->nama : null;
        $user = Auth::user();
        
        return view('/pengumuman.selengkapnya', compact('pengumumans','nama','user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pengumuman $pengumuman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepengumumanRequest $request, pengumuman $pengumuman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
     */
    public function destroy($id)
    {
        $pengumuman = pengumuman::find($id);

      

        $pengumuman->delete();

        
    return redirect()->back()->with('success', 'Data berhasil diupload');
    }
}
