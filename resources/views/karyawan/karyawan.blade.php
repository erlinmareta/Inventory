@extends('template')
@section('content')
@include('sweetalert::alert')

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
 
              
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" id="#">DATA KARYAWAN</h4>
                  <p class="card-description">
                    Tabel Data nama_karyawan <code><a href="/karyawan/tambah"> + Add Data</a>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                        <?php $no=1; ?>
                          <th>No</th>
                          <th>NIP</th>
                          <th>Nama</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($karyawan as $s)
                        <tr>
                          <td>{{ $no++ }}</td>
                          <td>{{ $s->nip }} </td>
                          <td>{{ $s->nama }} </td>
                          <td>
				<a href="/karyawan/edit/{{ $s->id }}">Edit</a>
        |
				<a href="/karyawan/hapus/{{ $s->id }}">Hapus</a>
        |
        <a href="/karyawan/detail/{{ $s->id }}">Detail</a>




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