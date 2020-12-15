<?php
require 'fungsi.php';

$id = $_GET["id"];

$bk = query("SELECT * FROM detailbuku WHERE id = $id")[0];


?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Buku</title>
     <link rel="stylesheet" href="as.css">
</head>
<body>
                <div class="container">
                    <header class="header">
                    <div class="logo">
                    <img src="../img/logo.jpg"> </div>
                    <nav class="nav">
                    <h1>Detail Buku</h1>
                    <ul>
                    <a href="kembali.php"><button type="button" bgcolor="CC6699">Kembali</button></a> 
                </ul>
            </nav>
          </header>
</nav>
  <form action="" method="post">
  <table border="2" cellpadding="10" cellspacing="0">
        <input type="hidden" name="id" value="<?=$bk["id"]?>">
       <tr>
            <td>Gambar</td>
            <td>:</td>
            <td> <img src="../img/<?= $bk["img"]; ?>"  width="200px"></td>
       </tr>
       <tr>
            <td>Judul</td>
            <td>:</td>
            <td> <?= $bk["judul"]; ?></td>
       </tr>
       <tr>
            <td>Kode</td>
            <td>:</td>
            <td><?= $bk["kode"]; ?></td>
       </tr>
       <tr>
            <td>Sumber Buku</td>
            <td>:</td>
            <td><?= $bk["sumber_buku"]; ?></td>
       </tr>
       <tr>
            <td>Rak</td>
            <td>:</td>
            <td><?= $bk["rak"]; ?></td>
       </tr>
       <tr>
            <td>Jenis</td>
            <td>:</td>
            <td><?= $bk["jenis_bahasa"]; ?></td>
       </tr>
       <tr>
            <td>Deskripsi</td>
            <td>:</td>
            <td><?= $bk["deskripsi"]; ?></td>
       </tr>
       <tr>
            <td>Pengarang 1</td>
            <td>:</td>
            <td><?= $bk["pengarang1"]; ?></td>
       </tr>
       <tr>
            <td>Pengarang 2</td>
            <td>:</td>
            <td><?= $bk["pengarang2"]; ?></td>
       </tr>
       <tr>
            <td>Penterjemah</td>
            <td>:</td>
            <td><?= $bk["penterjemah"]; ?></td>
       </tr>
       <tr>
            <td>Editor</td>
            <td>:</td>
            <td><?= $bk["editor"]; ?></td>
       </tr>
       <tr>
            <td>Kota Tebit</td>
            <td>:</td>
            <td><?= $bk["kota_terbit"]; ?></td>
       </tr>
       <tr>
            <td>Tahun Terbit</td>
            <td>:</td>
            <td><?= $bk["tahun_terbit"]; ?></td>
       </tr>
       <tr>
            <td>Penerbit</td>
            <td>:</td>
            <td><?= $bk["penerbit"]; ?></td>
       </tr>
       <tr>
            <td>Kolasi</td>
            <td>:</td>
            <td><?= $bk["kolasi"]; ?></td>
       </tr>
       <tr>
            <td>Edisi</td>
            <td>:</td>
            <td><?= $bk["edisi"]; ?></td>
       </tr>
       <tr>
            <td>Cetakan</td>
            <td>:</td>
            <td><?= $bk["cetakan"]; ?></td>
       </tr>
       <tr>
            <td>Subjek</td>
            <td>:</td>
            <td><?= $bk["subjek"]; ?></td>
       </tr>
       <tr>
            <td>Tanggal Input</td>
            <td>:</td>
            <td><?= $bk["tanggal_input"]; ?></td>
       </tr>
       <tr>
            <td>Jumlah Buku</td>
            <td>:</td>
            <td><?= $bk["jumlah_buku"]; ?></td>
       </tr>
  </table>
  <footer class="footer">
            <font color="white">Copyright @Candra Ulihantari</white>
        </footer>
</body>
</html>