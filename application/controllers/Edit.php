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

        public function Blog($id)
        {
            $data['featured']='0';
            $data=$this->input->post();
            if($this->input->post('featured')==null){
                $data['featured']='0';
            }
            unset($data['author']);
            unset($data['category']);

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
                    $blg= $this->fetch->getBlogById($id);
                    $path= 'assets/images/'.$blg->img;
                    unlink("$path");

                    $imgdata = $this->upload->data();
                    $imagename = $imgdata['file_name'];
                }
                $data['img'] = $imagename;
            }

            $status= $this->edit->updateBlog($data, $id);
            if($status){
                $this->session->set_flashdata('success','Blog Updated !');
                redirect('Admin/Blog');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Blog');
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

        // public function updateNotice($id)
        // {  
        //     $data=array('content'=>$this->input->post('content'),
        //                 'date'=>date('Y-m-d')
        //                 );
                        
        //     if( $_FILES['notice_file']['name']!=null ){
        //         $path ='assets/notice';
        //         $initialize = array(
        //             "upload_path" => $path,
        //             "allowed_types" => "jpg|jpeg|png|bmp|webp|doc|docx|pdf|xls|xlsx|txt",
        //             "remove_spaces" => TRUE
        //         );
        //         $this->load->library('upload', $initialize);
        //         if (!$this->upload->do_upload('notice_file')) {
        //             $this->session->set_flashdata('failed',$this->upload->display_errors());
        //             redirect('Admin/Announcement');
        //         }
        //         else {
        //             $filedata = $this->upload->data();
        //             $filename = $filedata['file_name'];
        //             $data['file_src']=$filename;
        //             $notice= $this->fetch->getNoticeById($id);
        //             if($notice->file_src!='_blank_'){
        //                 $path= 'assets/notice/'.$notice->file_src;
        //                 unlink("$path");
        //             }
        //         }
        //     } 

        //     $status= $this->edit->updateNotice($data, $id);

        //     if($status){
        //         $this->session->set_flashdata('success','Announcement Updated !' );
        //         redirect('Admin/Announcement');
        //     }
        //     else{
        //         $this->session->set_flashdata('failed','Error !');
        //         redirect('Admin/Announcement');
        //     }
        // }

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
