<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends MY_Controller {

        function __construct(){
                parent:: __construct();
                $this->redirectIfNotLoggedIn();
                $this->load->model('GetModel','fetch');
                $this->load->model('DeleteModel','delete');
        }


        public function event($id)
        {
            $status= $this->delete->deleteInfo('events', 'id', $id);

            if($status){
                $this->session->set_flashdata('success','Event deleted!');
                redirect('Admin/events');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/events');
            }
        }


        public function image($id)
        {
            $old_img= $this->fetch->getInfoById('gallery','id',$id);
            $unlink= 'assets/images/'.$old_img->img_src;
            $status= $this->delete->deleteInfo('gallery', 'id', $id);

            if($status){
                unlink($unlink);
                $this->session->set_flashdata('success','Image deleted!');
                redirect('Admin/gallery');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/gallery');
            }
        }


        public function feedback($id)
        {
            $status= $this->delete->deleteInfo('feedbacks', 'id', $id);

            if($status){
                $this->session->set_flashdata('success','Feedback deleted!');
                redirect('Admin/feedbacks');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/feedbacks');
            }
        }


        public function blog($id)
        {
            $blogimg= $this->fetch->getInfoById('blogs','id',$id);
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
