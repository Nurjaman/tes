
<!DOCTYPE>
<html>
<head>
    <title></title>
</head>
<body bgcolor="#ffffff">

<div style="margin: 20px">
    <h2><center>Data Karyawan</center></h2>

    <form name="user" method="post" class="pure-form pure-form-stacked" align="center">
        Cari Nama :
        <input type="text" length="60" name="nama" />

        <input type="submit" value="Cari" class="pure-button pure-button-primary"/>
        <a href="client.php"><input type="submit" value="reset"></a>

    </form>

</div>


<?php
$url = "http://localhost/bahan_ajar/uts_interoperability/b_Razzak_Ibnain_Oktarianto/server/server.php";

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

$total = count($xml->children());
if($total==0)
    return;

?>

<h1 align="center">Razzak ||List Karyawan</h1>

<table align="center" border="1">
	<tr>
		<th>ID</th>
		<th>NIK</th>
		<th>Nama</th>
		<th>JK</th>
		<th>Jabatan</th>
		<th>Hari Normal</th>
		<th>Absen</th>
		<th>Gaji Perhari</th>
		<th>Bonus</th>
		<th>Kasbon</th>
		<th>Gaji Bersih</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>Alamat</th>
		<th>Status</th>
	</tr>
<?php
foreach ($xml->children() as $karyawan) {
	# code...
	?>
	<tr>
		<td><?php echo $karyawan['id']; ?></td>
		<td><?php echo $karyawan->nik; ?></td>
		<td><?php echo $karyawan->nama; ?></td>
		<td><?php echo $karyawan->jenis_kelamin; ?></td>
		<td><?php echo $karyawan->jabatan; ?></td>
		<td><?php echo $karyawan->hari_normal; ?></td>
		<td><?php echo $karyawan->absen; ?></td>
		<td><?php echo $karyawan->gaji_perhari; ?></td>
		<td><?php echo $karyawan->bonus; ?></td>
		<td><?php echo $karyawan->kasbon; ?></td>
		<td><?php echo $karyawan->gaji_bersih; ?></td>
		<td><?php echo $karyawan->tempat_lahir; ?></td>
		<td><?php echo $karyawan->tanggal_lahir; ?></td>
		<td><?php echo $karyawan->alamat; ?></td>
		<td><?php echo $karyawan->status; ?></td>

	<?php
}
?>

</table>
