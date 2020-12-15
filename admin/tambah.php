<?php
require 'fungsi.php';
if( isset($_POST["submit"]) ) {

    if(tambah ($_POST) > 0 ){
        echo"
           <script>
              alert('data berhasil ditambahkan!');
              document.location.href='index1.php';
           </script>
           ";
     }else {
        echo"
        <script>
              alert('data gagal ditambahkan!');
              document.location.href='index1.php';
           </script>
           ";
     }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Buku</title>
</head>
<body>
  <h2 align="center"> Tambah Data Buku</h2>
  <form action="" method="post" enctype="multipart/form-data">
  <table border="2" cellpadding="10" cellspacing="0" align="center">
       <tr>
       <td>Gambar</td>
       <td>:</td>
       <td> <input type="file"name="img" id="img" require></td>
       </tr>
       <tr>
       <td>Judul</td>
       <td>:</td>
       <td> <input type="text"name="judul"id="judul" require ></td>
       </tr>
       <tr>
       <td>Kode</td>
       <td>:</td>
       <td><input type="text"name="kode"id="kode" require></td>
       </tr>
       <tr>
       <td>Sumber Buku</td>
       <td>:</td>
       <td><input type="text"name="sumber_buku"id="sumber_buku" require ></td>
       </tr>
       <tr>
       <td>Rak</td>
       <td>:</td>
       <td><input type="text"name="rak"id="rak" require></td>
       </tr>
       <tr>
       <td>Jenis</td>
       <td>:</td>
       <td><input type="text"name="jenis_bahasa"id="jenis_bahasa" require></td>
       </tr>
       <tr>
       <td>Deskripsi</td>
       <td>:</td>
       <td><input type="text"name="deskripsi"id="deskripsi" require ></td>
       </tr>
       <tr>
       <td>Pengarang 1</td>
       <td>:</td>
       <td> <input type="text"name="pengarang1"id="pengarang1" require></td>
       </tr>
       <tr>
       <td>Pengarang 2</td>
       <td>:</td>
       <td> <input type="text"name="pengarang2"id="pengarang2" require></td>
       </tr>
       <tr>
       <td>Penterjemah</td>
       <td>:</td>
       <td><input type="text"name="penterjemah"id="penterjemah" require ></td>
       </tr>
       <tr>
       <td>Editor</td>
       <td>:</td>
       <td> <input type="text"name="editor"id="editor" require ></td>
       </tr>
       <tr>
       <td>Kota Tebit</td>
       <td>:</td>
       <td> <input type="text"name="kota_terbit"id="kota_terbit" require ></td>
       </tr>
       <tr>
       <td>Tahun Terbit</td>
       <td>:</td>
       <td> <input type="text"name="tahun_terbit"id="tahun_terbit" require ></td>
       </tr>
       <tr>
       <td>Penerbit</td>
       <td>:</td>
       <td> <input type="text"name="penerbit"id="penerbit" require ></td>
       </tr>
       <tr>
       <td>Kolasi</td>
       <td>:</td>
       <td> <input type="text"name="kolasi"id="kolasi" require ></td>
       </tr>
       <tr>
       <td>Edisi</td>
       <td>:</td>
       <td> <input type="text"name="edisi"id="edisi" require ></td>
       </tr>
       <tr>
       <td>Cetakan</td>
       <td>:</td>
       <td> <input type="text"name="cetakan"id="cetakan" require ></td>
       </tr>
       <tr>
       <td>Subjek</td>
       <td>:</td>
       <td> <input type="text"name="subjek"id="subjek" require ></td>
       </tr>
       <tr>
       <td>Tanggal Input</td>
       <td>:</td>
       <td> <input type="text"name="tanggal_input"id="tanggal_input" require ></td>
       </tr>
       <tr>
       <td>Jumlah Buku</td>
       <td>:</td>
       <td> <input type="text"name="jumlah_buku"id="jumlah_buku" require></td>
       </tr>
       <tr>
       <td><button type="submit"name="submit">Proses Data</button></td>
       </tr>
  </table>
</body>
</html>