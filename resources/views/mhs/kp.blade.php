<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
    <div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/mhs/home">
                  Home
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
            
            </div>
            </div>
        </nav>
    </header>

   
      <!-- Main Content -->
      <main>
        <div class="container-fluid mt-2">
            <h2><i class="fas fa-file mr-2"></i>Form Pengajuaan KP</h2><hr>

            <!-- Form -->
            <div class="row container-fluid">
                <div class="col-md-6">
                  
                        @if(\Session::has('success'))
                            <div class="alert alert-success mt-3">
                                <p>{{ \Session::get('success') }}</p>
                            </div>
                        @endif
                    <form method="Get" action="/layanan/kp/simpanKP">
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
                            <label for="" class="font-weight-bold">Judul Kp</label>
                            <input class="form-control" class="form-control" name="judul_kp" id="judul_kp" >
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
                       
                 
                         <div class="form-group">
                            <label for="exampleFormControllerFile1" class="font-weight-bold">Dokumen</label>
                            <input type="file" class="form-control" name="dokumen" id="dokumen" required='required'  >
                            <p style="color: red">Format File pdf </p>
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