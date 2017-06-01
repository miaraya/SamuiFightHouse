<!DOCTYPE html>
<html dir="ltr" lang="en-US">
	<head>
		<!-- Meta
		============================================= -->
		<?php $this->load->view('metaView'); ?>

		<title><?php echo $page_title;?></title>
	</head>

	<body class="stretched" style="background-color ">
		
		<!-- Document Wrapper
		============================================= -->
		<div id="wrapper" class="clearfix">

			<!-- Header
			============================================= -->
			<?php $this->load->view('headerView'); ?>
			<!-- #header end -->

			<!-- Content
			============================================= -->
			<section id="content" class="nomargin" style="background-color:black;">


					<div class="container clearfix dark center">
						<div class="entry-title" style="margin: 100px;">
							<h2>Please fill out this form if you are planning to train at Samui Fight House</h2>
						</div><!-- .entry-title end -->
						<br>

						<!-- Post Content
						============================================= -->
						<div class="typeform-widget" data-url="https://samuifighthouse.typeform.com/to/fOz8om" style="width: 100%; height: 800px;" > </div> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm", b="https://embed.typeform.com/"; if(!gi.call(d,id)) { js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script> 
									
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

