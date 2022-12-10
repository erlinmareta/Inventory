@extends('template')
@section('content')
@include('sweetalert::alert')
<link rel="stylesheet" href="{{ asset ('font/css/all.min.css')}}">
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
 
              
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">JENIS BARANG</h4>
                  <p class="card-description">
                    Tabel Jenis Barang <code><a class="btn btn-sm btn-success-outline" href="/jenisbarang/tambah" title="Tambah"><span class="fa fa-circle-plus"></span> Tambah Data</a>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                        <?php $no=1; ?>
                          <th>No</th>
                          <th>Jenis Barang</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($jenisbarang as $j)
                        <tr>
                          <td>{{ $no++ }}</td>
                          <td>{{ $j->nama }} </td>
                          <td>
                          <a class="btn btn-sm btn-success-outline" href="/jenisbarang/edit/{{ $j->id }}" title="Edit"><span class="fa fa-edit"></span> Edit</a>
                          <a class="btn btn-sm btn-success-outline" href="/jenisbarang/hapus/{{ $j->id }}" title="Hapus"><span class="fa fa-trash"></span> Hapus</a>
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