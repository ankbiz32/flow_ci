<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('GetModel','fetch');
		$this->load->model('AddModel','save');
		$this->load->library("pagination");
	}

	public function index(){
		$profile=$this->fetch->getWebProfile();
		$gallery=$this->fetch->getLimitInfo('gallery',5);
		$events=$this->fetch->getLimitInfo('events',4);
		$feedbacks=$this->fetch->getInfo('feedbacks');
		$popup=$this->fetch->getInfo('popup');
		$this->load->view('header',['profile'=>$profile , 
									'gallery' => $gallery,
									'events'=> $events,
									'popup'=> $popup[0],
									'feedbacks'=> $feedbacks
									]);
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function about(){
		$profile=$this->fetch->getWebProfile();
		$this->load->view('header',['profile'=>$profile
									]);
		$this->load->view('about');
		$this->load->view('footer');
	}

	public function event()
	{
		$ev=$this->fetch->getInfoById('events','id',$this->input->post('id'));
		echo json_encode($ev);
	}


	public function events(){

		$config = array();
		$config["base_url"] = base_url() . "events/page";
		$config["total_rows"] = $this->fetch->record_count('events');
		$config["per_page"] = 8;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$profile=$this->fetch->getWebProfile();
		$events=$this->fetch->fetch_events($config["per_page"], $page);
		$pages = $this->pagination->create_links();
		$this->load->view('header',['profile'=>$profile, 'events'=> $events, 'pages'=>$pages]);
		$this->load->view('events');
		$this->load->view('footer');
	}

	public function contact(){
		$profile=$this->fetch->getWebProfile();
		$this->load->view('header',['profile'=>$profile
									]);
		$this->load->view('contact');
		$this->load->view('footer');
	}

	public function gallery(){

		$config = array();
		$config["base_url"] = base_url() . "gallery/page";
		$config["total_rows"] = $this->fetch->record_count('gallery');
		$config["per_page"] = 9;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$profile=$this->fetch->getWebProfile();
		$gallery=$this->fetch->fetch_gallery($config["per_page"], $page);
		$pages = $this->pagination->create_links();
		$this->load->view('header',['profile'=>$profile, 'gallery'=> $gallery, 'pages'=>$pages]);
		$this->load->view('gallery');
		$this->load->view('footer');
	}

	public function flow(){
		$profile=$this->fetch->getWebProfile();
		$this->load->view('header',['profile'=>$profile
									]);
		$this->load->view('program-flow');
		$this->load->view('footer');
	}

	public function wolf(){
		$profile=$this->fetch->getWebProfile();
		$this->load->view('header',['profile'=>$profile
									]);
		$this->load->view('program-wolf');
		$this->load->view('footer');
	}

	public function blog(){
		$config = array();
		$config["base_url"] = base_url() . "blog/page";
		$config["total_rows"] = $this->fetch->record_count('blogs');
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$profile=$this->fetch->getWebProfile();
		$blogs=$this->fetch->fetch_blogs($config["per_page"], $page);
		$pages = $this->pagination->create_links();
		$recent=$this->fetch->getLimitInfo('blogs',4);
		$this->load->view('header',['profile'=>$profile,'blogs'=>$blogs,'pages'=>$pages,'recent'=>$recent
									]);
		$this->load->view('blog_main');
		$this->load->view('footer');
	}

	public function blog_post($id)
	{
		$profile=$this->fetch->getWebProfile();
		$blog=$this->fetch->getBlog($id);
		$recent=$this->fetch->getLimitInfo('blogs',4);
		$social_meta='
			<meta name="og:title" content="'.$blog->heading.'">
			<meta name="og:description" content="'.substr(trim(strip_tags($blog->short_descr)),0,100).'">
			<meta name="og:image" content="'.base_url("assets/images/").$blog->img.'">
			<meta name="og:url" content="'.base_url().'">
			<meta name="og:site_name" content="FLOW">

			<meta name="twitter:card" content="summary">
			<meta name="twitter:title" content="'.$blog->heading.'">
			<meta name="twitter:description" content="'.substr(trim(strip_tags($blog->short_descr)),0,100).'">
			<meta name="twitter:site" content="">
			<meta name="twitter:image" content="'.base_url("assets/images/").$blog->img.'">

			<meta itemprop="name" content="'.$blog->heading.'">
			<meta itemprop="description" content="'.substr(trim(strip_tags($blog->short_descr)),0,100).'">
			<meta itemprop="image" content="'.base_url("assets/images/").$blog->img.'">
		';
		$this->load->view('header',['profile'=>$profile,'blog'=>$blog,'recent'=>$recent,'social_meta'=>$social_meta
									]);
		$this->load->view('blog_post');
		$this->load->view('footer');
	}

	public function blogCat($id){
		$profile=$this->fetch->getWebProfile();
		$blogs=$this->fetch->getBlogsByCat($id);
		$category=$this->fetch->getInfoById('blog_categories','id',$id)->category;
		$recent=$this->fetch->getLimitInfo('blogs',4);
		$this->load->view('header',['profile'=>$profile,'blogs'=>$blogs,'recent'=>$recent,'category'=>$category
									]);
		$this->load->view('blog_main');
		$this->load->view('footer');
	}

	public function blogTag($tag){
		$tag = urldecode($tag);
		$profile=$this->fetch->getWebProfile();
		$blogs=$this->fetch->getBlogsByTag($tag);
		$recent=$this->fetch->getLimitInfo('blogs',4);
		$this->load->view('header',['profile'=>$profile,'blogs'=>$blogs,'recent'=>$recent,'tag'=>$tag
									]);
		$this->load->view('blog_main');
		$this->load->view('footer');
	}

	public function enquiry(){
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('org_name', 'Organisation name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('phone', 'Contact no.', 'required');
		
		if($this->form_validation->run() == true){
			$guest_email=$this->input->post('email');
			$to = $this->fetch->getWebProfile()->email;

			$msg ="You have a new enquiry from- \n\r Name:".$this->input->post('name')." \n\r Organisation name:".$this->input->post('org_name')." \n\r E-mail:".$this->input->post('email')." \n\r Contact no:".$this->input->post('phone')." \n\r Message:".$this->input->post('message');
			$subject = "FLOW - New Enquiry";
			$headers = "From:" . $guest_email;
			// mail($to, $subject, $msg, $headers);
			mail($to, $subject, $msg);

			$data = $this->input->post();
			$status= $this->save->saveInfo('enquiries',$data);

			if($status){
				$this->session->set_flashdata('success','Thank you for sending us a message. Our team will reach out to you shortly.' );
				redirect('/');
			}
			else{
				$this->session->set_flashdata('failed','Something went wrong. Please try again in some time.' );
				redirect('/');
			}
		
		}
		else{
			$this->session->set_flashdata('failed',strip_tags(validation_errors()));
			redirect('/');
		}
	}

	public function subscribe(){
		if($this->input->post('email')!=null){
			$guest_email=$this->input->post('email');
			$to = $this->fetch->getWebProfile()->email;

			$msg ="You have a new Subscription from- \n\r E-mail:".$guest_email;
			$subject = "FLOW - New Subscription";
			$headers = "From:" . $guest_email;
			// mail($to, $subject, $msg, $headers);
			mail($to, $subject, $msg);

			$data['email'] = $this->input->post('email');
			$count = $this->fetch->getInfoById('subscriptions','email',$data['email']);
			if($count){
				$status = true;
			}
			else{
				$status= $this->save->saveInfo('subscriptions',$data);
			}

			if($status){
				$this->session->set_flashdata('success','Thank you for subscribing to our newsletter!' );
				redirect('/');
			}
			else{
				$this->session->set_flashdata('failed','Something went wrong. Please try again in some time.' );
				redirect('/');
			}
		}
		else{
			$this->session->set_flashdata('failed','Please enter your email-id');
			redirect('/');
		}
	}

	
}
