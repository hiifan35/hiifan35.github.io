<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Form Pendaftaran Anggota</title>
    <!-- Load file CSS Bootstrap offline -->
	<link rel="shortcut icon" href="formulir/logo.png">
    <link rel="stylesheet" href="formulir/bootstrap/css/bootstrap.min.css">
</head>
	<body>
	<div class="container">

		<marquee><div color="#000000;"><p><small>Isi form dengan jelas dan tepat sesuai perintah yang ada di form,jangan bikin bingung admin'okee.. latihan hari sabtu di aula bukit,jam 2 harus sudah ada disekolah,pake celana 		training/oahraga baju bebas asal jangan kemeja untuk perempuan utamakan pake tangan panjang,jangan lupa bawa air minum.</small></p></div></marquee>

	   <center><b><h2>E-RECRUITMEN</h2></B></center>
	   
					<td colspan="2">
						<center><img src="formulir/SMI.png" width="65px"/><img src="formulir/logo.png" width="85px"/><img src="formulir/SMI.png" width="65px"/></center>
					</td>
	   
			<p><small><center>Formulir pendaftaran ekstrakulikuler pencak silat <i>satria muda indonesia(SMI)</i> 	di </center>
				<center>smk negeri 2 pandeglang</center></small></p>
								<P></P>
								
		<form action="simpan-pendaftaran.php" method="post">
			<div class="form-group">
				<label><b>Nama</b></label>
				<input type="text" name="Nama" class="form-control" placeholder="Nama lengkap" />
			</div>
			<div class="form-group">
				<label><b>Alamat</b></label>
				<textarea name="alamat" class="form-control" rows="2"placeholder="Masukan Alamat" ></textarea>
			</div> 
			<div class="form-group">
				<label><b>Kelas</b></label>
				<input type="text" name="kelas" class="form-control" placeholder="kelas dan jurusan" />
			</div>
			<div class="form-group">
				<label><b>No HP</b></label>
				<input type="text" name="no_hp" class="form-control" placeholder="Masukan No HP" />
			</div>
			<div class="form-group">
				<label><b>Alasan</b></label>
				<textarea type="text" name="alasan" class="form-control" rows="3" placeholder="Alasan ikut pencak silat" /></textarea>
			</div>

			<button type="submit" name="submit" class="btn btn-primary">kirim<i class="fas fa-paper-plane"></i></button>
			 <div class="clear"></div>
		</form>
	</div>
	</body>
</html>