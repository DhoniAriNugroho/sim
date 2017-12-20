<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<div class="panel panel-default">
<div class=panel-heading>Data</div>
<div class=panel-body>
<p>data barang</p>
</div>
<table class=table>
<thead>
<tr>
<th>Nama</th>
<th>Harga</th>
<th>keterangan</th>
<th>Image</th>
</tr>
</thead>
<tbody>
<?php
include "koneksi-database.php";
$data = "SELECT * from dataimage";
$bacadata = mysql_query($data);
while($select_result = mysql_fetch_array($bacadata))
{
$nama       		= $select_result['nama'];
$harga    			= $select_result['harga'];
$keterangan        	= $select_result['keterangan'];
$image        		= $select_result['image'];

echo"<tr> <td>$nama</td><td>$harga</td><td>$keteangan</td><td><img src='$image' height='150'></td></tr> ";
//ganti imagesup dengan nama folder dimana anda menempatkan image hasil upload
}?>
</tbody>
</table>
</div>
</div>
</body>
</html>