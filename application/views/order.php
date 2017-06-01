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
            <h1 class="page-header">List Pesanan</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Daftar pesanan pembeli dari website
                </div>
                <div class="panel-body">
                    <div class="row">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Nomor Order</th>
                            <th>Nama Lengkap</th>
                            <th>Alamat</th>
                            <th>Nomor HP</th>
                            <th>Alamat Email</th>
                            <th>Pesanan</th>
                            <th>Total Pembayaran</th>
                            <th>Notes</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($order as $new_item) { ?>
                      <tr>
                          <td><?php echo $new_item['no_order'];?></td>
                          <td><?php echo $new_item['namadepan'] ." ". $new_item['namabelakang'];?></td>
                          <td><?php echo $new_item['alamat'] .", ". $new_item['kecamatan'] .", ". $new_item['kelurahan'] .", ". $new_item['kota'] .", ". $new_item['provinsi'] .", ". $new_item['kodepos'];?></td>
                          <td><?php echo $new_item['telfon'];?></td>
                          <td><?php echo $new_item['email'];?></td>
                          <td><?php echo $new_item['pesanan'];?></td>
                          <td><?php echo $new_item['totalpembayaran'];?></td>
                          <td><?php echo $new_item['notes'];?></td>
                          <td><a href="<?php echo site_url()."/deleteorder/".$new_item['no_order'];?>"><img src="<?php echo base_url();?>assets/img/done.png" style="width: 20px; height: auto;"></td>
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
<script type="text/javascript">document.close();</script>
</body>
</html>