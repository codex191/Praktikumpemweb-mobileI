<?php
require("koneksi.php");

if(isset($_POST['submit'])){
    $id = $_POST['id_pegawai'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $golongan = $_POST['golongan'];
    $alamat = $_POST['alamat'];

        $query = "UPDATE daftar_pegawai SET nama_pegawai = '$nama_pegawai', golongan = '$golongan', alamat = '$alamat' WHERE id_pegawai = $id"; // query update data
        if(mysqli_query($kon, $query)){
            header("Location: index.php");
        }else{
            echo "Edit Data Gagal";
        }
    
    $id = $_GET['id_pegawai']; // id berasal dari url
    $data = mysqli_query($kon, "SELECT * FROM daftar_pegawai WHERE id_pegawai = $id");
    }
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Update / Insert</title>
</head>
<body>
    <h3>Tambah Data Pegawai</h3>
    <?php while(mysqli_fetch_assoc($data)){ ?>
    <form action="update.php" method="post">
        Nama : <input type="text" name="nama_pegawai" value="<?php echo $data['nama_pegawai']; ?>"><br><br>
        golongan : <input type="number" name="golongan" value="<?php echo $data['golongan']; ?>"><br></br>
        Alamat : <textarea name="alamat" rows="3" cols="20"><?php echo $data['alamat']; ?></textarea><br><br>
        <input type="hidden" name="id_pegawai" value="<?php echo $data['id_pegawai']; ?>">
        <input type="submit" name="submit" value="Edit Data">
    </form>
    <?php
    
} // end while

    mysqli_close($kon); // menutup koneksi ke database
    ?>
</body>
</html>