@extends('template')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
 
              
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">JENIS BARANG</h4>
                  <p class="card-description">
                    Tabel Jenis Barang <code><a href="/jenisbarang/tambah"> + Add Data</a>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Jenis Barang</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($jenisbarang as $j)
                        <tr>
                          <td>{{ $j->id }}</td>
                          <td>{{ $j->nama }} </td>
                          <td>
				<a href="/jenisbarang/edit/{{ $j->id }}">Edit</a>
				|
				<a href="/jenisbarang/hapus/{{ $j->id }}">Hapus</a>
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