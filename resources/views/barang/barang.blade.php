@extends('template')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
 
              
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">DATA BARANG </h4>
                  <p class="card-description">
                    Tabel Data Barang <code><a href="/barang/tambah"> + Add Data</a>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                        <?php $no=1; ?>
                          <th>No</th>
                          <th>Nama Barang</th>
                          <th>Kode</th>
                          <th>Supllier</th>
                          <th>Jenis Barang</th>
                        </tr>
                      </thead>
                      <tbody>
                      
                    </table>
                    
                  </div>
                </div>
              </div>
            </div>
</div></div>
            @endsection