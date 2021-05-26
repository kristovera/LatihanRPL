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
                <div class="card-header" align="center"><h3>Edit Verifikasi</h3></div>
              
              
                @foreach($prakp as $p)
	            <form action="/koor/verifikasiPraKp/updated/{{ $p->id }}" method="post">
	        	{{ csrf_field() }}
                @method('PUT')
                <input type="hidden" name="id" value="{{ $p->id }}"> <br/>
               
              
                        
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Nim</label>
                            <input type="text" class="form-control" name="nim" id="nim" value="{{ $p->nim}}" readonly >
                        </div>
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Penguji</label>
                            <input type="text" class="form-control" name="penguji" id="penguji" value="{{ $p->penguji }}" readonly >
                        </div>
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Lembaga</label>
                            <input type="text" class="form-control" name="lembaga" id="lembaga" value="{{ $p->lembaga }}" readonly  >
                        </div>
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Tahun</label>
                            <input type="text" class="form-control" name="tahun" id="tahun"value="{{ $p->tahun }}" readonly >
                        </div>
                        <div class="form-group">
                          <label for="" class="font-weight-bold">Dokumen</label>
                          <input type="file" class="form-control" name="dokumen" id="dokumen" required='required' multiple >
                         <p style="color: red">Format File yang Diperbolehkan png | pdf </p>
                          </div>

                      
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Status</label>
                            <select class="form-control" name="status" id="status" value="{{ $p->status }}" >
                            <option value="0">--Pilihan--</option>
                                <option value="Ditolak">Ditolak</option>
                                <option value="Diterima">Diterima</option>
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

