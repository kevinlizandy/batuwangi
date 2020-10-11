<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>


<?php 
    
    $tanggalAwal = $_POST["tanggalawal"];
    $tanggalAkhir = $_POST["tanggalakhir"];

    $query="select count(a.aktif) 'count' from kb a where a.tanggal >= '$tanggalAwal' and a.tanggal <= '$tanggalAkhir' and a.aktif='1'";
    $data = mysqli_query($koneksi,$query);
    $dAktif = mysqli_fetch_array($data);

    $query="select count(a.aktif_gakin) 'count' from kb a where a.tanggal >= '$tanggalAwal' and a.tanggal <= '$tanggalAkhir' and a.aktif_gakin='1'";
    $data = mysqli_query($koneksi,$query);
    $dAktifGakin = mysqli_fetch_array($data);

    $query="select count(a.aktif_4t) 'count' from kb a where a.tanggal >= '$tanggalAwal' and a.tanggal <= '$tanggalAkhir' and a.aktif_4t='1'";
    $data = mysqli_query($koneksi,$query);
    $dAktif4T = mysqli_fetch_array($data);

    $query="select count(a.aktif_alkj) 'count' from kb a where a.tanggal >= '$tanggalAwal' and a.tanggal <= '$tanggalAkhir' and a.aktif_alkj='1'";
    $data = mysqli_query($koneksi,$query);
    $dAktifAlkj = mysqli_fetch_array($data);
?>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/datatables.css">
    <!-- END GLOBAL MANDATORY STYLES -->
<style>

</style>
</head>
<body style="max-width:1000px;">
 
    <button onClick="printDiv('printDiv')" class="btn btn-primary mb-2 mt-2">Print</button>
    <div class="widget-content widget-content-area" id="printDiv">
            <div class="col-md-12" style="text-align:center;">
                <h4>REKAPITULASI KOHORT KB TINGKAT PUSKESMAS</h4>
            </div>
            <div class="row mb-2">   
                <div class="col-md-4 mt-4"> 
                    <label>Bulan/Tahun : <?php echo substr($tanggalAkhir,5,2)."/".substr($tanggalAkhir,0,4); ?></label><br>
                    <label>Provinsi &emsp;&emsp;  : Provinsi</label><br>
                    <label>Kab/Kota &emsp; : Fasilitas KB</label>
                </div>                 
                <div class="col-md-4 mt-4"> 
                    <label>Puskesmas &emsp; : Nama Puskesmas</label><br>
                    <label>Kecamatan &emsp; : Kecamatan</label><br>
                    <label>Nama Fasilitas Pelayanan KB : Fasilitas KB</label>
                </div>
                <div class="col-md-4 mt-4"> 
                    <label>Total PUS &emsp;&emsp;&emsp; : <?php echo $dAktif["count"]; ?></label><br>
                    <label>Total PUS Gakin   : <?php echo $dAktifGakin["count"]; ?></label><br>
                    <label>Total PUS 4T &emsp;&emsp;: <?php echo $dAktif4T["count"]; ?></label><br>
                    <label>Total PUS ALKI &emsp;: <?php echo $dAktifAlkj["count"]; ?></label><br>
                    <label><i>(angka perkiraan setahun)</i></label>
                </div>
            </div>
            <div class="col-md-4"> 

            </div>
            <div class="col-md-4"> 

            </div>
        
                                    <div class="table-responsive">
                                        <table class="table table-bordered html5-extension mb-4">
                                            <thead>
                                                <tr>
                                                    <th style="font-size:11px;max-width:25px;">No</th>
                                                    <th style="font-size:11px;max-width:50px;">Desa</th>
                                                    <th style="font-size:11px;max-width:20px;">Lama/<br>Baru</th>
                                                    <th style="font-size:11px;max-width:60px;">Pil</th>
                                                    <th style="font-size:11px;max-width:60px;" >Suntik</th>
                                                    <th style="font-size:11px;max-width:40px;">IUD</th>
                                                    <th style="font-size:11px;max-width:70px;">Implant</th>
                                                    <th style="font-size:11px;max-width:50px;">MOW</th>
                                                    <th style="font-size:11px;max-width:50px;">MOP</th>
                                                    <th style="font-size:11px;max-width:70px;">Kondom</th>
                                                    <th style="font-size:11px;max-width:60px;">Total</th>
                                                    <th style="font-size:11px;max-width:80px;">Efek<br>Samping</th>
                                                    <th style="font-size:11px;max-width:90px;">Komplikasi</th>
                                                    <th style="font-size:11px;max-width:95px;">Kegagalan</th>
                                                    <th style="font-size:11px;max-width:45px;">DO</th>
                                                    <th style="font-size:11px;max-width:80px;">AKTIF*</th>
                                                    <th style="font-size:11px;max-width:80px;">AKTIF*<br>Gakin</th>
                                                    <th style="font-size:11px;max-width:80px;">AKTIF*<br>4T</th>
                                                    <th style="font-size:11px;max-width:60px;">AKTIF*<br>ALKI</th>
                                                    <th style="font-size:11px;max-width:100px;">KB Pasca<br>Persalinan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
<?php
    $query="select ROW_NUMBER() OVER ( ORDER BY no_kunjungan ) 'row_num', a.* from kb a where a.tanggal >= '$tanggalAwal' and a.tanggal <= '$tanggalAkhir'";
    $data = mysqli_query($koneksi,$query);
    while($d = mysqli_fetch_array($data)){
        echo "<tr>";
        echo "<td rowspan='2'>".$d["row_num"]."</td>";
        echo "<td rowspan='2'>".$d["desa"]."</td>";
        echo "<td>Baru</td>";
        echo "<td>";if($d["baru_pil"]==1) echo "v"; echo "</td>";
        echo "<td>";if($d["baru_suntik"]==1) echo "v"; echo "</td>";
        echo "<td>";if($d["baru_iud"]==1) echo "v"; echo "</td>";
        echo "<td>";if($d["baru_implant"]==1) echo "v"; echo "</td>";
        echo "<td>";if($d["baru_mow"]==1) echo "v"; echo "</td>";
        echo "<td>";if($d["baru_mop"]==1) echo "v"; echo "</td>";
        echo "<td>";if($d["baru_kondom"]==1) echo "v"; echo "</td>";
        echo "<td>".$d["baru_total"]."</td>";
        echo "<td rowspan='2'>";if($d["efek_samping"]==1) echo "v"; echo "</td>";
        echo "<td rowspan='2'>";if($d["komplikasi"]==1) echo "v"; echo "</td>";
        echo "<td rowspan='2'>";if($d["kegagalan"]==1) echo "v"; echo "</td>";
        echo "<td rowspan='2'>";if($d["do"]==1) echo "v"; echo "</td>";
        echo "<td rowspan='2'>";if($d["aktif"]==1) echo "v"; echo "</td>";
        echo "<td rowspan='2'>";if($d["aktif_gakin"]==1) echo "v"; echo "</td>";
        echo "<td rowspan='2'>";if($d["aktif_4t"]==1) echo "v"; echo "</td>";
        echo "<td rowspan='2'>";if($d["aktif_alkj"]==1) echo "v"; echo "</td>";
        echo "<td rowspan='2'>";if($d["pasca_persalinan"]==1) echo "v"; echo "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Lama</td>";
        echo "<td>";if($d["lama_pil"]==1) echo "v"; echo "</td>";
        echo "<td>";if($d["lama_suntik"]==1) echo "v"; echo "</td>";
        echo "<td>";if($d["lama_iud"]==1) echo "v"; echo "</td>";
        echo "<td>";if($d["lama_implant"]==1) echo "v"; echo "</td>";
        echo "<td>";if($d["lama_mow"]==1) echo "v"; echo "</td>";
        echo "<td>";if($d["lama_mop"]==1) echo "v"; echo "</td>";
        echo "<td>";if($d["lama_kondom"]==1) echo "v"; echo "</td>";
        echo "<td>".$d["lama_total"]."</td>";
        echo "</tr>";
    }
?>
                                                
                                            </tbody>
                                        </table>
                                    </div>


                                </div>

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>

    
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="plugins/table/datatable/datatables.js"></script>
    <script src="plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
<script>
$('#html5-extension').DataTable( {
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn' },
                    { extend: 'csv', className: 'btn' },
                    { extend: 'excel', className: 'btn' },
                    { extend: 'print', className: 'btn' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        } );

function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

</body>

</html>