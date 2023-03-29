@extends('layouts.user')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Tambah Data guru</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data guru</div>
                <div class="card-body">
                    <form action="{{route('guru.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Masukan Nama guru</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror">
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="">Masukan Mapel</label>
                                 <select class="form-select" aria-label="Default select example" name="mapel_id" id="" >
                                    <option selected>Select Mapel</option>
                                    @foreach($mapel as $item)
                                    <option value="{{$item->id}}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            <label for="">Masukan Telepon Guru</label>
                            <input type="text" name="telepon" class="form-control @error('telepon') is-invalid @enderror">
                            @error('telepon')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection