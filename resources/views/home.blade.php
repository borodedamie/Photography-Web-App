<!doctype html>
<html lang="en">
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
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
           	<div class="box_1620">
           		<div class="banner_inner d-flex align-items-center">
					<div class="container">
						<div class="banner_content text-center">
							<h3>{!! $banner[0]->company_name !!}</h3>
							<p>{!! $banner[0]->description !!}</p>
							<a class="main_btn" href="#">Explore Gallery</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Home Blog Area =================-->
        <section class="home_blog_area pad_top">
        	<div class="container">
        		<div class="home_blog_inner">

        			@foreach($events as $event)
        			<div class="row h_blog_item">
						<div class="col-lg-6">
							<div class="h_blog_text">
								<div class="h_blog_text_inner right">
									<h4>{!! $event->event_title !!}</h4>
									<p>{!! $event->event_description !!}</p>
									<a class="main_btn2" href="#">Explore Gallery</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="h_blog_img">
								<img class="img-fluid" src=" img/home-blog/{{ $event->event_image }}" alt="">
							</div>
						</div>
					</div>
					@endforeach
						</div>
        			</div>

        </section>
        <!--================End Home Blog Area =================-->
                
        <!--================Feedback Area =================-->
        <section class="feedback_area pad_bt">
        	<div class="container">
        		<div class="feedback_inner p_100">
        			<div class="row">
        				<div class="col-lg-5">
        					<div class="feedback_text">
        						<h3>Client’s Feedback</h3>
        						<p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderitin.</p>
        					</div>
						</div>
						@foreach($feedbacks as $feedback)
        				<div class="col-lg-7">
							<div class="testi_slider_inner">
								<div class="testi_slider owl-carousel">
									<div class="item">
										<div class="media">
											<div class="d-flex">
												<img src="img/testimonials/{!!$feedback->img !!}" alt="">
											</div>
											<div class="media-body">
												<p>{!! $feedback->feedback !!}</p>
												<h4>{!! $feedback->name !!}</h4>
												<h5>{!! $feedback->job_title !!} </h5>
											</div>
										</div>
									</div>								
								</div>
							</div>
						</div>
						@endforeach
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Feedback Area =================-->
        
        <!--================Instagram Area =================-->
        <section class="instagram_area">
        	<div class="container box_1620">
        		<div class="insta_btn">
        			<a class="btn theme_btn" href="#">Follow us on instagram</a>
        		</div>
        		<div class="instagram_image row m0">
        			<a href="#"><img src="{{ URL::asset('img/instagram/ins-1.jpg') }}" alt=""></a>
        			<a href="#"><img src="{{ URL::asset('img/instagram/ins-2.jpg') }}" alt=""></a>
        			<a href="#"><img src="{{ URL::asset('img/instagram/ins-3.jpg') }}" alt=""></a>
        			<a href="#"><img src="{{ URL::asset('img/instagram/ins-4.jpg') }}" alt=""></a>
        			<a href="#"><img src="{{ URL::asset('img/instagram/ins-5.jpg') }}" alt=""></a>
        			<a href="#"><img src="{{ URL::asset('img/instagram/ins-6.jpg') }}" alt=""></a>
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
        <script src="{{ URL::asset('vendors/popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ URL::asset('vendors/counter-up/jquery.waypoints.min.js') }}"></script>
        <script src="{{ URL::asset('vendors/counter-up/jquery.counterup.js') }}"></script>
        <script src="{{ URL::asset('js/mail-script.js') }}"></script>
        <script src="{{ URL::asset('js/theme.js') }}"></script>
    </body>
</html>