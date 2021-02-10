<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends MY_Controller {

        function __construct(){
                parent:: __construct();
                $this->redirectIfNotLoggedIn();
                $this->load->model('AddModel','save');
                $this->load->model('GetModel','fetch');
        }

        public function Blog()
        {
            // Image upload and saving name
            $path ='assets/images';
            $initialize = array(
                "upload_path" => $path,
                "allowed_types" => "jpg|jpeg|png|bmp|webp|gif",
                "remove_spaces" => TRUE
            );
            $this->load->library('upload', $initialize);
            if (!$this->upload->do_upload('img')) {
                $this->session->set_flashdata('failed',$this->upload->display_errors());
            } else {
                $imgdata = $this->upload->data();
                $imagename = $imgdata['file_name'];
            } 


            $feat='0';
            if($this->input->post('featured')!=null){
                $feat='1';
            }
            $data=array('heading'=>$this->input->post('heading'),
                        'content'=>$this->input->post('content'),
                        'date'=>date('Y-m-d'),
                        'img'=>$imagename,
                        'featured'=>$feat
                        );
            $status= $this->save->saveBlog($data);

            if($status){
                $this->session->set_flashdata('success','New Blog posted !' );
                redirect('Admin/Blog');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Blog');
            }
        }

        public function Announcement()
        {
                $this->load->view('admin/adminheader',['adminTitle'=>'Add Announcement',
                                                        'submissonPath'=>'saveAnnouncement'
                                                        ]); 
                $this->load->view('admin/adminaside'); 
                $this->load->view('admin/notice-form'); 
                $this->load->view('admin/adminfooter');  
        }

        public function saveAnnouncement()
        {
            $this->form_validation->set_rules('content', 'Content', 'required');
            if($this->form_validation->run() == true){
                $fileName = '_blank_';
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
                            } 
                        }
                        $data=array( 'content'=>$this->input->post('content'),
                                    'file_src'=> $fileName,
                                    'date'=> date('Y-m-d'),
                                    'file_or_link'=>'f'
                                    );
                    }
                    elseif($this->input->post('file_or_link')=='l'){
                        $data=array( 'content'=>$this->input->post('content'),
                                    'link_src'=> $this->input->post('link_src'),
                                    'date'=> date('Y-m-d'),
                                    'file_or_link'=>'l'
                                    );
                    }
                }
                else{
                    $data=array( 'content'=>$this->input->post('content'),
                                'date'=> date('Y-m-d')
                                );
                }
               
                
                $status= $this->save->saveNotice($data);

                if($status){
                    $this->session->set_flashdata('success','Announcement added !' );
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
        
        public function Mail()
        {
            $name=$this->input->post('name');
            $phone=$this->input->post('phone');
            $message=$this->input->post('message');
            $guest_email=$this->input->post('email');
            
            $mail_arr = $this->fetch->getWebProfile();
            $landing_mail = $mail_arr->email;
            
            $to=$landing_mail;
            $msg ="You have a new qnquiry from- \n\r Name:".$name.".\n\r Phone:".$phone."\n\r E-mail:".$guest_email."\n\r Purpose:".$message;
            $subject = "DigiKraft Social - New Enquiry";
            $headers = "From:" . $name;

            mail($to, $subject, $msg, $headers);
            
            $data=$this->input->post();
            $data['date']=date('Y-m-d');
            $status= $this->save->saveEnquiry($data);

            if($status){
                $this->session->set_flashdata('success','Mail Sent!  We will connect with you soon.' );
                redirect('Contact');
            }
            else{
                $this->session->set_flashdata('failed','Error sending mail !');
                redirect('Contact');
            }
        }

        public function Subscribe()
        {
            $guest_email=$this->input->post('email');
            
            $mail_arr = $this->fetch->getWebProfile();
            $landing_mail = $mail_arr->email;
            
            $to=$landing_mail;
            $msg ="You have a new Subscription from- \n\r E-mail:".$guest_email;
            $subject = "DigiKraft Social - New Subscription";
            $headers = "From:" . $guest_email;

            if(mail($to, $subject, $msg, $headers)){
                $this->session->set_flashdata('success','Subscribed !' );
                redirect('Home');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Home');
            }
        }


}
