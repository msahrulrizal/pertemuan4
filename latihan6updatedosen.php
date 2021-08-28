<?php
include 'koneksi.php';
$db = new Database();
$con = $db->Connect();

$id = $_GET['id'];
$query = mysqli_query($con,"select * from dosen where id_dosen='$id'");
$data = mysqli_fetch_array($query);

if(isset($_POST['update']))
    {
    $id_dosen = $_POST['id_dosen'];
    $nama_dosen = $_POST['nama_dosen'];

    $edit = mysqli_query($con,"update dosen set nama_dosen='$nama_dosen' where id_dosen='$id_dosen'");
    
    if($edit)
    {
    mysqli_close($con);
    header("location:latihan6dosen.php");
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
    <title>Edit Data Dosen</title>
    <h1><Center> Edit Data Dosen </center></h1>
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
                    <form action="latihan6updatedosen.php" method="POST">
                        <div class="form-group">
                            <label>No</label>
                            <input type="text" name="id_dosen" class="form-control" value="<?php echo $data['id_dosen'] ?>" placeholder="Enter id_dosen" Required>
                        </div>
                        <div class="form-group">
                            <label>Nama Dosen</label>
                            <input type="text" name="nama_dosen" class="form-control" value="<?php echo $data['nama_dosen'] ?>" placeholder="Enter nama_dosen" Required>
                        </div>
                        <input type="submit" name="update" value="Update">
                        <a href="latihan6dosen.php" class="btn btn-default">Cancel</a>
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