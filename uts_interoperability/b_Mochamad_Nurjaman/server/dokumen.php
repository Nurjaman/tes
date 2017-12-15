<?php

$data = new DOMDocument();
$karyawans = $data->createElement('karyawan');
$data->appendChild($karyawans);

$karyawan = $data->createElement("karyawan");
$id = $data->createAttribute('id');
$id->value = "1";
$karyawan->appendChild($id);

$nik = $data->createElement("nik","NK001");
$karyawan->appendChild($nik);

$nama = $data->createElement("nama","Mochamad Nurjaman");
$karyawan->appendChild($nama);

$jenis_kelamin = $data->createElement("jenis_kelamin","L");
$karyawan->appendChild($jenis_kelamin);

$jabatan = $data->createElement("jabatan","MG");
$karyawan->appendChild($jabatan);

$hari_normal = $data->createElement("hari_normal","25");
$karyawan->appendChild($hari_normal);

$absen = $data->createElement("absen","1");
$karyawan->appendChild($absen);

$hari_kerja = $data->createElement("hari_kerja","24");
$karyawan->appendChild($hari_kerja);

$gaji_perhari = $data->createElement("gaji_perhari","Rp. 500.000");
$karyawan->appendChild($gaji_perhari);

$bonus = $data->createElement("bonus","Rp. 1.000.000");
$karyawan->appendChild($bonus);

$gaji_bersih = $data->createElement("gaji_bersih","Rp. 9.500.000");
$karyawan->appendChild($gaji_bersih);

$tempat_lahir = $data->createElement("tempat_lahir","Cimahi");
$karyawan->appendChild($tempat_lahir);

$tanggal_lahir = $data->createElement("tanggal_lahir","20 Desember 1996");
$karyawan->appendChild($tanggal_lahir);

$alamat = $data->createElement("alamat","Jl. Cihanjuang");
$karyawan->appendChild($alamat);

$status = $data->createElement("status","Aktif");
$karyawan->appendChild($status);





$karyawans->appendChild($karyawan);


echo $data->saveXML();