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
    <h6><font size = "5" > Daftar Nilai Mahasiswa</font>
            <table width ="100%" ;border="2px" style="border -collapse:collapse;">
            <table border ="3">
                <tr style ="background-color:#fc0;">
                    <td align = center> <font size="4"> No</td>
                    <td align = center> <font size="4"> NPM</td>
                    <td align = center> <font size="4"> Nama Mahasiswa</td>
                    <td align = center> <font size="4"> Kode Mata Kuliah</td>
                    <td align = center> <font size="4"> UTS</td>
                    <td align = center> <font size="4"> UAS</td>
                    <td align = center> <font size="4"> Quiz</td>
                    <td align = center> <font size="4"> Tugas</td>
                    <td align = center> <font size="4"> Absensi</td>
                    <td align = center> <font size="4"> Nilai</td>
                    <td align = center> <font size="4"> Predikat</td>
                    <td align = center> <font size="4"> Opsi</td>  
                </tr>
        </br>
    </h1>

<?php
    // Koneksi ke Database
    include 'koneksi.php';
    $db = new Database();
    $con=$db->Connect();
    $predikat="";
    
    // Menentukan Grade berdasarkan Nilai Akhir
    function grades($nilai)
    {
        if($nilai <= 100 ) { $predikat = "A"; }
        if($nilai <  80 )  { $predikat = "B"; }
        if($nilai <  70 )  { $predikat = "C"; }
        if($nilai <  60 )  { $predikat = "D"; }
        if($nilai <  50 )  { $predikat = "E"; }

    return $predikat;
    }

    // Mengambil data dari Database
    $query=mysqli_query($con,"select * from nilai");
    while($data=mysqli_fetch_array($query)){

    // Menampilkan data dari Database	
    $kehadiran = $data['kehadiran'];
    $pertemuan = $data['pertemuan'];

    // Menghitung Nilai Absensi
    $absensi= ($kehadiran/$pertemuan)*100;

    // Menghitung Nilai Akhir
    $nilai  = ($data['uts']*0.3)+ ($data['uas']*0.4)+ ($data['quiz']*0.1)+ ($data['tugas']*0.1)+ ($absensi*0.1);

    // Menentukan Grade dari Nilai
    $predikat  = grades($nilai);
    $npm_mhsw = $data['npm_mhsw'];
    $kode_matkul = $data['kode_matkul'];

    echo "<tr>";
    echo "<th>"; echo $data['id_nilai']; echo "</th>";
    echo "<th>"; echo $data['npm_mhsw']; echo "</th>";
    echo "<th>"; echo $data['nama_mhsw']; echo "</th>";
    echo "<th>"; echo $data['kode_matkul']; echo "</th>";
    echo "<th>"; echo $data['uts']; echo "</th>";
    echo "<th>"; echo $data['uas']; echo "</th>";
    echo "<th>"; echo $data['quiz']; echo "</th>";
    echo "<th>"; echo $data['tugas']; echo "</th>";
    echo "<th>"; echo $absensi; echo "</th>";
    echo "<th>"; echo $nilai; echo "</th>";
    echo "<th>"; echo $predikat; echo "</th>";
    echo "<th>"; echo "<a href='latihan8updatenilai.php?id=$data[id_nilai]'>Edit</a> | 
                        <a href='latihan8deletenilai.php?id=$data[id_nilai]'>Delete</a>"; echo "</th>";
    echo "</tr>";
    }
?>

</table>

<br>
</br>

<div class="page-header clearfix">
    <font size="4"><a href="latihan8insertnilai.php" class="btn btn-success pull-right">Masukan Nilai Mahasiswa</a>
</div>
</center>




