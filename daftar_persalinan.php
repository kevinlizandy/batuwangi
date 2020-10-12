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

    $namaibu  = $_POST['namaibu'];

    $umur  = $_POST['umur'];
    $namasuami  = $_POST['namasuami'];
    $alamat = $_POST['alamat'];

    $anakke  = $_POST['anakke'];
    $tanggallahir = $_POST['tanggallahir'];
    $jamlahir = $_POST['jamlahir'];
    $bb = $_POST['bb'];
    $pb = $_POST['pb'];
    
    $ibusehat = $_POST['ibusehat'];
    $ibudirujuk = $_POST['ibudirujuk'];
    $bayisehat = $_POST['bayisehat'];
    $bayidirujuk = $_POST['bayidirujuk'];

    $jk = $_POST['jk'];
    
    $query = "insert into persalinan values (NULL,'$idPasien','$tanggal','$namaibu',
                                '$umur','$namasuami','$alamat','$anakke','$tanggallahir',
                                '$jamlahir','$bb','$pb','$ibusehat','$ibudirujuk','$bayisehat'
                                ,'$bayidirujuk','$jk')";

    mysqli_query($koneksi, $query);
    header("location:persalinan.php?success=Pendaftaran persalinan berhasil");
    
    // echo $query;
?>