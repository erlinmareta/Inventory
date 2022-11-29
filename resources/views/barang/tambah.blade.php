@extends('template')
@section('content')
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row"></div>
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">ADD DATA BARANG</h4>
                  <p class="card-description">
                    Form tambah data Barang</p>
                    <form action="/barang/store" method="post">
                    {{ csrf_field() }}
                  <form class="form-inline">
                    <label class="sr-only" for="inlineFormInputName2">Nama Barang</label>
                        <input type="text" name="nama" class="form-control mb-2 mr-sm-2" id="nama" placeholder="Nama Barang" required="required">
                    <div class="input-group mb-2 mr-sm-2">
                 <div class="input-group-prepend">                   
                    </div>
                 </div>
                 
                 <label class="sr-only" for="inlineFormInputName2">Kode Barang</label>
                        <input type="text" name="nama" class="form-control mb-2 mr-sm-2" id="nama" placeholder="Kode Barang" required="required">
                    <div class="input-group mb-2 mr-sm-2">
                 <div class="input-group-prepend">                   
                    </div>
                 </div>

                 <label class="sr-only" for="inlineFormInputName2">Supplier</label>
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

                 

                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>       </div>
            @endsection