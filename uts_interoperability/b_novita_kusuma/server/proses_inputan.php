<?php
include '../koneksi.php';

$nim = $_POST["nim"];
$nama = $_POST["nama"];
$tempat_lahir = $_POST["tempat_lahir"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$agama = $_POST["agama"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$alamat = $_POST["alamat"];
$no_telpon = $_POST["no_telpon"];
$jurusan = $_POST["jurusan"];
$angkatan = $_POST["angkatan"];
$nama_ayah = $_POST["nama_ayah"];
$nama_ibu = $_POST["nama_ibu"];
$pekerjaan_ayah = $_POST["pekerjaan_ayah"];
$pekerjaan_ibu = $_POST["pekerjaan_ibu"];
$no_telpon_ayah = $_POST["no_telpon_ayah"];
$no_telpon_ibu = $_POST["no_telpon_ibu"];

$input = mysql_query("INSERT into b_novita_kusuma_data_mahasiswa values('$nim','$nama','$tempat_lahir','$tanggal_lahir','$agama','$jenis_kelamin','$alamat','$no_telpon','$jurusan','$angkatan','$nama_ayah','$nama_ibu','$pekerjaan_ayah','$pekerjaan_ibu','$no_telpon_ayah','$no_telpon_ibu')");
  
if ($input) {
	echo "<script> alert('Data berhasil Ditambahkan') </script>";
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
<?php
}
else {
	echo "<script> alert('Data Gagal Di Input') </script>";
}
?>