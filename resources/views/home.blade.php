@extends('layouts.user')

@section('content')
<div class="container">
        <h2>Halo! <strong>{{Auth::user()->name}}</strong></h2>
        <h5>Dashboard Analisa Jumlah Data dalam Database</h5>
        <div class="row">
          <div class="col-sm">
          <div class="card" style="width: 18rem; height: 190px;">
          <div class="card-body">
            <h5 class="card-title">Jumlah Data Siswa</h5>
            <p class="card-text">
                <h5>
              <div class="large">{{ DB::table('siswas')->count(); }}</div>
                </h5>
            </p>
          </div>
          <a href="/siswa" class="btn btn-outline-success">Cari di Data Siswa</a>
          </div>
        </div>
      
          <div class="col-sm">
        <div class="card" style="width: 18rem; height: 190px;">
          <div class="card-body">
            <h5 class="card-title">Jumlah Data Mata Pelajaran</h5>
            <p class="card-text">
                <h5>
              <div class="large">{{ DB::table('mapels')->count(); }}</div>
                </h5>
            </p>
          </div>
          <a href="/mapel" class="btn btn-outline-warning">Cari di Data Mapel</a>
        </div>
          </div>
          <div class="col-sm">
        <div class="card" style="width: 18rem; height: 190px;">
          <div class="card-body">
            <h5 class="card-title">Jumlah Data Guru</h5>
            <p class="card-text">
                <h5>
              <div class="large">{{ DB::table('gurus')->count(); }}</div>
                </h5>
            </p>
          </div>
          <a href="/guru" class="btn btn-outline-danger">Cari di Data Guru</a>
        </div>
          </div>
      </div>
@endsection
