
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/Pengumuman/style.css">
    <title>Pengumuman</title>
</head>

<body>
    @include('navbar.index')
{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary navigasi">
        <div class="container-fluid">
            <a class="navbar-brand logo" href="#"><img src="/image/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto menu">
                    <li class="nav-item ps-5 pe-5">
                        <a class="nav-link" style="font-weight: bold;" aria-current="page" href="./berandasetelahlogin.php">Beranda</a>
                    </li>
                    <li class="nav-item ps-5 pe-5">
                        <a class="nav-link" style="font-weight: bold;" href="./tentangUkm.php">Tentang UKM</a>
                    </li>
                    <li class="nav-item ps-5 pe-5">
                        <a class="nav-link active color-kuning" style="font-weight: bold;" href="./Pengumuman.html">Pengumuman</a>
                    </li>
                    <li class="nav-item ps-5">
                        <a class="nav-link " style="font-weight: bold;" href="./profile.php">Hi, nama</a>
                    </li>
                    <li class="nav-item">

                        
    <img height="60px" src="/image/fotoNoe.png" alt="">
    
                         
                    

                    </li>

                </ul>
            </div>
        </div>
    </nav> --}}
    
    <div style="margin-left:85%;margin-top:2vh;" class="tambah">
        @if (Auth::check() && Auth::user()->admin)
        <a class="btn btn-warning" href="/upload/pengumuman" style="margin-right: 1vh;">tambahkan pengumuman</a>
    @endif
    </div>
    <div class="col mt-5">
        
        @foreach ($pengumumans as $pengumuman)
        <div style="margin-left: 100px;" class="row">
            <h1 style="font-size: 40px; font-weight: 500;text-align:start; padding-right:150px;">{{$pengumuman->judul}} </h1>
            <h1 style="font-size: 24px; font-weight: 400; padding-top: 20px; margin-left: 10px; padding-right:100px;">{{$pengumuman->penggalan}}</h1>
            <a style="text-decoration: none;" href="/pengumuman/{{$pengumuman->id}}"><h1 class="nav-link active color-kuning" style="font-size: 24px; font-weight: 400; margin-left: 22px;"> Selengkapnya >></h1></a> 
            @if (Auth::check() && Auth::user()->admin)
            <form action="/pengumuman/{{$pengumuman->id}}" method="POST">
                @csrf

                <div class="d-flex justify-content-end">
                    <button class="btn btn-warning" style="font-size: 20px; margin-right:25px;">hapus</button>
                    {{-- <a class="btn btn-warning" style="font-size: 20px;" href="./ukmSelanjutnya.php">Selanjutnya</a> --}}
                </div>    
            </form>
            @endif
        </div><br>
        @endforeach
        
        {{-- <div style="margin-left: 100px;" class="row">
            <h1 style="font-size: 32px; font-weight: 500;">Pengumuman Penerimaan UKM Tahun 2023 </h1>
            <h1 style="font-size: 24px; font-weight: 400; padding-top: 20px; margin-left: 10px;">Akan diadakan penerimaan anggota baru UKM di..</h1>
            <a style="text-decoration: none;" href="./selengkapnya.php"><h1 class="nav-link active color-kuning" style="font-size: 24px; font-weight: 400; margin-left: 22px;"> Selengkapnya >></h1></a> 
        </div><br>
        <div style="margin-left: 100px;" class="row">
            <h1 style="font-size: 32px; font-weight: 500;">Pengumuman Penerimaan UKM Tahun 2023 </h1>
            <h1 style="font-size: 24px; font-weight: 400; padding-top: 20px; margin-left: 10px;">Akan diadakan penerimaan anggota baru UKM di..</h1>
            <a style="text-decoration: none;" href="./selengkapnya.php"><h1 class="nav-link active color-kuning" style="font-size: 24px; font-weight: 400; margin-left: 22px;"> Selengkapnya >></h1></a> 
        </div> --}}
    </div>

    <footer class="mt-5">
        <p style="padding-top: 12px; padding-right: 50px;" class="footer"><em>Terintegrasi </em>- Universitas Jambi</p>
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
    crossorigin="anonymous"></script>

</html>