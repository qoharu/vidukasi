<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>VIDUKASI - Landing Page</title>
    <link href=" <?php echo base_url('assets/css/bootstrap.min.css'); ?> " rel="stylesheet">
    <link href=" <?php echo base_url('assets/css/animate.min.css'); ?> " rel="stylesheet">
    <link href=" <?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?> " rel="stylesheet">
    <link href=" <?php echo base_url('assets/css/style_home.css') ?> " rel="stylesheet">
</head>
<body id="page-top">
<div class="navbar-wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">VIDUKASI</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="page-scroll" href="#page-top">Home</a></li>
                        <li><a class="page-scroll" href="#partner">Partner</a></li>
                        <li><a class="page-scroll" href="#popular">Video</a></li>
                        <li><a class="page-scroll" href="#team">Team</a></li>
                        <li><a class="page-scroll" href="#contact">Contact</a></li>
                        <li><a class="page-scroll" href="<?php echo site_url('login') ?>">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
</div>
<div id="inSlider" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="col-sm-12 carousel-caption blank">
                    <center><h1>Temui Guru Keduamu</h1>
                    <p>Belajar sungguh-sungguh, dari jauh</p>
                    <p><button class="btn btn-lg btn-primary" data-toggle="modal" data-target="#modalgrade" role="button">Yuk Belajar!</button></p></center>
                </div> 
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back two"></div>
        </div>
    </div>
</div>


<section id="partner" class="container services">
    <div class="row">
        <div class="col-sm-3">
            <h2>Sponsor 1</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
            <p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>
        </div>
        <div class="col-sm-3">
            <h2>Sponsor 2</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
            <p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>
        </div>
        <div class="col-sm-3">
            <h2>Sponsor 3</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
            <p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>
        </div>
        <div class="col-sm-3">
            <h2>Sponsor 4</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
            <p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>
        </div>
    </div>
</section>

<section id="popular" class="container features">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="navy-line"></div>
            <h1>Video Populer</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <img src="<?php echo base_url('assets/img/video-thumbnail.jpg') ?>">            
        </div>
        <div class="col-lg-4">
            <img src="<?php echo base_url('assets/img/video-thumbnail.jpg') ?>">            
        </div>
        <div class="col-lg-4">
            <img src="<?php echo base_url('assets/img/video-thumbnail.jpg') ?>">            
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-4">
            <img src="<?php echo base_url('assets/img/video-thumbnail.jpg') ?>">            
        </div>
        <div class="col-lg-4">
            <img src="<?php echo base_url('assets/img/video-thumbnail.jpg') ?>">            
        </div>
        <div class="col-lg-4">
            <img src="<?php echo base_url('assets/img/video-thumbnail.jpg') ?>">            
        </div>
    </div>
</section>

<section id="team" class="team">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Our Team</h1>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 wow fadeInLeft">
                <div class="team-member">
                    <img src="<?php echo base_url('assets/img/avatar3.jpg') ?>" class="img-responsive img-circle" alt="">
                    <h4><span class="navy">Nurul</span> Aisyah</h4>
                    <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus. </p>
                    <ul class="list-inline social-icon">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="team-member wow zoomIn">
                    <img src="<?php echo base_url('assets/img/avatar3.jpg') ?>" class="img-responsive img-circle" alt="">
                    <h4><span class="navy">Nana</span> Ramadhewi</h4>
                    <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.</p>
                    <ul class="list-inline social-icon">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="team-member wow zoomIn">
                    <img src="<?php echo base_url('assets/img/avatar1.jpg') ?> " class="img-responsive img-circle" alt="">
                    <h4>Muhammad <span class="navy">Salman</span></h4>
                    <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.</p>
                    <ul class="list-inline social-icon">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 wow fadeInRight">
                <div class="team-member">
                    <img src="<?php echo base_url('assets/img/avatar2.jpg') ?> " class="img-responsive img-circle" alt="">
                    <h4><span class="navy">Habib</span> Fikri</h4>
                    <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.</p>
                    <ul class="list-inline social-icon">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="gray-section contact">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Contact Us</h1>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
            </div>
        </div>
        <div class="row m-b-lg">
            <div class="col-lg-3 col-lg-offset-3">
                <address>
                    <strong><span class="navy">Company name, Inc.</span></strong><br/>
                    795 Folsom Ave, Suite 600<br/>
                    San Francisco, CA 94107<br/>
                    <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>
            </div>
            <div class="col-lg-4">
                <p class="text-color">
                    Consectetur adipisicing elit. Aut eaque, totam corporis laboriosam veritatis quis ad perspiciatis, totam corporis laboriosam veritatis, consectetur adipisicing elit quos non quis ad perspiciatis, totam corporis ea,
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="mailto:test@email.com" class="btn btn-primary">Send us mail</a>
                <p class="m-t-sm">
                    Or follow us on social platform
                </p>
                <ul class="list-inline social-icon">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <p><strong>&copy; 2015 Company Name</strong><br/> consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
            </div>
        </div>
    </div>
</section>

<div class="modal inmodal fade" id="modalgrade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Pilih kelas</h4>
            </div>
            <div class="modal-body">
                <a class="btn btn-danger  btn-lg" type="button" href="<?php echo site_url('browse/index/sd') ?>">SD</a>
                <a class="btn btn-success  btn-lg" type="button" href="<?php echo site_url('browse/index/smp') ?>">SMP</a>
                <a class="btn btn-default  btn-lg" type="button" href="<?php echo site_url('browse/index/sma') ?>">SMA</a>
            </div>
        </div>
    </div>

<script src="<?php echo base_url('assets/js/jquery-2.1.1.js') ?> "></script>
<script src="<?php echo base_url('assets/js/pace.min.js') ?> "></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?> "></script>
<script src="<?php echo base_url('assets/js/classie.js') ?> "></script>
<script src="<?php echo base_url('assets/js/cbpAnimatedHeader.js') ?> "></script>
<script src="<?php echo base_url('assets/js/wow.min.js') ?> "></script>
<script src="<?php echo base_url('assets/js/inspinia.js') ?> "></script>

</body>
</html>
