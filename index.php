
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Khang An Store</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="HimanshuGupta">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">	
		<!-- Animate CSS -->
		<link href="css/animate.min.css" rel="stylesheet">
		<!-- Basic stylesheet -->
		<link rel="stylesheet" href="css/owl.carousel.css">
		<!-- Font awesome CSS -->
		<link href="css/font-awesome.min.css" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">
		<link href="css/style-color.css" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="img/logo/favicon.ico">
	</head>
	
	<body>	

		<!-- modal for booking ticket form -->
		<div class="modal fade" id="bookTicket" tabindex="-1" role="dialog" aria-labelledby="BookTicket">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Name of The Event &nbsp; <small><span class="label label-success">Available</span> &nbsp; <span class="label label-danger">Not Available</span></small></h4>
					</div>
					<!-- form for events ticket booking -->
					<form>
						<div class="modal-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Email</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="example@mail.com">
							</div>
							<div class="form-group">
								<label for="exampleInputContact">Contact</label>
								<input type="text" class="form-control" id="exampleInputContact" placeholder="0859250925">
							</div>
							<div class="form-group">
								<label for="exampleInputSeats">Number of Tickets</label>
								<select class="form-control" id="exampleInputSeats">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox"> I accept the Terms of Service
								</label>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<!-- link to payment gatway here -->
							<button type="button" class="btn btn-primary">Book Now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<!-- wrapper -->
		<div class="wrapper" id="home">
		
			<!-- header area -->
			<header>
				<!-- secondary menu -->
				<nav class="secondary-menu">
					<div class="container">
						<!-- secondary menu left link area -->
						<div class="sm-left">
							<strong>Phone</strong>:&nbsp; <a href="#">0859250925</a>&nbsp;&nbsp;&nbsp;&nbsp;
							<strong>E-mail</strong>:&nbsp; <a href="#">khangan071001221001@gmail.com</a>
						</div>
						<!-- secondary menu right link area -->
						<div class="sm-right">
							<!-- social link -->
							<div class="sm-social-link">
								<a class="h-facebook" href="https://www.facebook.com/nguyenvankhangan/"><i class="fa fa-facebook"></i></a>
								<a class="h-twitter" href="#"><i class="fa fa-twitter"></i></a>
								<a class="h-google" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="h-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</nav>
				<!-- primary menu -->
				<nav class="navbar navbar-fixed-top navbar-default">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!-- logo area -->
							<a class="navbar-brand" href="#home">
								<!-- logo image -->
								<img class="img-responsive" src="img/logo/logo.png" alt="" />
							</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#latestalbum">Latest Album</a></li>
								<li><a href="#featuredalbum">Featured Album</a></li>							
								<li><a href="#portfolio">List</a></li>								
								<li><a href="#team">About me</a></li>
								<li><a href="#contact">Contact</a></li>
								<li><a href="cart.php">Cart</a></li>
								<li><a href="login.php">Login</a></li>

							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</header>
			<!--/ header end -->
			
			<!-- banner area -->
			<div class="banner">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="img/banner/b1.jpg" alt="...">
							<div class="container">
								<!-- banner caption -->
								<div class="carousel-caption slide-one">
									<!-- heading -->
									<h2 class="animated fadeInLeftBig"><i class="fa fa-music"></i> Khang An For You!</h2>
									<!-- paragraph -->
									<h3 class="animated fadeInRightBig">Find More Innovative &amp; Creative Music Albums.</h3>
									<!-- button -->
									<a href="#" class="animated fadeIn btn btn-theme">Download Here</a>
								</div>
							</div>
						</div>
						<div class="item">
							<img src="img/banner/b2.jpg" alt="...">
							<div class="container">
								<!-- banner caption -->
								<div class="carousel-caption slide-two">
									<!-- heading -->
									<h2 class="animated fadeInLeftBig"><i class="fa fa-headphones"></i> Listen It...</h2>
									<!-- paragraph -->
									<h3 class="animated fadeInRightBig">Lorem ipsum dolor sit amet, consectetur elit.</h3>
									<!-- button -->
									<a href="Music/Don'tLetMeDown.mp3" class="animated fadeIn btn btn-theme">Listen Now</a>
								</div>
							</div>
						</div>
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="fa fa-arrow-left" aria-hidden="true"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="fa fa-arrow-right" aria-hidden="true"></span>
					</a>
				</div>
			</div>
			<!--/ banner end -->
			
			<!-- block for animate navigation menu -->
			<div class="nav-animate"></div>
			
			<!-- Hero block area -->
			<div id="latestalbum" class="hero pad">
				<div class="container">
					<!-- hero content -->
					<div class="hero-content ">
						<!-- heading -->
						<h2>Latest Album</h2>
						<hr>
						<!-- paragraph -->
						<p>We sing the best <strong class="theme-color">Songs</strong> and now we control the world best <strong class="theme-color">Music</strong>.</p>
					</div>
					<!-- hero play list -->
					<div class="hero-playlist">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<!-- music album image -->
								<div class="figure">
									<!-- image -->
									<img class="img-responsive" src="img/album/1.jpg" alt="" />
									<!-- disk image -->
									<img class="img-responsive disk" src="img/album/1.jpg" alt="" />
								</div>
								<!-- album details -->
								<div class="album-details">
									<!-- title -->
									<h4>Perfect Music</h4>
									<!-- composed by -->
									<h5>By Jfla</h5>
									<!-- paragraph -->
									<p>Best Cover Music</p>
									<!-- button -->
									<a href="#" class="btn btn-lg btn-theme" id="playNowBtn"><i class="fa fa-play"></i>&nbsp; Play Now</a>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<!-- play list -->
								<div class="playlist-content">
									<ul class="list-unstyled">
										<?php
											$db = mysqli_connect("localhost","root","","sdlc");
											$qr = "SELECT * FROM song LIMIT 8";
											$rs = mysqli_query($db, $qr);
											while($row = mysqli_fetch_assoc($rs)){
												?>
													<li class="playlist-number">
											<!-- song information -->
											<div class="song-info">
												<!-- song title -->
												<h4><?php echo $row["Song_name"] ?></h4> 
												<audio id="audio_1" style="width: 230px"controls controlsList="nodownload" ><source src="audio/<?php echo $row['Song_mp3']  ?>" type="audio/mpeg" >
												</audio>
												<img class="card-img-top" style="width:80px " src=" <?php echo $row['Song_image'] ?>" alt="Card image cap">
												
											</div>
											<!-- music icon -->
											<!-- <div class="music-icon">
												<a href="abc/index.html"><i class="fa fa-play"></i></a>
												<a href="#"><i class="fa fa-pause"></i></a>
											</div> -->
											<div class="clearfix"></div>
										</li>
												<?php
											}
										?>
										
									</ul>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ hero end -->
			
			<!-- promo -->
			<div class="promo parallax-one pad">
				<div class="container">
					<!-- promo element -->
					<div class="promo-element ">
						<!-- heading -->
						<h3>Music Is An Art...</h3>
						<!-- paragraph -->
						<p>Music is an art form and cultural activity whose medium is sound organized in time. The common elements of music are <strong>pitch</strong>, <strong>rhythm</strong>, <strong>dynamics</strong> and the sonic qualities of <strong>timbre</strong> and <strong>texture</strong>.</p>
						<!-- link -->
						<a class="promo-link" href="Music/Titanium + Alone ( cover by J.Fla ).mp4"><i class="fa fa-play-circle"></i></a>
					</div>
				</div>
			</div>
			<!--/ promo end -->
			
			<!-- featured abbum -->
			<div class="featured pad" id="featuredalbum">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Featured Album</h2>
					</div>
					<!-- featured album elements -->
					<div class="featured-element">
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<!-- featured item -->
								<div class="featured-item ">
									<!-- image container -->
									<div class="figure">
										<!-- image -->
										<img class="img-responsive" src="img/featured/1.jpg" alt="" style="width:100%" />
										<!-- paragraph -->
										
									</div>
									<!-- featured information -->
									<div class="featured-item-info">
										<!-- featured title -->
										<h4>Hoa Hai Duong</h4>
										<!-- horizontal line -->
										<hr />
										<!-- some responce from social medial or web likes -->
										<p>1024+ <span class="label label-theme">Like</span> &nbsp;&nbsp; 1080+ <span class="label label-theme">Love</span></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<!-- featured item -->
								<div class="featured-item ">
									<!-- image container -->
									<div class="figure">
										<!-- image -->
										<img class="img-responsive" src="img/featured/2.jpg" alt="" style="width:86.5%" />
										<!-- paragraph -->
									</div>
									<!-- featured information -->
									<div class="featured-item-info">
										<!-- featured title -->
										<h4>Hoa Vo Sac</h4>
										<!-- horizontal line -->
										<hr />
										<!-- some responce from social medial or web likes -->
										<p>1024+ <span class="label label-theme">Like</span> &nbsp;&nbsp; 825+ <span class="label label-theme">Love</span></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<!-- featured item -->
								<div class="featured-item ">
									<!-- image container -->
									<div class="figure">
										<!-- image -->
										<img class="img-responsive" src="img/featured/3.jpg" alt="" style="width:100%" />
										<!-- paragraph -->
									</div>
									<!-- featured information -->
									<div class="featured-item-info">
										<!-- featured title -->
										<h4>Attention</h4>
										<!-- horizontal line -->
										<hr />
										<!-- some responce from social medial or web likes -->
										<p>1024+ <span class="label label-theme">Like</span> &nbsp;&nbsp; 825+ <span class="label label-theme">Love</span></p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- features end -->
			
			<!-- call to action -->
			<div class="cta parallax-one pad">
				<div class="container">
					<!-- cta element -->
					<div class="cta-element ">
						<div class="row">
							<div class="col-md-9 col-sm-8">
								<!-- heading -->
								<h3>Khang An, A Fully Viet Nam Album Pro</h3>
								<!-- paragraph -->
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="cta-btn text-center">
									<!-- purchase now button -->
									<a href="#" class="btn btn-default btn-lg">Download Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			
			
			<div class="portfolio pad" id="portfolio">
				<div>
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>List Music</h2>
					</div>
				</div>
				<!-- portfolio -->
				<div class="portfolio-content" id="portfolioOwl">
					<div class="item">
						<!-- item image -->
						<img class="img-responsive" src="img/portfolio/1.jpg" alt="">
						<!-- transparent background -->
						<div class="p-transparent"></div>
						<!-- on mouse hover details -->
						<div class="p-hover">
							<!-- heading /title -->
							<h3>Album Title</h3><hr>
							<!-- project details -->
							<p>Some details about album.</p>
							<!-- icon -->
							<a href="product.php"><i class="fa fa-share"></i></a>
						</div>
					</div>
					<div class="item">
						<!-- item image -->
						<img class="img-responsive" src="img/portfolio/2.jpg" alt="">
						<!-- transparent background -->
						<div class="p-transparent"></div>
						<!-- on mouse hover details -->
						<div class="p-hover">
							<!-- heading /title -->
							<h3>Album Title</h3><hr>
							<!-- project details -->
							<p>Some details about album.</p>
							<!-- icon -->
							<a href="product.php"><i class="fa fa-share"></i></a>
						</div>
					</div>
					<div class="item">
						<!-- item image -->
						<img class="img-responsive" src="img/portfolio/Datkkaa.jpg" alt="">
						<!-- transparent background -->
						<div class="p-transparent"></div>
						<!-- on mouse hover details -->
						<div class="p-hover">
							<!-- heading /title -->
							<h3>Album Title</h3><hr>
							<!-- project details -->
							<p>Some details about album.</p>
							<!-- icon -->
							<a href="product.php"><i class="fa fa-share"></i></a>
						</div>
					</div>				
					<div class="item">
						<!-- item image -->
						<img class="img-responsive" src="img/portfolio/5.jpg" alt="" style="width:90.5%">
						<!-- transparent background -->
						<div class="p-transparent"></div>
						<!-- on mouse hover details -->
						<div class="p-hover">
							<!-- heading /title -->
							<h3>Album Title</h3><hr>
							<!-- project details -->
							<p>Some details about album.</p>
							<!-- icon -->
							<a href="product.php"><i class="fa fa-share"></i></a>
						</div>
					</div>
					<div class="item">
						<!-- item image -->
						<img class="img-responsive" src="img/portfolio/6.jpg" alt="">
						<!-- transparent background -->
						<div class="p-transparent"></div>
						<!-- on mouse hover details -->
						<div class="p-hover">
							<!-- heading /title -->
							<h3>Album Title</h3><hr>
							<!-- project details -->
							<p>Some details about album.</p>
							<!-- icon -->
							<a href="product.php"><i class="fa fa-share"></i></a>
						</div>
					</div>
					<div class="item">
						<!-- item image -->
						<img class="img-responsive" src="img/portfolio/jack.jpg" alt="">
						<!-- transparent background -->
						<div class="p-transparent"></div>
						<!-- on mouse hover details -->
						<div class="p-hover">
							<!-- heading /title -->
							<h3>Album Title</h3><hr>
							<!-- project details -->
							<p>Some details about album.</p>
							<!-- icon -->
							<a href="product.php"><i class="fa fa-share"></i></a>
						</div>
					</div>
					
				</div>
				<div class="text-center">
					<a href="product.php" class="btn btn-lg btn-theme">View more</a>
				</div>
				<!-- portfolio end -->
			</div>
			<!-- work with us end -->
			
			
			
			<!-- about -->
			<div class="about" id="team">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Who We Are?</h2>
					</div>
					<!-- about what we are like content -->
					<div class="about-what-we">
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<div class="what-we-item ">
									<!-- heading with icon -->
									<h3><i class="fa fa-heartbeat"></i> What we do?</h3>
									<!-- paragraph -->
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit occaecat cupidatat non id est laborum.</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="what-we-item ">
									<!-- heading with icon -->
									<h3><i class="fa fa-hand-o-up"></i> Why choose us?</h3>
									<!-- paragraph -->
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit occaecat cupidatat non id est laborum.</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="what-we-item ">
									<!-- heading with icon -->
									<h3><i class="fa fa-map-marker"></i> Where we are?</h3>
									<!-- paragraph -->
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit occaecat cupidatat non id est laborum.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- our team -->
				<div class="team">
					<div class="container">	
						<!-- Team Member's Details -->
						<div class="team-content">
							<div class="row">
								
								<div class="col-md-3 col-sm-6">
									<!-- Team Member -->
									<div class="team-member  delay-four">
										<!-- Image Hover Block -->
										<div class="member-img">
											<!-- Image  -->
											<img class="img-responsive" src="img/user/4.jpg" alt="" />
											<!-- Hover block -->
											<div class="social text-center">
												<a href="https://www.facebook.com/nguyenvankhangan/"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-google-plus"></i></a>
												<a href="#"><i class="fa fa-linkedin"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</div>
										</div>
										<!-- Member Details -->
										<h3>Khang An</h3>
										<span class="designation">founder</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- about end -->	
			
			
			<!-- contact -->
			<div class="contact pad" id="contact">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Contact Us</h2>
					</div>
					<div class="row">	
						<div class="col-md-4 col-sm-4">
							<!-- contact item -->
							<div class="contact-item ">
								<!-- big icon -->
								<i class="fa fa-street-view"></i>
								<!-- contact details  -->
								<span class="contact-details">107-Nguyen Phong Sac-Cau Giay-Ha Noi</span>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<!-- contact item -->
							<div class="contact-item ">
								<!-- big icon -->
								<i class="fa fa-wifi"></i>
								<!-- contact details  -->
								<span class="contact-details">khangan071001221001@gmail.com</span>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<!-- contact item -->
							<div class="contact-item ">
								<!-- big icon -->
								<i class="fa fa-phone"></i>
								<!-- contact details  -->
								<span class="contact-details">0859250925</span>
							</div>
						</div>
					</div>
					<!-- form content -->
					<div class="form-content ">
						<!-- paragraph -->
						<p>Do you have any idea in your mind? Drop us a line.</p>
						<form role="form" id="contactForm" method="post">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="name">Name</label>
										<input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
									</div>
									<div class="form-group">
										<label for="email">Email</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
									</div>
									<div class="form-group">
										<label for="phone">Phone</label>
										<input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="message">Message</label>
										<textarea class="form-control" id="message" name="message" rows="9" placeholder="Enter message"></textarea>
									</div>
								</div>
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-lg btn-theme">Send Message</button>
							</div>
						</form>
												
					</div>

				</div>
			</div>
			<!-- contact end -->
			
			<!-- footer -->
			<footer>
				<div class="container">
					<!-- social media links -->
					<div class="social">
						<a class="h-facebook" href="https://www.facebook.com/nguyenvankhangan/"><i class="fa fa-facebook"></i></a>
						<a class="h-google" href="#"><i class="fa fa-google-plus"></i></a>
						<a class="h-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
						<a class="h-twitter" href="#"><i class="fa fa-twitter"></i></a>
					</div>
					<!-- copy right -->
					<p class="copy-right">&copy; Copyright 2021, author Khang An.</p>
				</div>
			</footer>
			<!-- footer end -->
			
			<!-- Scroll to top -->
			<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 
			
		</div>
		
		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- WayPoints JS -->
		<script src="js/waypoints.min.js"></script>
		<!-- Include js plugin -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- One Page Nav -->
		<script src="js/jquery.nav.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="js/custom.js"></script>
		
	</body>	
	
</html>