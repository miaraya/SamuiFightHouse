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
		<!--	<div id="page-menu" class="no-sticky">

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

				</div> -->

			</div><!-- #page-menu end -->

			<!-- Content
			============================================= -->
			
			<section id="content" class="" style="background-color:black;">

			<div id="flickrembed"></div>
			<script src='https://flickrembed.com/embed_v2.js.php?source=flickr&layout=responsive&input=www.flickr.com/photos/154566393@N05/&sort=3&by=user&theme=tiles_nested&scale=fit&limit=10&skin=alexis&autoplay=true'></script>

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

