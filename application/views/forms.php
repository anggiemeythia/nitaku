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
                    <a class="navbar-brand" href="index.html">W Store Indonesia</a>
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
                <h1 class="page-header">Tambah Produk</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Isi form dibawah ini dengan lengkap!
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <?php echo form_open_multipart('admin/create');?>
                                    <div class="form-group">
                                        <label>Produk ID</label>
                                        <input class="form-control" placeholder="Masukkan ID" name="produk_id">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Produk</label>
                                        <input class="form-control" placeholder="Masukkan Nama" name="namaproduk">
                                    </div>
                                    <div class="form-group">
                                        <label>Tipe Produk</label>
                                        <input class="form-control" placeholder="Masukkan Tipe" name="tipeproduk">
                                    </div>
                                    <div class="form-group">
                                        <label>Foto Produk</label>
                                        <input type="file" name="userfile">
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan Produk</label>
                                        <textarea class="form-control" rows="3" name="keteranganproduk"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah Stock</label>
                                        <input class="form-control" placeholder="Masukkan Jumlah" name="jumlahstock">
                                    </div>
                                    <label>Harga Produk</label>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Rp</span>
                                        <input type="text" class="form-control" name="hargaproduk">
                                        <span class="input-group-addon">.00</span>
                                    </div>
                                    <input type="hidden" name="is_submit" value="1" />
                                    <button type="submit" class="btn btn-default">Simpan</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                                <?php echo form_close();?>
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
