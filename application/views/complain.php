<?php 
if(!isset($_SESSION["user"])){
  redirect(site_url()."/login");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Halaman Admin - W Store Indonesia</title>
  <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/dist/css/sb-admin-2.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">W Store Indonesia</a>
      </div>
    </li>
  </ul>
  <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
      <ul class="nav" id="side-menu">
        <li>
          <a href="<?php echo site_url('admin/orderr')?>"><i class="fa fa-dashboard fa-fw"></i> Tabel Pesanan</a>
        </li>
        <li>
          <a href="<?php echo site_url('admin/confirmr')?>"><i class="fa fa-edit fa-fw"></i> Konfirmasi Pembayaran</a>
        </li>
        <li>
          <a href="<?php echo site_url('admin/read')?>"><i class="fa fa-table fa-fw"></i> List Produk</a>
        </li>
        <li>
          <a href="<?php echo site_url('admin/create')?>"><i class="fa fa-edit fa-fw"></i> Tambah Produk</a>
        </li>
        <li>
          <a href="<?php echo site_url('admin/history')?>"><i class="fa fa-table fa-fw"></i> History Pembelian</a>
        </li>
        <li>
        <a href="<?php echo site_url('admin/complainr')?>"><i class="fa fa-edit fa-fw"></i> Komplain Pelanggan</a>
        </li>
        <li>
          <a href="<?php echo site_url('logout')?>"><button type="button" class="btn btn-danger">Log Out</button></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Komplain Pelanggan</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          Daftar komplain pelanggan dari website
        </div>
        <div class="panel-body">
          <div class="row">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Nama Pelanggan</th>
                  <th>Email Pelanggan</th>
                  <th>Telfon Pelanggan</th>
                  <th>Komplain Pelanggan</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($complain as $new_item) { ?>
                <tr>
                  <td><?php echo $new_item['custname'];?></td>
                  <td><?php echo $new_item['custemail'];?></td>
                  <td><?php echo $new_item['custphone'];?></td>
                  <td><?php echo $new_item['custmsg'];?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/vendor/metisMenu/metisMenu.min.js"></script>
<script src="<?php echo base_url()?>assets/dist/js/sb-admin-2.js"></script>
</body>
</html>