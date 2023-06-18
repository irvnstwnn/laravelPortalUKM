<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Assets/css/home.css">
    <link rel="stylesheet" href="/Assets/js/daftarlogin.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        @media only screen and (max-width: 800px) {
            /* Tempatkan gaya CSS untuk tampilan mobile di sini */

            /* Contoh penggunaan */

            input {
                max-width: 400px;
            }

            body {
        font-family: 'Poppins', sans-serif;
    }
        }

    </style>

    <title>Tentang UKM</title>
</head>

<body>
    @include('navbar.index')

    <div class="container">
        
        <div class="row g-2">
            <div class="col-md-6 d-flex justify-content-start">
                <div>
                    <h3 style="font-family: 'Poppins';">UKM Terdaftar di Universitas Jambi</h3>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                @if (Auth::check() && Auth::user()->admin)
                <a class="btn btn-warning" href="/upload/ukm" style="margin-right: 2vh;">tambahkan ukm</a>
            @endif
                <div>
                    <form action="{{ route('ukm.results') }}" method="GET">
                        <input style=" padding-left: 20px; width: 490px; height: 54px; border-radius: 18px;" type="search" name="query" placeholder="          Cari UKM...">
                    </form>
                </div>
            </div>
        </div>
        <div class="container p-5">
            {{-- <div class="row">
                <div class="col">
                    <img src="/image/ukm1.png" alt="">
                </div>
                <div class="col-10">
                    <a style="text-decoration: none;" href="./mapala.php">
                        <h1>Mapala Universitas Jambi</h1>
                    </a>
                    <p>Mapala Unja adalah sebuah ukm yang berfokus pada kegiatan arung jeram dan pendakian gunung</p>
                    <a class="btn btn-warning" style="color: rgba(30, 30, 30, 0.73); font-size:20px;" href="./daftarUkm.php">Daftar Sekarang</a>
                </div>
            </div> --}}
            @foreach ($ukms as $ukm)
                
            
            <div class="row mt-5">
                <div class="col">
                    @if (isset($ukm->foto))
                    <img src="{{$ukm->foto}}"alt="" style="width:20vh; height:20vh;">

                    @else
                    <img src="/image/ukm2.png" style="width:20vh; height:20vh;" alt="">
                    @endif
                   
                    
                </div>
                <div class="col-10">
                    <h1><a href="/ukm/{{$ukm->id}}">{{$ukm->judul}}</a> </h1>
                    <p>{{$ukm->tentang}}</p>
                    <a class="btn btn-warning" style="color: rgba(30, 30, 30, 0.73); font-size:20px;" href="/ukm/daftar/{{$ukm->id}}">Daftar Sekarang</a>
                    @if (Auth::check() && Auth::user()->admin)
                    <form action="/ukm/{{$ukm->id}}" method="POST">
                        @csrf
        
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-warning" style="font-size: 20px;">hapus</button>
                            {{-- <a class="btn btn-warning" style="font-size: 20px;" href="./ukmSelanjutnya.php">Selanjutnya</a> --}}
                        </div>    
                    </form>
                    @endif
                </div>
            </div>
            @endforeach
            {{-- <div class="row mt-5">
                <div class="col">
                    <img src="/image/ukm3.png" alt="">
                </div>
                <div class="col-10">
                    <h1>UKM Seni Budaya Melayu Universitas Jambi</h1>
                    <p>UKM seni budaya melayu Universitas jambi merupakan UKM yang berfokus pada kegiatan...</p>
                    <a class="btn btn-warning" style="color: rgba(30, 30, 30, 0.73); font-size:20px;" href="./daftarUkm.php">Daftar Sekarang</a>
                </div>
            </div> --}}
        </div>

        <div style="padding-right:300px;" class="container d-flex justify-content-end">
            <div>
                <a href="./tentangUkm2.php" class="btn-prev"><button style="width: 80px; height: 50px; font-size:20px; background-color:orange; border-top-right-radius: 10px; border-bottom-right-radius: 10px;"> next </button></a>
                
            </div>
        </div>
    </div>
    


    <footer style="margin-top: 20px;">
        <p style=" padding-top: 12px; padding-right: 50px;" class="footer"><em>Terintegrasi </em>- Universitas Jambi</p>
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</html>