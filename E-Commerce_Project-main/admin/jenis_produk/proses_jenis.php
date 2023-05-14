<?php 
    require_once "../dbkoneksi.php";
    require_once "../layouts/header.php";
    require_once "../layouts/menu.php";
    
    
?>


<?php 
   $sql = "SELECT * FROM jenis_produk";
   $rs = $dbh->query($sql);
?>
<div id="layoutSidenav_content">
    <main>
         <div class="container">
                    <a class="btn btn-success" href="form_jenis.php" role="button" style="margin: 1em 0em 1em 0em;">Create Jenis Produk</a>
                        <table class="table table-bordered" width="100%" border="1" cellspacing="2" cellpadding="2">
                            <thead>
                                <tr class="table-primary text-uppercase">
                                    <th>No</th>
                                    <th>Jenis Produk</th>
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
                        onclick="if(!confirm('Anda Yakin Hapus Data Jenis Produk? <?=$row['jenis_produk']?>?')) {return false}">Delete</a>
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
