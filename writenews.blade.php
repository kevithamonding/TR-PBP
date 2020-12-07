<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Berita</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <!-- Favicon -->
        <link href="/assets/img/favicon.ico" rel="icon">
        <link rel="icon" type="image/png" href="/assets/img/logo2.png">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet"> 

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="/assets/lib/slick/slick.css" rel="stylesheet">
        <link href="/assets/lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="/assets/css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tb-contact">
                            <p><i class="fas fa-envelope"></i>pbpnews@gmail.com</p>
                            <p><i class="fas fa-phone-alt"></i>+6282265097969</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tb-menu">
                            <a href="">Sign Up</a>
                            <a href="">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar Start -->
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4">
                        <div class="b-logo">
                            <a href="/berita">
                                <img src="/assets/img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="b-ads">
                            <a href="">
                                <img src="/assets/img/ads.jpg" alt="Ads">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="b-search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="/berita" class="nav-item nav-link">Home</a>
                            <a href="contact.blade.php" class="nav-item nav-link active">Upload News</a>
                        </div>
                        <div class="social ml-auto">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->
        
        <!-- Single News Start-->
        <div class="single-news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="sn-container">
                            <div class="sn-img">
                                <img src="/assets/img/wnstep.jpg" />
                            </div>
                            <div class="sn-content">
                                <b> Silahkan Isi Form di bawah ini :</b><br><br>
                                <form class="bold">
                                    Judul<br>
                                    <input type='text' name='judul' placeholder='Tulis judul...' class='form-control'>
                                    Nama Penulis<br>
                                    <input type='text' name='nama_penulis' placeholder='Cth: Fanny Cantik...' class='form-control'>
                                    Tanggal Terbit<br>
                                    <input type='date' name='tanggal_terbit' class='form-control'>
                                    Kategori Berita<br>
                                        <label><input type='radio' value='Sport' name='jenis_berita' class='custom-radio'>
                                            Sport</label><br>
                                        <label><input type='radio' value='Technology' name='jenis_berita' class='custom-radio'>
                                            Technology</label><br>
                                        <label><input type='radio' value='Business' name='jenis_berita' class='custom-radio'>
                                            Business</label><br>
                                        <label><input type='radio' value='Entertainment' name='jenis_berita' class='custom-radio'>
                                            Entertainment</label><br>
                                    Isi Tulisan<br>
                                    <textarea class='form-control' name='isi_berita' rows='10' placeholder='Isi berita di sini..'></textarea>
                                    <button class="btn" type="submit">Send News</button>
                                </form>
                            </div>
                        </div>
                        <div class="sn-related">
                            <h2>Related News</h2>
                            <div class="row sn-slider">
                                <div class="col-md-4">
                                    <div class="sn-img">
                                        <img src="/assets/img/tiara.png" />
                                        <div class="sn-title">
                                            <a href="/berita/tiara">Menangis Usai Genggam Piala AMI Awards, Tiara Andini: Ini Pencapaian Tertinggi Aku</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="sn-img">
                                        <img src="/assets/img/brigjen.jpg" />
                                        <div class="sn-title">
                                            <a href="/berita/brigjen">Perkara Surat Jalan Palsu Djoko Tjandra, Brigjen Prasetijo Dituntut 2,5 Tahun Penjara</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="sn-img">
                                        <img src="/assets/img/pradi.jpg" />
                                        <div class="sn-title">
                                            <a href="/berita/pradi">Pradi: Hampir 15 Tahun Terakhir Pembangunan di Depok Tidak Berjalan Baik</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="sn-img">
                                        <img src="/assets/img/polda.jpg" />
                                        <div class="sn-title">
                                            <a href="/berita/polda">Polda Metro dan Kodam Jaya Bentuk Tim Pemburu Covid-19, Ini Tugasnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <h2 class="sw-title">In This Category</h2>
                                <div class="news-list">
                                    <div class="nl-item">
                                        <div class="nl-img">
                                            <img src="/assets/img/sara.jpg" />
                                        </div>
                                        <div class="nl-title">
                                            <a href="/berita/sara">Sara Fajira Akui Sempat Takut Jadi Penyanyi Solo</a>
                                        </div>
                                    </div>
                                    <div class="nl-item">
                                        <div class="nl-img">
                                            <img src="/assets/img/mendag.jpg" />
                                        </div>
                                        <div class="nl-title">
                                            <a href="/berita/mendag">Mendag Agus Berharap Pembiayaan Ekspor Dapat Bantu "UKM Naik Kelas"</a>
                                        </div>
                                    </div>
                                    <div class="nl-item">
                                        <div class="nl-img">
                                            <img src="/assets/img/brand.jpg" />
                                        </div>
                                        <div class="nl-title">
                                            <a href="/berita/brand">Bagaimana Cara Mendaftarkan Hak Merek untuk UMKM?</a>
                                        </div>
                                    </div>
                                    <div class="nl-item">
                                        <div class="nl-img">
                                            <img src="/assets/img/pradi.jpg" />
                                        </div>
                                        <div class="nl-title">
                                            <a href="/berita/pradi">Pradi: Hampir 15 Tahun Terakhir Pembangunan di Depok Tidak Berjalan Baik</a>
                                        </div>
                                    </div>
                                    <div class="nl-item">
                                        <div class="nl-img">
                                            <img src="/assets/img/brigjen.jpg" />
                                        </div>
                                        <div class="nl-title">
                                            <a href="/berita/brigjen">Perkara Surat Jalan Palsu Djoko Tjandra, Brigjen Prasetijo Dituntut 2,5 Tahun Penjara</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sidebar-widget">
                                <div class="image">
                                    <a href="https://aqua.co.id/"><img src="/assets/img/aqua.png" alt="Image"></a>
                                </div>
                            </div>
                            
                            <div class="sidebar-widget">
                                <div class="tab-news">
                                    <ul class="nav nav-pills nav-justified">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="pill" href="#featured">Featured</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#popular">Popular</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#latest">Latest</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="featured" class="container tab-pane active">
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="/assets/img/smartphone.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="/berita/smartphone">5 Smartphone Harga Terjangkau untuk Belajar dari Rumah</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="/assets/img/mendag.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="/berita/mendag">Mendag Agus Berharap Pembiayaan Ekspor Dapat Bantu "UKM Naik Kelas"</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="/assets/img/marc.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="/berita/marc">Peluang Marc Marquez Juara MotoGP 2021 Terancam Sirna</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="/assets/img/iphone.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="/berita/iphone">iPhone 12 Bisa Dipesan di Indonesia Mulai 11 Desember, Ini Harganya</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="/assets/img/tan.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="/berita/tan">Tan Joe Hok dan Polemik Masa Lalu di Era Kejayaan Bulu Tangkis Indonesia</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="popular" class="container tab-pane fade">
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="/assets/img/rizky.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="/berita/rizky">Ini Impian Rizky Billar yang Ingin Dicapainya</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="/assets/img/polda.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="/berita/polda">Polda Metro dan Kodam Jaya Bentuk Tim Pemburu Covid-19, Ini Tugasnya</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="/assets/img/sara.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="/berita/sara">Sara Fajira Akui Sempat Takut Jadi Penyanyi Solo</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="/assets/img/mendag.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="/berita/mendag">Mendag Agus Berharap Pembiayaan Ekspor Dapat Bantu "UKM Naik Kelas"</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="/assets/img/waralaba.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="/berita/waralaba">Waralaba: Antara Janji, Ekspektasi dan Realisasi</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="latest" class="container tab-pane fade">
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="/assets/img/smartphone.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="/berita/smartphone">5 Smartphone Harga Terjangkau untuk Belajar dari Rumah</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="/assets/img/iphone.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="/berita/iphone">iPhone 12 Bisa Dipesan di Indonesia Mulai 11 Desember, Ini Harganya</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="/assets/img/siber.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="/berita/siber">Dilema Pekerja Keamanan Siber, Banyak Dicari tapi Syarat Berlebihan</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="/assets/img/bola.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="/berita/bola">Soal Kepastian Kelanjutan Liga 1, Pelatih Persib Tunggu Surat Resmi PSSI</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="/assets/img/marc.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="/berita/marc">Peluang Marc Marquez Juara MotoGP 2021 Terancam Sirna</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sidebar-widget">
                                <div class="image">
                                    <a href="https://www.baygon.co.id/id-id/products"><img src="/assets/img/baygon.jpg" alt="Image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single News End-->        
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Get in Touch</h3>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>Pemalang</p>
                                <p><i class="fa fa-envelope"></i>pbpnews@gmail.com</p>
                                <p><i class="fa fa-phone"></i>+6282265097969</p>
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                    </div>
                    <div class="col-lg-3 col-md-6">
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Newsletter</h3>
                            <div class="newsletter">
                                <p>
                                    Subscribe to receive updates, access to exclusive deals, and more.
                                </p>
                                <form>
                                    <input class="form-control" type="email" placeholder="Your email here">
                                    <button class="btn">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        <!-- Footer Menu End -->
        <!-- Footer Bottom End -->

        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/lib/easing/easing.min.js"></script>
        <script src="/assets/lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="/assets/js/main.js"></script>
    </body>
</html>
