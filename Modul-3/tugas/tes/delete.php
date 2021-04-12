<?php
require_once("koneksi.php");
if (isset($_GET['id_pegawai'])){
    $id = $_GET['id_pegawai'];
}
 // query hapus data
if(mysqli_query($kon, "DELETE FROM daftar_pegawai WHERE id_pegawai = $id")){
    header("Location: index.php"); // redirect ke index.php
}else{
    echo "Hapus data gagal";
}
?>