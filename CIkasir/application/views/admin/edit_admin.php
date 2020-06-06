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
            echo form_open('admin/update') ?>

              <div class="form-group">
                <label for="text">id_admin</label>
                <input type="int" name="id_admin"value="<?php echo $data_admin->id_admin ?>" class="form-control" placeholder="Masukkan ID Admin">
                <input type="hidden" value="<?php echo $data_admin->id_admin ?>" name="id_admin">
              </div>

              <div class="form-group">
                <label for="text">username</label>
                <input type="int" name="username" value="<?php echo $data_admin->username ?>" class="form-control" placeholder="Masukkan Username">
              </div>

              <div class="form-group">
                <label for="text">email</label>
                <input type="int" name="email" value="<?php echo $data_admin->email ?>" class="form-control" >
              </div>

              <div class="form-group">
                <label for="text">password</label>
                <input type="text" name="password" value="<?php echo $data_admin->password ?>" class="form-control" >
              </div>

              <button type="submit" class="btn btn-md btn-success">Update</button>
              <button type="reset" class="btn btn-md btn-warning">Reset</button>
              <a href="<?= base_url('admin'); ?>" class="btn btn-md btn-success">Back</a>
            <?php echo form_close() ?>
        </div>
    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>