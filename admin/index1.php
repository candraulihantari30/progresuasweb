<?php
    require 'fungsi.php';
    $bk = query ("SELECT * FROM detailbuku");
    if (isset($_POST["cari"])){
        $bk = cari($_POST["keyword"]);
    }
?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Perpustakaan</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Perpustakaan</span>
                <span class="d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../img/logo.jpg" alt="" /></span>
            </a><br></br>
            <br></br>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#databuku" color="black">Pegawai Pengelola</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href ="../logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>
            
            <!DOCTYPE html>
            <html lang="en">
            <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
                <script type="text/javascript" src="../js/bootstrap.min.js"></script>
            </head>
            <body>
            <div class="container">
            <h1 align="center">Daftar Buku Perpustakaan</h1>
                <td><a href="tambah.php"><button type="button" class="btn btn-primary"> Tambah Data Buku</button></a></td>
                <form action="" method="post">
                    <center>
                        <input type="text" name="keyword" class="w-25" class="form-control" autofocus placeholder="Cari Buku" autocomplete="off">
                        <button type="submit" name="cari" class="btn btn-outline-secondary">Cari</button>
                    </center>
                </form>
                <table border="2" cellpandding="10" cellspacing="0" align="center" >

                <tr bgcolor="808080" align="center">
                <th>No.</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Kode</th>
                <th>Rak</th>
                <th>Jenis Bahasa</th>
                <th>Deskripsi</th>
                <th>Pengarang1</th>
                <th>Pengarang2</th>
                <th>Aksi</th>
                </tr>
                <?php $i = 1; ?>
                <?php  foreach($bk as $row) : ?>
                <tr align="center">
                <td><?= $i; ?></td>
                <td><img src="../img/<?php echo $row["img"]; ?>" width="100px"></td>
                <td><?= $row["judul"]; ?></td>
                <td><?= $row["kode"]; ?></td>
                <td><?= $row["rak"]; ?></td>
                <td><?= $row["jenis_bahasa"]; ?></td>
                <td><?= $row["deskripsi"]; ?></td>
                <td><?= $row["pengarang1"]; ?></td>
                <td><?= $row["pengarang2"]; ?></td>
                <td>
                    <a href="detail.php?id=<?= $row["id"];?>"><button type="button" bgcolor="6666CC">Detail</button></a> 
                    <br></br>
                    <a href="edit.php?id=<?= $row["id"];?>"><button type="button" bgcolor="808080">Ubah</button></a> 
                    <br></br>
                    <a href="delet.php?id=<?= $row["id"]; ?>" onclick="return confirm ('Anda Yakin?'); "><button type="button" bgcolor="808080">Hapus</button></a>  
                </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                </tr>
                </table>
                </div>
</body>
</html>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
    <div class="footer">
        <footer>
            <font color="white">Copyright @Kadek Candra Ulihantari</white>
        </footer>
    </div>
</html>