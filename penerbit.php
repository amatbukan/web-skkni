<!DOCTYPE html>
<?php
include "koneksi.php";
include "atas.php";
include "menu.php";
?>     
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Data Penerbit</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Penerbit</a></li>
              <!--<li class="breadcrumb-item active">Buku</li>-->
            </ul>
          </div>
          <section>   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Data Penerbit</h3>
                    </div>
                    <div class="card-body">
<?php
if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
	echo pesan_benar($_SESSION['pesan']);
}
unset($_SESSION['pesan']);
$_SESSION['pesan'] = '';
if (isset($_SESSION['pesan_salah']) && $_SESSION['pesan_salah'] <> '') {
	echo pesan_salah($_SESSION['pesan_salah']);
}
unset($_SESSION['pesan_salah']);
?>

					<span class="form-group pull-right">
					<a href="tp" class="btn btn-primary btn-sm"><span class="fa fa-plus"></span> Tambah</a>
					</span>
                      <div class="box-body table-responsive">
                        <table id="modif" class="table table-hover table-striped table-bordered" style="width:100%">
                          <thead>
                            <tr align="center">
                              <!--<th>#</th>-->
                              <th>ID Penerbit</th>
                              <th>Nama Penerbit</th>
                              <th>Negara</th>
                              <th>Kota</th>
                              <th width="50px">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
<?php
$no=1;
$qO=mysql_query("SELECT * FROM penerbit ORDER BY penerbit_id ASC");
while($rO=mysql_fetch_object($qO)) {
?>
                            <tr>
							  <!--<td align="center"><?=$no;?></td>-->
                              <td align="center"><?=$rO->penerbit_id;?></td>
                              <td align="center"><?=$rO->penerbit_nama; ?></span></a></td>
                              <td align="center"><?=$rO->penerbit_negara;?></td>
                              <td align="center"><?=$rO->penerbit_kota;?></td>
							  <td align="center">
								<a href="ep?id=<?=$rO->penerbit_id;?>" class="btn btn-sm btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Ubah Data Penerbit"><span class="fa fa-edit"></span></a></span></a>
								<a href="dp?id=<?=$rO->penerbit_id;?>" class="btn btn-sm btn-danger" onclick="return confirm('Data Penerbit [<?=$rO->penerbit_nama;?>] akan dihapus?')" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Hapus Data Penerbit"><span class="fa fa-trash"></span></a>
							</td>
                            </tr>
<?php
$no++;
}
?>	
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </section>
<?php
include "bawah.php";
?>          