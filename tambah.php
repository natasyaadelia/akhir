<?php 
    include 'aset/header.php';
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
        background-color:  #FFF8DC;
        color: darkslategrey;
    }
    tbody{
        background-color: #FFF8DC;
        color: darkslategrey;
    }
</style>
<body style="background-image:linear-gradient(bottom, #2c003e, #00bcd4);">
<div class="container">
    <div class="row mt-2">
        <div class="col-md-7" sty>
        <div class="card" style="background-color: #FFF8DC;">
                <div class="card-header"> 
                    <h2 class="card-title text-darkslategrey"><i class="fas fa-edit"></i>Tambah Data Pasien</h2>
                </div>
                <div class="card-body">
                <form method="post" action="proses-tambah.php">
                        <div class="form-group">
                            <label for="ktp_kk">KTP/KK</label>
                            <input type="text" class="form-control" name="ktp_kk" id="ktp_kk" placeholder="Masukkan No KTP/KK">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
                            <small class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="tempat_tinggal">Alamat</label>
                            <input type="text" class="form-control" name="tempat_tinggal" id="tempat_tinggal" placeholder="Masukkan Alamat">
                            <small class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label class="label">Jenis Kelamin</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="kelamin" class="form-control">
                                    <option disabled="disabled" selected="selected">Pilih Gender Anda</option>
                                    <option value="Pria"> Pria </option>
                                    <option value="Wanita"> Wanita </option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="label">Golongan Darah</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="goldarah" class="form-control">
                                    <option disabled="disabled" selected="selected">Pilih Golongan Darah Anda</option>
                                    <option value="A"> A</option>
                                    <option value="B"> B</option>
                                    <option value="O"> O </option>
                                    <option value="AB"> AB </option>

                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tinggi_Badan">Tinggi Badan </label>
                            <input type="text" class="form-control" name="tinggi_Badan" id="tinggi_Badan" placeholder="Masukkan Tinggi Badan">
                            <small class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="berat_Badan">Berat Badan</label>
                            <input type="text" class="form-control" name="berat_Badan" id="berat_Badan" placeholder="Masukkan Berat Badan">
                            <small class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="notelp">No.telp</label>
                            <input type="text" class="form-control" name="notelp" id="notelp" placeholder="Masukkan No.Telp">
                            <small class="form-text text-muted"></small>
                        </div>
                       
                        <div class="form-group">
                            <label for="sh_1">Suhu Tubuh Hari ke 1</label>
                            <input type="text" class="form-control" name="sh_1" id="sh_1" placeholder="Masukkan Suhu Tubuh Pasien">
                            <small class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="sh_2">Suhu Tubuh Hari ke 2</label>
                            <input type="text" class="form-control" name="sh_2" id="sh_2" placeholder="Masukkan Suhu Tubuh Pasien">
                            <small class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="sh_3">Suhu Tubuh Hari ke 3</label>
                            <input type="text" class="form-control" name="sh_3" id="sh_3" placeholder="Masukkan Suhu Tubuh Pasien">
                            <small class="form-text text-muted"></small>
                        </div>
                        
                        
                       <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    include 'aset/footer.php';
?>