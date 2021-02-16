<?php
class GetModel extends CI_Model{

    // Fetch Website Profile
    public function getWebProfile()
    {
        return $this->db->get('webprofile')->row();
    }

    // Fetch Enquiries
    public function getEnquiries()
    {
        return $this->db->get('enquiries')->result();
    }


    
    // Fetch events items by order with limit for pagination
    public function fetch_events($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('events');
        $this->db->order_by('id','desc');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    }

    // Fetch gallery items by order with limit for pagination
    public function fetch_gallery($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('gallery');
        $this->db->order_by('id','desc');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    }

    // Fetch Blogs by order with limit for pagination
    public function fetch_blogs($limit, $start)
    {
        $this->db->select('b.*, c.category, c.id AS cat_id');
        $this->db->from('blogs b');
        $this->db->join('blog_categories c', 'c.id = b.category_id', 'LEFT');
        $this->db->order_by('id','desc');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    }

    public function getBlogsByCat($id)
    {
        $items=$this->db->select('b.*, c.category, c.id AS cat_id')
                ->from('blogs b')
                ->join('blog_categories c', 'c.id = b.category_id', 'LEFT')
                ->order_by('b.id','desc')
                ->where('category_id',$id)
                ->get()
                ->result();
        return $items;
    }
    public function getBlogsByTag($tag)
    {
        $items=$this->db->select('b.*, c.category, c.id AS cat_id')
                ->from('blogs b')
                ->join('blog_categories c', 'c.id = b.category_id', 'LEFT')
                ->order_by('b.id','desc')
                ->like('tags', $tag)
                ->get()
                ->result();
        return $items;
    }
    public function getBlog($id)
    {
        $items=$this->db->select('b.*, c.category, c.id AS cat_id')
                ->from('blogs b')
                ->join('blog_categories c', 'c.id = b.category_id', 'LEFT')
                ->where('b.id',$id)
                ->get()
                ->row();
        return $items;
    }
 

    // Fetch Admin Profile
    public function getAdminProfile()
    {
        return $this->db->get('users')->row();
    }


    public function getInfo($tbl)
    {
        return $this->db->order_by('id', 'DESC')->get($tbl)->result();
    }

    public function getAllInfoById($tbl, $col, $id)
    {
        return $this->db->order_by('id', 'DESC')->where($col, $id)->get($tbl)->result();
    }
    
    public function getInfoById($tbl, $col, $id)
    {
        return $this->db->where($col, $id)->get($tbl)->row();
    }
    
    public function getLimitInfo($tbl,$lim)
    {
        return $this->db->order_by('id', 'DESC')->limit($lim)->get($tbl)->result();
    }

    
    // Count no. of rows in table 
    public function record_count($table) 
    {
        return $this->db->count_all($table);
    }

    

}
?>