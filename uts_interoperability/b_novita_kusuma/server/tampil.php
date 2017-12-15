<?php
$connection = mysqli_connect("localhost", "root", "", "database") or die("Error " . mysqli_error($connection));
$sql = "select * from b_novita_kusuma_data_mahasiswa";
$result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));

$document = new SimpleXMLElement("<mahasiswa/>");

while ($row = mysqli_fetch_assoc($result)) {
    $mahasiswa = $document->addChild('mahasiswa');
    $mahasiswa->addAttribute('nim', $row['nim']);
    $mahasiswa->addChild('nama', $row['nama']);
    $mahasiswa->addChild('tempat_lahir', $row['tempat_lahir']);
    $mahasiswa->addChild('tanggal_lahir', $row['tanggal_lahir']);
	$mahasiswa->addChild('agama', $row['agama']);
	$mahasiswa->addChild('jenis_kelamin', $row['jenis_kelamin']);
	$mahasiswa->addChild('alamat', $row['alamat']);
	$mahasiswa->addChild('no_telpon', $row['no_telpon']);
	$mahasiswa->addChild('jurusan', $row['jurusan']);
	$mahasiswa->addChild('angkatan', $row['angkatan']);
	$mahasiswa->addChild('nama_ayah', $row['nama_ayah']);
	$mahasiswa->addChild('nama_ibu', $row['nama_ibu']);
	$mahasiswa->addChild('pekerjaan_ayah', $row['pekerjaan_ayah']);
	$mahasiswa->addChild('pekerjaan_ibu', $row['pekerjaan_ibu']);
	$mahasiswa->addChild('no_telpon_ayah', $row['no_telpon_ibu']);
	$mahasiswa->addChild('no_telpon_ibu', $row['no_telpon_ibu']);
}
echo $document->asXML();
mysqli_close($connection);
?>