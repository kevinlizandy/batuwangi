<?php 
    include_once 'koneksi.php'; 
    
    if(isset($_GET["id"]))
    {
        $idPasien=$_GET["id"];

        $query = "select * from pasien where id_pasien='$idPasien'";
        $data = mysqli_query($koneksi,$query);
        $d = mysqli_fetch_array($data);

        if(mysqli_num_rows($data) == 1)
        {
?>                                
                                    
                                    <form action="daftar_kb.php" method="post" enctype="multipart/form-data">
                                        <div class="form-row mb-2">
                                            <div class="form-group col-md-6">
                                                <label for="nama">Nama</label>
                                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama pasien" readonly value="<?php echo $d["nama_pasien"]; ?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="idpasien">ID Pasien</label>
                                                <input type="text" name="idpasien" class="form-control" id="idpasien" readonly placeholder="ID Pasien" value="<?php echo $d["id_pasien"]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-row mb-2">
                                            <div class="form-group col-md-6">
                                                <label for="desa">Desa</label>
                                                <input type="text" name="desa" class="form-control" id="desa" placeholder="Desa" >
                                            </div>
                                        </div>
                                        <div class="form-group mb-2">
                                            <div class="form-group col-md-6">
                                                <label for="kblama"><b>KB Lama</b></label>
                                                <div class="n-chk">
                                                    <label class="new-control new-checkbox checkbox-primary">
                                                        <input type="checkbox" class="new-control-input" name="lamapil">
                                                        <span class="new-control-indicator"></span>PIL
                                                    </label>
                                                    <label class="new-control new-checkbox checkbox-primary ml-5">
                                                        <input type="checkbox" class="new-control-input" name="lamasuntik">
                                                        <span class="new-control-indicator"></span>Suntik
                                                    </label>
                                                    <label class="new-control new-checkbox checkbox-primary">
                                                        <input type="checkbox" class="new-control-input" name="lamaiud">
                                                        <span class="new-control-indicator"></span>IUD
                                                    </label>
                                                </div>
                                                <div class="n-chk">
                                                    <label class="new-control new-checkbox checkbox-primary">
                                                        <input type="checkbox" class="new-control-input" name="lamaimplant">
                                                        <span class="new-control-indicator"></span>Implant
                                                    </label>
                                                    <label class="new-control new-checkbox checkbox-primary ml-3">
                                                        <input type="checkbox" class="new-control-input" name="lamamow">
                                                        <span class="new-control-indicator"></span>MOW
                                                    </label>
                                                    <label class="new-control new-checkbox checkbox-primary">
                                                        <input type="checkbox" class="new-control-input" name="lamamop">
                                                        <span class="new-control-indicator"></span>MOP
                                                    </label>
                                                </div>
                                                <div class="n-chk">
                                                    <label class="new-control new-checkbox checkbox-primary">
                                                        <input type="checkbox" class="new-control-input" name="lamakondom">
                                                        <span class="new-control-indicator"></span>Kondom
                                                    </label>
                                                </div>
                                                <label for="lamatotal">Total KB Lama</label>
                                                <input type="text" name="lamatotal" class="form-control" id="lamatotal" placeholder="Total" >
                                            </div>
                                            <div class="form-group col-md-6 mt-4">
                                                <label for="kblama"><b>KB Baru</b></label>
                                                <div class="n-chk">
                                                    <label class="new-control new-checkbox checkbox-success">
                                                        <input type="checkbox" class="new-control-input" name="barupil">
                                                        <span class="new-control-indicator"></span>PIL
                                                    </label>
                                                    <label class="new-control new-checkbox checkbox-success ml-5">
                                                        <input type="checkbox" class="new-control-input" name="barusuntik">
                                                        <span class="new-control-indicator"></span>Suntik
                                                    </label>
                                                    <label class="new-control new-checkbox checkbox-success">
                                                        <input type="checkbox" class="new-control-input" name="baruiud">
                                                        <span class="new-control-indicator"></span>IUD
                                                    </label>
                                                </div>
                                                <div class="n-chk">
                                                    <label class="new-control new-checkbox checkbox-success">
                                                        <input type="checkbox" class="new-control-input" name="baruimplant">
                                                        <span class="new-control-indicator"></span>Implant
                                                    </label>
                                                    <label class="new-control new-checkbox checkbox-success ml-3">
                                                        <input type="checkbox" class="new-control-input" name="barumow">
                                                        <span class="new-control-indicator"></span>MOW
                                                    </label>
                                                    <label class="new-control new-checkbox checkbox-success">
                                                        <input type="checkbox" class="new-control-input" name="barumop">
                                                        <span class="new-control-indicator"></span>MOP
                                                    </label>
                                                </div>
                                                <div class="n-chk">
                                                    <label class="new-control new-checkbox checkbox-success">
                                                        <input type="checkbox" class="new-control-input" name="barukondom">
                                                        <span class="new-control-indicator"></span>Kondom
                                                    </label>
                                                </div>
                                                <label for="barutotal">Total KB Baru</label>
                                                <input type="text" name="barutotal" class="form-control" id="barutotal" placeholder="Total" >
                                            </div>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="lainnya">Lainnya</label>
                                            <div class="n-chk">
                                                    <label class="new-control new-checkbox checkbox-warning">
                                                        <input type="checkbox" class="new-control-input" name="efeksamping">
                                                        <span class="new-control-indicator"></span>Efek Samping
                                                    </label>
                                                    <label class="new-control new-checkbox checkbox-warning">
                                                        <input type="checkbox" class="new-control-input" name="komplikasi">
                                                        <span class="new-control-indicator"></span>Komplikasi
                                                    </label>
                                                    <label class="new-control new-checkbox checkbox-warning">
                                                        <input type="checkbox" class="new-control-input" name="kegagalan">
                                                        <span class="new-control-indicator"></span>Kegagalan
                                                    </label>
                                                    
                                                    <label class="new-control new-checkbox checkbox-warning">
                                                        <input type="checkbox" class="new-control-input" name="do">
                                                        <span class="new-control-indicator"></span>DO
                                                    </label>
                                                    <label class="new-control new-checkbox checkbox-warning">
                                                        <input type="checkbox" class="new-control-input" name="aktif">
                                                        <span class="new-control-indicator"></span>AKTIF*
                                                    </label>
                                                    <label class="new-control new-checkbox checkbox-warning">
                                                        <input type="checkbox" class="new-control-input" name="aktifgakin">
                                                        <span class="new-control-indicator"></span>AKTIF* Gakin
                                                    </label>

                                                    <label class="new-control new-checkbox checkbox-warning">
                                                        <input type="checkbox" class="new-control-input" name="aktif4t">
                                                        <span class="new-control-indicator"></span>AKTIF* 4T
                                                    </label>
                                                    <label class="new-control new-checkbox checkbox-warning">
                                                        <input type="checkbox" class="new-control-input" name="aktifalkj">
                                                        <span class="new-control-indicator"></span>AKTIF* ALKJ
                                                    </label>
                                                    <label class="new-control new-checkbox checkbox-warning">
                                                        <input type="checkbox" class="new-control-input" name="pascapersalinan">
                                                        <span class="new-control-indicator"></span>KB Pasca Persalinan
                                                    </label>
                                                </div>
                                        </div>
                                        <div class="form-row"> 
                                            <div class="form-group col-md-8"></div>
                                            <div class="form-group col-md-4"> 
                                                <button type="submit" class="btn btn-primary mt-3 ml-3">Save</button>
                                                <button class="btn btn-danger mt-3 ml-3" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Cancel</button>
                                            </div>
                                        </div>
                                    </form>

                                    
<?php
        }
    }
?>