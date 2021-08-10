	<?php

	//Include file koneksi ke database
	include "formulir/koneksi.php";

	//menerima nilai dari kiriman form pendaftaran
	$Nama=$_POST["Nama"];
	$alamat=$_POST["alamat"];
	$kelas=$_POST["kelas"];
	$no_hp=$_POST["no_hp"];
	$alasan=$_POST["alasan"];


	//Query input menginput data kedalam tabel anggota
	  $sql="insert into anggota (Nama,alamat,kelas,no_hp,alasan) values
			('$Nama','$alamat','$kelas','$no_hp','$alasan')";

	//Mengeksekusi/menjalankan query diatas	
	  $hasil=mysqli_query($kon,$sql);

	//Kondisi apakah berhasil atau tidak
	  if ($hasil) {
		echo " <h4><center width=15px>PENDAFTARAN BERHASIL!</center></h4>
				<center><button><a href=index.html>KEMBALI</a></center></button>";
		exit;
	  }
	else {
		echo "<h4><center width=15px>GAGAL MENDAFTAR!</center></h4>
				<center><button><a href=form.php>COBA LAGI</a></center></button>";
		exit;
	}  

	?>