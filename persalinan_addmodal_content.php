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
                                    
                                    <form action="daftar_persalinan.php" method="post" enctype="multipart/form-data">
                                        <div class="form-row mb-2">
                                            <div class="form-group col-md-6">
                                                <label for="namaibu">Nama Ibu</label>
                                                <input type="text" name="namaibu" class="form-control" id="namaibu" placeholder="Nama Ibu" value="<?php echo $d["nama_pasien"]; ?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="idpasien">ID Pasien</label>
                                                <input type="text" name="idpasien" class="form-control" id="idpasien" readonly placeholder="ID Pasien" value="<?php echo $d["id_pasien"]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-row mb-2">
                                            <div class="form-group col-md-6">
                                                <label for="namasuami">Nama Suami</label>
                                                <input type="text" name="namasuami" class="form-control" id="namasuami" placeholder="Nama Suami" >
                                            </div>
                                        </div>
                                        <div class="form-row mb-2">
                                            <div class="form-group col-md-8">
                                                <label for="alamat">Alamat</label>
                                                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" value="<?php echo $d["alamat"]; ?>" >
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="umur">Umur</label>
                                                <input type="text" name="umur" class="form-control" id="umur" placeholder="Umur" value="<?php $usia= date("Y") - substr($d['tanggal_lahir'],0,4); echo $usia; ?>" >
                                            </div>
                                        </div>
                                        <div class="form-row mb-2">
                                            <div class="form-group col-md-3">
                                                <label for="anakke">Anak ke</label>
                                                <input type="text" name="anakke" class="form-control" id="anakke" placeholder="Anak ke" >
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="tanggallahir">Tanggal Lahir</label>
                                                <input type="date" class="form-control" placeholder="dd-mm-yyyy" id="tanggallahir" name="tanggallahir"  />
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="jamlahir">Jam Lahir</label>
                                                <input type="text" name="jamlahir" class="form-control" id="jamlahir" placeholder="HH:MM" >
                                            </div>
                                        </div>
                                        <div class="form-row mb-2">
                                            <div class="form-group col-md-3">
                                                <label for="bb">Berat Badan</label>
                                                <input type="text" name="bb" class="form-control" id="bb" placeholder="Berat badan" >
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="pb">Panjang Badan</label>
                                                <input type="text" name="pb" class="form-control" id="pb" placeholder="Panjang badan" >
                                            </div>
                                        </div>
                                        <div class="form-group mb-2 mt-4">
                                            <div class="form-group col-md-9">
                                                <label for="kblama"><b>Keadaan Ibu</b></label>
                                                <div class="n-chk">
                                                    <label class="new-control new-checkbox checkbox-primary">
                                                        <input type="checkbox" class="new-control-input" name="ibusehat">
                                                        <span class="new-control-indicator"></span>Sehat
                                                    </label>
                                                    <label class="new-control new-checkbox checkbox-primary" style="margin-left:62px;">
                                                        <input type="checkbox" class="new-control-input" name="ibudirujuk">
                                                        <span class="new-control-indicator"></span>Dirujuk
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-9">
                                                <label for="kblama"><b>Keadaan Bayi</b></label>
                                                <div class="n-chk">
                                                    <label class="new-control new-checkbox checkbox-primary">
                                                        <input type="checkbox" class="new-control-input" name="bayisehat">
                                                        <span class="new-control-indicator"></span>Sehat
                                                    </label>
                                                    <label class="new-control new-checkbox checkbox-primary" style="margin-left:62px;">
                                                        <input type="checkbox" class="new-control-input" name="bayidirujuk">
                                                        <span class="new-control-indicator"></span>Dirujuk
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label for="jk">Jenis Kelamin</label>
                                                <select class="form-control basic" id="jk" name="jk" >
                                                    <option value="L">Laki-laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>
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