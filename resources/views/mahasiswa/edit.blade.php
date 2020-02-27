@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    DELETE DATA MAHASISWA
                </div>
                    <div class="card-body">
                        <form action="{{route('mahasiswa.update',$mahasiswa->id)}}" method="post">
                            <input type="hidden" name="_method" value="PUT">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Mahasiswa</label>
                                <input type="text" name="nama" value="{{$mahasiswa->nama}} "class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">No Induk Sekoalah</label>
                                <input type="text" name="nim" value="{{$mahasiswa->nim}} "class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Dosen</label>
                                <input type="text" name="nama" value="{{$mahasiswa->nipd}} "class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection

