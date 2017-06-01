<?php

        if(!isset($_SESSION['user_id'])){
            $user_id = time();
            $this->session->set_userdata(array('user_id'=>$user_id));
        }else{
            $user_id = $this->session->userdata('user_id');
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

    <title>W Store Indonesia</title>

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
                    <a class="navbar-brand page-scroll" href="#page-top">W Store Indonesia</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#portfolio">Gallery</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="<?php echo site_url().'/cart/'.$user_id?>">Cart</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="<?php echo site_url().'/cart/'.$user_id.'#about'?>">Order</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#team">Team</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <!-- Header -->
        <header>
            <div class="container">
                <div class="intro-text">
                    <div class="intro-lead-in">Welcome To Our Store!</div>
                    <div class="intro-heading">SHOP IS THE BEST MEDICINE</div>
                </div>
            </div>
        </header>

        <!-- Services Section -->

        <!-- Portfolio Grid Section -->
        <section id="portfolio" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Gallery</h2>
                        <h3 class="section-subheading text-muted">If you can't stop thinking about it.. buy it.</h3>
                    </div>
                </div>
                <?php foreach ($produk as $new_item) { ?>
                <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="thumbnail">
                        <img src="<?php echo base_url()."/uploads/".$new_item['fotoproduk']; ?>" style="width: 150px; height: 150px;">
                        <div class="caption">
                            <h4 class="pull-right">Rp <?php echo $new_item['hargaproduk'];?></h4>
                            <h5><a href="<?php echo site_url('gallery/'.$new_item['produk_id'])?>"><?php echo substr($new_item['namaproduk']." - ".$new_item['tipeproduk'], 0, 38);
                            if(strlen($new_item['namaproduk']." - ".$new_item['tipeproduk'])>35){
                                echo "...";
                                }?></a>
                            </h5>
                            <p style="font-size: 12px;"><?php echo substr($new_item['keteranganproduk'], 0, 53);
                            if(strlen($new_item['keteranganproduk'])>50){
                                echo '....See more';
                                }?></p>
                            <a href="<?php echo site_url('addtocart/'.$new_item['produk_id']);?>" style="color:red;" target="_blank">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </section>


    <!-- Team Section -->
    <section id="team" style="background-color: #CDCDCD">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Amazing Team</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="team-member">
                        <img src="<?php echo base_url()?>assets/img/team/1.jpg" class="img-responsive img-circle" alt="">
                        <h4>Nita Purida</h4>
                        <p class="text-muted">CEO of W Store Indonesia</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://www.facebook.com/official.NitaPurida"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.instagram.com/nitaprd/"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="https://www.whatsapp.com/"><i class="fa fa-whatsapp"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="team-member">
                        <img src="<?php echo base_url()?>assets/img/team/3.jpg" class="img-responsive img-circle" alt="">
                        <h4>Anggie Meythia</h4>
                        <p class="text-muted">Web Designer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://www.facebook.com/anggiemeythia"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.instagram.com/anggithia/"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="https://www.whatsapp.com/"><i class="fa fa-whatsapp"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Clients Aside -->

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Message to us if you have any questions, critics and suggestions.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <?php echo form_open('admin/complainc');?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="custname" name="custname" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="custemail" name="custemail" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="custphone" name="custphone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="custmsg" name="custmsg" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <input type="hidden" name="is_submit" value="1" />
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    <?php echo form_close();?>
                </div>
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
