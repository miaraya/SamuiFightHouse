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

			
			<!-- Page Sub Menu
			============================================= -->
			<div id="page-menu" class="no-sticky">

				<div id="page-menu-wrap">

					<div class="container clearfix">

						<div class="menu-title">Portfolio <span>Filter</span></div>

							<nav>
								<ul class="custom-filter" data-container="#portfolio" data-active-class="current">
									<li class="current"><a href="#" data-filter="*"><div>Show All</div></a></li>
									<li><a href="#" data-filter=".pf-icons"><div>Icons</div></a></li>
									<li><a href="#" data-filter=".pf-illustrations"><div>Illustrations</div></a></li>
									<li><a href="#" data-filter=".pf-uielements"><div>UI Elements</div></a></li>
									<li><a href="#" data-filter=".pf-media"><div>Media</div></a></li>
									<li><a href="#" data-filter=".pf-graphics"><div>Graphics</div></a></li>
								</ul>
							</nav>

					<div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

					</div>

				</div>

			</div><!-- #page-menu end -->

			<!-- Content
			============================================= -->
			<section id="content">

			<div class="content-wrap" style="padding: 1px 0 0 0;">

				<!-- Portfolio Items
				============================================= -->
				<div id="portfolio" class="portfolio grid-container portfolio-nomargin portfolio-full portfolio-masonry mixed-masonry grid-container clearfix">

					<article class="portfolio-item pf-uielements pf-media">
						<div class="portfolio-image">
							<img src="images/gallery/thumbs/1.jpg" alt="SFH">
							<div class="portfolio-overlay">
								<div class="portfolio-desc">
									<h3>Core workout</h3>
								</div>
								<a href="images/gallery/1.jpg" class="left-icon" data-lightbox="image">
									<i class="icon-line-plus"></i>
								</a>
							</div>
						</div>
					</article>	


					<article class="portfolio-item pf-media pf-icons ">
						<div class="portfolio-image">
							<a href="portfolio-single.html">
								<img src="images/gallery/thumbs/2.jpg" alt="Team">
							</a>
							<div class="portfolio-overlay">
								<div class="portfolio-desc">
									<h3>Headquarters</h3>
								</div>
								<a href="images/gallery/2.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
							</div>
						</div>
					</article>
					<article class="portfolio-item pf-media pf-icons ">
						<div class="portfolio-image">
							<a href="portfolio-single.html">
								<img src="images/gallery/thumbs/3.jpg" alt="Team">
							</a>
							<div class="portfolio-overlay">
								<div class="portfolio-desc">
									<h3>Headquarters</h3>
								</div>
								<a href="images/gallery/3.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
							</div>
						</div>
					</article>
					<article class="portfolio-item pf-media pf-icons ">
						<div class="portfolio-image">
							<a href="portfolio-single.html">
								<img src="images/gallery/thumbs/4.jpg" alt="Team">
							</a>
							<div class="portfolio-overlay">
								<div class="portfolio-desc">
									<h3>Headquarters</h3>
								</div>
								<a href="images/gallery/4.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
							</div>
						</div>
					</article>
					<article class="portfolio-item pf-media pf-icons ">
						<div class="portfolio-image">
								<img src="images/gallery/thumbs/5.jpg" alt="Team">
							<div class="portfolio-overlay">
								<div class="portfolio-desc">
									<h3>Headquarters</h3>
								</div>
								<a href="images/gallery/5.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
							</div>
						</div>
					</article>
					<article class="portfolio-item pf-media pf-icons ">
						<div class="portfolio-image">
							<a href="portfolio-single.html">
								<img src="images/gallery/thumbs/6.jpg" alt="Team">
							</a>
							<div class="portfolio-overlay">
								<div class="portfolio-desc">
									<h3>Headquarters</h3>
								</div>
								<a href="images/gallery/6.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
							</div>
						</div>
					</article>

					<article class="portfolio-item pf-illustrations pf-icons wide">
						<div class="portfolio-image">
							<div class="fslider" data-arrows="false" data-speed="650" data-pause="3500" data-animation="fade">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide"><img src="images/gallery/thumbs/7.jpg" alt="Bridge Side"></a></div>
										<!-- <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/mixed/9-1.jpg" alt="Bridge Side"></a></div>
										<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/mixed/9-2.jpg" alt="Bridge Side"></a></div>
										-->
									</div>
								</div>
							</div>
							<div class="portfolio-overlay" data-lightbox="gallery">
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Bridge Side</a></h3>
								</div>
								<a href="images/gallery/7.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-plus"></i></a>
								<!-- <a href="images/portfolio/full/9-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
								<a href="images/portfolio/full/9-2.jpg" class="hidden" data-lightbox="gallery-item"></a>
								<a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a> -->
							</div>
						</div>
					</article>
















<!--





					<article class="portfolio-item pf-illustrations">
						<div class="portfolio-image">
								<img src="images/thumbs/23jpg" alt="Samui Fight House">
							<div class="portfolio-overlay">
								<div class="portfolio-desc">
									<span><a href="#">Illustrations</a></span>
								</div>
								<a href="images/portfolio/full/2.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
								<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
							</div>
						</div>
					</article>

					<article class="portfolio-item pf-graphics pf-uielements">
						<div class="portfolio-image">
							<a href="#">
								<img src="images/portfolio/4/mixed/3.jpg" alt="Mac Sunglasses">
							</a>
							<div class="portfolio-overlay">
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
									<span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
								</div>
								<a href="http://vimeo.com/89396394" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
								<a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
							</div>
						</div>
					</article>

					<article class="portfolio-item pf-icons pf-illustrations wide">
						<div class="portfolio-image">
							<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/mixed/4.jpg" alt="Morning Dew"></a></div>
										<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/mixed/4-1.jpg" alt="Morning Dew"></a></div>
									</div>
								</div>
							</div>
							<div class="portfolio-overlay" data-lightbox="gallery">
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
									<span><a href="#"><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
								</div>
								<a href="images/portfolio/full/4.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
								<a href="images/portfolio/full/4-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
								<a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
							</div>
						</div>
					</article>

					<article class="portfolio-item pf-uielements pf-media">
						<div class="portfolio-image">
							<a href="portfolio-single.html">
								<img src="images/portfolio/4/mixed/5.jpg" alt="Console Activity">
							</a>
							<div class="portfolio-overlay">
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Console Activity</a></h3>
									<span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
								</div>
								<a href="images/portfolio/full/5.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
								<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
							</div>
						</div>
					</article>

					<article class="portfolio-item pf-graphics pf-illustrations">
						<div class="portfolio-image">
							<div class="fslider" data-arrows="false">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/mixed/6.jpg" alt="Shake It"></a></div>
										<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/mixed/6-1.jpg" alt="Shake It"></a></div>
										<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/mixed/6-2.jpg" alt="Shake It"></a></div>
										<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/mixed/6-3.jpg" alt="Shake It"></a></div>
									</div>
								</div>
							</div>
							<div class="portfolio-overlay" data-lightbox="gallery">
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
									<span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
								</div>
								<a href="images/portfolio/full/6.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
								<a href="images/portfolio/full/6-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
								<a href="images/portfolio/full/6-2.jpg" class="hidden" data-lightbox="gallery-item"></a>
								<a href="images/portfolio/full/6-3.jpg" class="hidden" data-lightbox="gallery-item"></a>
								<a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
							</div>
						</div>
					</article>

					<article class="portfolio-item pf-uielements pf-icons">
						<div class="portfolio-image">
							<a href="portfolio-single-video.html">
								<img src="images/portfolio/4/mixed/7.jpg" alt="Backpack Contents">
							</a>
							<div class="portfolio-overlay">
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
									<span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
								</div>
								<a href="http://www.youtube.com/watch?v=kuceVNBTJio" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
								<a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
							</div>
						</div>
					</article>

					<article class="portfolio-item pf-graphics">
						<div class="portfolio-image">
							<a href="portfolio-single.html">
								<img src="images/portfolio/4/mixed/8.jpg" alt="Sunset Bulb Glow">
							</a>
							<div class="portfolio-overlay">
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
									<span><a href="#">Graphics</a></span>
								</div>
								<a href="images/portfolio/full/8.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
								<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
							</div>
						</div>
					</article>

					<article class="portfolio-item pf-illustrations pf-icons wide">
						<div class="portfolio-image">
							<div class="fslider" data-arrows="false" data-speed="650" data-pause="3500" data-animation="fade">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/mixed/9.jpg" alt="Bridge Side"></a></div>
										<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/mixed/9-1.jpg" alt="Bridge Side"></a></div>
										<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/mixed/9-2.jpg" alt="Bridge Side"></a></div>
									</div>
								</div>
							</div>
							<div class="portfolio-overlay" data-lightbox="gallery">
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Bridge Side</a></h3>
									<span><a href="#">Illustrations</a>, <a href="#">Icons</a></span>
								</div>
								<a href="images/portfolio/full/9.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
								<a href="images/portfolio/full/9-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
								<a href="images/portfolio/full/9-2.jpg" class="hidden" data-lightbox="gallery-item"></a>
								<a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
							</div>
						</div>
					</article>

					<article class="portfolio-item pf-graphics pf-media pf-uielements">
						<div class="portfolio-image">
							<a href="portfolio-single-video.html">
								<img src="images/portfolio/4/mixed/10.jpg" alt="Study Table">
							</a>
							<div class="portfolio-overlay">
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-video.html">Study Table</a></h3>
									<span><a href="#">Graphics</a>, <a href="#">Media</a></span>
								</div>
								<a href="http://vimeo.com/91973305" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
								<a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
							</div>
						</div>
					</article>

					<article class="portfolio-item pf-media pf-icons">
						<div class="portfolio-image">
							<a href="portfolio-single.html">
								<img src="images/portfolio/4/mixed/11.jpg" alt="Workspace Stuff">
							</a>
							<div class="portfolio-overlay">
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Workspace Stuff</a></h3>
									<span><a href="#">Media</a>, <a href="#">Icons</a></span>
								</div>
								<a href="images/portfolio/full/11.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
								<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
							</div>
						</div>
					</article>

					<article class="portfolio-item pf-illustrations pf-graphics wide">
						<div class="portfolio-image">
							<a href="portfolio-single-gallery.html">
								<img src="images/portfolio/4/mixed/12.jpg" alt="Workspace Stuff">
							</a>
							<div class="portfolio-overlay" data-lightbox="gallery">
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-gallery.html">Fixed Aperture</a></h3>
									<span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
								</div>
								<a href="images/portfolio/full/12.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
								<a href="images/portfolio/full/12-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
								<a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
							</div>
						</div>
					</article>
				-->

				</div><!-- #portfolio end -->

			</div>

		</section><!-- #content end -->

			
			

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

