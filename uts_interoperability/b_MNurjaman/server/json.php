<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "uts";

$conn = mysqli_connect('localhost', 'root','','uts') or die("Kesalahan " .mysqli_error($conn));


$sql = "select * from b_MNurjaman_list_karyawan";
$result = mysqli_query($conn, $sql) or die ("Error " .mysqli_error($conn));
$identitas = array();
while ($row = mysqli_fetch_assoc($result))
{
    $identitas[] = $row;
}
echo json_encode($identitas);
mysqli_close($conn)

?>