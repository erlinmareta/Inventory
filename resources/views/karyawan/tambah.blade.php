@extends('template')
@section('content')
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row"></div>
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Data Karyawan</h4>
                  <p class="card-description">
                Form tambah data karyawan</p>
                <form action="/karyawan/store" method="post">
                    {{ csrf_field() }}
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputName1">NIP</label>
                      <input type="numeric" name="nip" class="form-control" id="nip" placeholder="Nip" required="required">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail3">Nama</label>
                      <input type="name" class="form-control" name="nama" id="nama" placeholder="Nama" required="required">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail3">Alamat</label>
                      <input type="name" class="form-control" name="alamat" id="alamat" placeholder="Alamat" required="required">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail3">Tanggal Masuk Kerja</label>
                      <input type="date" class="form-control" id="date" name="date" value="<?=date('Y-m-d')?>" required="required">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail3">No. Hp</label>
                      <input type="name" class="form-control" name="hp" id="hp" placeholder="No.HP" required="required">
                    </div>
                  
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div></div>
            </div>
            @endsection