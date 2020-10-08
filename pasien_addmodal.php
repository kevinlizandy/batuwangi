

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Daftar Pasien</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>
            </div>
            <div class="modal-body">
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
                                    <form action="daftar_pasien.php" method="post" enctype="multipart/form-data">
                                        <div class="form-row mb-2">
                                            <div class="form-group col-md-6">
                                                <label for="nama">Nama</label>
                                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama pasien">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="namasuami">Nama suami</label>
                                                <input type="text" name="namasuami" class="form-control" id="namasuami" placeholder="Nama suami">
                                            </div>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Jl. Abc...">
                                        </div>
                                        <div class="form-row mb-2">
                                            <div class="form-group col-md-6">
                                                <label for="tempatlahir">Tempat Lahir</label>
                                                <input type="text" name="tempatlahir" class="form-control" id="tempatlahir" placeholder="Tempat lahir">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="tanggallahir">Tanggal Lahir</label>
                                                <input type="date" class="form-control" placeholder="dd-mm-yyyy" value="" id="tanggallahir" name="tanggallahir" />
                                            </div>
                                        </div>
                                        <div class="form-row mb-2">
                                            <div class="form-group col-md-6">
                                                <label for="noidentitas">No Identitas</label>
                                                <input type="text" class="form-control" id="noidentitas" name="noidentitas" placeholder="No Identitas">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="noidentitas">Foto Identitas</label>
                                                <div class="d-flex">
                                                    <input type="file" name="foto" class="form-control-file" id="foto" multiple="multiple">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-6">
                                                <label for="telp">No. HP/Telp</label>
                                                <input type="text" class="form-control" id="telp" name="telp">
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
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div> -->
        </div>
    </div>
</div>


<script src="plugins/flatpickr/flatpickr.js"></script>
    <script src="plugins/flatpickr/custom-flatpickr.js"></script>