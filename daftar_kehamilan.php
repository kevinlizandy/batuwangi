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

    $umur  = $_POST['umur'];
    $suami  = $_POST['suami'];
    $alamat  = $_POST['alamat'];
    
    $hamilKe = $_POST['hamilke'];
    $umurKehamilan = $_POST['umurkehamilan'];
    
    $imunisasitt1 = $_POST['imunisasitt1'];
    $imunisasitt2 = $_POST['imunisasitt2'];
    
    $kunjungank1 = $_POST['kunjungank1'];
    $kunjungank4 = $_POST['kunjungank4'];

    $fe  = $_POST['fe'];
    $resikotinggi  = $_POST['resikotinggi'];
    $dirujuk  = $_POST['dirujuk'];
    $keterangan = $_POST['keterangan'];
    
    
    $query = "insert into kehamilan values (NULL,'$idPasien','$tanggal','$nama',
                                '$umur','$suami','$alamat','$hamilKe','$umurKehamilan','$imunisasitt1','$imunisasitt2','$kunjungank1',
                                '$kunjungank4','$fe','$resikotinggi','$dirujuk','$keterangan')";

    mysqli_query($koneksi, $query);
    header("location:kehamilan.php?success=Pendaftaran kunjungan ibu hamil berhasil");
    
    // echo $query;
?>