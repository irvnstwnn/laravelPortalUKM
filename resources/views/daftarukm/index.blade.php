
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/dashboard/style.css">
    <link rel="stylesheet" href="/Assets/js/daftarlogin.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <title>Tentang UKM</title>
</head>

<body>
   @include('navbar.index')

    <div class="container mb-5">
        <section class="form-daftar m-auto mt-5">
            <div>
                <h3 style="text-align: center;"><b>Daftar UKM {{$ukms->judul}}</b></h3>
            </div>
            <form method="POST" action="/ukm" class="mt-5 d-flex justify-content-center" enctype="multipart/form-data">
                @csrf
                <div style="width:450px;">

                <!-- Nim input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example1">NIM</label>
                    <input style="border: 1px solid #000000;" type="Text" name="nim" id="form2Example1" class="form-control" />
                </div>

                <!-- nama input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2">Nama</label>
                    <input style="border: 1px solid #000000;" name="nama" type="Text" id="form2Example2" class="form-control" />
                </div>

                <!-- Program studi input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example1">Program Studi</label>
                    <input style="border: 1px solid #000000;" name="prodi" type="Text" id="form2Example3" class="form-control" />
                </div>
                <!--  Fakultas input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example1">Fakultas</label>
                    <input style="border: 1px solid #000000;" name="fakultas" type="Text" id="form2Example4" class="form-control" />
                </div>
                
                <!--  Fakultas input -->
                <div class="form-outline mb-4">
                    {{-- <label class="form-label" for="form2Example1">Ukm</label> --}}
                    <input style="border: 1px solid #000000;" name="ukm" type="hidden" id="form2Example4" class="form-control" value="{{ $ukms->judul }}" />
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Portofolio</label>
                    <input style="border: 1px solid #000000;" class="form-control" type="file" id="formFile" name="portofolio">
                </div>

                <!-- nama input -->
                <div class="mb-3">
                    <label for="formFile" class="form-label">Syarat Ketentuan Lainnya</label>
                    <input style="border: 1px solid #000000;" class="form-control" type="file" id="formFile" name="syarat">
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-warning" style="font-size: 20px;">upload</button>
                    {{-- <a class="btn btn-warning" style="font-size: 20px;" href="./ukmSelanjutnya.php">Selanjutnya</a> --}}
                </div>        
                
            </form>
        </section>
    </div>


    


    <footer>
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