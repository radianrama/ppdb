<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Pendaftaran</title>
  </head>
  <body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1>PENDAFTARAN</h1>
                <form method="POST" action="{{ route('daftar.update',$daftar->id)}}">
                    @csrf
                    @method('PUT')
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama_lengkap" value="{{ $daftar->nama_lengkap }}">

                    <label for="">Jenis Kelamin</label>
                    <select class="form-control" name="jk" id="">
                       <option value="Laki-Laki">Laki-Laki</option>
                       <option value="Perempuan">Perempuan</option>
                    </select>

                    <label for="">Alamat</label>
                    <textarea type="text" class="form-control" name="alamat_lengkap">{{ $daftar->alamat_lengkap }}</textarea>
                    
                    <label for="">Agama</label>
                    <select name="agama" id="" class="form-control">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Hindu">Hindu</option>
                    </select>
                    
                   <label for="">Asal SMP</label>
                   <input type="text" class="form-control" name="asal_smp" value="{{ $daftar->asal_smp }}">


                   <label for="">Jurusan</label>
                   <select name="jurusan" id="" class="form-control">
                       <option value="RPL">RPL</option>
                       <option value="TKJ">TKJ</option>
                       <option value="TBG">TBG</option>
                       <option value="MMD">MMD</option>
                       <option value="HOTEL">HOTEL</option>
                       <option value="OTKP">OTKP</option>
                   </select>

                   <button type="submit" class="btn btn-success">Simpan</button>
                
                   
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>