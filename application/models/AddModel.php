<?php
class AddModel extends CI_Model{


    public function saveBlog($d)
    {
        $flag = $this->db->insert('blogs',$d);
        if($flag){
            return true;
        }
        else{
            return false;
        }
    }

    public function saveNotice($d)
    {
        $flag = $this->db->insert('notice',$d);
        if($flag){
            return true;
        }
        else{
            return false;
        }
    }

    public function saveEnquiry($d)
    {
        $flag = $this->db->insert('enquiries',$d);
        if($flag){
            return true;
        }
        else{
            return false;
        }
    }
}