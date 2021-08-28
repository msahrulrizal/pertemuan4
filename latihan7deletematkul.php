<?php

include 'koneksi.php';
$db = new Database();
$con = $db->Connect();

$id = $_GET['id'];
$delete = mysqli_query($con,"delete from matakuliah where id_matkul= '$id'");

if($delete)
{
    mysqli_close($con);
    header("location:latihan7matkul.php");
    exit;	
}
else
{
    echo "Error deleting record";
}
?>