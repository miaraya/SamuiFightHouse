<!DOCTYPE html>
<html dir="ltr" lang="en-US">
	<head>
		<!-- Meta
		============================================= -->
		<?php $this->load->view('metaView'); ?>

		<title><?php echo $page_title;?></title>
	</head>

	<body class="stretched">
		<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
			</script>

		<!-- Document Wrapper
		============================================= -->
		<div id="wrapper" class="clearfix">

			<!-- Header
			============================================= -->
			<?php $this->load->view('headerView'); ?>
			<!-- #header end -->

			<!-- Content
			============================================= -->
			<section class="nomargin nopadding section ">

				<div class="row clearfix common-height ">

					<!-- Muay Thai -->
					<div 	class="col-md-6 center col-padding" 
							data-animate="fadeInLeft">
							<div class="entry clearfix">
								<div class="entry-image clearfix">
									<div class="portfolio-single-image masonry-thumbs col-3" data-big="1,5" data-lightbox="gallery">
										<a href="images/gallery/sean/1.jpg" data-lightbox="gallery-item">
											<img class="image_fade" src="images/gallery/sean/thumbs/1.jpg" alt="">
										</a>
										<a href="images/gallery/sean/2.jpg" data-lightbox="gallery-item">
											<img class="image_fade" src="images/gallery/sean/thumbs/2.jpg" alt="">
										</a>
										<a href="images/gallery/sean/3.jpg" data-lightbox="gallery-item">
											<img class="image_fade" src="images/gallery/sean/thumbs/3.jpg" alt="">
										</a>
										<a href="images/gallery/sean/4.jpg" data-lightbox="gallery-item">
											<img class="image_fade" src="images/gallery/sean/thumbs/4.jpg" alt="">
										</a>
										<a href="images/gallery/sean/5.jpg" data-lightbox="gallery-item">
											<img class="image_fade" src="images/gallery/sean/thumbs/5.jpg" alt="">
										</a>
										<a href="images/gallery/sean/6.jpg" data-lightbox="gallery-item">
											<img class="image_fade" src="images/gallery/sean/thumbs/6.jpg" alt="">
										</a>
									</div>
									
								</div>
							</div>

					</div>

					<div class="col-md-6 text-justify col-padding" data-animate="fadeInRight">
						<div>
							<div class="heading-block center">
								<h1>SEAN DOUGLAS</h1>
								<span></span>
							</div>

							<p class="t300">Fighting under his Muay Thai name, “Hungry Tiger”, Sean Douglas is in his final season as a professional kickboxer, some 18 years after gaining his first pro-licence in California. He won State and regional titles in the USA and was the first American to contest a world title under the International Kickboxing Federation.</p>
							<p class="t300">He came to Asia in his early twenties, competing in Muay Thai, Jiu Jitsu, boxing and Mixed Martial Arts (MMA) in Korea, Japan and throughout south-east Asia. Sean moved to Thailand aged 28 to compete with the world’s best. He has appeared at Bangkok’s legendary Lumpinee Stadium in bouts screened nationwide on Thai TV and won the world bantamweight MMA title in Singapore under the auspices of promoters King of the Cage.</p>
							<p class="t300">His love of Muay Thai fighting is exceeded only by his passion for teaching and coaching. He trained fellow US Marines as a 19-year-old and has since taught elite boxers, Olympic athletes, Hollywood movie stars, stuntmen, NFL footballers, top politicians and corporate executives.</p>
							<p class="t300">In 2003, he founded Tiger Muay Thai, Thailand’s first and most famous MMA gym, in Phuket. He is owner and founder of the exclusive Samui Fight House, the island’s only MMA facility where he trains top level kickboxers from Thailand and abroad, as well as a handful of carefully selected amateurs.</p>
						</div>
					</div>

				</div>
				
				<div class="line"></div>

				<!-- BJJ -->
				<div class="row clearfix common-height">
					<div class="col-md-6 text-justify col-padding" data-animate="fadeInLeft">
						<div>
							<div class="heading-block center">
								<h3>Christian Jungerby</h3>
								<span></span>
							</div>
			
							<p class="t300"> Chris has 50+ fights in Thailand with fights LIVE on Thai television against some of Thailand's best fighters. He is a multiple Bangla Stadium Champion, silver medalist in Ayutthaya Nai Khanom Thom 8-man tournament on National Muay Thai Festival, former Channel 8 MaxMuayThai Fighter and is still active fighting known for his devastating knees, insanely great fitness level, his style of always fighting until the end, the fighting heart of lion. Chris is great with the young ones and has the ability to make the sessions both fun and challenging. </p>
							<p class="t300">With tons of experience in nutrition through both university studies aswell as personal practice, he lives the way he teaches and is our go-to guy when it comes to weight loss and nutritional advice. Chris also offer meal-preparation customized for you to reach your weight, performance and fitness goals.</p>
						</div>
					</div>

					<div 	class="col-md-6 center col-padding" 
							data-animate="fadeInLeft">
							<div class="entry clearfix">
								<div class="entry-image clearfix">
									<div class="portfolio-single-image masonry-thumbs col-3" data-big="1,5" data-lightbox="gallery">
										<a href="images/gallery/chris/1.jpg" data-lightbox="gallery-item">
											<img class="image_fade" src="images/gallery/chris/thumbs/1.jpg" alt="">
										</a>
										<a href="images/gallery/chris/2.jpg" data-lightbox="gallery-item">
											<img class="image_fade" src="images/gallery/chris/thumbs/2.jpg" alt="">
										</a>
										<a href="images/gallery/chris/3.jpg" data-lightbox="gallery-item">
											<img class="image_fade" src="images/gallery/chris/thumbs/3.jpg" alt="">
									
										</a>
									</div>
									
								</div>
							</div>

					</div>

				</div>
			

			<!-- #content end -->

			<!-- Footer
			============================================= -->
			<?php $this->load->view('footerView'); ?>
			<!-- #footer end -->
		</div> <!-- wrapper end -->

		<div id="gotoTop" class="icon-angle-up"></div>

		<?php $this->load->view('scriptView'); ?>

	</body>
</html>

