<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A Template by themepul.com">
    <meta name="keywords" content="film review, movie, movie database, movie series, presentation, showcase, tv show">
    <meta name="author" content="">
    <title>INDIE TALK</title>
    <link href="images/favicon2.png" rel="icon">
    <!-- bootstrap css -->
    <link href="sources/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-select.min.css" rel="stylesheet">
    <!-- / bootstrap css -->
    <!-- owl carousel css -->
    <link href="sources/owlcarousel/owl.carousel.css" rel="stylesheet">
    <!-- / owl carousel css -->
    <!--  icon css -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">
    <link href="css/icofont.css" rel="stylesheet">
    <!-- / icon css -->
    <!-- animations css -->
    <link href="sources/animations/animate.css" rel="stylesheet">
    <link href="sources/Video/video.popup.css" rel="stylesheet">
    <!-- / animations css -->
    <!-- animations css -->
    <link href="sources/navmenu/bootsnav.css" rel="stylesheet">
    <!-- / animations css -->
    <!-- slider css -->
    <link rel="stylesheet" href="sources/bootstrap-slider/bootstrap-touch-slider.css">
    <!-- / slider css -->
    <!--  style css -->
    <link href="css/style.css" rel="stylesheet">
    <!-- / style css -->
    <!--  media css -->
    <link href="css/media.css" rel="stylesheet">
    <!-- / media css -->
    <!-- / font css -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,900' rel='stylesheet' type='text/css'>
    <!-- / font css -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    




</head>


<body>
    <div class="main home-2">
     
        <!-- HEADER SECTION -->
        <header class="header-section header-2">
            <!-- HEADER TOP -->
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 top-account sm-width sm-width-33">
                            <div class="top-accounts">
                                <ul>
                                   



                                    <?php 
                                            // mengaktifkan session pada php
                                            session_start();

                                            // menghubungkan php dengan koneksi database
                                            include 'koneksi.php';

                                            // $user = mysqli_query($koneksi,"select * from user");
                                            // $data = mysqli_fetch_assoc($user);
                                            // $level = $data['level'];

                                            if(isset($_SESSION['level'])){
                                            ?>
                                    
                                    <li><a href="logout.php"><span class="fa fa-lock"></span>logout</a></li>

                                <?php }else{ ?>
                                    <li><a href="daftar.php"><span class="fa fa-user"></span>Daftar</a></li>
                                    <li><a href="login.php"><span class="fa fa-lock"></span>Masuk</a></li>
                                    

                                <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 top-message sm-width sm-width-33">
                         
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 top-visitors hiddens sm-width sm-width-33">
                            <div class="top-visitor">
                                <p><span class="fa fa-users"></span> Day Visitor 32155</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END HEADER TOP -->
            <!-- HEADER MENU -->
            <nav class="navbar navbar-default bootsnav navbar-sticky">
                <div class="container">
                    <!-- Start Top Search -->
                    <div class="top-search">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                    <!-- End Top Search -->
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="search"><a href="#">Search</a></li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-align-justify"></i>
                        </button>
                        <a class="navbar-brand" href="index.php?page=home"><img src="images/LAB.png" class="logo" alt=""></a>
                    </div>
                    <!-- End Header Navigation -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-left" data-in="" data-out="">
                           <li><a href="index.php?page=home">Home</a></li>
                           <li><a href="index.php?page=events">Event</a></li>
                          <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">actors</a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php?page=events">events page 1</a></li>
                                    <li><a href="index_2.html">events page 2</a></li>
                                    <li><a href="index_3.html">events page 3</a></li>
                                    
                                    
                                </ul>
                            </li>

                       
                            <li><a href="index.php?page=review">Review</a></li>
                     
                            <li><a href="contact.html">About Us</a></li>
                            <li><a href="index.php?page=contacts">Contact Us</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
            </nav>
            <!-- END HEADER MENU -->
        </header>
        <!-- END HEADER SECTION -->
     
        <!-- end slider section -->


        <!-- isi -->
        <?php 
    if(isset($_GET['page'])){
        $page = $_GET['page'];

        switch ($page) {
            case 'home':
                include "halaman/home.php";
                break;
            case 'events':
                include "halaman/events.php";
                break;
            case 'contacts':
                include "halaman/contacts.php";
                break;  
            case 'review':
                include "halaman/review.php";
                break;            
            default:
                echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                break;
        }
    }else{
        include "halaman/home.php";
    }

     ?>



  



        





        
        <!-- FOOTER SECTION -->
        <footer class="footer-section">
            <div class="footer-bg">
                <div class="container">
                    <div class="row">
                        <!-- Widget item -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 sm-width">
                            <div class="ft-widget">
                                <div class="ft-content">
                                    <img src="images/ft-about.jpeg" alt="">
                                    <p>Mauris malesuada arcu eu posuere eleifen. Ut egestas tortor at leo egestas tincidunt. Nam tincidunt metus tristique tristique viverra. Mauris erat ante, egestas vitae dapibus sed.</p>
                                    <div class="social-link">
                                        <ul>
                                            <li><a href="" class="ft-fb"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="" class="ft-twitter"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="" class="ft-pintarest"><span class="fa fa-pinterest"></span></a></li>
                                            <li><a href="" class="ft-youtube"><span class="fa fa-youtube"></span></a></li>
                                            <li><a href="" class="ft-linkedin"><span class="fa fa-linkedin"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Widget item -->
                        <!-- Widget item -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 sm-width">
                            <div class="ft-widget">
                                <h2><span>Dummy</span></h2>
                                <div class="ft-content">
                                    <ul>
                                        <li><a href="">Dummy</a> </li>
                                        <li><a href="">Dummy</a></li>
                                        <li><a href="">Dummy</a></li>
                                        <li><a href="">Dummy</a></li>
                                        <li><a href="">Dummy</a></li>
                                        <li><a href="">Dummy</a></li>
                                        <li><a href="">Dummy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Widget item -->
                        <!-- Widget item -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 sm-width">
                            <div class="ft-widget">
                                <h2><span>Information</span></h2>
                                <div class="ft-content">
                                    <ul>
                                        <li><a href="">About Us</a> </li>
                                        <li><a href="">Dummy</a></li>
                                        <li><a href="">Dummy</a></li>
                                        <li><a href="">Dummy Dummy</a></li>
                                        <li><a href="">Dummy Dummy</a></li>
                                        <li><a href="">Dummy Dummy</a></li>
                                        <li><a href="">Dummy Dummy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Widget item -->
                        <!-- Widget item -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 sm-width">
                            <div class="ft-widget">
                                <div class="ft-content twitter-contnt">
                                    <h2><span>Twitter</span></h2>
                                    <div class="ft-twitter-feed">
                                        <div class="ft-twitter-icon">
                                            <span class="fa fa-twitter"></span>
                                        </div>
                                        <div class="twitter-dec">
                                            <a href="">Dummy-Dummy <span class="oreng">@Dummy</span></a>
                                            <p>Lorem Ipsum is simply dumy text of the printing.</p>
                                            <div class="twitter-meta">
                                                <ul>
                                                    <li><a href=""><span class="fa fa-mail-reply"></span></a></li>
                                                    <li><a href=""><span class="fa fa-retweet"></span>12</a></li>
                                                    <li><a href=""><span class="fa fa-heart"></span>21</a></li>
                                                    <li><a href=""><span class="fa fa-ellipsis-h"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="newsletter">
                                    <h2><span>newsletter</span></h2>
                                    <div class="newsletter-input">
                                        <input type="text" class="form-control" placeholder="Email Address">
                                        <button class="newsletter-btn"><span class="fa fa-paper-plane"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Widget item -->
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sm-width">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="">About Us</a></li>
                                    <li><a href="">Dummy</a></li>
                                    <li><a href="">Dummy</a></li>
                                    <li><a href="index.php?page=contacts">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sm-width">
                            <div class="copyright-text">
                                <p>CopyRight© 2019 <a href="">Daiki</a> . All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER SECTION -->
        <div class="to-top" id="back-top">
            <i class="fa fa-angle-up"></i>
        </div>
    </div>
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="sources/bootstrap/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="sources/navmenu/bootsnav.js"></script>
    <script src="sources/animations/wow.min.js"></script>
    <script src="sources/owlcarousel/owl.carousel.min.js"></script>
    <script src="sources/bootstrap-slider/jquery.touchSwipe.min.js"></script>
    <script src="sources/bootstrap-slider/bootstrap-touch-slider.js"></script>
    <script src="sources/jquery-ui/jquery-ui.min.js"></script>
    <script src="sources/Video/video.popup.js"></script>
    <script src="js/jquery.syotimer.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/tab.js"></script>
    <script src="js/main.js"></script>


</html>