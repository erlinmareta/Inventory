@extends('template')
@section('content')
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row"></div>
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Karyawan</h4>
                  <p class="card-description">
                Form Edit Data Karyawan</p>
                @foreach($karyawan as $s)
                <form action="/karyawan/update" method="post">
                    {{ csrf_field() }}
                  <form class="forms-sample">

                    <div class="form-group">
                    <input type="hidden" name="id" value="{{ $s->id }}">
                      <label for="exampleInputName1">NIP</label>
                      <input type="text" name="nip" class="form-control" id="nip" placeholder="Nip" value="{{ $s->nip }}" required="required">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail3">Nama</label>
                      <input type="text" class="form-control" name="nama" id="nama" placeholder="Name" value="{{ $s->nama }}" required="required">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail3">Alamat</label>
                      <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Name" value="{{ $s->alamat }}" required="required">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail3">Tanggal</label>
                      <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Name" value="{{ $s->tanggal }}" required="required">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail3">Hp</label>
                      <input type="number" class="form-control" name="hp" id="hp" placeholder="Name" value="{{ $s->hp }}" required="required">
                    </div>
                  
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                  @endforeach
                </div>
              </div></div>
            </div>
            @endsection