<?php
	class SamuiFightHouse extends CI_Controller
	{


		public function index()
		{
			$this->load->helper('url');
			$data = array(
				'title' => 'Samui Fight House'
			);
			$this->load->view('mainView',$data);
		}

		public function faqs()
		{
			$this->load->helper('url');
			$data = array(
				'page_title' => 'Samui Fight House',
				'header_title' => 'FAQs',
				'header_description' => "Here you will find a collection of frequently asked questions (FAQ) by our students. If you have more or individual questions, feel free to contact us through our <a href='".base_url()."contact'>contact form</a>."
			);
			$this->load->view('faqsView',$data);
		}

		public function contact()
		{
			$this->load->helper('url');
			$data = array(
				'page_title' => 'Samui Fight House',
				'header_title' => 'Contact',
				'header_description' => 'If you have any questions about training at Samui Fight House or if you want make a reservation, please give us a call or fill out the contact form below.'
			);
			$this->load->view('contactView',$data);
		}

		public function sponsorship()
		{
			$this->load->helper('url');
			$data = array(
				'page_title' => 'Samui Fight House',
				'header_title' => 'Sponsorship',
				'header_description' => 'Each year, <span class="yellow" style="display:inline;">SAMUI FIGHT HOUSE</span> selects 6 elite athletes who are awarded a full scholarship with a view to advancing their professional fight careers.  The scholarship allows for the athlete to come and train at the fight house for six months and includes room and board, all aspects of training and organisation of professional fights.  Selected athletes will have already demonstrated their dedication to their training and have fought competitively.'
			);
			$this->load->view('sponsorView',$data);
		}

		public function team()
		{
			$this->load->helper('url');
			$data = array(
				'page_title' => 'Samui Fight House',
				'header_title' => 'Team',
				'header_description' => 'SAMUI FIGHT HOUSE has recruited the best trainers from around the world to its gym. In order to make you a successful fighter or just to get you in the most fit shape you have ever been, we ensure our instructors have the right knowledge and experience to work one-on-one with our students to achieve their personal goals.'
			);
			$this->load->view('teamView',$data);
		}
		public function training()
		{
			$this->load->helper('url');
			$data = array(
				'page_title' => 'Samui Fight House',
				'header_title' => 'Training',
				'header_description' => 'The Mission of <span class="yellow" style="display:inline;">SAMUI FIGHT HOUSE</span> is to keep no more than 10 visiting students outside of our international fight team, to ensure high quality training and individual attention with a family and team atmosphere.'
			);
			$this->load->view('trainingView',$data);
		}
		public function gallery()
		{
			$this->load->helper('url');
			$data = array(
				'page_title' => 'Samui Fight House',
				'header_title' => 'Gallery',
				'header_description' => ''
			);
			$this->load->view('galleryView',$data);
		}
		public function testimonials()
		{
			$this->load->helper('url');
			$data = array(
				'page_title' => 'Samui Fight House',
				'header_title' => 'Testimonials',
				'header_description' => 'Samui Fight House has successfully trained people from all over the world.  People from different cultures and vastly different backgrounds have all enjoyed their time with us.'
			);
			$this->load->view('testimonialsView',$data);
		}

	}
?>