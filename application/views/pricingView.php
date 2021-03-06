<!DOCTYPE html>
<html dir="ltr" lang="en-US">
	<head>
		<!-- Meta
		============================================= -->
		<?php $this->load->view('metaView'); ?>

		<title><?php echo $page_title;?></title>
	</head>

	<body class="stretched">

		<!-- Document Wrapper
		============================================= -->
		<div id="wrapper" class="clearfix">

			<!-- Header
			============================================= -->
			<?php $this->load->view('headerView'); ?>
			<!-- #header end -->

			<!-- Content
			============================================= -->
			<section  class="page-section">
				<div class="container clearfix">

					<div class="pricing-box pricing-extended bottommargin topmargin clearfix">

						<div class="pricing-desc">

							<div class="pricing-title">
								<h3>New Members Intro Offer</h3>
							</div>

							<div class="lead">
								<p>
								<ul class="clearfix" style="list-style-type: none;">
									<li>5 Group Classes.</li>
									<li>Available for purchase once only and only for new starters.</li>
									<li>Expires 6 months from date of purchase.</li>

								</ul>
							</p>
							</div>
						</div>

						<div class="pricing-action-area">
							<div class="pricing-meta">
								As Low as
							</div>

							<div class="pricing-price">
								<span class="price-unit">&#3647;</span>2000<span class="price-tenure">5 Group Classes</span>
							</div>

							<div class="pricing-action">
								<a href="<?php echo site_url('contact'); ?>" class="button button-3d button-large btn-block nomargin">
									Book now
								</a>
							</div>
						</div>
					</div>
					<div class="pricing-box pricing-extended bottommargin topmargin clearfix">
						<div class="pricing-desc">
							<div class="pricing-title">
								<h3>Pre-Paid Monthly</h3>
							</div>
							<div class="lead">
								<p>
								<ul class="clearfix" style="list-style-type: none;">
									<li>1 Group Training Session per day.</li>
									<li>Available only for local residents/work permit holders.</li>
									<li>Package must be pre-paid in full for a minimum of 3 months.</li>

								</ul>
								</p>
							</div>
						</div>
						

						<div class="pricing-action-area">
							<div class="pricing-meta">
								As Low as
							</div>
							<div class="pricing-price">
								<span class="price-unit">&#3647;</span>3000<span class="price-tenure">per month</span>
							</div>
							<div class="pricing-action">
								<a href="<?php echo site_url('contact'); ?>" class="button button-3d button-large btn-block nomargin">Book now</a>
							</div>
						</div>
					</div>
					<div class="style-msg style-msg-light" style="background-color: #333;" data-animate="bounceInUp">
						<div class="sb-msg">
							<i class="icon-question-sign"></i>
							*Promotions must be paid in full during September 2017.
						</div>
					</div>




				</div>


			</section>
			<section id="section-prices" class="page-section"> 
			<div class="section parallax nomargin">
				<div class="container clearfix">

					<div class="heading-block">
						<h2>Regular price list</h2>
					</div>

					<div class="slider-caption slider-caption-center" data-animate="fadeIn" data-delay="200">
						<h1>
							<img src="<?php echo base_url(); ?>images/pricelist.png" class="img-fluid" alt="Samui Fight House Muay Thai">
						</h1>
					</div>
				</div>
				
			</div>

		</section>
			

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

