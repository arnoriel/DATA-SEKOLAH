@extends('layouts.user')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Tambah Data Siswa</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Siswa</div>
                <div class="card-body">
                    <form action="{{route('siswa.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Masukan Nomor Induk Siswa</label>
                            <input type="number" name="nim" class="form-control @error('nim') is-invalid @enderror">
                            @error('nim')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="">Masukan Nama Siswa</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror">
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="">Masukan Jurusan</label>
                             <select class="form-select" aria-label="Default select example" name="jurusan" id="" >
                                <option selected>Select Jurusan</option>
                               <option>TKRO</option>
                               <option>TBSM</option>
                               <option>DKV</option>
                               <option>TKJ</option>
                               <option>RPL</option>
                               <option>OTKP</option>
                               <option>HR</option>
                               <option>TMP</option>
                               <option>TITL</option>
                            </select>
                            <label for="">Masukan Alamat Siswa</label>
                            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror">
                            @error('alamat')
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