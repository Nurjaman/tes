<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "database";

$conn = mysqli_connect($host,$user,$pass);
$data = mysqli_select_db($conn,$db);

$document = new SimpleXMLElement("<tugas />");

$selection="";
if(!empty($_POST)){
	$nama =  $_POST["nama"];
		$selection=" where nama like '%".$nama."%'";
}

$sql = "select * from b_ummi_zakiyah_ibrati_data".$selection;

$result = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_assoc($result)) {
	# code...
	$test = $document->addChild('list');
	$test->addChild('nim',$row['nim']);
	$test->addChild('nama',$row['nama']);
	$test->addChild('nama_panggilan',$row['nama_panggilan']);
	$test->addChild('jenis_kelamin',$row['jenis_kelamin']);
	$test->addChild('alamat',$row['alamat']);
	$test->addChild('kota',$row['kota']);
	$test->addChild('kecamatan',$row['kecamatan']);
	$test->addChild('provinsi',$row['provinsi']);
	$test->addChild('tempat_lahir',$row['tempat_lahir']);
	$test->addChild('tanggal_lahir',$row[
		'tanggal_lahir']);
	$test->addChild('email',$row['email']);
	$test->addChild('no_hp',$row['no_hp']);
	$test->addChild('status',$row['status']);
	$test->addChild('hobi',$row['hobi']);
	$test->addChild('pekerjaan',$row['pekerjaan']);
}
echo $document->asXML();