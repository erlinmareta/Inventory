@extends('template')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
 
              
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">DATA USER</h4>
                  <p class="card-description">
                    Tabel Data User <code><a href="/user/tambah"> + Add Data</a>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                        <?php $no=1; ?>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($user as $s)
                        <tr>
                          <td>{{ $no++ }}</td>
                          <td>{{ $s->name }} </td>
                          <td>{{ $s->email }} </td>
                          <td>
				<a href="/user/edit/{{ $s->id }}">Edit</a>
				|
				<a href="/user/hapus/{{ $s->id }}">Hapus</a>
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