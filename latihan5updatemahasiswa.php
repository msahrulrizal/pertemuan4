<?php
include 'koneksi.php';
$db = new Database();
$con = $db->Connect();

$id = $_GET['id'];
$query = mysqli_query($con,"select * from mahasiswa where id='$id'");
$data = mysqli_fetch_array($query);

if(isset($_POST['update']))
    {
    $id = $_POST['id'];
    $npm_mhsw = $_POST['npm_mhsw'];
    $nama_mhsw = $_POST['nama_mhsw'];
    $prodi = $_POST['prodi'];
    $kelas = $_POST['kelas'];
    $tahun_ajaran = $_POST['tahun_ajaran'];

    $edit = mysqli_query($con,"update mahasiswa set npm_mhsw='$npm_mhsw', nama_mhsw='$nama_mhsw', prodi='$prodi',kelas='$kelas',tahun_ajaran='$tahun_ajaran' where id='$id'");
    
    if($edit)
    {
    mysqli_close($con);
    header("location:latihan5mahasiswa.php");
    exit;
    }
    else
    {
        echo mysqli_error();
    }       
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Mahasiswa</title>
    <h1><Center> Edit Data Mahasiswa </center></h1>
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
                    <div class="page-header">
                    <form action="latihan5updatemahasiswa.php" method="POST">
                        <div class="form-group">
                            <label>No</label>
                            <input type="text" name="id" class="form-control" value="<?php echo $data['id'] ?>" placeholder="Enter id" Required>
                        </div>
                        <div class="form-group">
                            <label>NPM</label>
                            <input type="text" name="npm_mhsw" class="form-control" value="<?php echo $data['npm_mhsw'] ?>" placeholder="Enter npm_mhsw" Required>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama_mhsw" class="form-control" value="<?php echo $data['nama_mhsw'] ?>" placeholder="Enter nama_mhsw" Required>
                        </div>
                        <div class="form-group">
                            <label>Program Studi</label>
                            <input type="text" name="prodi" class="form-control" value="<?php echo $data['prodi'] ?>" placeholder="Enter prodi" Required>
                        </div>
                        <div class="form-group">
                            <label>Kelas</label>
                            <input type="text" name="kelas" class="form-control" value="<?php echo $data['kelas'] ?>" placeholder="Enter kelas" Required>
                        </div>
                        <div class="form-group">
                            <label>Tahun Ajaran</label>
                            <input type="text" name="tahun_ajaran" class="form-control" value="<?php echo $data['tahun_ajaran'] ?>" placeholder="Enter tahun_ajaran" Required>
                        </div>
                        <input type="submit" name="update" value="Update">
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