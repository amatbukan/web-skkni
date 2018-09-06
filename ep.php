<?php
include "koneksi.php";
include "atas.php";
include "menu.php";

$id = $_GET['id'];
$q = mysql_query("SELECT * FROM penerbit WHERE penerbit_id='$id'");
$r = mysql_fetch_object($q);
?>       
	<div class="content-inner">
	  <!-- Page Header-->
	  <header class="page-header">
		<div class="container-fluid">
		  <h2 class="no-margin-bottom">Penerbit</h2>
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
                      <h3 class="h4">Edit Data Penerbit</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="up.php">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">ID Penerbit</label>
                          <div class="col-sm-9">
                            <input type="text" name="penerbit_id" class="form-control" placeholder="ID Penerbit" maxlength="4" autofocus required readonly="readonly" value="<?php echo $r->penerbit_id;?>">
                          </div>  
                        </div>  
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Nama Penerbit</label>
                          <div class="col-sm-9">
                            <input type="text" name="penerbit_nama" class="form-control" placeholder="Nama Penerbit" value="<?php echo $r->penerbit_nama;?>" required>
                          </div>
                        </div>								
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Negara</label>
                          <div class="col-sm-9">
                            <input type="text" name="penerbit_negara" class="form-control" placeholder="Negara Penerbit" value="<?php echo $r->penerbit_negara;?>" required>
                          </div>
                        </div>						
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Kota</label>
                          <div class="col-sm-9">
                            <input type="text" name="penerbit_kota" class="form-control" placeholder="Kota Penerbit" value="<?php echo $r->penerbit_kota;?>" required>
                          </div>
                        </div> 
                    </div>
                      <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <a href="penerbit" type="submit" class="btn btn-secondary">Kembali</a>
                            <button id="x" type="submit" name="simpan" class="btn btn-primary">Ubah</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
<?php
include "bawah.php";
?>