
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/tentangukm/style.css">
    <title>PortalUKM</title>
</head>

<body>

    @include('navbar.index')
        
    

    <div class="d-flex justify-content-center">
        <h2 style="font-size: 40px; font-weight: 500;text-align:center">{{$ukms->judul}}</h2>
    </div><br>

    <div class="d-flex justify-content-center">
        <img height="400px" width="800px" src="{{asset($ukms->foto)}}" alt="">
    </div><br>

    <div class="d-flex justify-content-center">
        <div style="width: 80%;">
            <p>{{$ukms->tentang}}</p>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <h1 style="font-size: 32px; font-weight: 500;">PENGURUS INTI</h1>
    </div>

    <div style="margin-left: 400px;" class="col">
        <div class="row">
            <h1 style="font-size: 32px; font-weight: 500;">Ketua </h1>
            <h1 style="font-size: 24px; font-weight: 400;">{{$ukms->ketua}}</h1>
        </div><br>
        <div class="row">
            <h1 style="font-size: 32px; font-weight: 500;">Wakil Ketua </h1>
            <h1 style="font-size: 24px; font-weight: 400;">{{$ukms->wakil_ketua}}</h1>
        </div><br>
        <div class="row">
            <h1 style="font-size: 32px; font-weight: 500;">sekretaris </h1>
            <h1 style="font-size: 24px; font-weight: 400;">{{$ukms->sekretaris}}</h1>
        </div>
        <div class="row">
            <h1 style="font-size: 32px; font-weight: 500;">bendahara </h1>
            <h1 style="font-size: 24px; font-weight: 400;">{{$ukms->bendahara}}</h1>
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