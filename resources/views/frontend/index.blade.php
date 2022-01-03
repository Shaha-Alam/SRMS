<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title> Zonebiz - Business Consulting Bootstrap4 Responsive Template </title>
	<!-- Bootstrap core CSS -->
	<link href="{{url('/frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="{{url('/frontend/css/all.css')}}" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="{{url('/frontend/css/owl.carousel.min.css')}}" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="{{url('/frontend/css/jquery.fancybox.min.css')}}" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="{{url('/frontend/css/style.css')}}" rel="stylesheet">
</head>    
<body>
<div class="wrapper-main">
	<!-- Top Bar -->
	<div class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="social-media">
						<ul>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="contact-details">
						<ul>
							<li><i class="fas fa-phone fa-rotate-90"></i> +01 899 286 777</li>
							<li><i class="fas fa-map-marker-alt"></i> 8/99 , North khailkoir, NY</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- Navigation -->
    
@include('frontend.partials.top-navbar')

	
    @include('frontend.partials.header')
	
    <!-- Page Content -->
    <div class="container">        
        <!-- About Section -->
        <div class="about-main">
            <div class="row">
               <div class="col-lg-6">
                  <h2>Welcome to Zonebiz</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
				  <h5>Our smart approach</h5>
                  <ul>
                     <li>Sed at tellus eu quam posuere mattis.</li>
                     <li>Phasellus quis erat et enim laoreet posuere ac porttitor ipsum.</li>
                     <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>                     
                  </ul>
               </div>
               <div class="col-lg-6">
                  <img class="img-fluid rounded" src="{{url('/frontend/images/about-img.jpg')}}" alt="" />
               </div>
            </div>
            <!-- /.row -->
        </div>
	</div>	
	
	<div class="services-bar">
		<div class="container">
			<h1 class="py-4">Our Best Services </h1>
			<!-- Services Section -->
			<div class="row">
			   <div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="{{url('frontend/images/services-img-01.jpg')}}" alt="" />
						</div>
						<div class="card-body">
							<h4 class="card-header"> Analytics </h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
						</div>
					</div>
			   </div>
			   <div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="{{url('/frontend/images/services-img-02.jpg')}}" alt="" />
						</div>
						<div class="card-body">
							<h4 class="card-header"> Applications </h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
						</div>
					</div>
			   </div>
			   <div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="{{url('/frontend/images/services-img-03.jpg')}}" alt="" />
						</div>
						<div class="card-body">
							<h4 class="card-header"> Business Process </h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
						</div>
					</div>
			   </div>
			   <div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="{{url('/frontend/images/services-img-04.jpg')}}" alt="" />
						</div>
						<div class="card-body">
							<h4 class="card-header"> Consulting </h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
						</div>						
					</div>
			   </div>
			   <div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="{{url('/frontend/images/services-img-05.jpg')}}" alt="" />
						</div>
						<div class="card-body">
							<h4 class="card-header"> Infrastructure </h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
						</div>						
					</div>
			   </div>
			   <div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="{{url('/frontend/images/services-img-06.jpg')}}" alt="" />
						</div>
						<div class="card-body">
							<h4 class="card-header"> Product Engineering </h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
						</div>
					</div>
			   </div>
			</div>
			<!-- /.row -->
		</div>
	</div>
		
	<div class="container">
        <!-- Portfolio Section -->
        <div class="portfolio-main">
            <h2>Our Portfolio</h2>
			<div class="col-lg-12">
				<div class="project-menu text-center">
					<button class="btn btn-primary active" data-filter="*">All</button>
					<button data-filter=".business" class="btn btn-primary">Business</button>
					<button data-filter=".travel" class="btn btn-primary">Travel</button>
					<button data-filter=".financial" class="btn btn-primary">Financial</button>
					<button data-filter=".academic" class="btn btn-primary">Academic</button>
				</div>
			</div>
            <div id="projects" class="projects-main row">
               <div class="col-lg-4 col-sm-6 pro-item portfolio-item financial">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="{{url('/frontend/images/portfolio-img-01.jpg')}}" data-fancybox="images">
                           <img class="card-img-top" src="{{url('/frontend/images/portfolio-img-01.jpg')}}" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Financial Sustainability</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 pro-item portfolio-item business academic">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="{{url('/frontend/images/portfolio-img-02.jpg')}}" data-fancybox="images">
                           <img class="card-img-top" src="{{url('/frontend/images/portfolio-img-02.jpg')}}" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Financial Sustainability</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 pro-item portfolio-item travel">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="{{url('/frontend/images/portfolio-img-03.jpg')}}" data-fancybox="images">
                           <img class="card-img-top" src="{{url('/frontend/images/portfolio-img-03.jpg')}}" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Financial Sustainability</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 pro-item portfolio-item business">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="{{url('/frontend/images/portfolio-img-04.jpg')}}" data-fancybox="images">
                           <img class="card-img-top" src="{{url('/frontend/images/portfolio-img-04.jpg')}}" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Financial Sustainability</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 pro-item portfolio-item travel">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="{{url('/frontend/images/portfolio-img-05.jpg')}}" data-fancybox="images">
                           <img class="card-img-top" src="{{url('/frontend/images/portfolio-img-05.jpg')}}" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Financial Sustainability</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 pro-item portfolio-item financial academic">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="{{url('/frontend/images/portfolio-img-01.jpg')}}" data-fancybox="images">
                           <img class="card-img-top" src="{{url('/frontend/images/portfolio-img-01.jpg')}}" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Financial Sustainability</a>
                        </h4>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
	
	<div class="blog-slide">
		<div class="container">
			<h2>Our Blog</h2>
			<div class="row">
				<div class="col-lg-12">
					<div id="blog-slider" class="owl-carousel">
						<div class="post-slide">
							<div class="post-header">
								<h4 class="title">
									<a href="#">Latest blog Post</a>
								</h4>
								<ul class="post-bar">
									<li><img src="{{url('/frontend/images/testi_01.png')}}" alt=""><a href="#">Williamson</a></li>
									<li><i class="fa fa-calendar"></i>02 June 2018</li>
								</ul>
							</div>
							<div class="pic">
								<img src="{{url('/frontend/images/img-1.jpg')}}" alt="">
								<ul class="post-category">
									<li><a href="#">Business</a></li>
									<li><a href="#">Financ</a></li>
								</ul>
							</div>
							<p class="post-description">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu massa efficitur, eu hendrerit ipsum efficitur. Morbi vitae velit ac.
							</p>
						</div>
		 
						<div class="post-slide">
							<div class="post-header">
								<h4 class="title">
									<a href="#">Latest blog Post</a>
								</h4>
								<ul class="post-bar">
									<li><img src="{{url('/frontend/images/testi_02.png')}}" alt=""><a href="#">Kristiana</a></li>
									<li><i class="fa fa-calendar"></i>05 June 2018</li>
								</ul>
							</div>
							<div class="pic">
								<img src="{{url('/frontend/images/img-2.jpg')}}" alt="">
								<ul class="post-category">
									<li><a href="#">Business</a></li>
									<li><a href="#">Financ</a></li>
								</ul>
							</div>
							<p class="post-description">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu massa efficitur, eu hendrerit ipsum efficitur. Morbi vitae velit ac.
							</p>
						</div>
						
						<div class="post-slide">
							<div class="post-header">
								<h4 class="title">
									<a href="#">Latest blog Post</a>
								</h4>
								<ul class="post-bar">
									<li><img src="{{url('/frontend/images/testi_01.png')}}" alt=""><a href="#">Kristiana</a></li>
									<li><i class="fa fa-calendar"></i>05 June 2018</li>
								</ul>
							</div>
							<div class="pic">
								<img src="{{url('/frontend/images/img-3.jpg')}}" alt="">
								<ul class="post-category">
									<li><a href="#">Business</a></li>
									<li><a href="#">Financ</a></li>
								</ul>
							</div>
							<p class="post-description">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu massa efficitur, eu hendrerit ipsum efficitur. Morbi vitae velit ac.
							</p>
						</div>
						
						<div class="post-slide">
							<div class="post-header">
								<h4 class="title">
									<a href="#">Latest blog Post</a>
								</h4>
								<ul class="post-bar">
									<li><img src="{{url('/frontend/images/testi_02.png')}}" alt=""><a href="#">Kristiana</a></li>
									<li><i class="fa fa-calendar"></i>05 June 2018</li>
								</ul>
							</div>
							<div class="pic">
								<img src="{{url('/frontend/images/img-4.jpg')}}" alt="">
								<ul class="post-category">
									<li><a href="#">Business</a></li>
									<li><a href="#">Financ</a></li>
								</ul>
							</div>
							<p class="post-description">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu massa efficitur, eu hendrerit ipsum efficitur. Morbi vitae velit ac.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- Contact Us -->
	<div class="touch-line">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
				   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
				</div>
				<div class="col-md-4">
				   <a class="btn btn-lg btn-secondary btn-block" href="#"> Contact Us </a>
				</div>
			</div>
		</div>
	</div>
	
    <!-- /.container -->
    <!--footer starts from here-->
   
@include('frontend.partials.footer')

</div>
	  
<!-- Bootstrap core JavaScript -->
<script src="{{url('/frontend/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{url('frontend/js/isotope.pkgd.min.js')}}"></script>
<script src="{{url('frontend/js/filter.js')}}"></script>
<script src="{{url('frontend/js/jquery.appear.js')}}"></script>
<script src="{{url('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{url('frontend/js/jquery.fancybox.min.js')}}"></script>
<script src="{{url('frontend/js/script.js')}}"></script>
</body>
</html>