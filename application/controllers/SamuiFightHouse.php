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

	}
?>