<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/dashboard/style.css">
    <title>Beranda</title>
</head>
<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
</style>
<body>
    @include('navbar.index')
    <div class="container">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/image/dasb.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/image/zzzz.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/image/caro1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/image/caro2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/image/caro3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container mt-5 text-center">
        <div class="row g-2">
            <div class="col-lg-6 d-flex justify-content-start">
                <div>
                    <h3 style="font-family: 'Poppins';">Berita UKM Universitas Jambi</h3>
                </div>
            </div>
            
            <div class="col-md-6 d-flex justify-content-end">
                @if (Auth::check() && Auth::user()->admin)
                <a class="btn btn-warning" href="/upload/berita" style="margin-right: 2vh;">Update Berita</a>
            @endif
                <div>
                    <form action="{{ route('search.results') }}" method="GET">
                        <input style=" padding-left: 20px; width: 490px; height: 54px; border-radius: 18px;" type="search" name="query" placeholder="          Cari Berita UKM...">
                    </form>
                </div>
            </div>
        </div>
        <div class="container mt-5" style="margin-left: 20px">
            <div class="row ">
                @foreach ($beritas as $berita)
                <div style="" class="col-3">
                    @if (isset($berita->foto))
                    <img src="{{$berita->foto}}" style="width: 30vh; height:30vh;" alt="">

                    @else
                    <img src="/image/Rectangle 2.png"style="width: 30vh; height:30vh;" alt="">
                    @endif
                   
                
                    <div style="font-weight: 500; font-size: 24px; line-height: 36px;" class="p-5"><a style="text-decoration: none" href="/berita/{{$berita->id}}">{{$berita->judul}}</a></div>
                    @if (Auth::check() && Auth::user()->admin)
                    <form action="/berita/{{$berita->id}}" method="POST">
                        @csrf

                        <div class="d-flex justify-content-end">
                            <button class="btn btn-warning" style="font-size: 20px;">hapus</button>
                            {{-- <a class="btn btn-warning" style="font-size: 20px;" href="./ukmSelanjutnya.php">Selanjutnya</a> --}}
                        </div>    
                    </form>
                    @endif
                    
                        
                    
                </div>
                
                @endforeach
            
            </div>
        </div>
    </div>

    <footer style="height:50px; margin-top:10px;" class="px-4 d-flex align-items-center justify-content-end">
        <h4>Universitas Jambi</h4>
    </footer>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
    crossorigin="anonymous"></script>

</html>