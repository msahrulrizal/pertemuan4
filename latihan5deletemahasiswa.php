<?php

include 'koneksi.php';
$db = new Database();
$con = $db->Connect();

$id = $_GET['id'];
$delete = mysqli_query($con,"delete from mahasiswa where id  = '$id'");

if($delete)
{
    mysqli_close($con);
    header("location:latihan5mahasiswa.php");
    exit;	
}
else
{
    echo "Error deleting record";
}
?>