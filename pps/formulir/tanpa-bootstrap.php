<!DOCTYPE html>
<html>
<head>
<title>Form Pendaftaran Anggota</title>
</head>
<body>

<h2>Form Pendaftaran Anggota</h2>
    <form action="simpan-pendaftaran.php" method="post">
	<table>
          <tr>
              <td><label>Username:</label></td><td><input type="text" name="username" placeholder="Masukan Username" /></td>
	  </tr>
	  <tr>
	      <td><label>Nama:</label></td><td><input type="text" name="nama" placeholder="Masukan Nama" /></td>
	  </tr>
	  <tr>
	      <td><label>Alamat:</label></td><td><textarea name="alamat" rows="5" placeholder="Masukan Alamat" ></textarea></td>
	  </tr>
	  <tr>
              <td><label>Email:</label></td><td><input type="email" name="email" placeholder="Masukan Email" /></td>
	  </tr>
	  <tr>
	      <td><label>No HP:</label></td><td><input type="text" name="no_hp" placeholder="Masukan No HP" /></td>
	  </tr>
	  <tr>
	      <td><label>Password:</label></td><td><input type="password" name="password" placeholder="Masukan Password" /></td>
	   </tr>
	</table>
      <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>