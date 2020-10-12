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
                                    
                                    <form action="daftar_kehamilan.php" method="post" enctype="multipart/form-data">
                                        <div class="form-row mb-2">
                                            <div class="form-group col-md-6">
                                                <label for="nama">Nama</label>
                                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama pasien" value="<?php echo $d["nama_pasien"]; ?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="idpasien">ID Pasien</label>
                                                <input type="text" name="idpasien" class="form-control" id="idpasien" readonly placeholder="ID Pasien" value="<?php echo $d["id_pasien"]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-row mb-2">
                                            <div class="form-group col-md-6">
                                                <label for="suami">Suami</label>
                                                <input type="text" name="suami" class="form-control" id="suami" placeholder="Suami" >
                                            </div>
                                        </div>
                                        <div class="form-row mb-2">
                                            <div class="form-group col-md-9">
                                                <label for="alamat">Alamat</label>
                                                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" >
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="umur">Umur</label>
                                                <input type="text" name="umur" class="form-control" id="umur" placeholder="Umur" value="<?php $usia= date("Y") - substr($d['tanggal_lahir'],0,4); echo $usia; ?>" >
                                            </div>
                                        </div>
                                        <div class="form-row mb-2">
                                            <div class="form-group col-md-3">
                                                <label for="hamilke">Hamil Ke</label>
                                                <input type="text" name="hamilke" class="form-control" id="hamilke" placeholder="Hamil ke" >
                                            </div>
                                            <div class="form-group col-md-1"></div>
                                            <div class="form-group col-md-4">
                                                <label for="umurkehamilan">Umur Kehamilan (minggu)</label>
                                                <input type="text" name="umurkehamilan" class="form-control" id="umurkehamilan" placeholder="Umur kehamilan" >
                                            </div>
                                        </div>
                                        <div class="form-group mb-2">
                                            <div class="form-group col-md-6">
                                                <label for="kblama"><b>Imunisasi</b></label>
                                                <div class="n-chk">
                                                    <label class="new-control new-checkbox checkbox-primary">
                                                        <input type="checkbox" class="new-control-input" name="imunisasitt1">
                                                        <span class="new-control-indicator"></span>TT 1
                                                    </label>
                                                    <label class="new-control new-checkbox checkbox-primary ml-4">
                                                        <input type="checkbox" class="new-control-input" name="imunisasitt2">
                                                        <span class="new-control-indicator"></span>TT 2
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="kblama"><b>Kunjungan</b></label>
                                                <div class="n-chk">
                                                    <label class="new-control new-checkbox checkbox-warning">
                                                        <input type="checkbox" class="new-control-input" name="kunjungank1">
                                                        <span class="new-control-indicator"></span>K1
                                                    </label>
                                                    <label class="new-control new-checkbox checkbox-warning ml-5">
                                                        <input type="checkbox" class="new-control-input" name="kunjungank4">
                                                        <span class="new-control-indicator"></span>K4
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-2">
                                            <div class="form-group col-md-9">
                                                <label for="kblama"><b>Lainnya</b></label>
                                                <div class="n-chk">
                                                    <label class="new-control new-checkbox checkbox-info">
                                                        <input type="checkbox" class="new-control-input" name="fe">
                                                        <span class="new-control-indicator"></span>Dapat FE
                                                    </label>
                                                    <label class="new-control new-checkbox checkbox-info ml-2">
                                                        <input type="checkbox" class="new-control-input" name="resikotinggi">
                                                        <span class="new-control-indicator"></span>Resiko Tinggi
                                                    </label>
                                                    <label class="new-control new-checkbox checkbox-info ml-2">
                                                        <input type="checkbox" class="new-control-input" name="dirujuk">
                                                        <span class="new-control-indicator"></span>Dirujuk
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row mb-2">
                                            <div class="form-group col-md-8">
                                                <label for="keterangan">Keterangan</label>
                                                <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Keterangan" >
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