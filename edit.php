<?php
include "koneksi.php";
// membaca informasi yang dikirim dari file view.php pada address bar
$id = $_GET['id'];
// Perintah sql untuk menampilkan database
$queri = "select * from tabel_gambar where id = '$id'";
// perintah untuk menjalankan sql
$hasil = mysql_query($queri);
// menjadikan data dalam bentuk array
$data  = mysql_fetch_array($hasil);
$ket = $data['ket'];

/////////////////////////////////////////////////////update//////////////////////////////
if (isset($_POST['update'])) {
$ket = $_POST['ket'];
///////////////////////////foto //////////////////////////////// 
$lokasi_file = $_FILES['gambar']['tmp_name'];
$foto_file = $_FILES['gambar']['name'];
$tipe_file = $_FILES['gambar']['type'];
$ukuran_file = $_FILES['gambar']['size'];

$direktori = "upload/$foto_file";
$sql = null;
$MAX_FILE_SIZE = 1000000;
//100kb
if($ukuran_file > $MAX_FILE_SIZE) {
    header("Location:url=edit.php");
    exit();
}
$sql = null;
if($ukuran_file > 0) {
    move_uploaded_file($lokasi_file, $direktori);
}
    $d = mysql_fetch_array(mysql_query("SELECT * FROM tabel_gambar WHERE id='$_GET[id]'"));
              if(empty($foto_file)){
                $hasil=mysql_query("UPDATE tabel_gambar SET ket='$_POST[ket]'
                  WHERE id='$_POST[id]'");
                echo "<script>window.location='index.php'</script>";
              } else{
                 $hasil=mysql_query("UPDATE tabel_gambar SET ket='$_POST[ket]',gambar='$foto_file'
                  WHERE id='$_POST[id]'");
                echo "<script>window.location='index.php'</script>";
              }
          }

?>


<html>
<head>
 <title> Update Data Gambar </title>
 
</head>
<body width='900px' style = 'margin : 20px; font : 16px arial;'>
<center> 
<hr>
<br>
<?php 
echo "
 <center>
 <p> Upload Gambar dengan PHP dan Java Script </p>
 
 <form method ='POST' action = ' ' enctype ='multipart/form-data' role='form'>
 <table border = '1' cellspacing = '1' cellpadding = '10'
 style = 'border : #aaa; color: #101; font-family : arial; fot-size : 12px;'>
 
 <input type = 'hidden' name = 'id' value = '".$id."' />
 <tr>
  <td> gambar </td>
  <td width = '5' align = 'center'> : </td>
  <td widht='5'>
   <input type='file'   id='uploadImage1'  onchange='PreviewImage(1)'' name='gambar'>
         <br>
         <br> "; ?>
          <a class="cboxElement " > <?php echo " <img src='upload/". $data['gambar'] ."' id='uploadPreview1' width='100' height='120'/>"; ?> </a>
       <?php echo "      
   </td>
  </tr>
 <tr>
  <td> Keterangan </td>
  <td align = 'center'> : </td>
  <td> <input type = 'text' placeholder='Keterangan' name = 'ket' value = '".$ket."'/> </td>
  </tr>

  
 <tr>
 <td colspan = '3' align = 'center'>
 <input type = 'submit' name = 'update' value = 'Update'/>
 </td>
 </tr>
</table>
<a href = 'index.php'> Kembali </a>
";?>

    <!-- upload gambar dengan preview -->
    <script type="text/javascript">
    function PreviewImage(no) {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage"+no).files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview"+no).src = oFREvent.target.result;
        };
    }
</script>
<!-- end upload gambar dengan preview -->

</form>
</body>
</html>