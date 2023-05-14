<?php 
    require_once "../dbkoneksi.php";
    require_once "../layouts/header.php";
    require_once "../layouts/menu.php";
    
    
?>
<?php 
   $sql = "SELECT * FROM jenis_produk";
   $rs = $dbh->query($sql);
?>

<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                            <a class="nav-link" href="../index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                             <!-- <div class="sb-sidenav-menu-heading">Interface</div> -->
                             <a class="nav-link"  href="../produk/list_produk.php" aria-expanded="false">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Produk
                                <!-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
                            </a>
                            <a class="nav-link" href="../jenis_produk/list_jenis.php" aria-expanded="false">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Jenis Produk
                                <!-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
                            </a>
                            <a class="nav-link"  href="../pesanan/list_pesanan.php" aria-expanded="false" style="margin-bottom: 18.5em;">
                                <div class="sb-nav-link-icon"><i class="fas fa-table me-1"></i></div>
                                Daftar Pesanan
                                <!-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
                            </a>
                             <!-- <br><br><br><br><br><br><br><br><br><br> -->
                             <div class="sb-sidenav-footer">
                                <a class="nav-link"  href="../../main/index.html">
                                        <i class="fas fa-arrow-left"></i>
                                    Back Landing Page
                                </a>
                            </div>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                </nav>
            </div>
            

<div id="layoutSidenav_content">
    <main>
         <div class="container">
                    <a class="btn btn-success" href="form_jenis.php" role="button" style="margin: 1em 0em 1em 0em;">Create Jenis Produk</a>
                        <table class="table table-hover table-bordered" width="100%" border="1" cellspacing="2" cellpadding="2">
                            <thead>
                                <tr class="table-primary text-uppercase">
                                    <th>No</th>
                                    <th>Jenis Product</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $nomor  =1 ;
                                foreach($rs as $row){
                                ?>
                                    <tr>
                                        <td><?=$nomor?></td>
                                        <td><?=$row['jenis_produk']?></td>
                                        <td>
                        <a class="btn btn-warning" href="edit_jenis.php?idedit=<?=$row['id']?>">Edit</a>
                        <a class="btn btn-danger" href="delete_jenis.php?iddel=<?=$row['id']?>"
                        onclick="if(!confirm('Anda Yakin Hapus Jenis Produk? <?=$row['jenis_produk']?>?')) {return false}">Delete</a>
                        </td>
                                    </tr>
                                <?php 
                                $nomor++;   
                                } 
                                ?>
                            </tbody>
                        </table>  
                        </div>
         </div>
    </main>
</div>

<?php require_once "../layouts/footer.php";?>
