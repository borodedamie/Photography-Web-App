
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{ URL::asset('img/favicon.png') }}" type="image/png">
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
						<a class="navbar-brand logo_h" href="index.html"><img src="{{ URL::asset('img/logo.png') }}" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="about-us.html">About</a></li> 
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="projects.html">Projects</a>
										<li class="nav-item"><a class="nav-link" href="project-details.html">Project Details</a></li>
									</ul>
								</li> 
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
									</ul>
								</li> 
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
										<li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
									</ul>
								</li> 
								<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>


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
        <script src="{{ URL::asset('vendors/popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ URL::asset('vendors/counter-up/jquery.waypoints.min.js') }}"></script>
        <script src="{{ URL::asset('vendors/counter-up/jquery.counterup.js') }}"></script>
        <script src="{{ URL::asset('js/mail-script.js') }}"></script>
        <script src="{{ URL::asset('js/theme.js') }}"></script>

        <div class="container">
            @yield('content')
        </div>
        </body>
        <!--================Header Menu Area =================-->