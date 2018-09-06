
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="assets/tema/img/pic.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h6">Muhammad Maulani</h3>
              <p>Administrator</p>
            </div>
          </div>
<?php
$namaHalaman = $_SERVER['PHP_SELF'];
$namaArray = explode('/',$namaHalaman);
$jumlah = count($namaArray);
$namaHalaman = $namaArray[$jumlah-1];
?>
          <!-- Sidebar Navidation Menus--><span class="heading">Menu</span>
          <ul id="" class="list-unstyled">
                    <li class="<?php echo ($namaHalaman=='index.php')?'active':'';?>"><a href="index"> <i class="icon-home"></i>Data Buku </a></li>
                    <li class="<?php echo ($namaHalaman=='penerbit.php')?'active':'';?>"><a href="penerbit"> <i class="icon-padnote"></i>Data Penerbit </a></li>
                    <!--<li><a href="#a" aria-expanded="false" data-toggle="collapse"> <i class="icon-padnote"></i>Asset</a>
                      <ul id="a" class="collapse list-unstyled ">
                        <li class="<?php echo ($namaHalaman=='guru.php')?'active':'';?>"><a href="guru">Guru</a></li>
                      </ul>
                    </li>-->                    
          </ul>          
        </nav>