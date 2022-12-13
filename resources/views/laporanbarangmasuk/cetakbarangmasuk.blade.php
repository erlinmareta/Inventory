<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../template/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../template/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="../../template/bower_components/jquery/dist/jquery.min.js">
    <link rel="stylesheet" href="../../template/bower_components/bootstrap/dist/js/bootstrap.min.js">
    <link rel="stylesheet" href="../../template/bower_components/datatables.net/js/jquery.dataTables.min.js">
    <link rel="stylesheet" href="../../template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js">
    <title>Laporan Barang Masuk</title>
    <link rel="icon" href="" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset ('font/css/all.min.css')}}">
</head>
<body>

  <div style="page-break-after:always;">
        <br><br><br>
        <h3 class="text-center"><b>LAPORAN BUKTI PEMASUKAN BARANG</b></h3>
        <h3 class="text-center"><b>MY VENTORY</b></h3>
        <p align="center"> Periode Tanggal -blank- s/d -blank-</p>
    @foreach($user as $u)
        <table style="padding:15px; font-size:12pt;">
            <tr>
                <td width="150" class="text-center"> </td>
                <td width="100">Nama Admin</td>
                <td width="10">:</td>
                <td width="840">{{ $u->name }} </td>
            </tr>
            <td><br></td>
            <tr>
            <td width="100" class="text-center"> </td>
                <td width="150">E-mail</td>
                <td width="20">:</td>
                <td width="350">{{ $u->email }}</td>
            </tr>
            <td><br></td>
            @endforeach
        </table>
        <hr style="border:1px solid;margin-right:0px;width:800px;">
        <table class="table table-bordered table-striped" style="font-size:12pt;">
            <thead>
                   <tr>
                      <?php $no=1; ?>
                        <th>No</th>
                        <th>No. Masuk</th>
                        <th>Nama Barang</th>
                        <th>Supplier</th>
                        <th>Tanggal</th>
                        <th>Jumlah</th>

                  </tr>
            </thead>
            <tbody>
            @foreach($cetakbarangmasuk as $b)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $b->nomasuk }} </td>
                    <td>{{ $b->name }} </td>
                    <td>{{ $b->nama}} </td>
                    <td>{{ $b->date}} </td>
                    <td>{{ $b->jumlah }} </td>
              
                  </tr>  
            </tbody>
                @endforeach
        </table>

        <!-- <p style="text-align:right;margin-right:125px;">pew,
            pew</p> -->
        <table>
            <tr>
                <td class="text-center" width="500">
                    <p></p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <p></p>
                    <br>
                </td>
                <td class="text-center" width="400">
                    <p>Mengetahui Admin</p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
             
                    <br>
                    @foreach($user as $u)
                    {{ $u->name }}
                    @endforeach
                </td>
            </tr>
        </table>
        <br>
  </div>
        
</body>
<script>
type = window.print()
</script>