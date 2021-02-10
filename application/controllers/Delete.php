<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends MY_Controller {

        function __construct(){
                parent:: __construct();
                $this->redirectIfNotLoggedIn();
                $this->load->model('GetModel','fetch');
                $this->load->model('DeleteModel','delete');
        }


        // Delete Blog
        public function Blog($id)
        {
            $blogimg= $this->fetch->getBlogById($id);
            $path= 'assets/images/'.$blogimg->img;
            unlink("$path");
            $status= $this->delete->deleteBlog($id);

            if($status){
                $this->session->set_flashdata('success','Blog Deleted!');
                redirect('Admin/Blog');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Blog');
            }
        }

         // Delete Notice
         public function Announcement($id)
         {
             $notice= $this->fetch->getNoticeById($id);
             $status= $this->delete->deleteNotice($id);
             if($status){
                 if($notice->file_src!='_blank_'){
                     $path= 'assets/notice/'.$notice->file_src;
                     unlink("$path");
                 }
                 $this->session->set_flashdata('success','Announcement Deleted!');
                 redirect('Admin/Announcement');
             }
             else{
                 $this->session->set_flashdata('failed','Error!');
                 redirect('Admin/Announcement');
             }
         }


}
