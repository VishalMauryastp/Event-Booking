<html>

<head>
	<?php include 'components/links.php'; ?>
	<script defer src="https://cdn.tailwindcss.com"></script>
</head>

<body id="home-version-1" class="home-version-1" data-style="default">
	<div class=""></div>
	<!-- loader loader-bar-ping-pong is-active -->
	<div id="site">
		<?php include 'components/header_new.php'; ?>
		<section class="page-header" data-bg-image="assets/img/contact.jpg">
			<div class="tim-container">
				<div class="page-header-title text-center">
					<h3>Explore More</h3>
					<h2>Locations</h2>
				</div>

				<div class="breadcrumbs">
					<a href="#">Home</a>
					<span>/</span>
					<span>Locations</span>
				</div>

			</div>
			<!-- /.tim-container -->
		</section>


		<!-- Contact bottom area Start -->
		<section class="contuct-bottom section-padding">
			<div class="container">
				<div class="row   ">
					<div class="col-12">
						<div class="con-bottom-inner">
							<h4>Our Locations</h4>

							<div class="row">
								<?php
								$array = ['Jaipur', 'Delhi', 'Agra', 'Kanpur'];
								$array2 = ['img/location/ahmedabad.jpg', 'img/location/img2.jpg',  'img/location/img4.jpg', 'img/location/hyderabad.jpg', 'img/location/img5.jpg', 'img/location/img6.jpg', 'img/location/img7.jpg', 'img/location/img8.jpg'];

								foreach ($array as $index => $value) {
								?>
									<div class="col-lg-3 col-md-6 col-12 text-center text-md-start my-<?php echo ($index >= 5) ? '5' : ''; ?>">
										<div class="card">
											<img src="<?php echo $array2[$index]; ?>" class="card-img-top" alt="..." width="100%" height="150px">
											<div class="card-body">
												<h5 class="card-title"><?php echo $value; ?></h5>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Contact bottom area end -->

		<?php include 'components/footer3.php'; ?>
	</div>
	</div>

	<?php include 'components/scripts.php'; ?>
</body>

</html>