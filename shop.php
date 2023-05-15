<?php

require_once 'admin/dbkoneksi.php';

$sql = "SELECT * FROM produk";

$produks = $dbh->query($sql);


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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">

    <!--  contact -->
    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Form Pemesanan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <form action="pengunjung/proses_pesanan.php" method="post" class="contact-form">
                        <div class="form-group">
                            <label class="text-white" for="tanggal">Tanggal Pesanan</label>
                            <input type="date" id="tanggal" name="tanggal" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label class="text-white" for="nama_pemesan">Nama Lengkap</label>
                            <input type="text" id="nama_pemesan" name="nama_pemesan" class="form-control"
                                placeholder="Nama Anda" required />
                        </div>
                        <div class="form-group">
                            <label class="text-white" for="alamat_pemesan">Alamat Lengkap</label>
                            <textarea id="alamat_pemesan" name="alamat_pemesan" class="form-control" rows="9"
                                placeholder="Alamat Anda" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="text-white">Nama Produk</label><br>
                            <?php
                            $sqljenis = "SELECT * FROM produk";
                            $produk = $dbh->query($sqljenis);
                            ?>
                            <select name="nama_produk" id="nama" class="form-control" required>
                                <option value="">--Pilih Produk--</option>
                                <?php foreach ($produk as $row) { ?>
                                <option value="<?= $row['nama'] ?>"><?= $row['nama'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <label class="text-white" for="qty">QTY</label>
                            <input type="number" id="qty" name="qty" class="form-control" placeholder="2" required />
                        </div>
                        <div class="form-group">
                            <label class="text-white" for="total_harga">Total Harga</label>
                            <input type="number" id="total_harga" name="total_harga" class="form-control"
                                placeholder="6000000" required />
                        </div>
                        <button type="submit" name="proses" value="Simpan"
                            class="btn btn-warning tm-btn-white text-white">Pesan
                            Sekarang</button>
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
                            <li><a href="javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="javascript:void(0)"><i class="fa fa-linkedin-square"
                                        aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
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