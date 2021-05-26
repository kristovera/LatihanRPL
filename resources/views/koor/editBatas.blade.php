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


    <title>SIKP | KOORDINATOR </title>
  </head>
  <body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center"><h3>Edit Jadwal Ujian</h3></div>
              
              
                @foreach($bt as $b)
	            <form action="/koor/batas/updated/{{ $b->id }}" method="post">
	        	{{ csrf_field() }}
                @method('PUT')
                <input type="hidden" name="id" value="{{ $b->id }}"> <br/>
               

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Nim</label>
                        <input type="text" class="form-control" name="nim" id="nim" value="{{ $b->nim }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Penguji</label>
                        <input type="text" class="form-control" name="penguji" id="penguji" value="{{ $b->penguji }}" readonly>
                    </div>

                    
                    <div class="form-group">
                        <label for="" class="font-weight-bold">Tanggal Mulai</label>
                        <input type="date" class="form-control" name="tanggal_mulai" id="tanggal_mulai" value="{{ $b->tanggal_mulai }}" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label for="" class="font-weight-bold">Tanggal Akhir</label>
                        <input type="date" class="form-control" name="tanggal_akhir" id="tanggal_akhir" value="{{ $b->tanggal_akhir}}" >
                    </div>

                 

                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @endforeach
            <!-- End Form -->
            
                </div>
            </div>
           
</div>

