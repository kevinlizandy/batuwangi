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
                                    
                                    <form action="daftar_neonatus.php" method="post" enctype="multipart/form-data">
                                        <div class="form-row mb-2">
                                            <div class="form-group col-md-6">
                                                <label for="nama">Nama</label>
                                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" value="<?php echo $d["nama_pasien"]; ?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="idpasien">ID Pasien</label>
                                                <input type="text" name="idpasien" class="form-control" id="idpasien" readonly placeholder="ID Pasien" value="<?php echo $d["id_pasien"]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-row mb-2">
                                            <div class="form-group col-md-5">
                                                <label for="namaortu">Nama Orang Tua</label>
                                                <input type="text" name="namaortu" class="form-control" id="namaortu" placeholder="Nama Orang Tua" >
                                            </div>
                                            <div class="form-group col-md-7">
                                                <label for="alamat">Alamat</label>
                                                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" >
                                            </div>
                                        </div>
                                        <div class="form-row mb-2">
                                            <div class="form-group col-md-3">
                                                <label for="tempatlahir">Tempat Lahir</label>
                                                <input type="text" name="tempatlahir" class="form-control" id="tempatlahir" placeholder="Tempat Lahir" value="<?php echo $d["tempat_lahir"]; ?>" >
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="tanggallahir">Tanggal Lahir</label>
                                                <input type="date" class="form-control" placeholder="dd-mm-yyyy" value="<?php echo $d["tanggal_lahir"]; ?>" id="tanggallahir" name="tanggallahir" />
                                            </div>
                                        </div>
                                        <div class="form-row mb-2">
                                            <div class="form-group col-md-9">
                                                <label for="imunisasi">Imunisasi yang diberikan</label>
                                                <input type="text" name="imunisasi" class="form-control" id="imunisasi" placeholder="Imunisasi"  >
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="keadaan">Keadaan</label>
                                                <select class="form-control basic" id="keadaan" name="keadaan" >
                                                    <option value="Sehat">Sehat</option>
                                                    <option value="Sakit">Sakit</option>
                                                    <option value="Mati">Mati</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row mb-2">
                                            <div class="form-group col-md-9">
                                                <label for="keterangan">Keterangan</label>
                                                <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Keterangan"  >
                                            </div>
                                            <div class="form-group col-md-3">
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