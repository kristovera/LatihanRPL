<doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Surat Keterangan</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
              
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Layanan
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/layanan/suratketerangan">Pengajuan Surat Keterangan</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/layanan/praKp">Pengajuan Pra KP</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/layanan/kp">Pengajuan KP</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/layanan/ujianKP">Jadwal Ujian</a>
                  
                </div>
            </ul>
            <form class="form-inline my-2 my-lg-0 ml-auto">
               
                <a href="/mhs/usermhs" class="btn text-white"><i class="fas fa-user" data-toggle="tooltip" title="User Profile"></i></a> 
                <a href="" class="btn text-white"><i class="fas fa-sign-out-alt" data-toggle="tooltip" title="Logout"></i></a> 
                
            </form>
            </div>
            </div>
        </nav>
    </header>

      <!-- Main Content -->
      <main>
        <div class="container-fluid mt-2">
            <h2><i class="fas fa-file mr-2"></i>Pengajuan Surat Keterangan</h2><hr>
            <h4><i class="fas fa-file mr-2"></i>Pastikan Data Anda Benar,Sebelum Di Save</h4><hr>

            <!-- Form -->
            <div class="row container-fluid">
            <div class="col-md-6">
               
                        @if(\Session::has('success'))
                            <div class="alert alert-success mt-3">
                                <p>{{ \Session::get('success') }}</p>
                            </div>
                        @endif
                    <form method="Get" action="/layanan/suratketerangan/simpanSKP">
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
                            <input type="text" class="form-control" name="tahun" id="tahun" placeholder="Masukkan Tahun" >
                        </div>
                      
                        <div class="form-group">
                            <label for="" class="font-weight-bold">NIM</label>
                            <input type="text" class="form-control" name="nim" id="nim" placeholder="Masukkan NIM">
                        </div>

                        <div class="form-group">
                            <label for="" class="font-weight-bold">Lembaga</label>
                            <input class="form-control" class="form-control" name="lembaga" id="lembaga" >
                        </div>
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Pimpinan</label>
                            <input type="text" class="form-control" name="pimpinan" id="pimpinan"  >
                        </div>
                        <div class="form-group">
                            <label for="" class="font-weight-bold">No Telp</label>
                            <input type="text" class="form-control" name="notelp" id="notelp"  >
                        </div>
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat"  >
                        </div>
                        <div class="form-group">
                            <label for="" class="font-weight-bold">fax</label>
                            <input type="text" class="form-control" name="fax" id="fax" >
                        </div>

                        <form action="upload.blade.php" method="post" enctype="multipart/form-data">    
                 
                      <div class="form-group">
                        <label for="" class="font-weight-bold">Dokumen</label>
                        <input type="file" class="form-control" name="dokumen" id="dokumen" required='required' multiple >
                        <p style="color: red">Format File yang Diperbolehkan png | pdf </p>
                    </div>
                            
                        <button type="submit" class="btn btn-primary">Submit</button>
                  
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