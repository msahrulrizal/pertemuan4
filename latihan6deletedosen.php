<?php

include 'koneksi.php';
$db = new Database();
$con = $db->Connect();

$id = $_GET['id'];
$delete = mysqli_query($con,"delete from dosen where id_dosen  = '$id'");

if($delete)
{
    mysqli_close($con);
    header("location:latihan6dosen.php");
    exit;	
}
else
{
    echo "Error deleting record";
}
?>