<html>
<head>
<title>Input Data</title>
</head>
<body>
<div style="margin: 20px">
<h1 align = "center">Form Input Data</h1>

<form name="user" action="../server/proses_inputan.php" method="post">
	<table border ="1" align = "center">
		<tr>
			<td colspan="2" align="center"><b>DATA PRIBADI</b></td>
			<td colspan="2" align="center"><b>DATA ORANGTUA</b></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td><input type="text" name="nim" id="nim"></input></td>
			<td colspan = "2" align="center"><b>--Data Ayah--</b></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" id="nama"></input></td>
			<td>Nama Ayah</td>
			<td><input type="text" name="nama_ayah" id="nama_ayah"></input></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td><input type="text" name="tempat_lahir" id="tempat_lahir"></input></td>
			<td>Pekerjaan Ayah</td>
			<td><input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah"></input></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td><input type="text" name="tanggal_lahir" id="tanggal_lahir"></input></td>
			<td>No Telpon Ayah</td>
			<td><input type="text" name="no_telpon_ayah" id="no_telpon_ayah"></input></td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>
				<select name="agama">
					<option value="islam">Islam</option>
					<option value="kristen">Kristen</option>
					<option value="protestan">Protestan</option>
					<option value="hindu">Hindu</option>
					<option value="budha">Budha</option>
				</select>
			</td>
			<td colspan = "2" align="center"><b>--Data Ibu--</b></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>
				<select name="jenis_kelamin">
					<option value="laki-laki">Laki-Laki</option>
					<option value="perempuan">Perempuan</option>
				</select>
			</td>
			<td>Nama Ibu</td>
			<td><input type="text" name="nama_ibu" id="nama_ibu"></input></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="textarea" name="alamat" id="alamat"></input></td>
			<td>Pekerjaan Ibu</td>
			<td><input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu"></input></td>
		</tr>
		<tr>
			<td>No Telpon</td>
			<td><input type="text" name="no_telpon" id="no_telpon"></input></td>
			<td>No Telpon Ibu</td>
			<td><input type="text" name="no_telpon_ibu" id="no_telpon_ibu"></input></td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>
				<select name="jurusan">
					<option value="teknik_informatika">Teknik Informatika</option>
					<option value="teknik_komputer">Teknik Komputer</option>
					<option value="teknik_mesin">Teknik Mesin</option>
					<option value="rekam_medis">Rekam Medis</option>
					<option value="teknik_kimia">Teknik Kimia</option>
					<option value="teknik_otomotif">Teknik Otomotif</option>
					<option value="alat_berat">Alat Berat</option>
					<option value="teknik_elektro">Teknik Elektro</option>
					<option value="teknik_sipil">Teknik Sipil</option>
					<option value="akutansi">Akutansi</option>
					<option value="komputerisasi_akutansi">Komputerisasi Akutansi</option>
				</select>
			</td>
			<td colspan = "2" align = "center"><a href="http://localhost/bahan_ajar/uts_interoperability/b_novita_kusuma/server/get.php">Lihat Data</a></td>
		</tr>
		<tr>
			<td>Angkatan</td>
			<td><input type="text" name="angkatan" id="angkatan"></input></td>
			<td colspan = "2" align = "center"><input type="submit" name="submit" id="submit" value="Kirim"></input></td>
		</tr>
	</table>
</form>
</div>
</body>
</html>

