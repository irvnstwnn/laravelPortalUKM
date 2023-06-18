<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\berita;
use App\Models\ukm;
use Illuminate\Http\Request;

class SearchController extends Controller
{
     public function search(Request $request)
    {
        $nama = auth()->check() ? auth()->user()->nama : null;
        $keyword = $request->input('query');

        $beritas = berita::where('judul', 'LIKE', "%{$keyword}%")->get();
       

        return view('dashboard.result', compact( 'beritas','nama'));
    }
    public function searchukm(Request $request)
    {
        $nama = auth()->check() ? auth()->user()->nama : null;
        $keyword = $request->input('query');

        
        $ukms = ukm::where('judul', 'LIKE', "%{$keyword}%")->get();

        return view('tentang.result', compact( 'ukms','nama'));
    }
}
