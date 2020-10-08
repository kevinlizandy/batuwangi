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

    $desa  = $_POST['desa'];

    $lamaPil  = $_POST['lamapil'];
    $lamaSuntik  = $_POST['lamasuntik'];
    $lamaIud  = $_POST['lamaiud'];
    $lamaImplant = $_POST['lamaimplant'];
    $lamaMow = $_POST['lamamow'];
    $lamaMop = $_POST['lamamop'];
    $lamaKondom = $_POST['lamakondom'];
    $lamaTotal = $_POST['lamatotal'];

    $baruPil  = $_POST['barupil'];
    $baruSuntik  = $_POST['barusuntik'];
    $baruIud  = $_POST['baruiud'];
    $baruImplant = $_POST['baruimplant'];
    $baruMow = $_POST['barumow'];
    $baruMop = $_POST['barumop'];
    $baruKondom = $_POST['barukondom'];
    $baruTotal = $_POST['barutotal'];

    $efekSamping = $_POST['efeksamping'];
    $komplikasi = $_POST['komplikasi'];
    $kegagalan = $_POST['kegagalan'];
    $do = $_POST['do'];
    $aktif = $_POST['aktif'];
    $aktifGakin = $_POST['aktifgakin'];
    $aktif4T = $_POST['aktif4T'];
    $aktifAlkj = $_POST['aktifalkj'];
    $pascaPersalinan = $_POST['pascapersalinan'];
    

    
    $query = "insert into kb values (NULL,'$idPasien','$tanggal','$desa',
                                '$lamaPil','$lamaSuntik','$lamaIud','$lamaImplant','$lamaMow','$lamaMop','$lamaKondom','$lamaTotal',
                                '$baruPil','$baruSuntik','$baruIud','$baruImplant','$baruMow','$baruMop','$baruKondom','$baruTotal',
                                '$efekSamping','$komplikasi','$kegagalan','$do','$aktif','$aktifGakin','$aktif4T','$aktifAlkj','$pascaPersalinan'";

    mysqli_query($koneksi, $query);
    // header("location:pemilih.php");
    
    // echo $query;
?>