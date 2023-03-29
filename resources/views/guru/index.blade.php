@extends('layouts.user')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Data guru</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
        
                  <div class="filter">
                    
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>
        
                      <li><a class="dropdown-item" href="#">Today</a></li>
                      <li><a class="dropdown-item" href="#">This Month</a></li>
                      <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                  </div>
        
                  <div class="card-body">
                    <h5 class="card-title">Data Guru <a href="{{route('guru.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Data guru</a></h5>
        
                    <table class="table table-borderless datatable">
                      <thead>
                        <tr>
                          <th scope="col">Nomor</th>
                          <th scope="col">Nama Lengkap</th>
                          <th scope="col">Guru Mapel</th>
                          <th scope="col">No. Telp</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php $no=1 @endphp
                        @foreach ($guru as $data)
                        <tr>
                            <td>{{$no++}}</td>
                                    <td>{{$data->nama}}</td>
                                    <td>{{$data->mapel->nama}}</td>
                                    <td>{{$data->telepon}}</td>
                          <td><form action="{{route('guru.destroy',$data->id)}}" method="post">
                            @method('delete')
                            @csrf
                            <a href="{{route('guru.edit',$data->id)}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus')"><i class="bi bi-trash3"></i></button>
                        </form></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
        
                  </div>
        
                </div>
              </div><!-- End Recent Sales -->
        </div>
    </div>
</div>
@endsection