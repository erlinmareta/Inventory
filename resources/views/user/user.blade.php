@extends('template')
@section('content')
<link rel="stylesheet" href="{{ asset ('font/css/all.min.css')}}">
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
 
              
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">DATA USER</h4>
                  <p class="card-description">
                    Tabel Data User <code><a class="btn btn-sm btn-success-outline" href="/user/tambah" title="Tambah"><span class="fa fa-circle-plus"></span> Tambah Data</a>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                        <?php $no=1; ?>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>No.Handphone</th>
                          <th>Email</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($user as $s)
                        <tr>
                          <td>{{ $no++ }}</td>
                          <td>{{ $s->name }} </td>
                          <td>{{ $s->alamat }} </td>
                          <td>{{ $s->hp }} </td>
                          <td>{{ $s->email }} </td>
                          <td>
                          <a class="btn btn-sm btn-success-outline" href="/user/edit/{{ $s->id }}" title="Edit"><span class="fa fa-edit"></span> Edit</a>
                          <a class="btn btn-sm btn-success-outline" href="/user/hapus/{{ $s->id }}" title="Hapus"><span class="fa fa-trash"></span> Hapus</a>
                        </td>            
                        </tr>  
                      </tbody>
                      @endforeach
                    </table>
                    
                  </div>
                </div>
              </div>
            </div>
</div></div>
            @endsection