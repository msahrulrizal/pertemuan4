<?php

// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();
 
// Ambil data berdasarkan ID
$id= $_GET['id'];
 
// Perintah delete data berdasarkan NPM Mahasiswa
$query=mysqli_query($con,"DELETE FROM nilai WHERE id_nilai=$id")or die(mysql_error());
 

header('location:latihan8nilai.php');
?>