<?php include 'header.php'; ?>

<!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                
                <div class="row layout-top-spacing" id="cancel-row">
                    
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

                    <?php if(isset($_GET["alert"]))
                    { ?>
                        <div class="alert alert-danger mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Error!</strong> 
                        <?php echo $_GET["alert"]; ?> </div>
                    <?php 
                    } ?>
                    <?php if(isset($_GET["success"]))
                    { ?>
                        <div class="alert alert-success mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Success!</strong> 
                        <?php echo $_GET["success"]; ?> </div>
                    <?php 
                    } ?>
                        <div class="col-lg-12 text-sm-right">
                            <button class="btn btn-primary mb-2 mr-2 btn-lg" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/><line x1="20" y1="8" x2="20" y2="14"/><line x1="23" y1="11" x2="17" y2="11"/><path xmlns="http://www.w3.org/2000/svg" d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle xmlns="http://www.w3.org/2000/svg" cx="8.5" cy="7" r="4"/><line xmlns="http://www.w3.org/2000/svg" x1="20" y1="8" x2="20" y2="14"/><line xmlns="http://www.w3.org/2000/svg" x1="23" y1="11" x2="17" y2="11"/></svg>
                                Tambah Data Pasien</button>
                        </div>
                        <div class="widget-content widget-content-area br-6">
                                <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NAMA</th>
                                            <th>NAMA SUAMI</th>
                                            <th>USIA</th>
                                            <th>TTL</th>
                                            <th>NO IDENTITAS</th>
                                            <th>No HP/TELP</th>
                                            <th>ALAMAT</th>
                                            <th>TANGGAL DAFTAR</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            include 'koneksi.php';
                                            $no=1;
                                            $query="select * from pasien";
                                            $data = mysqli_query($koneksi,$query);
                                            while($d = mysqli_fetch_array($data)){
                                                ?>
                                                <tr>
                                                <td><?php echo $d['id_pasien'] ?></td>
                                                <td><b><?php echo $d['nama_pasien']; ?></b></td>
                                                <td><?php echo $d['nama_suami']; ?></td>
                                                <td><?php $usia= date("Y") - substr($d['tanggal_lahir'],0,4); echo $usia; ?></td>
                                                <td><b><?php echo $d['tempat_lahir'].', '.$d['tanggal_lahir']; ?></b></td>
                                                <td><?php echo $d['no_identitas']; ?></td>
                                                <td><?php echo $d['telp']; ?></td>
                                                <td><?php echo $d['alamat']; ?></td>
                                                <td><?php echo $d['tanggal_daftar']; ?>
                                                    
                                                <td>                        
                                                    <a class="btn btn-warning btn-sm" href="pasien_edit.php?id=<?php echo $d['id_pasien'] ?>">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/><path xmlns="http://www.w3.org/2000/svg" d="M12 20h9"/><path xmlns="http://www.w3.org/2000/svg" d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
                                                    </a>
                                                </td>
                                                </tr>
                                                <?php 
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <?php include 'pasien_addmodal.php'; ?>

                </div>

                </div>
        
        <!--  END CONTENT AREA  -->
        
<?php include 'footer.php'; ?>        