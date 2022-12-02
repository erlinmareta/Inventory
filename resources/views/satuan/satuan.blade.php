@extends('template')
@section('content')
@include('sweetalert::alert')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
 
              
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">JENIS SATUAN</h4>
                  <p class="card-description">
                    Tabel Jenis Satuan <code><a href="/satuan/tambah"> + Add Data</a>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                        <?php $no=1; ?>
                          <th>No</th>
                          <th>Jenis Satuan</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($satuan as $s)
                        <tr>
                          <td>{{ $no++ }}</td>
                          <td>{{ $s->nama }} </td>
                          <td>
				<a href="/satuan/edit/{{ $s->id }}">Edit</a>
				|
				<a href="/satuan/hapus/{{ $s->id }}" class="btn btn-danger delete">Hapus</a>
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