<?php
//include '../koneksi.php';

$host = "localhost";
$user = "root";
$pass = "";
$db = "uts";

mysql_connect('localhost', 'root','');

//include  'koneksi.php'
mysql_select_db('uts');


$data = new SimpleXMLElement("<Karyawan />");

$selection="";
if(!empty($_POST)){
    $nama =  $_POST["nama"];
    $selection=" where nama like '%".$nama."%'";
}

$sql = "select * from b_nurjaman_karyawan".$selection;

$result1 = mysql_query($sql);


while ($result = mysql_fetch_assoc($result1)) {
	# code...
	$karyawan = $data->addChild("karyawan");
	$karyawan->addAttribute("id", $result['id']);
	$karyawan->addChild("nik", $result['nik']);
	$karyawan->addChild("nama", $result['nama']);
	$karyawan->addChild("jenis_kelamin", $result['jenis_kelamin']);
	$karyawan->addChild("jabatan", $result['jabatan']);
	$karyawan->addChild("hari_normal", $result['hari_normal']);
	$karyawan->addChild("absen", $result['absen']);
	$karyawan->addChild("gaji_perhari", $result['gaji_perhari']);
	$karyawan->addChild("bonus", $result['bonus']);
	$karyawan->addChild("kasbon", $result['kasbon']);
	$karyawan->addChild("gaji_bersih", $result['gaji_bersih']);
	$karyawan->addChild("tempat_lahir", $result['tempat_lahir']);
	$karyawan->addChild("tanggal_lahir", $result['tanggal_lahir']);
	$karyawan->addChild("alamat", $result['alamat']);
	$karyawan->addChild("status", $result['status']);
	
}

echo $data->asXML();

?>