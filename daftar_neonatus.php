<?php
    include 'koneksi.php';
    //sample data
    // $nama  = "abbbasd";
    // $namaSuami  = "aidsaob";
    // $abarut  = "jandkajn1i98621";
    // $tempatLahir  = "jakarta";
    // $tanggalLahir = "1980-10-20";
    // $noIdentitas = "891265011123";
    // $foto = "";
    // $telp = "891240141123";
    // $tglDaftar = date("Y-m-d");
    // $idPasien = date("ymdHis");
    
    $idPasien = $_POST['idpasien'];
    $tanggal = date("Y-m-d H:i:s");

    $nama  = $_POST['nama'];

    $tempatlahir  = $_POST['tempatlahir'];
    $tanggalLahir  = $_POST['tanggallahir'];
    $namaOrtu  = $_POST['namaortu'];
    $alamat = $_POST['alamat'];
    
    $imunisasi = $_POST['imunisasi'];
    $keadaan = $_POST['keadaan'];
    $jk = $_POST['jk'];
    $keterangan = $_POST['keterangan'];
    
    
    $query = "insert into neonatus values (NULL,'$idPasien','$tanggal','$nama',
                                '$tempatlahir','$tanggalLahir','$namaOrtu','$alamat','$imunisasi','$keadaan','$jk','$keterangan')";

    mysqli_query($koneksi, $query);
    header("location:neonatus.php?success=Pendaftaran kunjungan neonatus berhasil");
    
    // echo $query;
?>