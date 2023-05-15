<?php

require_once 'admin/dbkoneksi.php';

$_id = $_GET['id'];
$sql = "SELECT * FROM produk WHERE id = ?";

$st = $dbh->prepare($sql);
$st->execute([$_id]);

$produk = $st->fetch();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>PROSuplemen</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">

    <!-- about -->
    <div id="about" class="about">
        <div class="container-fluid">
            <div class="row d_flex">
                <div class="col-md-6">
                    <div class="titlepage">
                        <h2><?= $produk['nama'] ?></h2>
                        <h3>Rp. <?= number_format($produk['harga'], 0, ',', '.') ?></h3>
                        <h3><strong>Deskripsi</strong></h3>
                        <p>PROSuplemen menawarkan berbagai macam produk suplemen yang dirancang untuk memenuhi kebutuhan
                            berbagai orang. Produk-produk mereka meliputi suplemen untuk meningkatkan energi, mengurangi
                            stres, meningkatkan daya tahan tubuh, meningkatkan konsentrasi dan fokus, serta banyak lagi.
                        </p>
                        <a class="read_more" href="shop.php"> Pesan Sekarang</a>
                    </div>
                </div>
                <div class="col-md-6 pad_right0">
                    <div class="about_img ">
                        <figure><img src="images/about.png" alt="#" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->

    <!--  contact -->
    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Kontak Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <form id="request" class="main_form">
                        <div class="row">
                            <div class="col-md-12 ">
                                <input class="contactus" placeholder="Full Name" type="type" name="Full Name">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Email " type="type" name="Email ">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message</textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="daih_bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="conta">
                                <li><i class="fa fa-phone" aria-hidden="true"></i> Call Now +62 838-1575-9600</li>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> Bogor</li>
                                <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#">
                                        firhan485@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <img class="tex_left" src="images/logo2.png" alt="#" />
                    </div>
                    <div class=" col-md-3 col-sm-6">
                        <p class="variat">PROSuplemen adalah merek suplemen terkemuka di Indonesia yang menawarkan
                            berbagai macam produk suplemen untuk meningkatkan kesehatan dan kinerja Anda. </p>
                    </div>
                    <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                        <h3>Information </h3>
                        <ul class="link_menu">
                            <li><a href="#protien">Produk Kami</a></li>
                            <li><a href="#about">Tentang Kami</a></li>
                            <li><a href="#testimonial">Testimonial</a></li>
                            <li><a href="#contact">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                        <h3>Helpful Links</h3>
                        <ul class="link_menu">
                            <li><a href="#protien">Produk Kami</a></li>
                            <li><a href="#about">Tentang Kami</a></li>
                            <li><a href="#testimonial">Testimonial</a></li>
                            <li><a href="#contact">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                        <h3>Supported</h3>
                        <ul class="link_menu">
                            <li><a href="#protien">Produk Kami</a></li>
                            <li><a href="#about">Tentang Kami</a></li>
                            <li><a href="#testimonial">Testimonial</a></li>
                            <li><a href="#contact">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-12">
                        <ul class="social2_icon">
                            <li><a href="javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <p>© 2023 All Rights Reserved. Firhan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>
</body>

</html>