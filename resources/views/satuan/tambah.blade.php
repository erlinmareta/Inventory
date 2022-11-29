@extends('template')
@section('content')
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row"></div>
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">ADD JENIS SATUAN</h4>
                  <p class="card-description">
                    Form tambah data jenis satuan</p>
                    <form action="/satuan/store" method="post">
                    {{ csrf_field() }}
                  <form class="form-inline">
                    <label class="sr-only" for="inlineFormInputName2">Nama</label>
                    <input type="text" name="nama" class="form-control mb-2 mr-sm-2" id="nama" placeholder="Nama Satuan" required="required">
                  
              
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