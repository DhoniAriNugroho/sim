<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HALAMAN ADMIN</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">HIMOVER</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="login.html"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                     <li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-bar-chart-o"></i> STATISTIK PENJUALAN </a>
                    </li>
                    <li class="active">
                        <a href="input.html"><i class="fa fa-fw fa-bar-chart-o"></i> INPUT BARANG </a>
                    </li>
                    <li class="active">
                        <a href="tampil.php"><i class="fa fa-fw fa-bar-chart-o"></i> UPDATE BARANG </a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-bell"></i> PESANAN </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-file"></i> LAPORAN <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="tables.html"></i> DATA BARANG </a>
                            </li>
                            <li>
                                <a href="harian.html">HARIAN</a>
                            </li>
                            <li>
                                <a href="Bulanan.html">BULANAN</a>
                            </li>
                            <li>
                                <a href="Tahunan.html">TAHUNAN</a>
                            </li>
                        </ul>
                    </li>
                   
                </ul>
            </div>

        </nav>
<body>
<div class="panel panel-default">
<div class=panel-body>
<p>DATA BARANG</p>
</div>
    <br>
    <a href="index.html">
    <button href="Bulanan.html" class="ui primary button">DELETE</button>
    </a>
    <br>
<table class=table>
<thead>
<tr>
<th>Nama</th>
<th>harga</th>
<th>keterangan</th>
<th>Image</th>
</tr>
</thead>
<tbody>
<?php
include "koneksi-database.php";
$data = "SELECT * from penjualan";
$bacadata = mysql_query($data);
while($select_result = mysql_fetch_array($bacadata))
{
$nama        = $select_result['nama'];
$harga    = $select_result['harga'];
$keterangan        = $select_result['keterangan'];
$image        = $select_result['image'];

echo"<tr> <td>$nama</td><td>$harga</td><td>$keterangan</td><td><img src='$image' height='150'></td></tr> ";
//ganti imagesup dengan nama folder dimana anda menempatkan image hasil upload
}?>
</tbody>

<td><a href='update.html?id_mahasiswa=$row[id_mahasiswa]'>Edit</a>
                <a href='delete.php?id_mahasiswa=$row[id_mahasiswa]'>Delete</a>
            </td>
</table>
</div>
</div>
<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/flot-data.js"></script>
</body>
</html>