<?php
include "koneksi.php";
include "atas.php";
include "menu.php";
?>       
	<div class="content-inner">
	  <!-- Page Header-->
	  <header class="page-header">
		<div class="container-fluid">
		  <h2 class="no-margin-bottom">Guru</h2>
		</div>
		
	  </header>
	  <!-- Breadcrumb-->
	  <div class="breadcrumb-holder container-fluid">
		<ul class="breadcrumb">
		  <li class="breadcrumb-item"><a href="#">Penerbit</a></li>
		</ul>
	  </div>
	                  <!-- Form Elements -->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Tambah Data Penerbit</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="sp.php">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">ID Penerbit</label>
                          <div class="col-sm-9">
                            <input type="text" id="penerbit_id" name="penerbit_id" class="form-control" placeholder="ID Penerbit" maxlength="4" autofocus required><small class="help-block-none" id="pesan"></small>
                          </div>  
                        </div>  
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Nama Penerbit</label>
                          <div class="col-sm-9">
                            <input type="text" name="penerbit_nama" class="form-control" placeholder="Nama Penerbit" required>
                          </div>
                        </div>								
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Negara</label>
                          <div class="col-sm-9">
                            <input type="text" name="penerbit_negara" class="form-control" placeholder="Negara Penerbit" required>
                          </div>
                        </div>						
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Kota</label>
                          <div class="col-sm-9">
                            <input type="text" name="penerbit_kota" class="form-control" placeholder="Kota Penerbit" required>
                          </div>
                        </div> 
                    </div>
                      <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <a href="penerbit" type="submit" class="btn btn-secondary">Kembali</a>
                            <button id="x" type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
<?php
include "bawah.php";
?>
<script>
$(document).ready(function(){
	$('#penerbit_id').blur(function(){
		var penerbit_id = $(this).val();

		$.ajax({
			type	: 'POST',
			url 	: 'pros2.php',
			data 	: 'penerbit_id='+penerbit_id,
			success	: function(data){
				if(data==0){
				$("#pesan").html(data);
				$( "#x" ).prop( "disabled", false );
				}
				else{
					$("#pesan").html(data);
					$( "#x" ).prop( "disabled", true );
				}
			}
		})

	});
});
</script>