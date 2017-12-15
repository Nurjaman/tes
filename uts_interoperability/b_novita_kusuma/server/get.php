<?php
$xml = new SimpleXMLElement(file_get_contents("http://localhost/bahan_ajar/uts_interoperability/b_novita_kusuma/server/tampil.php"));
?>
<h1 align="center">Data Mahasiswa</h1>
<table align="center" border="1">
	<tr>
		<th>NIM</th>
		<th>Nama</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>Agama</th>
		<th>Jenis Kelamin</th>
		<th>Alamat</th>
		<th>No Telpon</th>
		<th>Jurusan</th>
		<th>Angkatan</th>
		<th>Nama Ayah</th>
		<th>Pekerjaan Ayah</th>
		<th>No Telpon Ayah</th>
		<th>Nama Ibu</th>
		<th>Pekerjaan Ibu</th>
		<th>No Telpon Ibu</th>
	</tr>
<?php
foreach ($xml->children() as $mahasiswa) {
	# code...
	?>
	<tr>
		<td><?php echo $mahasiswa['nim']; ?></td>
		<td><?php echo $mahasiswa->nama; ?></td>
		<td><?php echo $mahasiswa->tempat_lahir; ?></td>
		<td><?php echo $mahasiswa->tanggal_lahir; ?></td>
		<td><?php echo $mahasiswa->agama; ?></td>
		<td><?php echo $mahasiswa->jenis_kelamin; ?></td>
		<td><?php echo $mahasiswa->alamat; ?></td>
		<td><?php echo $mahasiswa->no_telpon; ?></td>
		<td><?php echo $mahasiswa->jurusan; ?></td>
		<td><?php echo $mahasiswa->angkatan; ?></td>
		<td><?php echo $mahasiswa->nama_ayah; ?></td>
		<td><?php echo $mahasiswa->pekerjaan_ayah; ?></td>
		<td><?php echo $mahasiswa->no_telpon_ayah; ?></td>
		<td><?php echo $mahasiswa->nama_ibu; ?></td>
		<td><?php echo $mahasiswa->pekerjaan_ibu; ?></td>
		<td><?php echo $mahasiswa->no_telpon_ibu; ?></td>
	<?php
}
?>
</table>