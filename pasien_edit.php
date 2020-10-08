<?php include 'header.php'; ?>

<!--  BEGIN CONTENT AREA  -->


        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                
                <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-8 col-lg-8 col-sm-8  layout-spacing">

                <?php 
                    $idPasien=0;
                    if(isset($_GET["id"]))
                    {
                        $idPasien = $_GET["id"];
                    }
                    else
                    { ?>
                        <div class="alert alert-danger mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Error!</strong> 
                        Id Pasien tidak ada!</div>
                    <?php 
                    } ?>

                <?php
                    include 'koneksi.php';
                    
                    $query = "select * from pasien where id_pasien = '$idPasien'";

                    $data = mysqli_query($koneksi, $query);
                    while($d = mysqli_fetch_array($data)){
                    ?>

                    <div class="row">
                        <div id="flFormsGrid" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <!-- <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Forms Grid</h4>
                                        </div>                                                                        
                                    </div>
                                </div> -->
                                <div class="widget-content widget-content-area">
                                    <form action="ubah_pasien.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group mb-2">
                                            <label for="idpasien">ID Pasien</label>
                                            <input type="text" name="idpasien" class="form-control" id="idpasien" placeholder="Jl. Abc..." value="<?php echo $d["id_pasien"]; ?>" readonly="readonly">
                                        </div>
                                        <div class="form-row mb-2">
                                            <div class="form-group col-md-6">
                                                <label for="nama">Nama</label>
                                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama pasien" value="<?php echo $d["nama_pasien"]; ?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="namasuami">Nama suami</label>
                                                <input type="text" name="namasuami" class="form-control" id="namasuami" placeholder="Nama suami" value="<?php echo $d["nama_suami"]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Jl. Abc..." value="<?php echo $d["alamat"]; ?>">
                                        </div>
                                        <div class="form-row mb-2">
                                            <div class="form-group col-md-6">
                                                <label for="tempatlahir">Tempat Lahir</label>
                                                <input type="text" name="tempatlahir" class="form-control" id="tempatlahir" placeholder="Tempat lahir" value="<?php echo $d["tempat_lahir"]; ?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="tanggallahir">Tanggal Lahir</label>
                                                <input type="date" class="form-control" placeholder="dd-mm-yyyy" id="tanggallahir" name="tanggallahir" value="<?php echo $d["tanggal_lahir"]; ?>" />
                                            </div>
                                        </div>
                                        <div class="form-row mb-2">
                                            <div class="form-group col-md-6">
                                                <label for="noidentitas">No Identitas</label>
                                                <input type="text" class="form-control" id="noidentitas" name="noidentitas" placeholder="No Identitas" value="<?php echo $d["no_identitas"]; ?>">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="noidentitas">Foto Identitas</label>
                                                <div class="d-flex">
                                                    <input type="file" name="foto" class="form-control-file" id="foto" multiple="multiple">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <img src="<?php echo $d["foto_identitas"]; ?>" alt="image-gallery" width="100px">
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-6">
                                                <label for="telp">No. HP/Telp</label>
                                                <input type="text" class="form-control" id="telp" name="telp" value="<?php echo $d["telp"]; ?>">
                                            </div>
                                        </div>
                                        <div class="form-row"> 
                                            <div class="form-group col-md-8"></div>
                                            <div class="form-group col-md-4"> 
                                                <button type="submit" class="btn btn-primary mt-3 ml-3">Save</button>
                                                <a href="pasien.php" class="btn btn-danger mt-3 ml-3" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Cancel</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php }
                    ?>
                </div>
                    
                </div>

                </div>

                </div>
        
        <!--  END CONTENT AREA  -->
        
<?php include 'footer.php'; ?>        