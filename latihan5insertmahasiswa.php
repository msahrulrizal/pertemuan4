
<?php
    include 'koneksi.php';
    $db=new Database();
    $con=$db->Connect();

    if(isset($_POST['proses']))
    {
        $query=mysqli_query($con,"insert into mahasiswa values(
            '".$_POST['id']."',
            '".$_POST['npm_mhsw']."',
            '".$_POST['nama_mhsw']."',
            '".$_POST['prodi']."',
            '".$_POST['kelas']."',
            '".$_POST['tahun_ajaran']."'
         )");
         header('location:latihan5mahasiswa.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
    <h1><Center> Masukan Data Mahasiswa </center></h1>
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
                    <form action="latihan5insertmahasiswa.php" method="POST" name="form1">
                        <div class="form-group">
                            <label>No</label>
                            <input type="text" name="id" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>NPM</label>
                            <input type="text" name="npm_mhsw" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama_mhsw" class="form-control">
                        </div>
                         <div class="form-group">
                            <label>Program Studi</label>
                            <input type="text" name="prodi" class="form-control">
                        </div>
                       <div class="form-group">
                            <label>Kelas</label>
                            <input type="text" name="kelas" class="form-control">
                        </div>
                         <div class="form-group">
                            <label>Tahun Ajaran</label>
                            <input type="text" name="tahun_ajaran" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="proses" value="Save">
                        <a href="latihan5mahasiswa.php" class="btn btn-default">Cancel</a>
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