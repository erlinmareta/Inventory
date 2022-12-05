@extends('template')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
 
              
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Detail karyawan </h2>
                    
                      @foreach($karyawan as $s)
                        <p>
                            Nomor Induk Pegawai : {{ $s->nip }}
                        </p>
                        <br>
                        <p>
                            Nama Karyawan : {{ $s->nama }}
                        </p>
                        <br>
                        <p>
                            Alamat : {{ $s->alamat }}
                        </p>
                        <br>
                        <p>
                            Tanggal Awal Masuk Kerja : {{ $s->date }}
                        </p>
                        <br>
                        <p>
                            Nomor Handphone : {{ $s->hp }}
                        </p>          
                        <br>
                        <a href="{{ url('karyawan/karyawan') }}"> <button class="btn btn-primary btn-sm"><i class="#"></i> Kembali</button></a>
                    @endforeach
                    
                </div>
                </div>
            </div>
            </div>
        </div></div>
</div>
            @endsection