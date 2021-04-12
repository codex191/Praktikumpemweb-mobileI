<?php
require_once("koneksi.php");
 
if(isset($_POST['submit'])){
    $nama_pegawai = $_POST['nama_pegawai'];
    $golongan = $_POST['golongan'];
    $alamat = $_POST['alamat'];
    // query insert data ke database dalam tabel anggota
    $query = "INSERT INTO daftar_pegawai (nama_pegawai, golongan, alamat) values('$nama_pegawai', '$golongan', '$alamat')";
    if(mysqli_query($kon, $query)){
        header("Location: index.php");
    }else{
        echo "Tambah data gagal";
    }
}
 mysqli_close($kon); // menutup koneksi ke database
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Input Data Pegawai</title>
</head>
<body>
    <h3>Tambah Data Pegawai</h3>
    <form action="penyimpanan.php" method="post">
        Nama : <input type="text" name="nama_pegawai"><br><br>
        Golongan : <input type="number" name="golongan"><br><br>
        Alamat : <textarea name="alamat" rows="3" cols="20"></textarea><br><br>
        <input type="submit" name="submit" value="Tambah Data">
    </form>
</body>
</html>