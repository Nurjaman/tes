<div style="margin: 20px">
<h1>TUGAS</h1>

<form name="user" method="post" class="pure-form pure-form-stacked">
    Nama
    <input type="text" length="60" name="nama" />

    <input type="submit" value="Go" class="pure-button pure-button-primary"/>
</form>

</div>


<?php
$url = "http://localhost/bahan_ajar/uts_interoperability/b_maulana_ramadhan/server/format.php";

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
if($total==0) return;

echo("List of Students:");


?>
<table border="1" padding="10px">
				<tr>
					<th width="30">Id</th>
					<th width="300">Nama </th>
					<th width="120">Nama Panggilan </th>
					<th width="120">Alamat </th>
					<th width="120">Email </th>
					<th width="130">No HP </th>
					<th width="300">Hobi </th>
					<th width="120">Tempat Lahir </th>
					<th width="120">Status </th>
					<th width="120">Pekerjaan </th>
					<th width="120">Negara </th>
					<th width="120">Provinsi </th>
					<th width="120">Kabupaten </th>
					<th width="120">Kota </th>
					<th width="120">Kecamatan </th>
				</tr>
				<tbody>
					<?php
					foreach($xml->children() as $tugas) {?>
						<tr>
							<td><?php echo $tugas->id ?></td>
							<td><?php echo $tugas->nama ?></td>
							<td><?php echo $tugas->nama_panggilan ?></td>
							<td><?php echo $tugas->alamat ?></td>
							<td><?php echo $tugas->email ?></td>
							<td><?php echo $tugas->no_hp ?></td>
							<td><?php echo $tugas->hobi ?></td>
							<td><?php echo $tugas->tempat_lahir ?></td>
							<td><?php echo $tugas->status ?></td>
							<td><?php echo $tugas->pekerjaan ?></td>
							<td><?php echo $tugas->negara ?></td>
							<td><?php echo $tugas->provinsi ?></td>
							<td><?php echo $tugas->kabupaten ?></td>
							<td><?php echo $tugas->kota ?></td>
							<td><?php echo $tugas->kecamatan ?></td>
						</tr>
						<?php } ?>
				</tbody>
			</table>