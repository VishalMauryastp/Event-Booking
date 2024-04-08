<html>

<head>
	<script defer src="https://cdn.tailwindcss.com"></script>
	<!-- <script defer src="./assets/js/swiper.js"></script> -->
	<link rel="stylesheet" href="./assets/css/my.css">
	<?php include 'components/links.php'; ?>
</head>

<body id="home-version-1" class="home-version-1" data-style="default">
	<!-- <div class="loader loader-bar-ping-pong is-active"></div> -->
	<div id="site">
		<?php include 'components/header.php'; ?>


		<!--============================-->
		<!--=        	Banner         =-->
		<!--============================-->
		<!-- <section class="banner-five" data-bg-image="assets/img/bg5.jpg"> -->
		<section class="banner-five bg-black/50 bg-blend-multiply " data-bg-image="assets/img/home/s2.jpg">
			<div class="tim-container">
				<div id="para" class="paralax hidden">
					<div id="paralax-1" class="scene">
						<!-- <div data-depth="-0.50"><img src="assets/img/mouse-move.png" alt=""></div> -->
					</div>
				</div>

				<div class="baneer-five-content">
					<div class="content sp-container">
						<div class="sp-content ">
							<div class="sp-globe"></div>
							<h2 class="frame-1 ">EVENT MANAGEMENT COMPANIES </h2>
							<h2 class="frame-2">Russian Belly Dancers</h2>
							<h2 class="frame-3">Harmonious Melodies</h2>
							<h2 class="frame-4">Melodic Magic</h2>


						</div>
						<h3>We offer end-to-end event planning solutions, ensuring seamless execution and unforgettable experiences.</h3>
						<a class="tim-slide-btn backdrop-blur-[4px] hover:!border-solid hover:!text-white hover:!bg-[#ffc107]" href="#">Book Now</a>
					</div>
				</div>
				<!-- /.tim-container -->
			</div>
			<!-- /.tim-container -->

			<div class="smoke-wrqpper">
				<canvas id="canvas"></canvas>
			</div>

		</section>
		<!-- /#page-header -->








		<!--==============================-->
		<!--=        	Artist lineup         =-->
		<!--==============================-->
		<section class="section-padding-two artist-lineup">
			<div class="tim-container clearfix">
				<div class="row">
					<div class="section-title style-four">
						<h2 class="!text-[#ffc107]">Celebrating Moments: Unveiling Our Event Management Journey </h2>
						<p>Welcome to [Your Company Name], where we redefine event management through innovation, expertise, and dedication to excellence. As a leading event management company, we specialize in creating unforgettable experiences that leave a lasting impression on your guests.</p>
					</div>
				</div>
				<div class="swiper-container row" data-swiper-config='{ "loop": true, "prevButton":".swiper-button-prev", "nextButton": ".swiper-button-next", "speed": 700, "autoplay": "5000", "slidesPerView": 6, "spaceBetween": 0, "grabCursor": true,"breakpoints": { "1300": { "slidesPerView": 4 }, "767": { "slidesPerView": 3 }, "500": { "slidesPerView": 1 }}}'>
					<ul class="artist-line-wrapper swiper-wrapper">
						<?php
						$images = array("a1", "a2", "a3", "a4", "a1", "a2", "a3", "a4");
						foreach ($images as $value) { ?>
							<li class="artist-single clearfix swiper-slide">
								<img src="assets/img/<?php echo $value; ?>.jpg" alt="">
								<div class="artist-single-content">
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									</ul>
									<h6>James Hetfield</h6>
									<p>Band: Metallica</p>
								</div>
							</li>
						<?php } ?>
					</ul>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
			</div>
			<!-- /.tim-container -->
		</section>
		<!-- /#about -->


		<?php include 'components/aboutsection.php'; ?>
		<?php include 'components/artist.php'; ?>

		<!--==============================-->
		<!--=        	Latest release         =-->
		<!--==============================-->
		<section class="section-padding  artistondemand ">
		<!-- latest-relese -->
			<div class="container">
				<div class="row">
					<div class="section-title style-four ">
						<h2 class="!text-[#000] ">ARTIST ON DEMAND</h2>
					</div>
					<div class="d-flex justify-content-center">
						<div class="col-xl-10" id="moving-player">
							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-12">
									<div class="latest-album-left">
										<div class="cover-img bg-black/30  backdrop-blur-[2px] !bg-black/50">
											<img src="assets/img/cover.jpg" alt="">
										</div>
										<div class="albun-details ">



											<!-- <p class="text-white"><span>"Artist on demand"</span> typically refers to a service or platform where individuals or organizations can request custom artwork or creative services from artists. These services can range from commissioned paintings and illustrations to graphic design work, digital art, and even performances.</p>
											<p class="text-white">Platforms like these often connect clients with artists, allowing them to specify their requirements and preferences for the desired artwork or service. Artists then bid on or are assigned to these projects based on their expertise, style, and availability.</p>
											<p class="text-white">Such platforms can be beneficial for both clients and artists. Clients gain access to a diverse pool of talent and can find artists who can bring their visions to life, while artists have opportunities to showcase their skills and earn income through commissioned work.</p>
											<p class="text-white">Some platforms may also offer additional features such as portfolio hosting, project management tools, and payment processing to facilitate smooth interactions between clients and artists. Overall, artist on demand services contribute to the accessibility of custom artwork and creative services for a wide range of needs and budgets.</p> -->

											<p class="!text-[#444] !text-lg  mt-4">Welcome to the world of creativity unleashed - welcome to [Your Company Name]. We're here to transform your events into unforgettable experiences with our innovative Artist on Demand services.</p>

											<p class="!text-[#444] !text-lg  mt-4">Unleash Creativity: With Artist on Demand, we bring a touch of magic to your events by offering a diverse range of talented artists at your fingertips. Whether you're looking for live painters, musicians, dancers, or any other form of artistic expression, we've got you covered.</p>

											<p class="!text-[#444] !text-lg  mt-4">Customized Experiences: No two events are the same, and neither should be the artistic expressions within them. Our Artist on Demand services are fully customizable to suit your event theme, mood, and audience preferences. From classical elegance to cutting-edge contemporary, we curate the perfect artistic experience tailored just for you.</p>

											<p class="!text-[#444] !text-lg  mt-4">Seamless Integration: Integrating artistic performances seamlessly into your event has never been easier. Our dedicated team works closely with you to understand your vision and coordinates with our roster of talented artists to ensure flawless execution on the day of your event.</p>

											<p class="!text-[#444] !text-lg  mt-4">Elevate Your Event: Elevate your event from ordinary to extraordinary with our Artist on Demand services. Create immersive environments, captivate your audience, and leave a lasting impression that will have everyone talking long after the event is over.</p>

											<p class="!text-[#444] !text-lg  mt-4">Experience the Difference: Experience the difference that art can make at your next event with [Your Company Name]. Let us bring your vision to life and turn your event into a masterpiece with our Artist on Demand services.</p>

											<p class="!text-[#444] !text-lg  mt-4">Get in Touch: Ready to elevate your event with the magic of art? Contact us today to learn more about our Artist on Demand services and how we can help you create a truly unforgettable experience for your guests.</p>

										</div>
									</div>

								</div>
								<!-- <div class="col-sm-4 col-md-3 col-lg-4">
                        <div class="latest-album-right">
                            <h6>LISTEN DEMO NOW</h6>
                            <div class="latest-album-btn">
                                <a href="assets/img/test.mp3" class="sm2_button"><i></i></a>
                            </div>

                        </div>
                    </div> -->
								<!-- <div class="col-xl-12">
									<div class="record-player">
										<div class="player-main">
											<img src="assets/img/record.png" alt="">
										</div>
										<div class="player-main-shade">
											<img src="assets/img/record-shade.png" alt="">
										</div>
										<div class="record-key">
											<img src="assets/img/player-key.png" alt="">
										</div>
									</div>

								</div> -->




								<div class="bubble-wrap">
									<div class="bubble icon-1"></div>
									<div class="bubble icon-2 "></div>
									<div class="bubble icon-3"></div>
									<div class="bubble icon-4"></div>

									<div class="bubble icon-5"></div>
									<div class="bubble icon-2 "></div>
									<div class="bubble icon-4"></div>
									<div class="bubble icon-5"></div>

									<div class="bubble icon-1"></div>
									<div class="bubble icon-2 "></div>


									<div class="bubble icon-5"></div>
									<div class="bubble icon-3"></div>
									<div class="bubble icon-3"></div>

									<div class="bubble icon-2 "></div>
									<div class="bubble icon-3"></div>
									<div class="bubble icon-1"></div>
									<div class="bubble icon-2 "></div>
									<div class="bubble icon-3"></div>
									<div class="bubble icon-4"></div>
									<div class="bubble icon-4"></div>
									<div class="bubble icon-1"></div>
									<div class="bubble icon-5"></div>
									<div class="bubble icon-1"></div>
									<div class="bubble icon-2 "></div>
									<div class="bubble icon-4"></div>
									<div class="bubble icon-5"></div>
									<div class="bubble icon-1"></div>
									<div class="bubble icon-2 "></div>
									<div class="bubble icon-1"></div>
									<div class="bubble icon-2 "></div>
									<div class="bubble icon-4"></div>
									<div class="bubble icon-5"></div>
									<div class="bubble icon-5"></div>
									<div class="bubble icon-1"></div>
									<div class="bubble icon-4"></div>
									<div class="bubble icon-5"></div>
									<div class="bubble icon-3"></div>
									<div class="bubble icon-4"></div>
									<div class="bubble icon-2 "></div>
									<div class="bubble icon-3"></div>
									<div class="bubble icon-3"></div>
									<div class="bubble icon-4"></div>
									<div class="bubble icon-1"></div>
									<div class="bubble icon-5"></div>
									<div class="bubble icon-2 "></div>
									<div class="bubble icon-3"></div>
									<div class="bubble icon-1"></div>
									<div class="bubble icon-3"></div>
									<div class="bubble icon-4"></div>
									<div class="bubble icon-5"></div>

								</div>

								<div class="bubble-wrap-right">
									<div class="bubble icon-1"></div>
									<div class="bubble icon-2 "></div>
									<div class="bubble icon-3"></div>
									<div class="bubble icon-4"></div>

									<div class="bubble icon-5"></div>
									<div class="bubble icon-2 "></div>
									<div class="bubble icon-4"></div>
									<div class="bubble icon-5"></div>

									<div class="bubble icon-1"></div>
									<div class="bubble icon-2 "></div>


									<div class="bubble icon-5"></div>
									<div class="bubble icon-3"></div>
									<div class="bubble icon-3"></div>

									<div class="bubble icon-2 "></div>
									<div class="bubble icon-3"></div>
									<div class="bubble icon-1"></div>
									<div class="bubble icon-2 "></div>
									<div class="bubble icon-3"></div>
									<div class="bubble icon-4"></div>
									<div class="bubble icon-4"></div>
									<div class="bubble icon-1"></div>

									<div class="bubble icon-5"></div>

									<div class="bubble icon-1"></div>
									<div class="bubble icon-2 "></div>

									<div class="bubble icon-4"></div>
									<div class="bubble icon-5"></div>
									<div class="bubble icon-1"></div>
									<div class="bubble icon-2 "></div>
									<div class="bubble icon-1"></div>

									<div class="bubble icon-2 "></div>
									<div class="bubble icon-4"></div>
									<div class="bubble icon-5"></div>
									<div class="bubble icon-5"></div>
									<div class="bubble icon-1"></div>
									<div class="bubble icon-4"></div>
									<div class="bubble icon-5"></div>
									<div class="bubble icon-3"></div>
									<div class="bubble icon-4"></div>

									<div class="bubble icon-2 "></div>
									<div class="bubble icon-3"></div>

									<div class="bubble icon-3"></div>
									<div class="bubble icon-4"></div>
									<div class="bubble icon-1"></div>
									<div class="bubble icon-5"></div>
									<div class="bubble icon-2 "></div>
									<div class="bubble icon-3"></div>
									<div class="bubble icon-1"></div>
									<div class="bubble icon-3"></div>
									<div class="bubble icon-4"></div>
									<div class="bubble icon-5"></div>


								</div>
							</div>
						</div>
					</div>
					<!-- /.latest-album-info -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.tim-container -->
		</section>
		<!-- /#about -->


		<!--===========================-->
		<!--=        	About         =-->
		<!--===========================-->

		<section id="gallery" class="section-padding">
			<div class="tim-container">
				<div class="section-title text-center">
					<h2>Our <span class="!text-[#ffc107]">Services</span></h2>
				</div>
			</div>
			<!-- /.tim-container -->

			<div class="tim-container d-flex justify-content-center">
				<div class="col-xl-12">

					<ul class="tim-isotope-filter album-filter-button album-filter-button-two">
						<li class="current">
							<a href="" data-filter="*">All</a>
						</li>
						<li>
							<a href="" data-filter=".international">International Artist</a>
						</li>
						<li>
							<a href="" data-filter=".dance">Dance</a>
						</li>
						<li>
							<a href="" data-filter=".band">Band</a>
						</li>
						<li>
							<a href="" data-filter=".soundanddj">Sound and DJ</a>
						</li>
					</ul>

					<div class="tim-isotope tim-isotope-2 wow fadeInUp" data-wow-delay="0.8s">
						<ul class="tim-filter-items tim-album-items grid">
							<li class="grid-sizer"></li>
							<li class="tim-album-item grid-item band  ">
								<div class="tim-isotope-grid__img effect-active">
									<img src="img/1.jpg" alt="album thumb" />
								</div>

								<div class="gallery_details_wrap">
									<div class="gallery-info">

										<h4 class="album-title" onclick="window.location.href='intro1.php'">Silver Strings Band</h4>

									</div>
								</div>
							</li>
							<li class="tim-album-item grid-item band international">
								<div class="tim-isotope-grid__img">
									<img src="img/2.jpg" alt="album thumb" />
								</div>



								<div class="gallery_details_wrap">
									<div class="gallery-info">
										<h4 class="album-title" onclick="window.location.href='intro2.php'">Simphony Band</h4>

									</div>
								</div>
							</li>
							<li class="tim-album-item grid-item band">
								<div class="tim-isotope-grid__img">
									<img src="assets/img/3.jpg" alt="album thumb" />
								</div>



								<div class="gallery_details_wrap">
									<div class="gallery-info">
										<h4 class="album-title" onclick="window.location.href='intro3.php'">Trio Violin Band</h4>

									</div>
								</div>
							</li>
							<li class="tim-album-item grid-item international band">
								<div class="tim-isotope-grid__img">
									<img src="assets/img/4.jpg" alt="album thumb" />
								</div>


								<div class="gallery_details_wrap">
									<div class="gallery-info">
										<h4 class="album-title" onclick="window.location.href='intro4.php'">Loud Street Band</h4>

									</div>
								</div>
							</li>
							<li class="tim-album-item grid-item international band">
								<div class="tim-isotope-grid__img">
									<img src="img/3.jpg" alt="album thumb" />
								</div>



								<div class="gallery_details_wrap">
									<div class="gallery-info">
										<h4 class="album-title" onclick="window.location.href='intro5.php'">Russian Band</h4>

									</div>
								</div>
							</li>

							<li class="tim-album-item grid-item  band">
								<div class="tim-isotope-grid__img">
									<img src="img/4.jpg" alt="album thumb" />
								</div>


								<div class="gallery_details_wrap">
									<div class="gallery-info">

										<h4 class="album-title" onclick="window.location.href='intro6.php'">Latina Americana Band</h4>

									</div>
								</div>
							</li>

							<li class="tim-album-item grid-item dance">
								<div class="tim-isotope-grid__img">
									<img src="img/6.jpg" alt="album thumb" />
								</div>



								<div class="gallery_details_wrap">
									<div class="gallery-info">
										<h4 class="album-title" onclick="window.location.href='intro7.php'">Russian Dance Stroupe</h4>

									</div>
								</div>
							</li>

							<li class="tim-album-item grid-item dance">
								<div class="tim-isotope-grid__img">
									<img src="img/8.jpg" alt="album thumb" />
								</div>



								<div class="gallery_details_wrap">
									<div class="gallery-info">
										<h4 class="album-title" onclick="window.location.href='intro8.php'">Flash Mob Dancers</h4>

									</div>
								</div>
							</li>

							<li class="tim-album-item grid-item  soundanddj">
								<div class="tim-isotope-grid__img">
									<img src="assets/img/9.jpg" alt="album thumb" />
								</div>



								<div class="gallery_details_wrap">
									<div class="gallery-info">
										<h4 class="album-title" onclick="window.location.href='intro9.php'">International DJ</h4>

									</div>
								</div>
							</li>
							<li class="tim-album-item grid-item  soundanddj">
								<div class="tim-isotope-grid__img">
									<img src="img/10.jpg" alt="album thumb" />
								</div>


								<div class="gallery_details_wrap">
									<div class="gallery-info">
										<h4 class="album-title" onclick="window.location.href='intro10.php'">DJ For Party</h4>

									</div>
								</div>
							</li>
							<li class="tim-album-item grid-item dance  international">
								<div class="tim-isotope-grid__img">
									<img src="img/7.jpg" alt="album thumb" />
								</div>


								<div class="gallery_details_wrap">
									<div class="gallery-info">
										<h4 class="album-title" onclick="window.location.href='intro11.php'">Martini Girl</h4>

									</div>
								</div>
							</li>

							<li class="tim-album-item grid-item  international">
								<div class="tim-isotope-grid__img">
									<img src="img/9.jpg" alt="album thumb" />
								</div>



								<div class="gallery_details_wrap">
									<div class="gallery-info">
										<h4 class="album-title" onclick="window.location.href='intro12.php'">Cheer Leaders Girls</h4>

									</div>
								</div>
							</li>



						</ul>
					</div>
				</div>
			</div>
			<!-- /.tim-container -->
		</section>
		<!-- /#gallery -->





		<!--=============================-->
		<!--=        	Artitst         =-->
		<!--=============================-->
		<section id="artist" class=" d-none section-padding section-dark d-md-flex align-items-center mb-0 pb-0" data-parallax="image" data-bg-image="media/background/1.jpg">
			<video autoplay muted loop id="myVideo">
				<source src="assets/video.mp4" type="video/mp4">
			</video>
			<div class="container-fluid px-5 position-absolute">
				<div class="section-title text-center">
					<h2>Elevating Events: Our Promise to You</h2>
					<?php
					$para1 = "At [Your Company Name], we promise to take the stress out of event planning and execution, allowing you to relax and enjoy every moment of your special occasion. With our unwavering commitment to excellence, attention to detail, and personalized approach, we guarantee to deliver an event that exceeds your expectations in every way.";
					$para2 = "Studying an artist's history is crucial for art historians, critics, collectors, and enthusiasts to contextualize their work within the broader scope of art history and to appreciate the influences and motivations behind their creations. It allows for a deeper understanding of the artist's style, themes, techniques, and contributions to the art world.";
					$para3 = "Researching an artist's history typically involves gathering information from various sources such as biographies, interviews, archival records, exhibition catalogs, articles, and scholarly publications. By examining an artist's history, one can gain insights into the cultural, social, and historical contexts that shaped their artistic expression and contributed to their significance within the art world.";
					?>

					<p class="!text-xl"><?php echo $para1; ?></p>

				</div>
				<!-- /.section-title -->


				<!-- /.row -->
			</div>
			<!-- /.tim-container -->
		</section>



		<?php include 'components/testimonial.php'; ?>
		<?php include 'components/contact.php'; ?>
		<?php include 'components/footer2.php'; ?>
		<?php include 'components/footer.php'; ?>
	</div>
	</div>

	<?php include 'components/scripts.php'; ?>
</body>

</html>