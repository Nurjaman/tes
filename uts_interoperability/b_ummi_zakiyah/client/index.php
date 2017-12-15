
<!DOCTYPE>
<html>
<head>
	<title></title>
</head>
<body bgcolor="pink">

<div style="margin: 20px">
<h2><center>Data Mahasiswa</center></h2>

<form name="user" method="post" class="pure-form pure-form-stacked" align="center">
    Cari Nama : 
    <input type="text" length="60" name="nama" />

    <input type="submit" value="Cari" class="pure-button pure-button-primary"/>

</form>

</div>


<?php
$url = "http://localhost/bahan_ajar/uts_interoperability/b_ummi_zakiyah/server/format.php";

if(!empty($_POST)){
	$data = ["nama" => $_POST["nama"]];
}
else{
	$data = [];
}


$options = ["http" => 
    ["method"  => "POST",
        "header"  => "Content-Type: application/x-www-form-urlencoded"."\r\n",
        "content" => http_build_query($data)
    ]
];

// $page = file_get_contents($url);

$context = stream_context_create($options);
$page = file_get_contents($url, NULL, $context);
$xml = new SimpleXMLElement($page);
// $xml = new SimpleXMLElement(file_get_contents("http://localhost/bahan_ajar/php_web_service/app/p5_lab/server/dom_xml.php"));
$total = count($xml->children());
if($total==0) 
	return;

?>
<table border="3" padding="10px">
				<tr>
					<th width="30">NIM</th>
					<th width="30">Nama</th>
					<th width="30">Nama Panggilan</th>
					<th width="30">Jenis Kelamin</th>
					<th width="30">Alamat</th>
					<th width="30">Kota</th>
					<th width="30">Kecamatan</th>
					<th width="30">Provinsi</th>
					<th width="30">Tempat Lahir</th>
					<th width="30">Tanggal Lahir</th>
					<th width="30">Email</th>
					<th width="30">No Hp</th>
					<th width="30">Status</th>
					<th width="30">Hobi</th>
					<th width="30">Pekerjaan</th>
				</tr>
				<tbody>
					<?php
					foreach($xml->children() as $tugas) {?>
						<tr>
							<td><?php echo $tugas->nim ?></td>
					<td><?php echo $tugas->nama ?></td>
					<td><?php echo $tugas->nama_panggilan ?></td>
					<td><?php echo $tugas->jenis_kelamin ?></td>
					<td><?php echo $tugas->alamat ?></td>
					<td><?php echo $tugas->kota ?></td>
					<td><?php echo $tugas->kecamatan ?></td>
					<td><?php echo $tugas->provinsi ?></td>
					<td><?php echo $tugas->tempat_lahir ?></td>
					<td><?php echo $tugas->tanggal_lahir ?></td>
					<td><?php echo $tugas->email ?></td>
					<td><?php echo $tugas->no_hp ?></td>
					<td><?php echo $tugas->status ?></td>
					<td><?php echo $tugas->hobi ?></td>
					<td><?php echo $tugas->pekerjaan ?></td>
						</tr>
		<?php } ?>
				</tbody>
			
			</table>
		


</body>
</html>