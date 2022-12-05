@extends('template')
@section('content')
@include('sweetalert::alert')

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
 
              
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">DATA BARANG MASUK</h4>
                  <p class="card-description">
                    Tabel Data Barang Masuk<code><a href="/barangmasuk/tambah"> + Add Data</a>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                        <?php $no=1; ?>
                          <th>No</th>
                          <th>No. Masuk</th>
                          <th>Nama Barang</th>
                          <th>Supplier</th>
                          <th>Tanggal</th>
                          <th>Jumlah</th>
            
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($barangmasuk as $b)
                        <tr>
                          <td>{{ $no++ }}</td>
                          <td>{{ $b->nomasuk }} </td>
                          <td>{{ $b->nama }} </td>
                          <td>{{ $b->nama}} </td>
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