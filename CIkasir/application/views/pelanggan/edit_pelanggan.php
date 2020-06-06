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
            echo form_open('pelanggan/update') ?>

              <div class="form-group">
                <label for="text">Id Pelanggan</label>
                <input type="int" name="id_pelanggan"value="<?php echo $data_pelanggan->id_pelanggan ?>" class="form-control" placeholder="Masukkan id pelanggan">
                <input type="hidden" value="<?php echo $data_pelanggan->id_pelanggan ?>" name="id_pelanggan">
              </div>

              <div class="form-group">
                <label for="text">Nama Pelanggan</label>
                <input type="text" name="nama_pelanggan" value="<?php echo $data_pelanggan->nama_pelanggan ?>" class="form-control" placeholder="Masukkan Nama pelanggan">
              </div>

              <div class="form-group">
                <label for="text">Alamat Pelanggan</label>
                <input type="text" name="alamat" value="<?php echo $data_pelanggan->alamat ?>" class="form-control" placeholder="Masukkan alamat pelanggan">
              </div>

              <div class="form-group">
                <label for="text">No HP</label>
                <input type="int" name="no_hp" value="<?php echo $data_pelanggan->no_hp ?>" class="form-control" placeholder="Masukkan No HP pelanggan">
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