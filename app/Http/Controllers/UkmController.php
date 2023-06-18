<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreukmRequest;
use App\Http\Requests\UpdateukmRequest;
use App\Models\ukm;
use App\Models\daftarukm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UkmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $ukms = ukm::orderBy('created_at', 'desc')->get();
        $nim = auth()->check() ? auth()->user()->nim : null;
        $nama = auth()->check() ? auth()->user()->nama : null;
        return view('tentang.index', compact('ukms', 'nim', 'nama','user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $ukms = ukm::findOrFail($id);
        $nim = auth()->check() ? auth()->user()->nim : null;
        $nama = auth()->check() ? auth()->user()->nama : null;
        return view('daftarukm.index', compact('ukms', 'nim', 'nama'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'ukm' => 'required',
            'portofolio' => 'required|file',
            'syarat' => 'required|file',
        ]);
    
        $daftarukm = new daftarukm();
        $daftarukm->ukm = $request->input('ukm');
        $daftarukm->nim = $request->input('nim');
        $daftarukm->nama = $request->input('nama');
        $daftarukm->prodi = $request->input('prodi');
        $daftarukm->fakultas = $request->input('fakultas');
    
        // Upload file portofolio
        if ($request->hasFile('portofolio')) {
            $portofolioPath = $request->file('portofolio')->store('portofolio');
            $daftarukm->portofolio = $portofolioPath;
        }
    
        // Upload file syarat ketentuan
        if ($request->hasFile('syarat')) {
            $syaratPath = $request->file('syarat')->store('syarat');
            $daftarukm->syarat = $syaratPath;
        }
    
        $daftarukm->save();
    
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = Auth::user();
        $ukms = ukm::findOrFail($id);
        $nim = auth()->check() ? auth()->user()->nim : null;
        $nama = auth()->check() ? auth()->user()->nama : null;
        return view('tentang.ukm', compact('ukms', 'nim', 'nama','user'));
    }
    public function upload()
    {
    
        $nim = auth()->check() ? auth()->user()->nim : null;
        $nama = auth()->check() ? auth()->user()->nama : null;
        return view('tentang.upload', compact( 'nim', 'nama'));
    }
    public function tambah(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'tentang' => 'required',
          
        ]);
    
        $ukm = new ukm();
        $ukm->judul = $request->input('judul');
        $ukm->tentang = $request->input('tentang');
        $ukm->ketua = $request->input('ketua');
        $ukm->wakil_ketua = $request->input('wakil_ketua');
        $ukm->sekretaris = $request->input('sekretaris');
        $ukm->bendahara = $request->input('bendahara');
    
    
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('image'), $fotoName);
            $ukm->foto = 'image/' . $fotoName;
        }
    
        $ukm->save();
    
        return redirect()->back()->with('success', 'Data berhasil diupload');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ukm $ukm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateukmRequest $request, ukm $ukm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ukm = ukm::find($id);

      

        $ukm->delete();

        
    return redirect()->back()->with('success', 'Data berhasil diupload');
    }
}
