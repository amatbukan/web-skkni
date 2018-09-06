<?php
include "koneksi.php";
include "atas.php";
include "menu.php";

$id = $_GET['id'];
$q = mysql_query("SELECT * FROM buku WHERE buku_id='$id'");
$r = mysql_fetch_object($q);
?>       
	<div class="content-inner">
	  <!-- Page Header-->
	  <header class="page-header">
		<div class="container-fluid">
		  <h2 class="no-margin-bottom">Buku</h2>
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
                      <h3 class="h4">Edit Data Buku</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="ub.php">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">ID Buku</label>
                          <div class="col-sm-9">
                            <input type="text" name="buku_id" class="form-control" placeholder="ID Buku" maxlength="6" autofocus required readonly="readonly" value="<?php echo $r->buku_id;?>">
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
	$sel2=($r->buku_kategori==$rO->kategori_id)?'selected':'';
?>
                              <option value="<?=$rO->kategori_id;?>" <?=$sel2;?>><?=$rO->kategori_nama;?></option>
							<?php
							}
							?>
                            </select>
                          </div>
                        </div>                       
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Nama Buku</label>
                          <div class="col-sm-9">
                            <input type="text" name="buku_nama"class="form-control" placeholder="Nama Buku" autofocus value="<?php echo $r->buku_nama;?>" required>
                          </div>
                        </div>								
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Pengarang Buku</label>
                          <div class="col-sm-9">
                            <input type="text" name="buku_pengarang" class="form-control" placeholder="Pengarang Buku" value="<?php echo $r->buku_pengarang;?>" required>
                          </div>
                        </div>						
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Harga</label>
                          <div class="col-sm-9">
                            <input type="text" id="uang" name="buku_harga" class="form-control" placeholder="Harga Buku" onkeypress="return hanyaAngka(event)" value="<?php echo $r->buku_harga;?>" required>
                          </div>
                        </div> 
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Stok</label>
                          <div class="col-sm-9">
                            <input type="text" name="buku_stok" class="form-control" placeholder="Stok" onkeypress="return hanyaAngka(event)" maxlength="3" value="<?php echo $r->buku_stok;?>" required>
                          </div>
                        </div>						 					
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Penerbit</label>
                          <div class="col-sm-9">
                            <select name="penerbit_id" class="form-control mb-3" required>
                              <option value="">-- Pilih Penerbit --</option>
<?php
	$qO=mysql_query("SELECT * FROM penerbit") or die(mysql_error());
	while($rO=mysql_fetch_object($qO)) {
	$sel=($r->penerbit_id==$rO->penerbit_id)?'selected':'';
?>
                              <option value="<?=$rO->penerbit_id;?>" <?=$sel;?>><?=$rO->penerbit_nama;?></option>
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
                            <button type="submit" name="simpan" class="btn btn-primary">Ubah</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
<?php
include "bawah.php";
?>