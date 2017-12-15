<?php


include '../koneksi.php';

$nik = $_POST["nik"];
$nama = $_POST["nama"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$jabatan = $_POST["jabatan"];
$hari_normal = $_POST["hari_normal"];
$absen = $_POST["absen"];
$gaji_perhari = $_POST["gaji_perhari"];
$bonus = $_POST["bonus"];
$kasbon = $_POST["kasbon"];
$gaji_bersih = $_POST["gaji_bersih"];
$tempat_lahir = $_POST["tempat_lahir"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$alamat = $_POST["alamat"];
$status = $_POST["status"];


$input = mysql_query("INSERT into  * from b_razzak_ibnain_oktarianto_karyawan  ('id','nik','nama',
'jenis_kelamin','jabatan',
'hari_normal','absen',
'gaji_perhari','bonus',
'kasbon','gaji_bersih',
'tempat_lahir','tanggal_lahir',
'alamat','status')

values ('','$nik','$nama',
'$jenis_kelamin','$jabatan',
'$hari_normal','$absen',
'$gaji_perhari','$bonus',
'$kasbon','$gaji_bersih',
'$tempat_lahir','$tanggal_lahir',
'$alamat','$status')");

if ($input) {
    echo "<script> alert('Data berhasil Ditambahkan') </script>";
 
}
else 
{
    echo "<script> alert('Data Gagal Ditambahkan') </script>";
 }
    ?>