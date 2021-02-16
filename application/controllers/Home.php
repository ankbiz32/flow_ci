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
		$this->load->view('header',['profile'=>$profile , 
									'gallery' => $gallery,
									'events'=> $events,
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
		$profile=$this->fetch->getWebProfile();
		$events=$this->fetch->getInfo('events');
		$this->load->view('header',['profile'=>$profile , 
									'events'=> $events
									]);
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
		$profile=$this->fetch->getWebProfile();
		$gallery=$this->fetch->getInfo('gallery');
		$this->load->view('header',['profile'=>$profile , 
									'gallery'=> $gallery
									]);
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
		$profile=$this->fetch->getWebProfile();
		$this->load->view('header',['profile'=>$profile
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


	public function All_blogs($_cat)
	{
		
		$config = array();
		$config["base_url"] = base_url() . "Home/All_blogs/_all/";
		$config["total_rows"] = $this->fetch->record_count('blogs');
		$config["per_page"] = 6;
		$config["uri_segment"] = 4;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(4) : 0;
		$blogData["results"] = $this->fetch->fetch_blogs($config["per_page"], $page);
		$blogData["links"] = $this->pagination->create_links();
		$profile=$this->fetch->getWebProfile();
		$blogs=$this->fetch->getFeaturedBlogs();
		$ann=$this->fetch->getNotices();
		$this->load->view('header',['profile'=>$profile, 
									'featblogs' => $blogs,
									'ann' => $ann,
									'blogData'=> $blogData
									]);

		$this->load->view('blogHeader');
		$this->load->view('blog');
		$this->load->view('blogFooter');
		$this->load->view('footer');
	}

	public function blog_post($id)
	{
		$this->load->view('header');
		$this->load->view('blog_post');
		$this->load->view('footer');
	}

	public function categories()
	{
		$profile=$this->fetch->getWebProfile();
		$blogs=$this->fetch->getBlogsByOrder();
		$blogCategories=$this->fetch->getBlogCategories();
		$this->load->view('header',['profile'=>$profile , 
									'blogs' => $blogs,
									'blogCategories'=> $blogCategories
									]);
		$this->load->view('blogHeader');
		$this->load->view('blogCategories');
		$this->load->view('blogFooter');
		$this->load->view('footer');
	}
}
