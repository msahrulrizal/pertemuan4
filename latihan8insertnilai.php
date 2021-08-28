<?php
    // Koneksi ke Database
    include 'koneksi.php';
    $db = new Database();
    $con=$db->Connect();

    // Perintah insert data ke Database
    if(isset($_POST['proses']))
    {
        $query=mysqli_query($con,"insert into nilai values(
            '".$_POST['id_nilai']."',
            '".$_POST['npm_mhsw']."',
            '".$_POST['nama_mhsw']."',
            '".$_POST['kode_matkul']."',
            '".$_POST['uts']."',
            '".$_POST['uas']."',
            '".$_POST['quiz']."',
            '".$_POST['tugas']."',
            '".$_POST['kehadiran']."',
            '".$_POST['pertemuan']."'
        )");
        header('location:latihan8nilai.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Nilai Mahasiswa</title>
    <h1><Center> Tambah Data Nilai Mahasiswa </center></h1>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
      body { font-family : "Century Gothic"}
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <br> </br>
                    <form action="latihan8insertnilai.php" method="POST" name="form1">
                        <div class="form-group">
                            <label>No</label>
                            <input type="text" name="id_nilai" class="form-control">
                        </div>    
                        <div class="form-group">
                            <label>NPM</label>
                            <input type="text" name="npm_mhsw" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nama Mahasiswa</label>
                            <input type="text" name="nama_mhsw" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Kode Mata Kuliah</label>
                            <input type="text" name="kode_matkul" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>UTS</label>
                            <input type="text" name="uts" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>UAS</label>
                            <input type="text" name="uas" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Quiz</label>
                            <input type="text" name="quiz" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tugas</label>
                            <input type="text" name="tugas" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Kehadiran</label>
                            <input type="text" name="kehadiran" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Pertemuan</label>
                            <input type="text" name="pertemuan" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="proses" value="Save">
                        <a href="latihan8nilai.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<style>
    a, button,input[type=submit],input[type=reset] {
    font-family: "century gothic";
    font-size: 18px; 
    background: #FFD700;
    color: black;
    border: black 1px solid;
    border-radius: 8px;
    padding: 3px 15px;
    margin-top: 5px;
    }
    a {
    text-decoration: none;
    }
        a:hover, button:hover, input[type=submit]:hover, input[type=reset]:hover{
            opacity:0.9;
    }
</style>