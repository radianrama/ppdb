@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1><b>DATA SISWA PPDB SMK SEMANGAT 45</b></h1>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-responsive">
                            <tr class="thead-dark">
                                <th>No Daftar</th>
                                <th>Nama Lengkap</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat Lengkap</th>
                                <th>Agama</th>
                                <th>Asal SMP</th>
                                <th>Jurusan</th>
                                <th colspan="2">Option</th>
                            </tr>
                            @foreach($daftar as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->nama_lengkap }}</td>
                                <td>{{ $data->jk }}</td>
                                <td>{{ $data->alamat_lengkap }}</td>
                                <td>{{ $data->agama }}</td>
                                <td>{{ $data->asal_smp }}</td>
                                <td>{{ $data->jurusan }}</td>
                                <td><a href="{{ route('daftar.edit',$data->id) }}" class="btn btn-warning">Edit</a></td>
                                <td><form action="{{ route('daftar.destroy',$data->id) }}" method="post">@csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Yakin Data Akan Dihapus?')">Delete</button>
                                </form>
                                </td>
                                <td><a href="{{ route('daftar.show',$data->id)}}" class="btn btn-primary">Cetak</a></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    @if($message = Session::get('success'))
                        <script>
                            alert('{{ $message }}')
                        </script>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection