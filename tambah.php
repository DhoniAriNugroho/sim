<?
$nama               = $_POST['nama'];
$harga               = $_POST['harga'];
$keterangan        = $_POST['keterangan'];

$namafolder="gambar/"; //folder tempat menyimpan file
if (!empty($_FILES["filegbr"]["tmp_name"]))
{
$jenis_gambar=$_FILES['filegbr']['type']; //memeriksa format gambar
if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
{
$lampiran = $namafolder . basename($_FILES['filegbr']['name']);

//mengupload gambar dan update row table database dengan path folder dan nama image
if (move_uploaded_file($_FILES['filegbr']['tmp_name'], $lampiran)) {

$query_insert = "INSERT INTO dataimage (nama,harga,keterangan,image)
VALUES ('$nama','$harga','$keterangan','$lampiran')";
$insert = mysql_query($query_insert);

echo"
Data berhasil disimpan <br/>
nama : $nama <br/>
harga: $harga<br/>
keterangan: $keterangan<br/>
<br/><br/>
<img src='$lampiran' height='300'>";

//Jika gagal upload, tampilkan pesan Gagal
} else {
echo "Gambar gagal dikirim";
}
} else {
echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
}
} else {
echo "Anda belum memilih gambar";
}
?>
<html>
<head>
 <title> Tambah Data Gambar </title>
 <link href ="css_submit.css" rel="stylesheet" type="text/css">
 
</head>
<body width='900px' style = 'margin : 20px; font : 16px arial;'>
<center> 
<hr>
<br>
 <center>
 <p> Tambah Data Gambar</p>
 
 <form method = 'POST' action = ' ' enctype ="multipart/form-data" role="form">
 <table border = '1' cellspacing = '1' cellpadding = '10'
 style = 'border : #aaa; color: #101; font-family : arial; fot-size : 12px;'>
 </tr>
 <tr>
  <td> Nama </td>
  <td align = 'center'> : </td>
  <td> <input type = 'text' placeholder='nama' name = 'nama' /> </td>
  </tr>
  </td>
  </tr>
 <tr>
  <td> harga </td>
  <td align = 'center'> : </td>
  <td> <input type = 'text' placeholder='harga' name = 'harga' /> </td>
  </tr>
  </td>
  </tr>
 <tr>
  <td> Keterangan </td>
  <td width="5" align = 'center' width='100' height='120'> : </td>
  <td>  <div class="col-lg-8">
                        <textarea id="limiter" class="form-control"></textarea>
                    </div> </td>
  </tr>
 <tr>
  <td> gambar </td>
  <td width = '5' align = 'center'> : </td>
  <td widht="5">
   <input type="file"   id="uploadImage1"  onchange="PreviewImage(1)" name='gambar'>
         <br>
         <br>
          <a class="cboxElement " > <?php echo " <img src='upload/". $data['gambar'] ."' id='uploadPreview1' width='100' height='120'/>"; ?> </a>
             
   
  
 <tr>
 <td colspan = '3' align = 'center'>
 <input type = 'submit' name = 'add' value = 'Submit'/>
 <input type = 'reset' name = 'Reset' value = 'Reset' /> </td>
 </tr>
</table>
<a href = 'index.php'> Kembali </a>
</form>

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
</body>
</html>  