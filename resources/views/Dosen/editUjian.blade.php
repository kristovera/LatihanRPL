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


    <title>SIKP | Dosen </title>
  </head>
  <body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center"><h3>Persetujuan KP</h3></div>
              
              
                @foreach($j as $j)
	            <form action="/dosen/jadwalUjian/updated/{{ $j->id }}" method="post">
	        	{{ csrf_field() }}
                @method('PUT')
                <input type="hidden" name="id" value="{{ $j->id }}"> <br/>
               
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="font-weight-bold">Tanggal Ujian</label>
                        <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ $j->tanggal}}" >
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Nim</label>
                        <input type="text" class="form-control" name="nim" id="nim" value="{{ $j->nim }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="" class="font-weight-bold">Judul KP</label>
                        <input type="text" class="form-control" name="judul_kp" id="judul_kp" value="{{ $j->judul_kp }}" readonly>
                    </div>


                    <div class="form-group">
                        <label for="" class="font-weight-bold">Penguji</label>
                        <input type="text" class="form-control" name="penguji" id="penguji" value="{{ $j->penguji }}" readonly>
                    </div>

                    
                    <div class="form-group">
                        <label for="" class="font-weight-bold">Ruang</label>
                        <input type="text" class="form-control" name="ruang" id="ruang" value="{{ $j->ruang }}" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label for="" class="font-weight-bold">Jam</label>
                        <input type="text" class="form-control" name="jam" id="jam" value="{{ $j->jam }}" >
                    </div>

                    </div>
                    <div class="form-group">
                            <label for="" class="font-weight-bold">Status</label>
                            <select class="form-control" name="status" id="status" value="{{ $j->status }}" >
                            <option value="0">--Pilihan--</option>
                                <option value="Tidak Setuju">Tidak Setuju</option>
                                <option value="Setuju">Setuju</option>
                            </select>
                        </div>

                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @endforeach
            <!-- End Form -->
            
                </div>
            </div>
           
</div>

