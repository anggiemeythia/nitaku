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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Halaman Admin - W Store Indonesia</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url()?>assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">W Store Indonesia</a>
                </div>
                <!-- /.navbar-header -->
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->
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
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">List Produk</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Daftar produk yang ada di website
                    </div>
                    <div class="panel-body">
                        <div class="row">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                  <th>Produk ID</th>
                                  <th>Nama Produk</th>
                                  <th>Tipe Produk</th>
                                  <th>Foto Produk</th>
                                  <th>Keterangan</th>
                                  <th>Jumlah Stock</th>
                                  <th>Harga Produk</th>
                              </tr>
                          </thead>
                          
                          <tbody>
                            <?php foreach ($produk as $new_item) { ?>
                            <tr>
                            <?php echo form_open('admin/updateStock/'.$new_item['produk_id']);?>
                                <td><?php echo $new_item['produk_id'];?><input type="text" name="produk_id" value="<?php echo $new_item['produk_id'];?>" hidden /></td>
                                <td><?php echo $new_item['namaproduk'];?></td>
                                <td><?php echo $new_item['tipeproduk'];?></td>
                                <td><img src="<?php echo base_url()."/uploads/".$new_item['fotoproduk']; ?>" width="150px" height="150px"></td>
                                <td><?php echo $new_item['keteranganproduk'];?></td>
                                <td><input type="hidden" name="is_submit" value="1" />
                                <input type="number" name="jumlahstock" value="<?php echo $new_item['jumlahstock'];?>">
                                <input data-dpmaxz-eid="11" name="updateStock" id="updateStock" value="Update" class="btn btn-basic" type="submit" style="margin-top: 10px;"></td>
                                <td><?php echo $new_item['hargaproduk'];?></td>
                                <?php echo form_close();?>
                            </tr>
                            <?php } ?>
                        </tbody>

                        
                    </table>
                </div>
            </div>
            <!-- /.row (nested) -->
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url()?>assets/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url()?>assets/dist/js/sb-admin-2.js"></script>

</body>

</html>
