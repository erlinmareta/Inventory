@extends('template')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
 
              
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">DATA BARANG </h4>
                  <p class="card-description">
                    Tabel Data Barang <code><a href="/barang/tambah"> + Add Data</a>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                        <?php $no=1; ?>
                          <th>No</th>
                          <th>Nama Barang</th>
                          <th>Kode</th>
                          <th>Jenis Barang</th>
                          <th>Stok</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($barang as $b)
                        <tr>
                          <td>{{ $no++ }}</td>
                          <td>{{ $b->name }} </td>
                          <td>{{ $b->kode }} </td>
                          <td>{{ $b->jenisbarang->nama}} </td>
                          <td>{{ $b->stok }} </td>
                          <td>
				<a href="/barang/edit/{{ $b->id }}">Edit</a>
				|
				<a href="/barang/hapus/{{ $b->id }}">Hapus</a>
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