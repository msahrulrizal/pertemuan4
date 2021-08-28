<br>
</br>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Edit Nilai Mahasiswa</title>
        <h1><Center> Edit Nilai Mahasiswa </center></h1>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <style type="text/css">
        body { font-family : "Century Gothic"}
            .wrapper{
                width: 500px;
                margin: 0 auto;
            }
        </style>
    </head>


<?php
    // Koneksi ke Database
    include 'koneksi.php';
    $db = new Database();
    $con=$db->Connect();
    
    $id= $_GET['id'];

    // Mengambil data dari Database
    $query=mysqli_query($con,"SELECT * FROM nilai WHERE id_nilai='$id'")or die(mysql_error());
    while($data=mysqli_fetch_array($query)){


    // Perintah update ke Database
    if(isset($_POST['proses']))
        {
            $uts= $_POST['uts'];
            $uas= $_POST['uas'];
            $kuis= $_POST['kuis'];
            $tugas= $_POST['tugas'];
            $kehadiran= $_POST['kehadiran'];
            $pertemuan= $_POST['pertemuan'];

            $query=mysqli_query($con,"UPDATE nilai SET uts='$uts', uas='$uas', kuis='$kuis',
            tugas='$tugas', kehadiran='$kehadiran', pertemuan='$pertemuan' WHERE id='$id'");
            header('location:latihan13.php');
        }
?>


<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                    <form action="latihan8updatenilai.php" method="POST">
                        <div class="form-group">
                            <label>NPM</label>
                            <input type="text" name="npm_mhsw" class="form-control" value="<?php echo $data['npm_mhsw'] ?>" disabled><br>
                        </div>
                        <div class="form-group">
                            <label>Nama Mahasiswa</label>
                            <input type="text" name="nama_mhsw" class="form-control" value="<?php echo $data['nama_mhsw'] ?>" disabled><br>
                        </div>
                        <div class="form-group">
                            <label>Kode Mata Kuliah</label>
                            <input type="text" name="kode_matkul" class="form-control" value="<?php echo $data['kode_matkul'] ?>" disabled><br>
                        </div>
                        <div class="form-group">
                            <label>Nilai UTS</label>
                            <input type="text" name="uts" class="form-control" value="<?php echo $data['uts'] ?>" placeholder="Enter uts" Required>
                        </div>
                        <div class="form-group">
                            <label>Nilai UAS</label>
                            <input type="text" name="uas" class="form-control" value="<?php echo $data['uas'] ?>" placeholder="Enter uas" Required>
                        </div>
                        <div class="form-group">
                            <label>Nilai Quiz</label>
                            <input type="text" name="quiz" class="form-control" value="<?php echo $data['quiz'] ?>" placeholder="Enter quiz" Required>
                        </div>
                        <div class="form-group">
                            <label>Nilai Tugas</label>
                            <input type="text" name="tugas" class="form-control" value="<?php echo $data['tugas'] ?>" placeholder="Enter tugas" Required>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Kehadiran</label>
                            <input type="text" name="kehadiran" class="form-control" value="<?php echo $data['kehadiran'] ?>" placeholder="Enter kehadiran" Required>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Pertemuan</label>
                            <input type="text" name="pertemuan" class="form-control" value="<?php echo $data['pertemuan'] ?>" placeholder="Enter pertemuan" Required>
                        </div>
                        <input type="submit" name="update" value="Update">
                        <a href="latihan8nilai.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


<?php
}
?>

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