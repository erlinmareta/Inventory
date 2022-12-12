@extends('template')
@section('content')
@include('sweetalert::alert')

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
 
              
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Supplier</h4>
                  <p class="card-description">
                    Tabel Jenis Satuan <code><a href="/supplier/tambah"> + Add Data</a>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                        <?php $no=1; ?>
                          <th>No</th>
                          <th>Nama Supllier</th>
                          <th>Alamat</th>
                          <th>No HP</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($supplier as $s)
                        <tr>
                          <td>{{ $no++ }}</td>
                          <td>{{ $s->nama }} </td>
                          <td>{{ $s->alamat }} </td>
                          <td>{{ $s->hp }} </td>
                          <td>
				<a href="/supplier/edit/{{ $s->id }} "> Edit</a>
				|
				<a href="/satuan/hapus/{{ $s->id }}"> <i class="fa-thin fa-trash"></i>Hapus</a>
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