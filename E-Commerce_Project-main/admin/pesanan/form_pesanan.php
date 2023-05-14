<?php 
require_once '../dbkoneksi.php';
?>

<form method="POST" action="proses_pesanan.php" style="margin: 1em 0em 0em 6em">
  <h2>Order Here!</h2 style="margin-bottom: 1em;">
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Date</label> 
    <div class="col-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="tanggal" name="tanggal" type="date" class="form-control" 
        value="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="produk_id" class="col-4 col-form-label">Product</label> 
    <div class="col-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div> 
        <input id="produk_id" name="produk_id" 
        value="" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="quantity" class="col-4 col-form-label">Quantity</label> 
    <div class="col-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="quantity" name="quantity" type="text" class="form-control"
        value="">
      </div>
    </div>
  </div>
  
  <div class="form-group row">
    <div class="offset-4 col-6">
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="Simpan"/>
    </div>
</form>
</table>
</div>
</body>
</html>