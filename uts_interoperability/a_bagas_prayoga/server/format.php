<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "database";

mysql_connect('localhost', 'root','');
mysql_select_db('database');


$document = new SimpleXMLElement("<tugas />");

$selection="";
if(!empty($_POST)){
	$nama =  $_POST["nama"];
		$selection=" where nama like '%".$nama."%'";
}

$sql = "select * from a_bagas_prayoga_list".$selection;

$result = mysql_query($sql);

while ($row = mysql_fetch_assoc($result)) {
	# code...
	$test = $document->addChild('list');
	$test->addChild('id',$row ['id']);
	$test->addChild('nama',$row ['nama']);
	$test->addChild('nama_panggilan',$row ['nama_panggilan']);
	$test->addChild('alamat',$row ['alamat']);
	$test->addChild('email',$row ['email']);
	$test->addChild('no_hp',$row ['no_hp']);
	$test->addChild('hobi',$row ['hobi']);
	$test->addChild('tempat_lahir',$row ['tempat_lahir']);
	$test->addChild('status',$row ['status']);
	$test->addChild('pekerjaan',$row ['pekerjaan']);
	$test->addChild('negara',$row ['negara']);
	$test->addChild('provinsi',$row ['provinsi']);
	$test->addChild('kabupaten',$row ['kabupaten']);
	$test->addChild('kota',$row ['kota']);
	$test->addChild('kecamatan',$row ['kecamatan']);
}
echo $document->asXML();

