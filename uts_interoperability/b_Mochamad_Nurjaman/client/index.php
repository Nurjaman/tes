<html>
<head>
    <title>Input Data</title>
</head>
<body>
<div style="margin: 20px">
    <h1 align = "center">Input Data</h1>

    <form name="user" action="../server/proses.php" method="post">
        <table border ="1" align = "center">
            <tr>
                <td colspan="4" align="center"><b>DATA KARYAWAN</b></td>
            </tr>
            <tr>
                <td>NIK</td>
                <td><input type="text" name="nik" id="nik"></input></td>
                <td>Nama</td>
                <td><input type="text" name="nama" id="nik"></input></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="jenis_kelamin">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </td>
                <td>Jabatan</td>
                <td>
                    <select name="jabatan">
                        <option value="MG">Manager</option>
                        <option value="KY">Karyawan</option>
                        <option value="OB">OFFICEBOY</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tempat_lahir" id="tempat_lahir"></input></td>
                <td>Tanggal Lahir</td>
                <td><input type="text" name="tanggal_lahir" id="tanggal_lahir"></input></td>
            </tr>

            <tr>
                <td>Hari Normal</td>
                <td><input type="text" name="hari_normal" id="hari_normal"></input></td>
                <td>Absen</td>
                <td><input type="text" name="absen" id="absen"></input></td>
            </tr>
            <tr>

                <td>Alamat</td>
                <td><input type="textarea" name="alamat" id="alamat"></input></td>
                <td>Status</td>
                <td>
                    <select name="status">
                        <option value="Aktif">Aktif</option>
                        <option value="Non-Aktif">Non-Aktif</option>
                    </select>
            </tr>
            <tr>
                <td>Gaji / Hari</td>
                <td><input type="text" name="gaji_perhari" id="gaji_perhari" value="Rp. "></input></td>
                <td>Bonus</td>
                <td><input type="text" name="bonus" id="bonus" value="Rp. "></input></td>
            </tr>

            <tr>
                <td>Kasbon</td>
                <td><input type="text" name="kasbon" id="kasbon" value="Rp. "></input></td>
                <td>Gaji Bersih</td>
                <td><input type="text" name="gaji_bersih" id="gaji_bersih" value="Rp. "></input></td>
            </tr>

            <tr>
<!--                <td colspan = "2" align = "center"><input type="submit" name="submit" id="submit" value="Kirim"></input></td>-->
                <td colspan="4" align="center">
                    <input type='reset' name='reset' value='Reset' onClick="confirm('Reset ?')"> ||
                    <a href="http://localhost/bahan_ajar/uts_interoperability/b_Mochamad_Nurjaman/client/client.php">Lihat Data</a> ||
                     <input type='submit' name='submit' value='Kirim' onClick="confirm('Kirim ?')">
            </tr>

        </table>
    </form>
</div>
</body>
</html>

