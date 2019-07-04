<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flash Photography</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendors/lightbox/simpleLightbox.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendors/nice-select/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendors/animate-css/animate.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendors/popup/magnific-popup.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">
</head>
<body>

            <!--================Header Menu Area =================-->
            <header class="header_area">
                    <div class="main_menu">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="container">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                                        <ul class="nav navbar-nav menu_nav ml-auto">
                                            <li class="nav-item active"><a class="nav-link" href="{{ route('home.index') }}">Home</a></li> 
                                            <li class="nav-item"><a class="nav-link" href="about-us.html">About</a></li> 
                                            <li class="nav-item submenu dropdown">
                                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portfolio</a>
                                                {{-- <ul class="dropdown-menu">
                                                    <li class="nav-item"><a class="nav-link" href="projects.html">Projects</a>
                                                    <li class="nav-item"><a class="nav-link" href="project-details.html">Project Details</a></li>
                                                </ul> --}}
                                            </li> 
                                            <li class="nav-item submenu dropdown">
                                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div> 
                            </div>
                        </nav>
                    </div>
                </header>
        
                <!--================Home Banner Area =================-->
                <section class="banner_area">
                        <div class="box_1620">
                            <div class="banner_inner d-flex align-items-center">
                                <div class="container">
                                    <div class="banner_content text-center">
                                        <h2>Portfolio</h2>
                                        <div class="page_link">
                                            <a href="{{ route('home.index') }}">Home</a>
                                            <a href="#">Photo Gallery</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--================End Home Banner Area =================-->

        <!--================Instagram Area =================-->
        <section class="instagram_area">
                <div class="container box_1620">
                    <div class="insta_btn">
                        <a class="btn theme_btn" href="#">Follow us on instagram</a>
                    </div>
                    <div class="instagram_image row m0">
                        <a href="#"><img src="img/instagram/ins-1.jpg" alt=""></a>
                        <a href="#"><img src="img/instagram/ins-2.jpg" alt=""></a>
                        <a href="#"><img src="img/instagram/ins-3.jpg" alt=""></a>
                        <a href="#"><img src="img/instagram/ins-4.jpg" alt=""></a>
                        <a href="#"><img src="img/instagram/ins-5.jpg" alt=""></a>
                        <a href="#"><img src="img/instagram/ins-6.jpg" alt=""></a>
                    </div>
                </div>
            </section>
            <!--================End Instagram Area =================-->

        <!--================Footer Area =================-->
        <footer class="footer_area">
                <div class="container">
                    <div class="row footer_inner">
                        <div class="col-lg-5 col-sm-6">
                            <aside class="f_widget ab_widget">
                                <div class="f_title">
                                    <h3>About Me</h3>
                                </div>
                                <p>Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills,</p>
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    </p>
                            </aside>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <aside class="f_widget news_widget">
                                <div class="f_title">
                                    <h3>Newsletter</h3>
                                </div>
                                <p>Stay updated with our latest trends</p>
                                <div id="mc_embed_signup">
                                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                        <div class="input-group d-flex flex-row">
                                            <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                            <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>		
                                        </div>				
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </aside>
                        </div>
                        <div class="col-lg-2">
                            <aside class="f_widget social_widget">
                                <div class="f_title">
                                    <h3>Follow Me</h3>
                                </div>
                                <p>Let us be social</p>
                                <ul class="list">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </footer>
            <!--================End Footer Area =================-->
            
            <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ URL::asset('js/popper.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('js/stellar.js') }}"></script>
        <script src="{{ URL::asset('vendors/lightbox/simpleLightbox.min.js') }}"></script>
        <script src="{{ URL::asset('vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ URL::asset('vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ URL::asset('vendors/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ URL::asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ URL::asset('vendors/jquery-ui/jquery-ui.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ URL::asset('vendors/popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ URL::asset('js/mail-script.js') }}"></script>
        <script src="{{ URL::asset('vendors/counter-up/jquery.waypoints.min.js') }}"></script>
        <script src="{{ URL::asset('vendors/counter-up/jquery.counterup.js') }}"></script>
        <script src="{{ URL::asset('js/theme.js') }}"></script>
</body>
</html>