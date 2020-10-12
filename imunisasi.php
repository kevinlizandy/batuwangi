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
                            <button  onClick="editClick(1)" class="btn btn-primary mb-2 mr-2 btn-lg" type="button"  data-target=".bd-example-modal-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/><line x1="20" y1="8" x2="20" y2="14"/><line x1="23" y1="11" x2="17" y2="11"/><path xmlns="http://www.w3.org/2000/svg" d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle xmlns="http://www.w3.org/2000/svg" cx="8.5" cy="7" r="4"/><line xmlns="http://www.w3.org/2000/svg" x1="20" y1="8" x2="20" y2="14"/><line xmlns="http://www.w3.org/2000/svg" x1="23" y1="11" x2="17" y2="11"/></svg>
                                Daftar Imunisasi</button>

                        </div>
                        <div class="widget-content widget-content-area br-6">
                                <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA ANAK</th>
                                            <th>JENIS<br>KELAMIN</th>
                                            <th>TANGGAL LAHIR</th>
                                            <th>NAMA ORANG TUA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            include 'koneksi.php';
                                            $no=1;
                                            $query="select * from imunisasi order by no_kunjungan desc";
                                            $data = mysqli_query($koneksi,$query);
                                            while($d = mysqli_fetch_array($data)){
                                                ?>
                                                <tr>
                                                <td><?php echo $d['no_kunjungan'] ?></td>
                                                <td><b><?php echo $d['nama_anak']; ?></b></td>
                                                <td><?php echo $d['jenis_kelamin']; ?></td>
                                                <td><?php echo $d['tanggal_lahir'];  ?></td>
                                                <td><b><?php echo $d['nama_ortu']; ?></b></td>
                                                </tr>
                                                <?php 
                                            }
                                        ?>
                                    </tbody>
                                </table>
                                <form method="post" enctype="multipart/form-data" name="report" id="report" action="imunisasi_print.php" >
                                    <!-- <div class="form-group col-md-3 mt-5">
                                        <label for="tanggallahir"><h5>Generate Report</h5></label>
                                    </div> -->
                                    <div class="form-row ml-2 mt-5">
                                    </div>
                                    <div class="form-row ml-2 mt-5">
                                        <div class="form-group col-md-2">
                                            <label for="tangglawal">Periode Awal</label>
                                            <input type="date" class="form-control" required placeholder="dd-mm-yyyy" value="" id="tanggalawal" name="tanggalawal" />
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="tangglakhir">Periode Akhir</label>
                                            <input type="date" class="form-control" required placeholder="dd-mm-yyyy" value="" id="tanggalakhir" name="tanggalakhir" />
                                        </div>
                                        <div class="form-group col-md-3">
                                            <button type="submit" class="btn btn-secondary btn-lg ml-3" style="margin-top:30px;">Generate Report</button>
                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    
                    <!-- modal -->
                    <div class="modal fade bd-example-modal-lg" id="myModal"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    </div>
                    </div>
                    
                    

                </div>

                </div>
        
<!-- <div class="modal fade slide-down" id="myModal" tabindex="-1" role="dialog" aria-hidden="false" data-backdrop="static">
<div class="modal-dialog" id="inModal"> -->

 
</div>
</div>
        <!--  END CONTENT AREA  -->


<script type="text/javascript">  


var allpos=0;
	 function loadStart()
	{			 
			$.ajax({ 
       success : function(r)
           {
              $('#myModal').modal('show');  // put your modal id 
            	$('.modal-dialog').show().html("<div class='modal-content-wrapper modal-sm' style='margin-top:250px;margin-left:250px;'><div class='modal-content'><div class='modal-body text-left no-margin'><img src='assets/img/712(1).GIF' style='margin-top:20px;'/></div></div></div>");
				//$('.modal-dialog').show().html(r);
           }
    	});	
	}
	 
	 function pageBack()
	 {
		 
	 }
     
     
     
	function loadStop()
	{			 
			$.ajax({ 
         
       success : function(r)
           {
              $('#myModal').modal("hide");
            	
           }
    	});	
	}

    function hideModal()
	{
		$('#myModal').modal();
	}

    function editClick(id)
	{			
			$.ajax({
				type : 'post',
           url : 'imunisasi_addmodal.php', 
        //   data :  'id='+ id,
            data : '',
         
       success : function(r)
           {
              // now you can show output in your modal 
              $('#myModal').modal('show');  // put your modal id 
                $('.modal-dialog').show().html(r);
           }
    	});	
    }
    
    
    function pageChange(inp)
	{		
		// loadStart();
		
	// 	$.ajax({
	// 			type : 'get',
    //        url : page, 
         
    //    success : function(r)
    //        {
	// 		    loadStop();// put your modal id 
    //         	$('#modalContent').show().html(r);
	// 			//document.getElementById('lastPage').value=window.location;
    //        }
    // 	});	
        var e = document.getElementById("pasienSelect");
        var strUser = e.options[e.selectedIndex].value;
        var page = inp+"?id="+strUser;   
        // var page=inp;
        // window.alert(page);
        $('#modalContentBody').load(page);
    }
    
    function sendAddData()
	{
		var postData = $('#choosePasien').serializeArray();
			var formURL = "kb_addmodal_content.php";
			$.ajax(
			{
				url : formURL,
				type: "POST",
				data : postData,
				success:function(r) 
				{
					$('#modalContentBody').load(r);
				},
				error: function(jqXHR, textStatus, errorThrown) 
				{
					window.alert("Failed to load server");     
				}
			});
	}
</script>
<?php include 'footer.php'; ?>        