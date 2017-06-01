<?php
    if(isset($_SESSION['LAST_ACTIVITY'])&&(time()-$_SESSION['LAST_ACTIVITY']>1800)){
        session_destroy();
    }
    $_SESSION['LAST_ACTIVITY']=time();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cart and Order - W Store Indonesia</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="<?php echo base_url()?>assets/css/agency.min.css" rel="stylesheet">

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="/tokoNita">W Store Indonesia</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/tokoNita/#portfolio">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Cart</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Order</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/tokoNita/#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/tokoNita/#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <section id="services" style="background-color: whitesmoke">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">CART</h2>
                    <h3 class="section-subheading text-muted">Your wish list.</h3>
                </div>
                <div class="container">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Nama Produk</th>
                        <th>Tipe Produk</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $bayar = 0;
                $itembeli = "";
                foreach ($cart as $item) { 
                    $bayar = $bayar + ($item['hargaproduk'] * $item['jumlahbeli']); 
                    $itembeli = $itembeli.$item['namaproduk']." ".$item['tipeproduk'].", ";?>
                  <tr>
                    <td><?php echo $item['namaproduk']?></td>
                    <td><?php echo $item['tipeproduk']?></td>
                    <td><?php echo $item['jumlahbeli']?></td>
                    <td><?php echo $item['hargaproduk']?></td>
                    <td><a href="<?php echo site_url();?>/deletecart/<?php echo $item['produk_id']?>"><img src="<?php echo base_url();?>assets/img/trash.png" style="width: 20px; height: auto;"></td>
                </tr>
                <?php } ?>
            </tbody>
        </table><br><br>
        <p style="font-size: 16px; text-align: right; color: gray">TOTAL BELANJA</p>
        <p style="font-size: 22px; text-align: right; color: orange;">Rp <strong><?php echo $bayar ?></strong></p>
    </div>
</div>

</div>

</div>
</section>

<section id="about">
    <div class="row">
        <div class="container">

            <fieldset class="col-md-6">
                <?php echo form_open_multipart('admin/orderc');?>
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="font-size: 28px">How To Order</h2>
                </div>
                <div class="col-md-6">
                    <p class="required text">
                        <label for="name">Nama Depan *</label><br>
                        <input data-dpmaxz-eid="7" id="namadepan" name="namadepan" type="text" class="form-control">
                        <input type="text" name="no_order" value="<?php echo time();?>" hidden />
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="required text">
                        <label for="name">Nama Belakang *</label><br>
                        <input data-dpmaxz-eid="7" id="namabelakang" name="namabelakang" type="text" class="form-control">
                    </p>
                </div>
                <div class="col-md-12">
                    <p class="required text">
                        <label for="name">Alamat Lengkap *</label><br>
                        <input data-dpmaxz-eid="7" id="alamat" name="alamat" type="text" class="form-control">
                    </p>
                </div>
                <div class="col-md-4">
                    <p class="required text">
                        <label for="name">Kota / Kabupaten *</label><br>
                        <input data-dpmaxz-eid="7" id="kota" name="kota" type="text" class="form-control">
                    </p>
                </div>
                <div class="col-md-4">
                    <p class="required text">
                        <label for="name">Kecamatan *</label><br>
                        <input data-dpmaxz-eid="7" id="kecamatan" name="kecamatan" type="text" class="form-control">
                    </p>
                </div>
                <div class="col-md-4">
                    <p class="required text">
                        <label for="name">Kelurahan *</label><br>
                        <input data-dpmaxz-eid="7" id="kelurahan" name="kelurahan" type="text" class="form-control">
                    </p>
                </div>
                <div class="col-md-8">
                    <p class="required text">
                        <label for="name">Provinsi *</label><br>
                        <input data-dpmaxz-eid="7" id="provinsi" name="provinsi" type="text" class="form-control">
                    </p>
                </div>
                <div class="col-md-4">
                    <p class="required text">
                        <label for="name">Kode Pos *</label><br>
                        <input data-dpmaxz-eid="7" id="kodepos" name="kodepos" type="text" class="form-control">
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="required text">
                        <label for="telfon">Nomor Telfon *</label><br>
                        <input data-dpmaxz-eid="6" id="telfon" name="telfon" type="text" class="form-control">
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="required text">
                        <label for="telfon">Alamat Email *</label><br>
                        <input data-dpmaxz-eid="6" id="email" name="email" type="email" class="form-control">
                    </p>
                </div>
                <div class="col-md-12">
                    <p class="textarea">
                        <label for="order">Notes</label><br>
                        <textarea cols="10" id="notes" name="notes" rows="5" class="form-control"></textarea>
                    </p>
                </div>
                <div class="col-md-12">
                    <p class="submit" style="float: right;">
                        <input type="hidden" name="is_submit" value="1" />
                        <input type="hidden" name="totalpembayaran" value="<?php echo $bayar;?>" />
                        <input type="hidden" name="pesanan" value="<?php echo $itembeli;?>" />
                        <input data-dpmaxz-eid="11" name="submitPayment" id="submitPayment" value="Buy Items" class="btn btn-basic" type="submit">
                    </p>
                </div>
                <?php echo form_close();?>
            </fieldset>


            <!--Row yang Kanan / Payment Confirmation-->

            <fieldset class="col-md-6">
                <?php echo form_open('admin/confirmc');?>
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="font-size: 28px">Payment Confirmation</h2>
                </div>
                <div class="col-md-12">
                    <p class="required text">
                        <label for="id_order">Nomor Order *</label><br>
                        <input data-dpmaxz-eid="5" id="no_order" name="no_order" type="text" class="form-control">
                    </p>
                </div>
                <div class="col-md-12">
                    <p class="required text">
                        <label for="amount">Total Pembayaran (IDR) *</label><br>
                        <input data-dpmaxz-eid="8" id="totalpembayaran" name="totalpembayaran" placeholder="ex. 50000" type="text" class="form-control">
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="text">
                        <label for="payment_method">Metode Pembayaran *</label><br>
                        <select data-dpmaxz-eid="10" id="metodepembayaran" name="metodepembayaran" class="form-control">Array
                            <option selected="selected" value="Bank BCA">Bank BCA</option>
                            <option value="Bank Mandiri">Bank Mandiri</option>
                            <option value="Bank BNI">Bank BNI</option>
                            <option value="Bank BRI">Bank BRI</option>
                        </select>
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="required text">
                        <label for="date">Tanggal/Waktu *</label>
                        <input data-dpmaxz-eid="9" name="waktupembayaran" id="waktupembayaran" placeholder="YYYY-MM-DD" type="date" class="form-control">
                    </p>
                </div>
                <div class="col-md-12">
                    <p class="submit" style="float: right;">
                        <input type="hidden" name="is_submit" value="1" />
                        <input data-dpmaxz-eid="11" name="submitPayment" id="submitPayment" value="Confirm" class="btn btn-basic" type="submit">
                    </p>
                </div>
                <?php echo form_close();?>
            </fieldset>
            
        </div>
    </div>

</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; W Store Indonesia 2016</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="https://www.instagram.com/wstore.id/"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li><a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li><a href="#">Privacy Policy</a>
                    </li>
                    <li><a href="#">Terms of Use</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

<!-- Contact Form JavaScript -->
<script src="<?php echo base_url()?>assets/js/jqBootstrapValidation.js"></script>
<script src="<?php echo base_url()?>assets/js/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="<?php echo base_url()?>assets/js/agency.min.js"></script>

</body>

</html>
