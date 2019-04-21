<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="{{ URL::asset('img/favicon.png') }}" type="image/png">
		<meta name="csrf-token" content="{{ csrf_token() }}">
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
		<section class="blog_categorie_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="categories_post">
                            <img src="{{ URL::asset('img/blog/cat-post/cat-post-3.jpg') }}" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <a href="blog-details.html"><h5>Birthday Event</h5></a>
                                    <div class="border_line"></div>
                                    <p>Birthdays are for bants.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="categories_post">
                            <img src="{{ URL::asset('img/blog/cat-post/cat-post-2.jpg') }}" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <a href="blog-details.html"><h5>Wedding Ceremonies</h5></a>
                                    <div class="border_line"></div>
                                    <p>& two shall become one</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="categories_post">
                            <img src="{{ URL::asset('img/blog/cat-post/cat-post-1.jpg') }}" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <a href="blog-details.html"><h5>Graduation Ceremonies</h5></a>
                                    <div class="border_line"></div>
                                    <p>Lets help capture your one in a lifetime event.</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
							<section class="contact_area ">
									<div class="container">
										<div class="row">
											<div class="col-lg-3">
												<div class="contact_info">
													<div class="info_item">
														<i class="lnr lnr-home"></i>
														<h6>{!! $banner[0]->address !!}</h6>
														<p>{!! $banner[0]->city !!}</p>
													</div>
													<div class="info_item">
														<i class="lnr lnr-phone-handset"></i>
														<h6><a href="#">{!! $banner[0]->phone_number !!}</a></h6>
														<p>{!! $banner[0]->opening_closing_time !!}</p>
													</div>
													<div class="info_item">
														<i class="lnr lnr-envelope"></i>
														<h6><a href="#">{!! $banner[0]->email !!}</a></h6>
														<p>Send us your query anytime!</p>
													</div>
												</div>
											</div>
											<div class="col-lg-9">
												<form class="row contact_form" id="contactForm">
														<input type="hidden" name="_token" value="{{ csrf_token() }}">
													<div class="col-md-6">
														<div class="form-group">
															<input type="text" class="form-control" id="name" placeholder="Enter your name">
														</div>
														<div class="form-group">
															<input type="email" class="form-control" id="email" placeholder="Enter email address">
														</div>
														<div class="form-group">
															<input type="text" class="form-control" id="subject" placeholder="Enter Subject">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<textarea class="form-control" id="message" rows="1" placeholder="Enter Message"></textarea>
														</div>
													</div>
													<div class="col-md-12 text-right">
														<button type="submit" value="submit" class="btn submit_btn" id="sendMessage">Send Message</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</section>
        	
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
		
		 {{-- <!-- contact js -->
		 <script src="{{ URL::asset('js/jquery.form.js') }}"></script>
		 <script src="{{ URL::asset('js/jquery.validate.min.js') }}"></script>
		 <script src="{{ URL::asset('js/contact.js') }}"></script>  --}}

		<script>
			$(document).ready(function(){
				$('#sendMessage').click(function(e){
					e.preventDefault();
					$.ajaxSetup({
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});

					$.ajax({
						url: "{{ route('home.storeContact') }}",
						method: 'post',
						dataType: 'json',
						data: {
							name: $('#name').val(),
							email: $('#email').val(),
							subject: $('#subject').val(),
							message: $('#message').val()
						},
						success: function(result){
							$('.alert').show();
							$('.alert').html(result.success);
							$('#contactForm')[0].reset();
						}
					});
				});
			});
		</script>
    </body>
</html>