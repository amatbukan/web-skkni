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
		  <li class="breadcrumb-item"><a href="index">Buku</a></li>
		</ul>
	  </div>
	                  <!-- Form Elements -->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Tambah Data Buku</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="sb.php">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">ID Buku</label>
                          <div class="col-sm-9">
                            <input type="text" id="buku_id" name="buku_id" class="form-control" placeholder="ID Buku" maxlength="6" autofocus required><small class="help-block-none" id="pesan"></small>
                          </div>
                        </div>
                         <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Kategori</label>
                          <div class="col-sm-9">
                            <select name="buku_kategori" class="form-control mb-3" required>
                              <option value="">-- Pilih Kategori --</option>
<?php
	$qO=mysql_query("SELECT * FROM kategori") or die(mysql_error());
	while($rO=mysql_fetch_object($qO)) {
?>
                              <option value="<?=$rO->kategori_id;?>"><?=$rO->kategori_nama;?></option>
							<?php
							}
							?>
                            </select>
                          </div>
                        </div>                        
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Nama Buku</label>
                          <div class="col-sm-9">
                            <input type="text" name="buku_nama"class="form-control" placeholder="Nama Buku" required>
                          </div>
                        </div>								
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Pengarang Buku</label>
                          <div class="col-sm-9">
                            <input type="text" name="buku_pengarang" class="form-control" placeholder="Pengarang Buku" required>
                          </div>
                        </div>						
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Harga</label>
                          <div class="col-sm-9">
                            <input type="text" id="uang" name="buku_harga" class="form-control" placeholder="Harga Buku" onkeypress="return hanyaAngka(event)" required>
                          </div>
                        </div> 
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Stok</label>
                          <div class="col-sm-9">
                            <input type="text" name="buku_stok" class="form-control" placeholder="Stok" onkeypress="return hanyaAngka(event)" maxlength="3" required>
                          </div>
                        </div>						 					
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Penerbit</label>
                          <div class="col-sm-9">
                            <select name="penerbit_id" class="form-control mb-3" required >
                              <option value="">-- Pilih Penerbit --</option>
<?php
	$qO=mysql_query("SELECT * FROM penerbit") or die(mysql_error());
	while($rO=mysql_fetch_object($qO)) {
?>
                              <option value="<?=$rO->penerbit_id;?>"><?=$rO->penerbit_nama;?></option>
							<?php
							}
							?>
                            </select>
                          </div>
                        </div>
                    </div>
                      <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <a href="index" type="submit" class="btn btn-secondary">Kembali</a>
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
	$('#buku_id').blur(function(){
		var buku_id = $(this).val();

		$.ajax({
			type	: 'POST',
			url 	: 'pros.php',
			data 	: 'buku_id='+buku_id,
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