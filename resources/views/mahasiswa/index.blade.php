@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if (session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                        </div>
                    @endif
                <div class="card">
                    <div class="card-header">
                        Data Mahasiswa
                        <a href="{{route('mahasiswa.create')}}"
                        class="float-right">
                        Tambah Data Mahasiswa
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Nama Mahasiswa</th>
                                        <th>Nim</th>
                                        <th>Nama Dosen</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no=1; @endphp
                                    @foreach ($mhs as $data)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$data->nama}}</td>
                                            <td>{{$data->nim}}</td>
                                            <td>{{$data->dosen->nama}}</td>
                                            <td>
                                                <form action="{{route('mahasiswa.destroy',$data->id)}} "method="post">
                                                @csrf
                                                @method ('DELETE')
                                                <a href="{{route('mahasiswa.show',$data->id)}}">Lihat</a> |
                                                <a href="{{route('mahasiswa.edit',$data->id)}}">Edit</a> |
                                                <button type="submit" onclick="return confirm('Apakah Anda Yakin')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
