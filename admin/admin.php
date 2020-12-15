<?php
require 'fadmin.php';
$ad = query ("SELECT * FROM admin");
?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
            </head>
            <body>
            <div class="container">
            <h1 align="center">Daftar Buku Perpustakaan</h1>
                <td><a href="tambah.php"><button type="button" class="btn btn-primary"> Tambah Data Admin</button></a></td>
                <td><a href="kembali.php"><button type="button" class="btn btn-primary"> Kembali</button></a></td>
                <form action="" method="post">
                </form>
                <table border="2" cellpandding="10" cellspacing="0" align="center" >

                <tr bgcolor="808080" align="center">
                <th>No.</th>
                <th>Nama Admin</th>
                <th>Username</th>
                <th>Level</th>
                <th>Aksi</th>
                </tr>
                <?php $i = 1; ?>
                <?php  foreach($ad as $row) : ?>
                <tr align="center">
                <td><?= $i; ?></td>
                
                <td><?= $row["nm_admin"]; ?></td>
                <td><?= $row["username"]; ?></td>
                <td><?= $row["level"]; ?></td>
                <td>
                   
                    <a href="edit.php?id=<?= $row["id"];?>"><button type="button" bgcolor="808080">Ubah</button></a> | 
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

