@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    DELETE DATA DOSEN
                </div>
                    <div class="card-body">
                        <form action="{{route('dosen.update',$dosen->id)}}" method="post">
                            <input type="hidden" name="_method" value="PUT">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Dosen</label>
                                <input type="text" name="nama" value="{{$dosen->nama}} "class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">No Induk Pegawai Dosen</label>
                                <input type="text" name="nipd" value="{{$dosen->nipd}} "class="form-control" required>
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

