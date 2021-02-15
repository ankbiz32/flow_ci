<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('GetModel','fetch');
		$this->load->library("pagination");
	}

	public function index(){
		// $profile=$this->fetch->getWebProfile();
		// $blogs=$this->fetch->getBlogsByOrder();
		// $blogCategories=$this->fetch->getBlogCategories();
		// $this->load->view('header',['profile'=>$profile , 
		// 							'blogs' => $blogs,
		// 							'blogCategories'=> $blogCategories
		// 							]);
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function about(){
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
	}

	public function events(){
		$this->load->view('header');
		$this->load->view('events');
		$this->load->view('footer');
	}

	public function contact(){
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}

	public function gallery(){
		$this->load->view('header');
		$this->load->view('gallery');
		$this->load->view('footer');
	}

	public function flow(){
		$this->load->view('header');
		$this->load->view('program-flow');
		$this->load->view('footer');
	}

	public function wolf(){
		$this->load->view('header');
		$this->load->view('program-wolf');
		$this->load->view('footer');
	}

	public function blog(){
		// $profile=$this->fetch->getWebProfile();
		// $blogs=$this->fetch->getBlogsByOrder();
		// $blogCategories=$this->fetch->getBlogCategories();
		// $this->load->view('header',['profile'=>$profile , 
		// 							'blogs' => $blogs,
		// 							'blogCategories'=> $blogCategories
		// 							]);
		$this->load->view('header');
		$this->load->view('blog_main');
		$this->load->view('footer');
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
