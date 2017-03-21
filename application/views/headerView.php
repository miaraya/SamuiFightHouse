<header id="header" class="transparent-header dark full-header no-sticky style-2"  data-sticky-class="not-dark">

	<div id="header-wrap">

		<div class="container clearfix">

			<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

			<!-- Logo
			============================================= -->
			
			
			<div id="logo">
				<a href="<?php echo base_url(); ?>" class="standard-logo" data-dark-logo="<?php echo base_url(); ?>images/logo-yellow.svg"><img src="<?php echo base_url(); ?>images/logo-yellow.svg" alt="SAMUI FIGHT HOUSE"></a>
				<a href="<?php echo base_url(); ?>" class="retina-logo" data-dark-logo="<?php echo base_url(); ?>images/logo-yellow.svg"><img src="<?php echo base_url(); ?>images/logo-yellow.svg" alt="SAMUI FIGHT HOUSE"></a>
			</div>
			
			<!-- #logo end -->


			<!-- Primary Navigation
			============================================= -->
			<? $this->load->view('navView'); ?>
			<!-- #primary-menu end -->

		</div>

	</div>

</header>

<section id="page-title" class="page-title-parallax page-title-dark page-title-video">

				<div class="video-wrap">
					<video poster="<?php echo base_url(); ?>images/front-background.jpg" preload="auto" loop autoplay muted>
						<source src='<?php echo base_url(); ?>images/videos/home_video.m4v' type='video/mp4' />
					</video>
					<div class="video-overlay"></div>
				</div>

			

				<div class="container clearfix">

					<div class="col_half">
						<h1>
								<?php echo $header_title; ?>
							
						</h1>
						<span>
							<?php echo $header_description; ?>
						</span>
					</div>
			

					<div class="col_half col_last">
						<ol class="breadcrumb">
							<li><a href="<?php echo base_url(); ?>">Home</a></li>
							<li class="active"><?php echo $header_title;?></li>
						</ol>	
					</div>

				</div>

				<!-- Sticky Social
				============================================= -->

				<?php $this->load->view('stickyView'); ?>

				<!-- #sticky social end -->

</section>