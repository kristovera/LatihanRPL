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


    <title>SIKP | Surat Keterangan</title>
  </head>
  <body>

    <!-- Navigasi -->
    <header>
    <nav class="navbar navbar-dark navbar-expand-lg  bg-dark">
            <div class="container-fluid">
            <a class="navbar-brand font-weight-bold text-white" href="/dashboard">Home</a>
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
                <a class="dropdown-item" href="/koor/verifikasiSuratKet">Verifikasi Surat Keterangan</a>
                <a class="dropdown-item" href="/koor/verifikasiPraKp">Verifikasi Pra KP</a>
                <a class="dropdown-item" href="/koor/verifikasiKp">Verifikasi KP</a>
                <a class="dropdown-item" href="/koor/daftarkp">daftar Registrasi KP</a>
                <a class="dropdown-item" href="/koor/bataskp">Set Batas KP </a>
                <a class="dropdown-item" href="/koor/jadwalkp">Set Jadwal KP</a>
            </ul>
            </div>
            </div>
        </nav>
    </header>

    <div class="col-md-6">
                    <h4>Daftar Pengajuan KP</h4><hr>
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul KP</th>
                            <th scope="col">Penguji</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($kp as $key)
                              <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $key->judul_kp }}</td>
                                <td>
                                    {{$key->penguji}}
                                 
                                </td>
                                <td>
                                    {{ $key->tahun }}
                                  
                                </td>
                                <td>
                                    @if ($key->status == 0)
                                        Belum Diterima
                                    @else
                                        Sudah Diterima
                                    @endif
                                </td>
                              </tr>                                
                            @endforeach
                        </tbody>
       
                       
                      </table>
                  
                          
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