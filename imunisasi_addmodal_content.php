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
                                    
                                    <form action="daftar_imunisasi.php" method="post" enctype="multipart/form-data">
                                        <div class="form-row mb-2">
                                            <div class="form-group col-md-6">
                                                <label for="namaanak">Nama Anak</label>
                                                <input type="text" name="namaanak" class="form-control" id="namaanak" placeholder="Nama Anak" value="<?php echo $d["nama_pasien"]; ?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="idpasien">ID Pasien</label>
                                                <input type="text" name="idpasien" class="form-control" id="idpasien" readonly placeholder="ID Pasien" value="<?php echo $d["id_pasien"]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-row mb-2">
                                            <div class="form-group col-md-6">
                                                <label for="namaortu">Nama Orang Tua</label>
                                                <input type="text" name="namaortu" class="form-control" id="namaortu" placeholder="Nama Orang Tua" >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="tanggallahir">Tanggal Lahir</label>
                                                <input type="date" class="form-control" placeholder="dd-mm-yyyy" id="tanggallahir" name="tanggallahir" value="<?php echo $d["tanggal_lahir"]; ?>" />
                                            </div>
                                        </div>
                                        <div class="form-row mb-2">
                                            <div class="form-group col-md-8">
                                                <label for="alamat">Alamat</label>
                                                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" value="<?php echo $d["alamat"]; ?>" >
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="jeniskelamin">Jenis Kelamin</label>
                                                <select class="form-control basic" id="jeniskelamin" name="jeniskelamin" >
                                                    <option value="L">Laki-laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group mb-2 mt-4">
                                            <div class="form-group col-md-9">
                                                <label for="kblama"><b>IMUNISASI</b></label>
                                                <div class="n-chk">
                                                    <label class="new-control new-checkbox checkbox-primary">
                                                        <input type="checkbox" class="new-control-input" name="hbo">
                                                        <span class="new-control-indicator"></span>HBO
                                                    </label>
                                                    <label class="new-control new-checkbox checkbox-primary" style="margin-left:62px;">
                                                        <input type="checkbox" class="new-control-input" name="bcg">
                                                        <span class="new-control-indicator"></span>BCG
                                                    </label>
                                                </div>
                                                <div class="n-chk mt-2">
                                                    <label class="new-control new-checkbox checkbox-info">
                                                        <input type="checkbox" class="new-control-input" name="pentabio1">
                                                        <span class="new-control-indicator"></span>Pentabio 1
                                                    </label>
                                                    <label class="new-control new-checkbox checkbox-info ml-3">
                                                        <input type="checkbox" class="new-control-input" name="pentabio2">
                                                        <span class="new-control-indicator"></span>Pentabio 2
                                                    </label>
                                                    <label class="new-control new-checkbox checkbox-info">
                                                        <input type="checkbox" class="new-control-input" name="pentabio3">
                                                        <span class="new-control-indicator"></span>Pentabio 3
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-9 ">
                                                <!-- <label for="kblama"><b>KB Baru</b></label> -->
                                                <div class="n-chk">
                                                    <label class="new-control new-checkbox checkbox-success">
                                                        <input type="checkbox" class="new-control-input" name="polio1">
                                                        <span class="new-control-indicator"></span>Polio 1
                                                    </label>
                                                    <label class="new-control new-checkbox checkbox-success ml-5">
                                                        <input type="checkbox" class="new-control-input" name="polio2">
                                                        <span class="new-control-indicator"></span>Polio 2
                                                    </label>
                                                    <label class="new-control new-checkbox checkbox-success ml-4">
                                                        <input type="checkbox" class="new-control-input" name="polio3">
                                                        <span class="new-control-indicator"></span>Polio 3
                                                    </label>
                                                </div>
                                                <div class="n-chk">
                                                    <label class="new-control new-checkbox checkbox-success">
                                                        <input type="checkbox" class="new-control-input" name="polio4">
                                                        <span class="new-control-indicator"></span>Polio 4
                                                    </label>
                                                    <!-- <label class="new-control new-checkbox checkbox-success ml-3">
                                                        <input type="checkbox" class="new-control-input" name="barumow">
                                                        <span class="new-control-indicator"></span>MOW
                                                    </label>
                                                    <label class="new-control new-checkbox checkbox-success">
                                                        <input type="checkbox" class="new-control-input" name="barumop">
                                                        <span class="new-control-indicator"></span>MOP
                                                    </label> -->
                                                </div>
                                                <div class="n-chk mt-3">
                                                    <label class="new-control new-checkbox checkbox-warning">
                                                        <input type="checkbox" class="new-control-input" name="ipv">
                                                        <span class="new-control-indicator"></span>IPV
                                                    </label>
                                                    <label class="new-control new-checkbox checkbox-warning">
                                                        <input type="checkbox" class="new-control-input" name="campak">
                                                        <span class="new-control-indicator"></span>Campak
                                                    </label>
                                                    <label class="new-control new-checkbox checkbox-warning">
                                                        <input type="checkbox" class="new-control-input" name="pentabooster">
                                                        <span class="new-control-indicator"></span>Penta Booster
                                                    </label>
                                                    <label class="new-control new-checkbox checkbox-warning">
                                                        <input type="checkbox" class="new-control-input" name="campakbooster">
                                                        <span class="new-control-indicator"></span>Campak Booster
                                                    </label>
                                                </div>
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