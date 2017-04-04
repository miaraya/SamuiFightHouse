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
			<section class="nomargin"  data-stellar-background-ratio="0.6">
			
				<div class="section content-wrap nomargin">
					
					<div class="container clearfix">
						
						<div class="postcontent nobottommargin clearfix">
						</div>
						<div class="sidebar nobottommargin col_last clearfix">
							<div class="fb-page" data-href="https://www.facebook.com/samuifighthouse/" data-tabs="timeline" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/samuifighthouse/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/samuifighthouse/">Samui Fight House</a></blockquote></div>

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

