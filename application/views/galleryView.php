<!DOCTYPE html>
<html dir="ltr" lang="en-US">
	<head>
		<!-- Meta
		============================================= -->
		<?php $this->load->view('metaView'); ?>

		<title><?php echo $page_title;?></title>
	</head>

	<body class="stretched" style="background-color:black;">
		<!-- Document Wrapper
		============================================= -->
		<div id="wrapper" class="clearfix">

			<!-- Header
			============================================= -->
			<?php $this->load->view('headerView'); ?>
			<!-- #header end -->

			</div><!-- #page-menu end -->

			<!-- Content
			============================================= -->
			
			<section id="" class="page-section">

			<div id="flickrembed"></div>
			<script src='https://flickrembed.com/embed_v2.js.php?source=flickr&layout=responsive&input=www.flickr.com/photos/154566393@N05/&sort=3&by=user&theme=tiles_nested&scale=fit&limit=100&skin=alexis&autoplay=true'></script>

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

