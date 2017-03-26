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
							<!-- Entry Title
							============================================= -->
							<div class="entry-title bottommargin">
								<h1 class="uppercase">This sponsorship is not for the faint hearted</h1>
							</div><!-- .entry-title end -->

							<div class="entry-content topmargin">

								<h3>A typical fighter’s day looks like this:</h3>
								<div class="lead">
									<p><b>7am:</b>  12km run </p>
									<p><b>8am:</b> 1 ½ hours of shadow boxing, clinching, pad work, bag work, cardio/core exercises, and technical instruction</p>
									<p><b>4pm:</b> 4km run <p>
									<p><b>4:30pm:</b> 1 ½ hours of shadow boxing, clinching, pad work, bag work, cardio/core exercises, and technical instruction</p>
								</div>

								<p>Fighters are responsible for maintaining the tidiness and cleanliness of the fight house and their accommodation.  
									There is a 10pm curfew and alcohol, drugs and women are prohibited. </p>
								<p>As you can see, to become a competitive Muay Thai fighter requires a huge amount of dedication, focus and commitment.  
									And it’s not just the fighters that are working hard. Training a fighter is no easy task. Muay Thai is extremely technical 
									and the difference between a winning fighter and a losing one can come down to the quality of the training as well as the 
									fighter’s mental conditioning. SAMUI FIGHT HOUSE is proud to have as their Kru, Sean Douglas. 
									Sean has competed in Muay Thai, Jiu Jitsu, Boxing and Mixed Martial Arts (MMA) in Korea, Japan and throughout south-east Asia. 
									He has appeared at Bangkok’s legendary <a href="http://www.muaythailumpinee.net">Lumpinee Stadium</a> in bouts screened 
									nationwide on Thai TV and he won the world bantamweight MMA title in Singapore under the auspices of promoters King of the Cage.  
									Sean has been involved in Muay Thai camps and training in Thailand for more than fifteen years and has taught elite boxers, 
									Olympic athletes, Hollywood movie stars, stuntmen, NFL footballers, top politicians and corporate executives.
								</p>
								<P>In addition to Sean, each fighter will work extensively with other highly qualified trainers to ensure that all aspects of 
									physical and mental conditioning are met.  Providing this level of care and training is not cheap – Samui Fight House 
									personally invests over $6,000 in each fighter over their six months training.  This cost does not include flights, body work 
									which may be required to help the fighter’s body recuperate or any other necessities whilst the fighter is resident at 
									Samui Fight House.  Money is always an issue as many of the selected athletes do not come from wealthy backgrounds and 
									sometimes are simply unable to afford the flight to take up a potential scholarship. SAMUI FIGHT HOUSE is always looking 
									for individuals or companies that appreciate the level of work and dedication it requires to compete successfully and that 
									are willing to help support a fighter.</P>
								<P>If you’re interested in helping to sponsor a fighter, please click the link below.  Any donation, no matter how small, 
									can make a huge difference to the success of our fighters.  An improved diet, a regular massage, a new pair of gloves – each 
									of these can be the difference between winning or losing. Corporate sponsorship that provides equipment, clothing etc 
									is also always appreciated.  Please contact Sean for more details. SAMUI FIGHT HOUSE provides regular updates via social 
									media of all sponsored fighters so you can see how your sponsorship money is utilised.  These guys are working exceptionally 
									hard and would greatly appreciate your support!</p>

						</div>
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

