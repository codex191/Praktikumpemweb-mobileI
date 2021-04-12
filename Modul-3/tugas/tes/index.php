<?php
require("koneksi.php");
$data = mysqli_query($kon, "SELECT * FROM daftar_pegawai");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modul 3</title>
</head>
<body>
    <h3>Daftar Data Pegawai</h3>
    <a href="penyimpanan.php">Tambah Data</a>
    <table border="1px">
    <tr>
        <th>id</th>
        <th>golongan</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($data)){ ?>
    <tr>
        <td><?php echo $row['id_pegawai'] ?></td>
        <td><?php echo $row['golongan'] ?></td>
        <td><?php echo $row['nama_pegawai'] ?></td>
        <td><?php echo $row['alamat'] ?></td>
        <td>
            <a href="update.php?id=<?php echo $row['id_pegawai']; ?>">Edit</a> | 
            <a href="delete.php?id=<?php echo $row['id_pegawai']; ?>">Hapus</a>
        </td>
    </tr>
    <?php
    } // end while
    
    mysqli_close($kon); // menutup koneksi ke database
    ?>
    </table>
</body>
</html>