
<?php
    include 'koneksi.php';
    $db = new Database();
    $con=$db->Connect();

    if(isset($_POST['proses']))
    {
        $query=mysqli_query($con,"insert into matakuliah values(
            '".$_POST['id_matkul']."',
            '".$_POST['matkul']."'
         )");
         header('location:latihan7matkul.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mata Kuliah</title>
    <h1><Center> Tambah Mata Kuliah</center></h1>
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
                    <form action="latihan7insertmatkul.php" method="POST" name="form1">
                        <div class="form-group">
                            <label>Kode Mata Kuliah</label>
                            <input type="text" name="id_matkul" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Mata Kuliah</label>
                            <input type="text" name="matkul" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="proses" value="Save">
                        <a href="latihan7matkul.php" class="btn btn-default">Cancel</a>
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