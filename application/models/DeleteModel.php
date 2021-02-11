<?php
class DeleteModel extends CI_Model{


// delete Blog
public function deleteBlog($id)
{
    $this->db->where('id',$id);
    $del=$this->db->delete('blogs');
    if($del){
        return true;
    }
    else{
        return false;
    }
}

// delete Blog
public function deleteInfo($tbl , $col , $id)
{
    $this->db->where($col ,$id);
    $del=$this->db->delete($tbl);
    if($del){
        return true;
    }
    else{
        return false;
    }
}

// delete Notice
public function deleteNotice($id)
{
    $this->db->where('id',$id);
    $del=$this->db->delete('notice');
    if($del){
        return true;
    }
    else{
        return false;
    }
}


}
?>