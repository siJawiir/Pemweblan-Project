<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
   
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>

    <div class="container" style="margin-top: 80px">
        <?php echo $this->session->flashdata('notif') ?>
        <a href="<?php echo base_url() ?>user/" class="btn btn-md btn-success">HOME</a>
        <a href="<?php echo base_url() ?>menu/tambah/" class="btn btn-md btn-warning">Tambah menu</a>
        <hr>
        <!-- table -->
        <div class="table-responsive">
            <table id="table" class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>id menu</th>
                    <th>nama menu</th>
                    <th>harga menu</th>
                    <th>id jenis</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                    $no = 1; 
                    foreach($data_menu as $hasil){ 
                ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $hasil->id_menu ?></td>
                    <td><?php echo $hasil->nama_menu ?></td>
                    <td><?php echo $hasil->harga_menu ?></td>
                    <td><?php echo $hasil->id_jenis ?></td>
                    <td>
                        <a href="<?php echo base_url() ?>menu/edit/<?php echo $hasil->id_menu ?>" class="btn btn-sm btn-success">Edit</a>
                        <a href="<?php echo base_url() ?>menu/hapus/<?php echo $hasil->id_menu ?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                  </tr>

                <?php } ?>

                </tbody>
              </table>
        </div>

    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
    $('#table').DataTable( {
    autoFill: true
} );
</script>
</body>
</html>
