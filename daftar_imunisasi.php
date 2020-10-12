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

    $namaAnak  = $_POST['namaanak'];

    $jenisKelamin  = $_POST['jeniskelamin'];
    $tanggalLahir  = $_POST['tanggallahir'];
    $namaOrtu  = $_POST['namaortu'];
    $alamat = $_POST['alamat'];
    
    $hbo = $_POST['hbo'];
    $bcg = $_POST['bcg'];
    $pentabio1 = $_POST['pentabio1'];
    $pentabio2 = $_POST['pentabio2'];
    $pentabio3 = $_POST['pentabio3'];

    $polio1  = $_POST['polio1'];
    $polio2  = $_POST['polio2'];
    $polio3  = $_POST['polio3'];
    $polio4 = $_POST['polio4'];
    
    $ipv = $_POST['ipv'];
    $campak = $_POST['campak'];
    $pentabooster = $_POST['pentabooster'];
    $campakbooster = $_POST['campakbooster'];

    
    $query = "insert into imunisasi values (NULL,'$idPasien','$tanggal','$namaAnak',
                                '$jenisKelamin','$tanggalLahir','$namaOrtu','$alamat','$hbo','$bcg','$pentabio1','$pentabio2',
                                '$pentabio3','$polio1','$polio2','$polio3','$polio4','$ipv','$campak','$pentabooster',
                                '$campakbooster')";

    mysqli_query($koneksi, $query);
    header("location:imunisasi.php?success=Pendaftaran kunjungan imunisasi berhasil");
    
    // echo $query;
?>