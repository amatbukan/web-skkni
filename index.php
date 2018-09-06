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
              <h2 class="no-margin-bottom">Data Buku</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Buku</a></li>
              <!--<li class="breadcrumb-item active">Buku</li>-->
            </ul>
          </div>
          <section>   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Data Buku</h3>
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
					<a href="tb" class="btn btn-primary btn-sm"><span class="fa fa-plus"></span> Tambah</a>
					</span>
                      <div class="box-body table-responsive">
                        <table id="modif" class="table table-hover table-striped table-bordered" style="width:100%">
                          <thead>
                            <tr align="center">
                              <!--<th>#</th>-->
                              <th>ID Buku</th>
                              <th>Kategori</th>
                              <th>Nama Buku</th>
                              <th>Pengarang Buku</th>
                              <th>Harga</th>
                              <th>Stok</th>
                              <th>Penerbit</th>
                              <th width="50px">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
<?php
$no=1;
$qO=mysql_query("SELECT buku.buku_id, buku.buku_nama, kategori.kategori_nama, buku.buku_pengarang, buku.buku_harga, buku.buku_stok, penerbit.penerbit_nama FROM buku, penerbit, kategori WHERE buku.penerbit_id = penerbit.penerbit_id AND buku.buku_kategori = kategori.kategori_id ORDER BY buku_id ASC");
while($rO=mysql_fetch_object($qO)) {

$harga=number_format($rO->buku_harga,0,",",".");
?>
                            <tr>
							  <!--<td align="center"><?=$no;?></td>-->
                              <td align="center"><?=$rO->buku_id;?></td>
                              <td align="center"><?=$rO->kategori_nama; ?></span></a></td>
                              <td align="center"><?=$rO->buku_nama;?></td>
                              <td align="center"><?=$rO->buku_pengarang;?></td>
                              <td align="center"><?=$harga;?></td>
                              <td align="center"><?=$rO->buku_stok;?></td>
                              <td align="center"><?=$rO->penerbit_nama;?></td>
							  <td align="center">
								<a href="eb?id=<?=$rO->buku_id;?>" class="btn btn-sm btn-info" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Ubah Data Buku"><span class="fa fa-edit"></span></a></span></a>
								<a href="db?id=<?=$rO->buku_id;?>" class="btn btn-sm btn-danger" onclick="return confirm('Data Buku [<?=$rO->buku_nama;?>] akan dihapus?')" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Hapus Data Buku"><span class="fa fa-trash"></span></a>
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