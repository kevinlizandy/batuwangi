<?php
    include 'koneksi.php';
    //sample data
    // $nama  = "abbbasd";
    // $namaSuami  = "aidsaob";
    // $alamat  = "jandkajn1i98621";
    // $tempatLahir  = "jakarta";
    // $tanggalLahir = "1980-10-20";
    // $noIdentitas = "891265011123";
    // $foto = "";
    // $telp = "891240141123";
    // $tglDaftar = date("Y-m-d");
    // $idPasien = date("ymdHis");
    
    $nama  = $_POST['nama'];
    $namaSuami  = $_POST['namasuami'];
    $alamat  = $_POST['alamat'];
    $tempatLahir  = $_POST['tempatlahir'];
    $tanggalLahir = $_POST['tanggallahir'];
    $noIdentitas = $_POST['noidentitas'];
    // $foto = $_POST['foto'];
    $telp = $_POST['telp'];
    $tglDaftar = date("m-d-Y");
    $idPasien = date("ymdHis");

    //upload foto
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    
    $check = getimagesize($_FILES["foto"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    
    if ($uploadOk == 0)
    {
        header("location:pasien.php?alert=Foto tidak dapat di upload");
    }

    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) 
    {
        echo "The file ". htmlspecialchars( basename( $_FILES["foto"]["name"])). " has been uploaded.";
    } 
    else 
    {
        echo "Sorry, there was an error uploading your file.";
    }

    
    $query = "insert into pasien values ('$idPasien','$nama','$namaSuami','$alamat','$tempatLahir','$tanggalLahir','$noIdentitas','$target_file','$telp','$tglDaftar')";

    mysqli_query($koneksi, $query);
    header("location:pasien.php?success=Data pasien sukses tersimpan");
    
    echo $query;
?>