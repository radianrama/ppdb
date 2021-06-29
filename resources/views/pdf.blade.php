<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
</head>
<body>    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1><b>DATA SISWA PPDB SMK SEMANGAT 45</b></h1>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table border="1">
                                <tr class="thead-dark">
                                    <th>No Daftar</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat Lengkap</th>
                                    <th>Agama</th>
                                    <th>Asal SMP</th>
                                    <th>Jurusan</th>
                                </tr>
                                <tr>
                                    <td>{{ $daftar->id }}</td>
                                    <td>{{ $daftar->nama_lengkap }}</td>
                                    <td>{{ $daftar->jk }}</td>
                                    <td>{{ $daftar->alamat_lengkap }}</td>
                                    <td>{{ $daftar->agama }}</td>
                                    <td>{{ $daftar->asal_smp }}</td>
                                    <td>{{ $daftar->jurusan }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>