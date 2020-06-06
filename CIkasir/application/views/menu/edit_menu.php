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
            echo form_open('menu/update') ?>

              <div class="form-group">
                <label for="text">id menu</label>
                <input type="int" name="id_menu"value="<?php echo $data_menu->id_menu ?>" class="form-control" placeholder="Masukkan id menu">
                <input type="hidden" value="<?php echo $data_menu->id_menu ?>" name="id_menu">
              </div>

              <div class="form-group">
                <label for="text">nama menu</label>
                <input type="text" name="nama_menu" value="<?php echo $data_menu->nama_menu ?>" class="form-control" >
              </div>

              <div class="form-group">
                <label for="text">harga menu</label>
                <input type="date" name="harga_menu" value="<?php echo $data_menu->harga_menu ?>" class="form-control" placeholder="Masukkan harga menu">
              </div>           

              <div class="form-group">
                <label for="text">id jenis</label>
                <input type="text" name="id_jenis" value="<?php echo $data_menu->id_jenis ?>" class="form-control" >
              </div>

              <button type="submit" class="btn btn-md btn-success">Update</button>
              <button type="reset" class="btn btn-md btn-warning">reset</button>
              <a href="<?= base_url('menu'); ?>" class="btn btn-md btn-success">Back</a>
            <?php echo form_close() ?>
        </div>
    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>