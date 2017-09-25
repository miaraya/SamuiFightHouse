<!DOCTYPE html>
<html dir="ltr" lang="en-US">
	<head>
		<!-- Meta
		============================================= -->
		<?php $this->load->view('metaView'); ?>

		<title><?php echo $page_title;?></title>
	</head>

	<body class="stretched" style="background-color:black;">
		<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

		<!-- Document Wrapper
		============================================= -->
		<div id="wrapper" class="clearfix">

			<!-- Header
			============================================= -->
			<?php $this->load->view('headerView'); ?>
			<!-- #header end -->

			<!-- Content
			============================================= -->
			<section class="nomargin nopadding section dark">

				<div class="row clearfix">

					<!-- Facebook reviews -->
					<div 	class="col-md-6 center col-padding" 
							data-animate="fadeInLeft">
							<div class="heading-block">
						<h2>Facebook reviews</h2>
					</div>

				<div
					class="fb-post" 
					data-href="https://www.facebook.com/IemaBrdlvr/posts/1682588948422326:0" 
					data-show-text="false">
					<blockquote
						cite="https://www.facebook.com/IemaBrdlvr/posts/1682588948422326:0" 
						class="fb-xfbml-parse-ignore">
						<p>Experience, Strength, Discipline. The ingredients that make a true fighter. 
						Coach Sean Douglas comes from these...</p>
						Posted by <a href="#" role="button">Wendy Douglas-Winchell</a> on&nbsp;
						<a href="https://www.facebook.com/IemaBrdlvr/posts/1682588948422326:0">Sunday, 2 April 2017</a>
					</blockquote>
				</div>
												<div class="line line-sm"></div>

				<div class="fb-post" data-href="https://www.facebook.com/Abbas44/posts/10153417851034756:0" data-show-text="false"><blockquote cite="https://www.facebook.com/Abbas44/posts/10153417851034756:0" class="fb-xfbml-parse-ignore"><p>Excellent place to learn Muay Thai, Boxing, BJJ and Wrestling. The  coaches are all pros with years of experience in...</p>Posted by <a href="#" role="button">Shafaq Abbas Choudhury</a> on&nbsp;<a href="https://www.facebook.com/Abbas44/posts/10153417851034756:0">Tuesday, 26 May 2015</a></blockquote></div>
				<div class="line line-sm"></div>
				<div class="fb-post" data-href="https://www.facebook.com/olivier.taz.3/posts/10207773083637173:0" data-show-text="false"><blockquote cite="https://www.facebook.com/olivier.taz.3/posts/10207773083637173:0" class="fb-xfbml-parse-ignore"><p>I went one month for training and I liked it so much. If you come hear, go for it, for beginner or confirmed !!!</p>Posted by <a href="#" role="button">Taz Pura Vida</a> on&nbsp;<a href="https://www.facebook.com/olivier.taz.3/posts/10207773083637173:0">Wednesday, 17 February 2016</a></blockquote></div>	
					<div class="dark">
						<br>
							<a href="https://www.facebook.com/pg/samuifighthouse/reviews/" 
								class="button button-rounded button-reveal button-large button-border tright button-border-thin yellow">
								<span>More Facebook reviews</span></a>
						</div>
									</div>



					<!-- Trip Advisor reviews -->
					<div 	class="col-md-6 center col-padding" 
							data-animate="fadeInLeft">
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

