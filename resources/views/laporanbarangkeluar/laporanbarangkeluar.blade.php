@extends('template')
@section('content')
@include('sweetalert::alert')
<link rel="stylesheet" href="{{ asset('font/css/all.min.css') }}">
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">

            <form action="{{ url('laporanbarangkeluar/cetakbarangkeluar') }}">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="section-title">
                                <h2>INVOICE BUKTI PENGELUARAAN BARANG</h2>
                            </div>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <?php $no = 1; ?>
                                            <th>No</th>
                                            <th>No. Keluar</th>
                                            <th>Nama Barang</th>
                                            <th>Tanggal</th>
                                            <th>Jumlah</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($laporanbarangkeluar as $b)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $b->nokeluar }} </td>
                                                <td>{{ $b->name }} </td>
                                                <td>{{ $b->date }} </td>
                                                <td>{{ $b->jumlah }} </td>


                                            </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                                <!-- <form method="GET" target="_blank" enctype="multipart/form-data" action="/laporanbarangkeluar/cetakbarangkeluar">
                                                @csrf -->

                                <div class="modal-body">

                                    <div class="form-group">
                                        <label>Tanggal Mulai</label>
                                        <input type="date" name="dateStart" class="form-control mb-2 mr-sm-2"
                                            id="date1" placeholder="tgl_mulai" value="<?= date('Y-m-d') ?>"
                                            required="required">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Selesai</label>
                                            <input type="date" name="dateEnd" class="form-control mb-2 mr-sm-2"
                                                id="date2" placeholder="tgl_selesai" value="<?= date('Y-m-d') ?>"
                                                required="required">
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                </div>
                                            </div>


                                            <!-- <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal-body"><i class="fa fa-undo"></i> Close</button>
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-print"></i> Cetak Data</button></div>
                                                -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="modal fade" id="modalCetak" tabindex="-1" role="dialog" aria-labelledby="myLargeModallabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                              <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModelLongTitle">Cetak Data</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div> -->
                            <br><button class="btn btn-primary mb-2" type="submit" title="Cetak"><span
                                    class="fa fa-print"></span> Cetak</button></br>
                        </div>
                    </div>
            </form>
    @endsection