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
			  js.src = "//connect.facebook.net/us_EN/sdk.js#xfbml=1&version=v2.8";
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
			<section id="content" class="nomargin">

				<div class="section content-wrap nomargin">

					<div class="container clearfix">

						<div class="postcontent nobottommargin clearfix">

						<!-- Google Map
						============================================= -->
						<section id="google-map" class="gmap bottommargin" style="height: 300px;"></section>


						<!-- Contact Form
						============================================= -->
						<h3>Send us an Email</h3>

						<div class="contact-widget">

							<div class="contact-form-result"></div>

							<form class="nobottommargin" id="template-contactform" name="template-contactform" action="<?php echo base_url();  ?>include/sendemail.php" method="post">

								<div class="form-process"></div>

								<div class="col_half">
									<label for="template-contactform-name">Name <small>*</small></label>
									<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required label-border-thin" />
								</div>

								<div class="col_half col_last">
									<label for="template-contactform-email">Email <small>*</small></label>
									<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
								</div>

								<div class="clear"></div>

								<div class="col_full">
									<label for="template-contactform-subject">Subject <small>*</small></label>
									<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
								</div>

								

								<div class="clear"></div>

								<div class="col_full">
									<label for="template-contactform-message">Message <small>*</small></label>
									<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
								</div>

								<div class="col_full hidden">
									<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
								</div>

								<div class="col_full">
									<button class="button button-rounded button-reveal button-large button-border tright button-border-thin button-black" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message
									</button>

								</div>

							</form>
						</div>


						<div class="line"></div>


						<!-- Contact Info
					============================================= -->
					<div class="row clear-bottommargin">

						<div class="col-md-3 col-sm-6 bottommargin clearfix">
							<div class="feature-box fbox-center fbox-border fbox-dark">
								<div class="fbox-icon">
									<i class="icon-map-marker2"></i>
								</div>
								<h3>Our Headquarters
									<span class="subtitle">
										407/16 Moo 1 
										Hua Thanon
										Koh Samui
										Surat Thani
										Thailand
										84310
									</span>
								</h3>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 bottommargin clearfix">
							<div class="feature-box fbox-center fbox-border fbox-dark">
								<div class="fbox-icon">
									<i class="icon-phone3"></i>
								</div>
								<h3>Give us a call<span class="subtitle">+66 84 767 6068</span></h3>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 bottommargin clearfix">
							<div class="feature-box fbox-center fbox-border fbox-dark">
								<div class="fbox-icon">
									<a href="https://www.facebook.com/samuifighthouse/"><i class="icon-facebook2"></i></a>
								</div>
								<h3>Like us on Facebook<span class="subtitle">@samuifighthouse</span></h3>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 bottommargin clearfix">
							<div class="feature-box fbox-center fbox-border fbox-dark">
								<div class="fbox-icon">
									<a href="https://www.instagram.com/pro_samuifight_house/"><i class="icon-instagram2"></i></a>
								</div>
								<h3>Follow us on Instagram<span class="subtitle">@pro_samuifight_house</span></h3>
							</div>
						</div>

					</div><!-- Contact Info End -->


					</div><!-- .postcontent end -->



						<div class="sidebar nobottommargin col_last clearfix">
							<div class="fb-page" data-href="https://www.facebook.com/samuifighthouse/" data-tabs="timeline" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/samuifighthouse/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/samuifighthouse/">Samui Fight House</a></blockquote></div>

						</div>
					</div>

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
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIO7v3i7ZH-X1Q4nsGE6QRFWq2yydkLmE"></script>

		<script type="text/javascript" src="js/jquery.gmap.js"></script>

		<script type="text/javascript">

			$('#google-map').gMap({

				address: '407/16 Moo 1, Hua Thanon, Koh Samui, Surat Thani, 84310',
				maptype: 'ROADMAP',
				zoom: 14,
				markers: [
					{
						address: "407/16 Moo 1, Hua Thanon, Koh Samui, Surat Thani, 84310",
						html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Sah-wah-dee khrap!, welcome to <span style="color:yellow; background-color:black;">SAMUI FIGHT HOUSE</span></h4><p class="nobottommargin"> Our mission is to keep no more than 10 visiting students outside of our international fight team, to ensure high quality training and individual attention with a family and team atmosphere.</p></div>',
						icon: {
							image: "images/icons/map-icon.png",
							iconsize: [32, 39],
							iconanchor: [13,39]
						}
					}
				],
				doubleclickzoom: false,
				controls: {
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: false,
					streetViewControl: false,
					overviewMapControl: false
				}
			});

		</script>

	</body>
</html>

