<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/fontawesome-free/css/all.min.css">

    <!-- Link CSS -->
    <link rel="stylesheet" href="/css/home.css">


    <title>SIKP | PraKP</title>
  </head>
  <body>

    <!-- Navigasi -->
    <header>
    <nav class="navbar navbar-dark navbar-expand-lg  bg-dark">
            <div class="container-fluid">
            <a class="navbar-brand font-weight-bold text-white" href="/mhs/home">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        
           
          
            </div>
            </div>
        </nav>
    </header>

      <!-- Main Content -->
      <main>
        <div class="container-fluid mt-2">
            <h2><i class="fas fa-file mr-2"></i>Pengajuan Pra KP</h2><hr>
         

            <!-- Form -->
            <div class="row container-fluid">
                <div class="col-md-6">
                  
                        @if(\Session::has('success'))
                            <div class="alert alert-success mt-3">
                                <p>{{ \Session::get('success') }}</p>
                            </div>
                        @endif
                    <form method="GET" action="/layanan/praKp/simpanPraKP">
                        @csrf
                     
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Semester</label>
                            <select class="form-control" name="semester" id="semester">
                                <option value="1">Gasal</option>
                                <option value="2">Genap</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Tahun</label>
                            <input type="text" class="form-control" name="tahun" id="tahun" >
                        </div>
                      
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Nim</label>
                            <input type="text" class="form-control" name="nim" id="nim" >
                        </div>

                        <div class="form-group">
                            <label for="" class="font-weight-bold">Tools</label>
                            <input class="form-control" class="form-control" name="tools" id="tools" >
                        </div>
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Spesifikasi</label>
                            <input type="text" class="form-control" name="spesifikasi" id="spesifikasi"  >
                        </div>
                        <form action="upload.blade.php" method="post" enctype="multipart/form-data">    
                 
                           <div class="form-group">
                          <label for="" class="font-weight-bold">Dokumen</label>
                          <input type="file" class="form-control" name="dokumen" id="dokumen" required='required' multiple >
                         <p style="color: red">Format File yang Diperbolehkan png | pdf </p>
                          </div>
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Penguji</label>
                            <input type="text" class="form-control" name="penguji" id="penguji"  >
                        </div>
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Lembaga</label>
                            <input type="text" class="form-control" name="lembaga" id="lembaga"  >
                        </div>
                            
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Pemimpin</label>
                            <input type="text" class="form-control" name="pimpinan" id="pimpinan"  >
                        </div>
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat"  >
                        </div>
                            
                        <div class="form-group">
                            <label for="" class="font-weight-bold">No Telp</label>
                            <input type="text" class="form-control" name="notelp" id="notelp"  >
                        </div>
                            
                    
                        <button  class="btn btn-primary" onclick="myFunction()">Submit</button>

                        <script>
                            function myFunction() {
                            confirm("Yakin Di Simpan ? ");
                                            }
                        </script>
                    </form>
                    </div>


                </div>
            </div>
            <br>
    </main>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>