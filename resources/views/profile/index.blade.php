


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/dashboard/home.css">
    <link rel="stylesheet" href="/Assets/js/daftarlogin.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .password-container {
            position: relative;
          }
          
          #toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
          }
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
          body{
            font-family: 'Poppins';
          }
        @media only screen and (max-width: 1000px) {
  /* Tempatkan gaya CSS untuk tampilan mobile di sini */

  /* Contoh penggunaan */
  .jrk{
    margin-left: 150px;
  }

  /* Tambahkan gaya CSS lainnya sesuai kebutuhan */
}

    </style>
    <title>Profile</title>
</head>

<body>
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
                        <a class="nav-link" style="font-weight: bold;" href="./Pengumuman.php">Pengumuman</a>
                    </li>
                    <li class="nav-item ps-5">
                        <a class="nav-link active color-kuning" style="font-weight: bold;" href="#Masuk">Hi, nama</a>
                    </li>
                    <li class="nav-item">
                   <img height="40px" src="/image/fotoNoe.png" alt="">'
                    

                    </li>

                </ul>
            </div>
        </div>
    </nav> --}}
    @include('navbar.index')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 ">
                
                <div class="row">
                    <div class="col-3">
                        <img style="margin-left: 60px;" src="/image/icon_user.png" alt="">
                    </div>
                    <div class="col">
                        <h5 class="mt-3 color-kuning">Akun Profile</h5>
                    </div>
                </div>
                {{-- <div class="row mt-5">
                    <div class="col-3">
                        <img style="margin-left: 60px;" src="/image/icon_bell_notification.png" alt="">
                    </div>
                    <div class="col">
                        <h5 style="color: rgba(30, 30, 30, 0.49);" class="mt-3">Notifikasi</h5>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-3">
                        <img style="margin-left: 60px;" src="/image/icon_settings.png" alt="">
                    </div>
                    <div class="col">
                        <h5 style="color: rgba(30, 30, 30, 0.49);" class="mt-3">Pengaturan</h5>
                    </div>
                </div> --}}
                <div class="row mt-5">
                    {{-- <a href="./index.html" class="col-3">
                        <img style="margin-left: 60px;" src="/image/icon_logout.png" alt="">
                    </a> --}}
                    <form action="/logout" method="POST" >@csrf <img style="margin-left: 60px;" src="/image/icon_logout.png" alt=""> <button type="submit "class="col" style="text-decoration: none; border:none; background:none; color:black;"><h5 style="color: rgba(30, 30, 30, 0.49);" class="mt-3">Keluar</h5></button></form>
                    {{-- <a href="./index.html" class="col" style="text-decoration: none;">
                        <h5 style="color: rgba(30, 30, 30, 0.49);" class="mt-3">Keluar</h5>
                    </a> --}}
                    
                </div>
                
            </div>
            <div class="col">
                <div class="mt-5 d-flex justify-content-center">
                    @if (isset($user->foto))
                    <img height="60px" src="{{$user->foto}}" alt="" style="border-radius: 50%;">

                    @else
                    <img height="60px"style="border-radius: 50%;" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAIkAiQMBIgACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAAAQIDBQYEB//EADMQAAIBAwIEBAIJBQAAAAAAAAABAgMEEQUhEzFBURIiYXEGkRQjMjRSc6Gx0VNicoHw/8QAFAEBAAAAAAAAAAAAAAAAAAAAAP/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/AOVAAAAAAAAAAAAAAAAAAAAAACdvUCAAAAAAAAAAAAAAAAAAAAAAFXPBHEQGRrBBnkjFKOAKgAAAeLVr+On2rqPDnLaEe7/gC2oajb2EPFXl5n9mEd2znrn4luqjat4QpR6Z8zNRcV6lxVlVrScpy5tmIDYPWtRbz9Kn8l/B6bb4ivaTXFcK0f7lh/NGmAHcabq9tqHli+HW/py6+3c2B85hOUJKUG4yTymuh2mh6kr+2xUf11Paa7+oGyBVzSI4iAuUqSxsQ6noY22+YAAgDYtZHhyiQBilT7FHsZnJGCcm3sgBxvxLdOvqUqafkorwr36/96HWuTzyOCvH4ruu31qSf6gYQAAAAA9ukXLtr+lLPlk/DL2ex4iU2t0B34KweYRb7INpICQY+LuOJnZAZMoZRVU292TwwPfxCPEeV1HkhzfdgelyiubI8cO55mVk1HmB634GcHrFHgancQ6eNyXs9zr+PjbBpviK140I3NNZlBYmu67gc4CSAAAAF6MHVqwprnKSRQ3GhWfim7ma8sdoerA6DiNLC6FXJsgtGDYFS9KOZFo0e5mUFFbAWbRGUVGwBtIpxFnBhcmyAPR41gwzk2ymfUZQEh7rD3RGUVcwNPqGkeZ1LXGHzp9vY1FSlUpPFSEov1R1reSHFSWGk16oDkCYpyeEm32R08ra1zmVGln1SMlOnSgvqoQX+KQGmsdLqVGpXCcIfh6s3sMQjGMUlFLCS6F6ai+ZlVOIEUt92elY6IxRikS6ij1Ayok8zuEupCudwPQ0RgwSuUU+kgUciPEzJOltkxYwAbyQSQ9kAMFzd0bZfWz3/CuZ4dQ1RQbpWzzLk59vY00pOTcpPLfNsDZ3GsVJNqhBQXd7s8dS8uan2q837PB5wBLk3zbZMZyjvGTXsyoA9dHUbqljFVyXaW5sbfWYSaVaLg+6exowB1ka6lFSjJNPk0yJVWznLW6nbS8u8esWbyjWhWpqcHlP9AMmX3JUmVKykkBdyGTD4yfGBvJYPHXjh5R6M5IcUB4vE10NXq1645o03iT+0109DZ6lXjaW8qmPNyiu7OVnJzk5SeW3lsCoAAAAAAAAAAGe0uJW9TK3i+aMAA6BTUoqUXlPkweDTK2U6Un6xNgBALRg5ci/Bfr8gNimWKIuuQHNa9ccW84cX5ae3++prDPfffa/5kv3MAAAAAAAAAAAAAABejN06kZrnFnT0qKlFSUtmso5Zc0dVYfc6H5cf2Azxpxj0LYXYkkD/9k=" alt="">
                    @endif

                </div>
                <h4 class="text-center"><b>{{$user->nama}}</b> </h4>
                <div class="row mt-5">
                    <div class="col-md-5">
                        <h5 class="mt-3" style="margin-left: 150px;">NIM</h5>
                    </div>
                    <div class="col">
                        <h5 class="mt-3 jrk">: {{$user->nim}}</h5>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-5">
                        <h5 class="mt-3" style="margin-left: 150px;">Nama</h5>
                    </div>
                    <div class="col">
                        <h5 class="mt-3 jrk">: {{$user->nama}}</h5>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-5">
                        <h5 class="mt-3" style="margin-left: 150px;">Program Studi</h5>
                    </div>
                    <div class="col">
                        <h5 class="mt-3 jrk">: {{$user->prodi}}</h5>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-5">
                        <h5 class="mt-3" style="margin-left: 150px;">Fakultas</h5>
                    </div>
                    <div class="col">
                        <h5 class="mt-3 jrk">: {{$user->fakultas}}</h5>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-5" style="width:700px;">
                    <a class="btn me-3" style="background-color:aqua; color:white;" href="/profile/edit">edit</a>
                    {{-- <button class="btn me-3" style="background-color:aqua; color:white;">Edit</button> --}}
                    {{-- <button class="btn btn-warning">Simpan</button> --}}
                </div>
            </div>
        </div>
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