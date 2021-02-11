<?php
class EditModel extends CI_Model{

    // Update Website Profile
    public function updateWebProfile($data)
    {
        $this->db->where('id',$data['id']);
        $wpflag = $this->db->update('webprofile',$data);
        if($wpflag){
            return true;
        }
        else{
            return false;
        }
    }

    // Update Notice
    public function updateNotice($data,$id)
    {
        $this->db->where('id',$id);
        $flag = $this->db->update('notice',$data);
        if($flag){
            return true;
        }
        else{
            return false;
        }
    }

    // Update Enquiry Status
    public function updateEnqStatus($id)
    {
        $data['status']="seen";
        $this->db->where('id',$id);
        $flag = $this->db->update('enquiries',$data);
        if($flag){
            return true;
        }
        else{
            return false;
        }
    }

    // Update Blog
    public function updateBlog($data,$id)
    {
        $this->db->where('id',$id);
        $flag = $this->db->update('blogs',$data);
        if($flag){
            return true;
        }
        else{
            return false;
        }
    }

    public function updateInfo( $data, $tbl, $col, $id)
    {
        $this->db->where($col,$id);
        $flag = $this->db->update($tbl,$data);
        if($flag){
            return true;
        }
        else{
            return false;
        }
    }
    
     // Update Website Profile
     public function updateAdminProfile($data, $id)
     {
         $this->db->where('user_id',$id);
         $flag = $this->db->update('users',$data);
         if($flag){
             return true;
         }
         else{
             return false;
         }
     }
    

}
?>
     