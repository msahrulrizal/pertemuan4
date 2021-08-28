<?php
include 'koneksi.php';
$db = new Database();
$con = $db->Connect();

$id = $_GET['id'];
$query = mysqli_query($con,"select * from matakuliah where id_matkul='$id'");
$data = mysqli_fetch_array($query);

if(isset($_POST['update']))
    {
    $id_matkul = $_POST['id_matkul'];
    $matkul = $_POST['matkul'];

    $edit = mysqli_query($con,"update matakuliah set matkul='$matkul' where id_matkul='$id_matkul'");
    
    if($edit)
    {
    mysqli_close($con);
    header("location:latihan7matkul.php");
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
    <title>Edit Mata Kuliah </title>
    <h1><Center> Edit Data Mata Kuliah</center></h1>
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
                    <form action="latihan7updatematkul.php" method="POST">
                        <div class="form-group">
                            <label>Kode Mata Kuliah</label>
                            <input type="text" name="id_matkul" class="form-control" value="<?php echo $data['id_matkul'] ?>" placeholder="Enter id_matkul" Required>
                        </div>
                        <div class="form-group">
                            <label>Mata Kuliah</label>
                            <input type="text" name="matkul" class="form-control" value="<?php echo $data['matkul'] ?>" placeholder="Enter matkul" Required>
                        </div>
                        
                        <input type="submit" name="update" value="Update">
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