<?php\
if(isset($_GET['id'])){
	
	include('koneksi-database.php');
	
	
	$id = $_GET['id'];
	
	
	$cek = mysql_query("SELECT himover FROM penjualan WHERE id='$id'") or die(mysql_error());
	
	
	if(mysql_num_rows($cek) == 0){
		
		
		echo '<script>window.history.back()</script>';
	
	}else{
		
		
		$del = mysql_query("DELETE FROM penjualan WHERE id='$id'");
		
		
		if($del){
			
			echo 'Data siswa berhasil di hapus! ';		
			echo '<a href="tampil.php">Kembali</a>';	
			
		}else{
			
			echo 'Gagal menghapus data! ';		
			echo '<a href="tampil.php">Kembali</a>';	
		
		}
		
	}
	
}else{
	
	
	echo '<script>window.history.back()</script>';
	
}
?>