<?php include('koneksi.php'); ?>

		<center><font size="6">Tambah Data</font></center>
		<hr>
		<?php
		if(isset($_POST['submit'])){
			$nama			= $_POST['nama'];
			$nim			= $_POST['nim'];
			$jenis_kelamin	= $_POST['jenis_kelamin'];
			$fakultas	= $_POST['fakultas'];


				$sql = mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES( '','$nama', '$nim', '$jenis_kelamin', '$fakultas')") or die(mysqli_error($koneksi));

				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="index.php";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}
		?>

		<form action="" method="post">
			<div class="item form-group">
				<label class="">Nama</label>
				<div class="">
					<input type="text" name="nama" class="form-control" size="50" required>
				</div>
			</div>
			<div class="">
				<label class="">nim</label>
				<div class="">
					<input type="text" name="nim" class="" size="50" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="">Jenis kelamin</label>
				<div class="">
					<input type="text" name="jenis_kelamin" class="form-control" size="50" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="">Fakultas</label>
				<div class="">
					<input type="text" name="fakultas" class="form-control" size="50" required>
				</div>
			</div>
			<div class="item form-group">
				<div  class="">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			</div>
		</form>
	</div>
