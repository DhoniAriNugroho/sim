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
                        <a href="edit.html"><i class="fa fa-fw fa-bar-chart-o"></i> EDIT BARANG </a>
                    </li>
                    <li class="active">
                        <a href="delete.html"><i class="fa fa-fw fa-bar-chart-o"></i> HAPUS BARANG </a>
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


    
<?php

include "koneksi-database.php";

$nama       		= $_POST['nama'];
$harga    			= $_POST['harga'];
$keterangan         = $_POST['keterangan'];

$base = "C:/xampp/htdocs/himover/admin/";

$namafolder="gambar/";

if (!empty($_FILES["filegbr"]["tmp_name"])) {
    
    $jenis_gambar=$_FILES['filegbr']['type']; 

    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png") {
    
        $file_name = basename($_FILES['filegbr']['name']);
 
        $lampiran = $namafolder . $file_name;


        if (move_uploaded_file($_FILES['filegbr']['tmp_name'], $lampiran)) {
            $query_insert = "INSERT INTO penjualan(nama,harga,keterangan,image) VALUES('$nama','$harga','$keterangan','$lampiran')";
            $insert = mysql_query($query_insert);
            if($insert) {
                echo "
                Data berhasil disimpan <br/><br/>
                Nama : $nama <br/><br/>
                harga: $harga<br/><br/>
                keterangan: $keterangan<br/><br/>
                <br/><br/><br/><br/>
                <img src=$namafolder$file_name height='300'>";
            }
            else {
                // echo "Gambar gagal dikirim, Jenis gambar yang anda kirim salah. Harus .jpg .gif .png, atau Anda belum memilih gambar";
                echo mysql_error();
            }
        }
    }
    else {
        echo "format gambar salah";
    }   
}
else {
    echo "anda belum memilih gambar";
}

?>
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