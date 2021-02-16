<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends MY_Controller {

        function __construct()
        {
            parent:: __construct();
            $this->redirectIfNotLoggedIn();
            $this->load->model('GetModel','fetch');
            $this->load->model('EditModel','edit');
        }

        public function webProfile()
        {
            $data=$this->input->post();
            $status= $this->edit->updateWebProfile($data);

            if($status){
                $this->session->set_flashdata('success','Web Profile Updated !');
                redirect('Admin/webProfile');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/webProfile');
            }
        }

        public function blog($id)
        {
                $categories= $this->fetch->getInfo('blog_categories');
                $blog=$this->fetch->getInfoById('blogs','id',$id);
                $this->load->view('admin/adminheader', ['blog' => $blog,'categories'=>$categories]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/blogForm'); 
                $this->load->view('admin/adminfooter');  
        }

        public function updateBlog($id)
        {
            $this->form_validation->set_rules('heading', 'Heading', 'required');
            $this->form_validation->set_rules('date', 'Date', 'required');
            $this->form_validation->set_rules('content', 'Content', 'required');
            
            if($this->form_validation->run() == true){
                $data=$this->input->post();
                $data['tags']=implode("|",$data['tags']);

                if($_FILES['img']['name']!=null){
                    $path ='assets/images';
                    $initialize = array(
                        "upload_path" => $path,
                        "allowed_types" => "jpg|jpeg|png|bmp|webp|gif",
                        "remove_spaces" => TRUE
                    );
                    $this->load->library('upload', $initialize);
                    if (!$this->upload->do_upload('img')) {
                        $this->session->set_flashdata('failed',$this->upload->display_errors());
                    } 
                    else {
                        $blg= $this->fetch->getInfoById('blogs','id',$id);
                        $unlink= 'assets/images/'.$blg->img;

                        $imgdata = $this->upload->data();
                        $imagename = $imgdata['file_name'];
                    }
                    $data['img'] = $imagename;
                }

                $status= $this->edit->updateInfo($data, 'blogs', 'id', $id);
                if($status){
                    
                    unlink($unlink);
                    $this->session->set_flashdata('success','Blog Updated !');
                    redirect('Admin/Blog');
                }
                else{
                    $this->session->set_flashdata('failed','Error !');
                    redirect('Admin/Blog');
                }
            }
            else{
                $this->session->set_flashdata('failed',strip_tags(validation_errors()));
            }
                    
        }

        public function Announcement($id)
        {
                $notice= $this->fetch->getNoticeById($id);
                $this->load->view('admin/adminheader',['adminTitle'=>'Edit Announcement',
                                                        'submissonPath'=>base_url().'Edit/updateNotice/'.$id,
                                                        'notice'=>$notice
                                                    ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/notice-form'); 
                $this->load->view('admin/adminfooter');  
        }

        public function updateNotice($id)
        {  
                        
            $this->form_validation->set_rules('content', 'Content', 'required');
            if($this->form_validation->run() == true){
                if($this->input->post('file_or_link')!=null){
                    if($this->input->post('file_or_link')=='f'){
                        if( $_FILES['notice_file']['name']!=null ){
                            $path ='assets/notice';
                            $initialize = array(
                                "upload_path" => $path,
                                "allowed_types" => "jpg|jpeg|png|bmp|webp|doc|docx|pdf|xls|xlsx|txt",
                                "remove_spaces" => TRUE
                            );
                            $this->load->library('upload', $initialize);
                            if (!$this->upload->do_upload('notice_file')) {
                                $this->session->set_flashdata('failed',$this->upload->display_errors());
                                redirect('Admin/Announcement');
                            }
                            else {
                                $filedata = $this->upload->data();
                                $fileName = $filedata['file_name'];
                                $notice= $this->fetch->getNoticeById($id);
                                $path= 'assets/notice/'.$notice->file_src;
                            } 
                            $data=array( 'content'=>$this->input->post('content'),
                                    'file_src'=> $fileName,
                                    'link_src'=> '',
                                    'file_or_link'=>'f'
                                    );
                        }
                        else{
                            $data=array( 'content'=>$this->input->post('content'),
                                    'link_src'=> '',
                                    'file_or_link'=>'f'
                                    );
                        }
                    }
                    elseif($this->input->post('file_or_link')=='l'){
                        $notice= $this->fetch->getNoticeById($id);
                        $path= 'assets/notice/'.$notice->file_src;
                        $data=array( 'content'=>$this->input->post('content'),
                                    'link_src'=> $this->input->post('link_src'),
                                    'file_src'=> '',
                                    'file_or_link'=>'l'
                                    );
                    }
                }
                else{
                    $data=array( 'content'=>$this->input->post('content')
                                );
                }
                
                $status= $this->edit->updateNotice($data,$id);

                if($status){
                    unlink($path);
                    $this->session->set_flashdata('success','Announcement updated !' );
                    redirect('Admin/Announcement');
                }
                else{
                    $this->session->set_flashdata('failed','Error !');
                    redirect('Admin/Announcement');
                }
            }
            else{
                $this->session->set_flashdata('failed',strip_tags(validation_errors()));
                redirect('Admin/Announcement');
            }
        }


        public function image($id)
        {
            $this->load->view('admin/adminheader',['adminTitle'=>'Edit image',
                                                    'submissonPath'=>base_url().'Edit/updateImage/'.$id,
                                                    'data'=>$id
                                                ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/gallery-form'); 
                $this->load->view('admin/adminfooter');   
        }

        public function updateImage($id)
        {
            if( $_FILES['img']['name']!=null ){
                $old_img= $this->fetch->getInfoById('gallery','id',$id);
                $unlink= 'assets/images/'.$old_img->img_src;
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|webp|doc|docx|pdf|xls|xlsx|txt",
                    "remove_spaces" => TRUE
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',$this->upload->display_errors());
                    redirect('Admin/gallery');
                }
                else {
                    $filedata = $this->upload->data();
                    $fileName = $filedata['file_name'];
                    
                    $data['img_src']=$fileName;
                    $status= $this->edit->updateInfo($data, 'gallery', 'id' , $id);

                    if($status){
                        unlink($unlink);
                        $this->session->set_flashdata('success','Image updated !' );
                        redirect('Admin/gallery');
                    }
                    else{
                        $this->session->set_flashdata('failed','Error !');
                        redirect('Admin/gallery');
                    }
                } 
            }
            else{
                $this->session->set_flashdata('failed','Please upload an image');
                redirect('Admin/gallery');
            }
        }


        public function video($id)
        {
            $vid= $this->fetch->getInfoById('gallery', 'id', $id);
            $this->load->view('admin/adminheader',['adminTitle'=>'Edit video',
                                                    'vid'=>$vid,
                                                    'submissonPath'=>base_url().'Edit/updateVideo/'.$id,
                                                    'data'=>$id
                                                ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/video-form'); 
                $this->load->view('admin/adminfooter');   
        }

        public function updateVideo($id)
        {
            if( $this->input->post()!=null ){
                $data = $this->input->post();
                $status= $this->edit->updateInfo($data, 'gallery', 'id' , $id);

                if($status){
                    $this->session->set_flashdata('success','Video updated !' );
                    redirect('Admin/gallery');
                }
                else{
                    $this->session->set_flashdata('failed','Error !');
                    redirect('Admin/gallery');
                }
            }
            else{
                $this->session->set_flashdata('failed','Please set the link for the video');
                redirect('Admin/gallery');
            }
        }


        
        public function event($id)
        {
                $data= $this->fetch->getInfoById('events', 'id', $id);
                $this->load->view('admin/adminheader',['adminTitle'=>'Edit Announcement',
                                                        'submissonPath'=>base_url().'Edit/updateEvent/'.$id,
                                                        'data'=>$data
                                                    ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/events-form'); 
                $this->load->view('admin/adminfooter');  
        }

        public function updateEvent($id)
        {  
            $this->form_validation->set_rules('heading', 'Heading', 'required');
            $this->form_validation->set_rules('date', 'Date', 'required');
            $this->form_validation->set_rules('venue', 'Venue', 'required');
            $this->form_validation->set_rules('full_descr', 'Full descr', 'required');
            
            if($this->form_validation->run() == true){
                $data=$this->input->post();

                if( $_FILES['img']['name']!=null ){
                    $old_img= $this->fetch->getInfoById('events','id',$id);
                    $unlink= 'assets/images/'.$old_img->img_src;
                    $path ='assets/images';
                    $initialize = array(
                        "upload_path" => $path,
                        "allowed_types" => "jpg|jpeg|png|bmp|webp|doc|docx|pdf|xls|xlsx|txt",
                        "remove_spaces" => TRUE
                    );
                    $this->load->library('upload', $initialize);
                    if (!$this->upload->do_upload('img')) {
                        $this->session->set_flashdata('failed',$this->upload->display_errors());
                        redirect('Admin/events');
                    }
                    else {
                        $filedata = $this->upload->data();
                        $fileName = $filedata['file_name'];
                        
                        $data['img_src']=$fileName;
                    } 
                }

                $status= $this->edit->updateInfo($data, 'events', 'id' , $id);

                if($status){
                    unlink($unlink);
                    $this->session->set_flashdata('success','Event updated !' );
                    redirect('Admin/events');
                }
                else{
                    $this->session->set_flashdata('failed','Error !');
                    redirect('Admin/events');
                }
            }
            else{
                $this->session->set_flashdata('failed',strip_tags(validation_errors()));
                redirect('Admin/events');
            }
        }

        public function delEventImage($id)
        {
            $old_img= $this->fetch->getInfoById('events','id',$id);
            $unlink= 'assets/images/'.$old_img->img_src;
            $status= $this->edit->updateInfo(['img_src'=>null] , 'events', 'id' , $id);
            if($status){
                unlink($unlink);
                $this->session->set_flashdata('success','Event image deleted' );
                redirect('Edit/event/'.$id);
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Edit/event/'.$id);
            }
        }

           

        public function feedback($id)
        {
            $data= $this->fetch->getInfoById('feedbacks', 'id', $id);
            $this->load->view('admin/adminheader',['adminTitle'=>'Edit Feedback',
                                                    'submissonPath'=>base_url().'Edit/updateFeedback/'.$id,
                                                    'data'=>$data
                                                ]); 
            $this->load->view('admin/adminaside'); 
            $this->load->view('admin/feedbacks-form'); 
            $this->load->view('admin/adminfooter');  
        }

        public function updateFeedback($id)
        {  
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('help_text', 'Designation/Exp.', 'required');
            $this->form_validation->set_rules('message', 'Message', 'required');
            
            if($this->form_validation->run() == true){
                $data=$this->input->post();
                $status= $this->edit->updateInfo($data, 'feedbacks', 'id' , $id);

                if($status){
                    $this->session->set_flashdata('success','Feedback updated !' );
                    redirect('Admin/feedbacks');
                }
                else{
                    $this->session->set_flashdata('failed','Error !');
                    redirect('Admin/feedbacks');
                }
            }
            else{
                $this->session->set_flashdata('failed',strip_tags(validation_errors()));
                redirect('Admin/feedbacks');
            }
        }



        public function enqStatus($id)
        {
            $status= $this->edit->updateEnqStatus($id);
            if($status){
                redirect('Admin');
            }
            else{
                redirect('Admin');
            }
        }

        public function adminProfile($id)
        {
            $data=$this->input->post();
            $status= $this->edit->updateAdminProfile($data,$id);
            $user=$this->fetch->getAdminProfile();
            $this->session->set_userdata(['user' =>  $user]);

            if($status){
                $this->session->set_flashdata('success','Admin Panel Profile Updated !');
                redirect('Admin/adminProfile');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/adminProfile');
            }
        }
        

}
