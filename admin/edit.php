<?php
require 'fungsi.php';

$id = $_GET["id"];

$bk = query("SELECT * FROM detailbuku WHERE id = $id")[0];

if( isset($_POST["submit"]) ) {
    if(ubah($_POST) > 0 ){
        echo"
           <script>
              alert('data berhasil diubah!');
              document.location.href='index1.php';
           </script>
           ";
     }else {
        echo"
        <script>
              alert('data gagal diubah!');
              document.location.href='index1.php';
           </script>
           ";
     }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Buku</title>
   <link rel="stylesheet" href="as.css">
</head>
<body>

<div class="container">
                    <header class="header">
                    <div class="logo">
                    <img src="../img/logo.jpg"> </div>
                    <nav class="nav">
                    <h1 align="center" >Ubah Data Buku</h1>
                    <ul>
                    <a href="kembali.php"><button type="button" bgcolor="CC6699">Kembali</button></a> 
                </ul>
            </nav>
          </header>
</nav>
  <form action="" method="post">
   <table border="2" cellpadding="10" cellspacing="0" align="center">
         <input type="hidden" name="id" value="<?=$bk["id"]?>">
         <tr>
         <td>Gambar</td>
         <td>:</td>
         <td> <input type="file"name="img" id="img"  value="<?= $bk["img"]; ?>"></td>
         </tr>
         <tr>
         <td>Judul</td>
         <td>:</td>
         <td> <input type="text"name="judul"id="judul"  value="<?= $bk["judul"]; ?>"></td>
         </tr>
         <tr>
         <td>Kode</td>
         <td>:</td>
         <td><input type="text"name="kode"id="kode"  value="<?= $bk["kode"]; ?>"></td>
         </tr>
         <tr>
         <td>Sumber Buku</td>
         <td>:</td>
         <td><input type="text"name="sumber_buku"id="sumber_buku"  value="<?= $bk["sumber_buku"]; ?>"></td>
         </tr>
         <tr>
         <td>Rak</td>
         <td>:</td>
         <td><input type="text"name="rak"id="rak"  value="<?= $bk["rak"]; ?>"></td>
         </tr>
         <tr>
         <td>Jenis Bahasa</td>
         <td>:</td>
         <td><input type="text"name="jenis_bahasa"id="jenis_bahasa"  value="<?= $bk["jenis_bahasa"]; ?>"></td>
         </tr>
         <tr>
         <td>Deskripsi</td>
         <td>:</td>
         <td><input type="text"name="deskripsi"id="deskripsi"  value="<?= $bk["deskripsi"]; ?>"></td>
         </tr>
         <tr>
         <td>Pengarang 1</td>
         <td>:</td>
         <td> <input type="text"name="pengarang1"id="pengarang1"  value="<?= $bk["pengarang1"]; ?>"></td>
         </tr>
         <tr>
         <td>Pengarang 2</td>
         <td>:</td>
         <td> <input type="text"name="pengarang2"id="pengarang2"  value="<?= $bk["pengarang2"]; ?>"></td>
         </tr>
         <td>Penterjemah</td>
         <td>:</td>
         <td> <input type="text"name="penterjemah"id="penterjemah"  value="<?= $bk["penterjemah"]; ?>"></td>
         </tr>
         <tr>
         <td>Editor</td>
         <td>:</td>
         <td><input type="text"name="editor"id="editor"  value="<?= $bk["editor"]; ?>"></td>
         </tr>
         <tr>
         <td>Kota Terbit</td>
         <td>:</td>
         <td><input type="text"name="kota_terbit"id="kota_terbit"  value="<?= $bk["kota_terbit"]; ?>"></td>
         </tr>
         <tr>
         <td>Tahun Terbit</td>
         <td>:</td>
         <td><input type="text"name="tahun_terbit"id="tahun_terbit"  value="<?= $bk["tahun_terbit"]; ?>"></td>
         </tr>
         <tr>
         <td>Penerbit</td>
         <td>:</td>
         <td><input type="text"name="penerbit"id="penerbit"  value="<?= $bk["penerbit"]; ?>"></td>
         </tr>
         <tr>
         <td>Kolasi</td>
         <td>:</td>
         <td> <input type="text"name="kolasi"id="kolasi"  value="<?= $bk["kolasi"]; ?>"></td>
         </tr>
         <tr>
         <td>Edisi</td>
         <td>:</td>
         <td> <input type="text"name="edisi"id="edisi"  value="<?= $bk["edisi"]; ?>"></td>
         </tr>
         <tr>
         <td>Cetakan</td>
         <td>:</td>
         <td><input type="text"name="cetakan"id="cetakan"  value="<?= $bk["cetakan"]; ?>"></td>
         </tr>
         <tr>
         <td>Subjek</td>
         <td>:</td>
         <td><input type="text"name="subjek"id="subjek"  value="<?= $bk["subjek"]; ?>"></td>
         </tr>
         <tr>
         <td>Tanggal Input</td>
         <td>:</td>
         <td> <input type="text"name="tanggal_input"id="tanggal_input"  value="<?= $bk["tanggal_input"]; ?>"></td>
         </tr>
         <tr>
         <td>Jumlah Buku</td>
         <td>:</td>
         <td> <input type="text"name="jumlah_buku"id="jumlah_buku"  value="<?= $bk["jumlah_buku"]; ?>"></td>
         </tr>
         <tr>
         <td><button type="submit"name="submit">Proses Data</button></td>
         </tr>
      </table>
  </form>
</body>
</html>