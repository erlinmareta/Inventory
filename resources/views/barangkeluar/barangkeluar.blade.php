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
                  <h4 class="card-title">DATA BARANG KELUAR</h4>
                  <p class="card-description">
                    Tabel Data Barang Keluar<code><a class="btn btn-sm btn-success-outline" href="/barangkeluar/tambah" title="Tambah"><span class="fa fa-circle-plus"></span> Tambah Data</a>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                        <?php $no=1; ?>
                          <th>No</th>
                          <th>No. Keluar</th>
                          <th>Nama Barang</th>
                          <th>Tanggal</th>
                          <th>Jumlah</th>
            
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($barangkeluar as $b)
                        <tr>
                          <td>{{ $no++ }}</td>
                          <td>{{ $b->nokeluar }} </td>
                          <td>{{ $b->name }} </td>
                          <td>{{ $b->date}} </td>
                          <td>{{ $b->jumlah }} </td>
                             
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