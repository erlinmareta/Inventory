@extends('template')
@section('content')
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row"></div>
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">UBAH DATA BARANG</h4>
                  <p class="card-description">
                    Form ubah data Barang</p>
         
                    <form action="/barang/update" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $barang->id }}">
                  <form class="form-inline">
                    <label class="sr-only" for="name">Nama</label>
                        <input type="text" name="name" class="form-control mb-2 mr-sm-2" id="name" placeholder="Nama Barang" value="{{ $barang->name }}" required="required">
                    <div class="input-group mb-2 mr-sm-2">
                 <div class="input-group-prepend">
              </div>
            </div>


                    <label class="sr-only" for="kode">Kode Barang</label>
                        <input type="text" name="kode" class="form-control mb-2 mr-sm-2" id="kode" placeholder="Kode barang" value="{{ $barang->kode }}" required="required">
                    <div class="input-group mb-2 mr-sm-2">
                 <div class="input-group-prepend">
              </div>
            </div>


                    <label class="sr-only" for="id_jenisbarang">Nama Jenis Barang</label>
                    <select type="text" name="id_jenisbarang" class="form-control mb-2 mr-sm-2" id="id_jenisbarang" value="{{ $barang->id_jenisbarang }}" required="required">
                    <option value="">-- Pilih Jenis Barang --</option>
                        @foreach ($jenisbarang as $s)
                            <option value="{{ $s->id }}"
                                @if ($barang->id_jenisbarang == $s->id)
                                    selected
                                @endif
                            >{{ $s->nama }}</option>
                        @endforeach
                        </select>
                    <div class="input-group mb-2 mr-sm-2">
                 <div class="input-group-prepend">
              </div>
                    </div>
            <label class="sr-only" for="inlineFormInputName2">Stok Barang</label>
                        <input type="text" name="stok" class="form-control mb-2 mr-sm-2" id="stok" value="{{ $barang->stok }}" required="required">
                    <div class="input-group mb-2 mr-sm-2">
                 <div class="input-group-prepend">                   
                    </div>
                 </div>
                    <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                  </form>
                </div>
              </div>
            </div>       </div>
            @endsection