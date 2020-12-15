<?php
   // Koneksi Ke Database
$conn = mysqli_connect("localhost","root", "", "crudnativ");
 
function query($query){
global $conn;
   $result = mysqli_query($conn, $query);
   $rows = [];
   while($row = mysqli_fetch_assoc($result) ){
      $rows [] = $row;
   }
   return $rows;
}

function tambah($data){
    global $conn;
    $judul = htmlspecialchars ($data["judul"]);
    
    //upload
    $img = upload();
    if ( !$img){
       return false;
    }
    
    $judul =htmlspecialchars ($data["judul"]);
    $kode =htmlspecialchars ($data["kode"]);
    $sumber_buku =htmlspecialchars ($data["sumber_buku"]);
    $rak = htmlspecialchars ($data["rak"]);
    $jenis_bahasa = htmlspecialchars ($data["jenis_bahasa"]);
    $deskripsi =htmlspecialchars ($data["deskripsi"]);
    $pengarang1 = htmlspecialchars ($data["pengarang1"]);
    $pengarang2 =htmlspecialchars ($data["pengarang2"]);
    $penterjemah =htmlspecialchars ($data["penterjemah"]);
    $editor = htmlspecialchars ($data["editor"]);
    $kota_terbit =htmlspecialchars ($data["kota_terbit"]);
    $tahun_terbit = htmlspecialchars ($data["tahun_terbit"]);
    $penerbit =htmlspecialchars ($data["penerbit"]);
    $kolasi =htmlspecialchars ($data["kolasi"]);
    $edisi =htmlspecialchars ($data["edisi"]);
    $cetakan = htmlspecialchars ($data["cetakan"]);
    $subjek =htmlspecialchars ($data["subjek"]);
    $tanggal_input = htmlspecialchars ($data["tanggal_input"]);
    $jumlah_buku =htmlspecialchars ($data["jumlah_buku"]);
    
   
   $query ="INSERT INTO detailbuku
             VALUES
             ('', '$img', '$judul', '$kode', '$sumber_buku','$rak', '$jenis_bahasa','$deskripsi', 
             '$pengarang1','$pengarang2','$penterjemah','$editor','$kota_terbit','$tahun_terbit',
             '$penerbit','$kolasi','$edisi','$cetakan','$subjek','$tanggal_input','$jumlah_buku')
         ";
      mysqli_query($conn, $query);
      return mysqli_affected_rows($conn);
   }
   function cari($keyword) {
      $query = "SELECT * FROM detailbuku 
               WHERE
               judul LIKE '%$keyword%' OR
               kode LIKE '%$keyword%' OR
               kolasi LIKE '%$keyword%'
               ";
      return query($query);         
   }
function upload() {
   $namaFile = $_FILES['img']['name'];
   $ukuranFile = $_FILES['img']['size'];
   $error = $_FILES['img']['error'];
   $tmpName = $_FILES['img']['tmp_name'];


   if ( $error === 4 ) {
      echo "<script>
            alert('pilih gambar terlebih dadulu');
            </script>";
       return false;      
   }
   
   $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
   $ekstensiGambar = explode('.', $namaFile);
   $ekstensiGambar = strtolower(end($ekstensiGambar));
   if( !in_array($ekstensiGambar, $ekstensiGambarValid) ){
      echo "<script>
            alert('file yang anda upload bukan gambar!') ;
            </script>";
      return false; 
   } 
   
   if( $ukuranFile > 1000000) {
      echo "<script>
            alert('ukuran file melebihi kapasitas!');
            </script>";
      return false; 
   }

   move_uploaded_file($tmpName, '../img/'. $namaFile);
   return $namaFile;
}
   function hapus($id){
      global $conn;
      mysqli_query($conn, "DELETE FROM detailbuku WHERE id=$id");
      return mysqli_affected_rows($conn);
  }

function ubah($data) {
   global $conn;
   $id= $data["id"];
   $img = $data["img"];
   $judul =htmlspecialchars ($data["judul"]);
   $kode =htmlspecialchars ($data["kode"]);
   $sumber_buku =htmlspecialchars ($data["sumber_buku"]);
   $rak = htmlspecialchars ($data["rak"]);
   $jenis_bahasa = htmlspecialchars ($data["jenis_bahasa"]);
   $deskripsi =htmlspecialchars ($data["deskripsi"]);
   $pengarang1 = htmlspecialchars ($data["pengarang1"]);
   $pengarang2 =htmlspecialchars ($data["pengarang2"]);
   $penterjemah =htmlspecialchars ($data["penterjemah"]);
   $editor = htmlspecialchars ($data["editor"]);
   $kota_terbit =htmlspecialchars ($data["kota_terbit"]);
   $tahun_terbit = htmlspecialchars ($data["tahun_terbit"]);
   $penerbit =htmlspecialchars ($data["penerbit"]);
   $kolasi =htmlspecialchars ($data["kolasi"]);
   $edisi =htmlspecialchars ($data["edisi"]);
   $cetakan = htmlspecialchars ($data["cetakan"]);
   $subjek =htmlspecialchars ($data["subjek"]);
   $tanggal_input = htmlspecialchars ($data["tanggal_input"]);
   $jumlah_buku =htmlspecialchars ($data["jumlah_buku"]);
  
  $query ="UPDATE detailbuku SET 
            img = '$img',
            judul = '$judul',
            kode = '$kode',
            sumber_buku='$sumber_buku',
            rak = '$rak',
            jenis_bahasa='$jenis_bahasa',
            deskripsi = '$deskripsi',
            pengarang1 = '$pengarang1',
            pengarang2 = '$pengarang2',
            penterjemah = '$penterjemah',
            editor = '$editor',
            kota_terbit='$kota_terbit',
            tahun_terbit = '$tahun_terbit',
            penerbit='$penerbit',
            kolasi = '$kolasi',
            edisi = '$edisi',
            cetakan = '$cetakan',
            subjek = '$subjek',
            tanggal_input = '$tanggal_input',
            jumlah_buku='$jumlah_buku'
            WHERE id= $id
        ";
     mysqli_query($conn, $query);
     return mysqli_affected_rows($conn);
}
?>