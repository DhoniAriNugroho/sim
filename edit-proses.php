<?php
if(isset($_POST['simpan'])){
	
	include('koneksi-database.php');
	
	
	
$nama       		= $_POST['nama'];
$harga    			= $_POST['harga'];
$keterangan         = $_POST['keterangan'];

$base = "C:/xampp/htdocs/himover/admin/";

$namafolder="gambar/";
	
	
	$update = mysql_query("UPDATE penjualan SET nama='$nama', harga='$harga', keterangan='$keterangan', image='$lampiran' WHERE id='$id'") or die(mysql_error());
	
	
	if($update){
		
		echo 'Data berhasil di simpan! ';		
		echo '<a href="tampil.php?id='.$id.'">Kembali</a>';	
		
	}else{
		
		echo 'Gagal menyimpan data! ';		
		echo '<a href="update.php?id='.$id.'">Kembali</a>';	
		
	}
 
}else{	
	echo '<script>window.history.back()</script>';
 
}
?>