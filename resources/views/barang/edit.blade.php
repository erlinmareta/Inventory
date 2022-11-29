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
                    @foreach($barang as $b)
         
                    <form action="/barang/update" method="post">
                    {{ csrf_field() }}
                  <form class="form-inline">
                  <input type="hidden" name="id" value="{{ $b->id }}">
                    <label class="sr-only" for="inlineFormInputName2">Nama</label>
                        <input type="text" name="nama" class="form-control mb-2 mr-sm-2" id="nama" placeholder="Nama Barang" value="{{ $b->nama }}" required="required">
                    <div class="input-group mb-2 mr-sm-2">
                 <div class="input-group-prepend">
              </div>
            </div>

            <input type="hidden" name="id" value="{{ $b->id }}">
                    <label class="sr-only" for="inlineFormInputName2">Kode Barang</label>
                        <input type="text" name="kode" class="form-control mb-2 mr-sm-2" id="kode" placeholder="Kode barang" value="{{ $b->kode }}" required="required">
                    <div class="input-group mb-2 mr-sm-2">
                 <div class="input-group-prepend">
              </div>
            </div>

            <input type="hidden" name="id" value="{{ $b->id }}">
                    <label class="sr-only" for="inlineFormInputName2">Nama Supplier</label>
                    <select type="text" name="id_suplier" class="form-control mb-2 mr-sm-2" id="id_suplier" placeholder="Nama Supplier" required="required">
                           <option >Pilih Supplier</option>
                           @foreach ($barang as $b)
                           <option value="{{ $b->id}}">{{$b->supplier->nama}}</option>
                           @endforeach
                        </select>
                    <div class="input-group mb-2 mr-sm-2">
                 <div class="input-group-prepend">
              </div>
            </div>

                    <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                  </form>
                  @endforeach
                </div>
              </div>
            </div>       </div>
            @endsection