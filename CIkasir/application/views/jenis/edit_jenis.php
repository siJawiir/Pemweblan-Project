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
            echo form_open('jenis/update') ?>

              <div class="form-group">
                <label for="text">Id Jenis</label>
                <input type="int" name="id_jenis"value="<?php echo $data_jenis->id_jenis ?>" class="form-control" placeholder="Masukkan id jenis">
                <input type="hidden" value="<?php echo $data_jenis->id_jenis ?>" name="id_jenis">
              </div>

              <div class="form-group">
                <label for="text">Nama Jenis</label>
                <input type="text" name="nama_jenis" value="<?php echo $data_jenis->nama_jenis ?>" class="form-control" placeholder="Masukkan Nama Jenis">
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