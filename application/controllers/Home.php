<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('GetModel','fetch');
		$this->load->library("pagination");
	}

	public function index(){
		
		$this->load->view('blog_main');
		// $this->All_blogs('_all');
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
		$this->load->view('blog_post');
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
