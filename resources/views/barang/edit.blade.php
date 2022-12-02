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
         
                    <form action="{{ url('/barang/update' . $barang->id) }}" method="post">
                    {{ csrf_field() }}
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


                    <label class="sr-only" for="id_suplier">Nama Supplier</label>
                    <select type="text" name="id_suplier" id="id_suplier" value="{{ $barang->id_suplier }}" required="required">
                    <option value="">-- Pilih Supplier --</option>
                        @foreach ($supplier as $s)
                            <option value="{{ $s->id }}"
                                @if ($barang->id_suplier == $s->id)
                                    selected
                                @endif
                            >{{ $s->nama }}</option>
                        @endforeach
                        </select>
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