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
                    <form action="/barangkeluar/store" method="post">
                    {{ csrf_field() }}
                  <form class="form-inline">
                    <label class="sr-only" for="inlineFormInputName2">No Keluar</label>
                        <input type="text" name="nokeluar" class="form-control mb-2 mr-sm-2" id="nokeluar" placeholder="Nama Barang" required="required">
                    <div class="input-group mb-2 mr-sm-2">
                 <div class="input-group-prepend">                   
                    </div>
                 </div>
                 
                 <label class="sr-only" for="inlineFormInputName2">Nama Barang</label>
                        <select type="text" name="id_barang" class="form-control mb-2 mr-sm-2" id="id_barang" placeholder="Nama Jenis Barang" required="required">
                           <option >Pilih Nama Barang</option>
                           @foreach ($barang as $s)
                           <option value="{{ $s->id}}">{{$s->name}}</option>
                           @endforeach
</select>


                 <label class="sr-only" for="inlineFormInputName2">Tanggal Keluar</label>
                        <input type="date" name="date" class="form-control mb-2 mr-sm-2" id="date" placeholder="Tanggal Masuk" value="<?=date('Y-m-d')?>" required="required">
                    <div class="input-group mb-2 mr-sm-2">
                 <div class="input-group-prepend">                   
                    </div>
                 </div>

                    <div class="input-group mb-2 mr-sm-2">
                 <div class="input-group-prepend">  
                  
                 
                    </div>
                 </div>
                 <label class="sr-only" for="inlineFormInputName2">Jumlah Barang</label>
                        <input type="number" name="jumlah" class="form-control mb-2 mr-sm-2" id="jumlah" placeholder="Jumlah Barang Masuk" required="required">
                    <div class="input-group mb-2 mr-sm-2">
                 <div class="input-group-prepend">                   
                    </div>
                 </div>


                 

                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>      
         </div>
            @endsection