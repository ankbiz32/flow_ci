<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

        function __construct(){
                parent:: __construct();
                $this->load->model('GetModel','fetch');
                $this->redirectIfNotLoggedIn();
        }

        public function index()
        {
                $enq=$this->fetch->getEnquiries();
                $this->load->view('admin/adminheader',['enq' => $enq]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/dashboard'); 
                $this->load->view('admin/adminfooter');  
        }

        public function subscriptions()
        {
                $enq=$this->fetch->getInfo('subscriptions');
                $this->load->view('admin/adminheader',['enq' => $enq]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/subscriptions'); 
                $this->load->view('admin/adminfooter');  
        }

        public function Blog()
        {
                $blogs=$this->fetch->getInfo('blogs');
                $this->load->view('admin/adminheader', ['blogs' => $blogs]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/adminBlog'); 
                $this->load->view('admin/adminfooter');  
        }


        public function Announcement()
        {
                $notices=$this->fetch->getNotices();
                $this->load->view('admin/adminheader',['notices' => $notices,
                                                        'adminTitle'=>'Announcement'
                                                        ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/adminNotice'); 
                $this->load->view('admin/adminfooter');  
        }

        public function events()
        {
                $data=$this->fetch->getInfo('events');
                $this->load->view('admin/adminheader',['data' => $data,
                                                        'adminTitle'=>'Events'
                                                        ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/events'); 
                $this->load->view('admin/adminfooter');  
        }


        public function feedbacks()
        {
                $data=$this->fetch->getInfo('feedbacks');
                $this->load->view('admin/adminheader',['data' => $data,
                                                        'adminTitle'=>'Feedbacks'
                                                        ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/feedbacks'); 
                $this->load->view('admin/adminfooter');  
        }

        public function gallery()
        {
                $data=$this->fetch->getInfo('gallery');
                $this->load->view('admin/adminheader',['data' => $data,
                                                        'adminTitle'=>'Gallery'
                                                        ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/gallery'); 
                $this->load->view('admin/adminfooter');  
        }

        public function popup()
        {
                $data=$this->fetch->getInfo('popup');
                $this->load->view('admin/adminheader',['data' => $data,
                                                        'adminTitle'=>'Popup'
                                                        ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/popup'); 
                $this->load->view('admin/adminfooter');  
        }

        public function webProfile()
        {
                $profile=$this->fetch->getWebProfile();
                $this->load->view('admin/adminheader', ['profile' => $profile]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/webProfile'); 
                $this->load->view('admin/adminfooter');  
        }

        public function adminProfile()
        {
                $admProfile=$this->fetch->getAdminProfile();
                $this->load->view('admin/adminheader', ['admProfile' => $admProfile]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/adminProfile'); 
                $this->load->view('admin/adminfooter');  
        }

}
