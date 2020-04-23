<?php

include 'koneksi.php';

if(isset($_POST['simpan']))
{
  $KTP_KK = $_POST['ktp_kk'];
        $Nama = $_POST['nama'];
        $Tempat_tinggal = $_POST['tempat_tinggal'];
        $Kelamin = $_POST['kelamin'];
        $Goldarah = $_POST['goldarah'];
        $Tinggi_Badan = $_POST['tinggi_Badan'];
        $Berat_badan = $_POST['berat_Badan'];
        $NoTelp = $_POST['notelp'];
        $SH_1 = $_POST['sh_1'];
        $SH_2 = $_POST['sh_2'];
        $SH_3 = $_POST['sh_3'];

        $jumlah=$SH_1+$SH_2+$SH_3;
        $Rata_Rata=$jumlah/3;
        if($Rata_Rata = 36 )
        {
            $Predikat ="N";
            $Keterangan="Normal";
        }
        else if($Rata_Rata = 37 )
        {
            $Predikat ="DN";
            $Keterangan="Demam normal";
        }
        else if($Rata_Rata >= 38 )
        {
            $Predikat ="ODP";
            $Keterangan="Anda Dalam Pengawasan";
        }
        else if($Rata_Rata >= 39 )
        {
            $Predikat ="ODP";
            $Keterangan="Anda Dalam Pengawasan";
        }
        else if ($Rata_Rata >= 40 )
        {
            $Predikat ="Bahaya";
            $Keterangan="Segeralah Menyerahkan diri Ke rumah sakit";
        }
    
 $sql = "INSERT INTO pasien (ktp_kk, nama, tempat_tinggal, kelamin, goldarah, tinggi_Badan, berat_Badan, notelp, sh_1, sh_2, sh_3, ratarata, predikat, keterangan) 
        VALUES ('$KTP_KK', '$Nama', '$Tempat_tinggal','$Kelamin','$Goldarah','$Tinggi_Badan','$Berat_badan','$NoTelp','$SH_1','$SH_2','$SH_3','$Rata_Rata','$Predikat','$Keterangan')";
$res = mysqli_query($koneksi, $sql);

$count = mysqli_affected_rows($koneksi);

if($count == 1)
{
   header("Location: index.php");
}
else
{
   header("Location: tambah.php");
}
}
else
{
    header("Location: index.php");
}

?>
