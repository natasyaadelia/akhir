<?php
include 'aset/header.php';
include 'koneksi.php';

$sql = "SELECT * FROM pasien";

$res = mysqli_query($koneksi,$sql);
$pasien = array();

while ($data = mysqli_fetch_assoc($res)){
    $pasien[] = $data;
}
?>

<head>
 <script type="text/javascript" src="latjs1.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website COVID-19</title>
    <link rel="stylesheet" href="http://localhost/CORONA/aset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/CORONA/aset/fontawesome/css/all.min.css">

    <script src="http://localhost/CORONA/aset/jquery.js"></script>
   <script src="http://localhost/CORONA/aset/bootstrap/js/bootstrap.min.js"></script>
</head>
<style>
    body {
            background: url(ini.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    thead{
        background-color: #FFEBCD;
        color: darkslategrey;
    }
    tbody{
        background-color: #FFEBCD;
        color: darkslategrey;
    }
</style>
<body style="background-image:linear-gradient(bottom, #2c003e, #00bcd4); ">
<div class="container">
    <div class="row mt-2">
        <div class="col-md-15">
            <div class="card" style="background-color: #FFF8DC;">
                <div class="card-header">
                    <h2 class="card-title text-darkslategrey"><i class="fas fa-edit"></i>Data Pasien</h2>
                </div>
                <div class="card-body">
                    <table class="table table-striped ">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                                <th scope="col">KTP / KK</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Tempat tinggal</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Gol.dar</th>
                                <th scope="col">Tinggi Badan</th>
                                <th scope="col">BB</th>
                                <th scope="col">No.Telp</th>
                                <th scope="col">Suhu Tubuh Hari 1</th>
                                <th scope="col">Suhu Tubuh Hari 2</th>
                                <th scope="col">Suhu Tubuh Hari 3</th>
                                <th scope="col">Predikat</th>
                                <th scope="col">Keterangan</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                foreach ($pasien as $p ) { ?>
                                <tr>
                                    <th scope="row"><?= $no ?></th>
                                     <td><?= $p['ktp_kk'] ?></td>
                                     <td><?= $p['nama'] ?></th>
                                     <td><?= $p['tempat_tinggal'] ?></th>
                                     <td><?= $p['kelamin'] ?></th>
                                     <td><?= $p['goldarah'] ?></th>
                                     <td><?= $p['tinggi_badan'] ?></th>
                                     <td><?= $p['berat_badan'] ?></th>
                                     <td><?= $p['notelp'] ?></th>
                                     <td><?= $p['sh_1'] ?></th>
                                     <td><?= $p['sh_2'] ?></th>
                                     <td><?= $p['sh_3'] ?></th>
                                     <td><?= $p['predikat'] ?></th>
                                     <td><?= $p['keterangan'] ?></th>
  
                                </tr>
                            <?php
                                $no++;
                                }
                            ?>
                        </tbody>
                    </table>
                    <a href="http://localhost/covid/tambah.php"><button type="submit" class="btn btn-info" >Isi Data</button></a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include 'aset/footer.php';
?>
