<br>
</br>

<center>
<style type="text/css">
    body { font-family : "Century Gothic"}
</style>

<title>Universitas Binaniaga Indonesia</title>
<h1><font size = "10" > Universitas Binaniaga Indonesia</font></h1>
    <div>
    <font size="4"><a href="latihan5mahasiswa.php" class="btn btn-success pull-right">Daftar Mahasiswa</a> |
    <font size="4"><a href="latihan6dosen.php" class="btn btn-success pull-right">Daftar Dosen</a> |
    <font size="4"><a href="latihan7matkul.php" class="btn btn-success pull-right">Daftar Mata Kuliah</a> |
    <font size="4"><a href="latihan8nilai.php" class="btn btn-success pull-right">Nilai</a>
    </div>


<br>
    <h6><font size = "5" > Data Mahasiswa</font>
            <table width ="100%" ;border="2px" style="border -collapse:collapse;">
            <table border ="3">
                <tr style ="background-color:#fc0;">
                    <td align = center> <font size="4"> No</td>
                    <td align = center> <font size="4"> NPM</td>
                    <td align = center> <font size="4"> Nama</td>
                    <td align = center> <font size="4"> Program Studi</td>
                    <td align = center> <font size="4"> Kelas</td>
                    <td align = center> <font size="4"> Tahun Ajaran</td>
                    <td align = center> <font size="4"> Opsi</td>  
                </tr>
        </br>
    </h1>


    <style type="text/css">
        .wrapper{
            width: 700px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 20px;
        }
    </style>
    

    <?php
        include 'koneksi.php';
        $db = new Database();
        $con = $db->Connect();

        $query=mysqli_query($con,"select * from mahasiswa");
        while($data=mysqli_fetch_array($query))
        {
    ?>
    
    
    </tr>
        <td align = center> <?php echo $data['id']; ?></td>
        <td align = center> <?php echo $data['npm_mhsw']; ?></td>
        <td align = center> <?php echo $data['nama_mhsw']; ?></td>
        <td align = center> <?php echo $data['prodi']; ?></td>
        <td align = center> <?php echo $data['kelas']; ?></td>
        <td align = center> <?php echo $data['tahun_ajaran']; ?></td>
        <td><a href="latihan5updatemahasiswa.php?id=<?php echo $data['id']; ?>">Edit</a> | 
            <a href="latihan5deletemahasiswa.php?id=<?php echo $data['id']; ?>">Delete</a></td>
    </tr>

    <?php
        }
    ?>

    <table>
    </table>

    <br>

    <div class="page-header clearfix">
    <font size="4"><a href="latihan5insertmahasiswa.php" class="btn btn-success pull-right">Masukan Data Mahasiswa Baru</a>
    </div>

</center>