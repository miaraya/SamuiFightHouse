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
			<section  class="page-section section nomargin" style="background-color: white;">
				<div class="container clearfix">
					<div class="heading-block">
						<h2>weekly schedule</h2>
					</div>

					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr class="lead">
									<th>Time</th>
									<th>Monday</th>
									<th>Tuesday</th>
									<th>Wednesday</th>
									<th>Thursday</th>
									<th>Friday</th>
									<th>Saturday</th>
									<th>Sunday</th>
								</tr>
							</thead>
							
							<tbody>
								<tr>
									<td>7am - 8am</td>
									<td>Team Run</td>
									<td>Team Run</td>
									<td>Team Run</td>
									<td>Team Run</td>
									<td>Team Run</td>
									<td class="active">Closed</td>
									<td class="active">Closed</td>
								</tr>
								<tr>
									<td>8am - 10am</td>
									<td><strong>Muay Thai</strong></td>
									<td><strong>Muay Thai</strong></td>
									<td><strong>Muay Thai</strong></td>
									<td><strong>Muay Thai</strong></td>
									<td><strong>Muay Thai</strong></td>
									<td class="active">Closed</td>
									<td class="active">Closed</td>
								</tr>
								<tr>
									<td>10am - 3pm</td>
									<td>Available for PT</td>
									<td>Available for PT</td>
									<td>Available for PT</td>
									<td>Available for PT</td>
									<td>Available for PT</td>
									<td>Available for PT</td>
									<td>Available for PT</td>
								</tr>
								<tr>
									<td>3pm - 3:30pm</td>
									<td>Team Run</td>
									<td>Team Run</td>
									<td>Team Run</td>
									<td>Team Run</td>
									<td>Team Run</td>
									<td>Available for PT</td>
									<td>Available for PT</td>
								</tr>
								<tr>
									<td>3:30pm - 6pm</td>
									<td><strong>Muay Thai</strong></td>
									<td><strong>Muay Thai</strong></td>
									<td><strong>Muay Thai</strong></td>
									<td><strong>Muay Thai</strong></td>
									<td><strong>Muay Thai</strong></td>
									<td class="active">Closed</td>
									<td class="active">Closed</td>
								</tr>
							</tbody>
						</table>
					</div><!-- /.table-responsive -->
								<div class="line line-sm"></div>
					
					
					<h3>Team Run: Run with your fellow Muay Thai trainees</h3>
					<div class="lead">
								<p>
								All runs are at a slow but steady pace. Morning run distance will vary from 6km-10km.  Afternoon run distance will be 5km or less. You are welcome to join part or all of this session or just attend the Muay Thai training sessions.
								</p>
					</div>
					<h3>Muay Thai</h3>
					<div class="lead">
								<p>
								Group training session; maximum of 10 participants.  Training will include: cardio, pad, clinching, bag, sparring.

								</p>
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

