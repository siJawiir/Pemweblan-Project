<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container" style="margin-top: 80px">
        <div class="col-md-12">
            <?php 
             $this->load->helper('form');
            echo form_open('transaksi/update') ?>

              <div class="form-group">
                <label for="text">id transaksi</label>
                <input type="int" name="id_transaksi"value="<?php echo $data_transaksi->id_transaksi ?>" class="form-control" placeholder="Masukkan id transaksi">
                <input type="hidden" value="<?php echo $data_transaksi->id_transaksi ?>" name="id_transaksi">
              </div>

              <div class="form-group">
                <label for="text">tanggal transaksi</label>
                <input type="date" name="tgl_transaksi" value="<?php echo $data_transaksi->tgl_transaksi ?>" class="form-control" placeholder="Masukkan tanggal transaksi">
              </div>

              <div class="form-group">
                <label for="text">nama menu</label>
                <input type="text" name="nama_menu" value="<?php echo $data_transaksi->nama_menu ?>" class="form-control" >
              </div>

              <div class="form-group">
                <label for="text">total harga</label>
                <input type="text" name="total_harga" value="<?php echo $data_transaksi->total_harga ?>" class="form-control" >
              </div>

              <div class="form-group">
                <label for="text">id_kasir</label>
                <input type="text" name="id_kasir" value="<?php echo $data_transaksi->id_kasir ?>" class="form-control" >
              </div>

              <div class="form-group">
                <label for="text">id_pelanggan</label>
                <input type="text" name="id_pelanggan" value="<?php echo $data_transaksi->id_pelanggan ?>" class="form-control" >
              </div>

              <button type="submit" class="btn btn-md btn-success">Update</button>
              <button type="reset" class="btn btn-md btn-warning">reset</button>
            <?php echo form_close() ?>
        </div>
    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>