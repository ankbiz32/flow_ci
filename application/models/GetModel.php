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

    // Fetch Blogs by order
    public function getBlogsByOrder()
    {
        $this->db->select('*');
        $this->db->from('blogs b');
        $this->db->order_by('id','desc');
        return $blogs_arr= $this->db->get()->result();
    }

    // Fetch featured Blogs by order
    public function getFeaturedBlogs()
    {
        $this->db->select('*');
        $this->db->from('blogs b');
        $this->db->where('featured','1');
        $this->db->order_by('id','desc');
        return $this->db->get()->result();
    }

    // Fetch Announcements
    public function getAnnouncements()
    {
        $this->db->select('*');
        $this->db->from('announcements');
        $this->db->order_by('id','desc');
        return $this->db->get()->result();
    }
    

    // Count no. of rows in table 
    public function record_count($table) 
    {
        return $this->db->count_all($table);
    }
    
    // Fetch Blogs by order with limit for pagination
    public function fetch_blogs($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('blogs b');
        $this->db->order_by('id','desc');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
 
    // Fetch blog by id
    public function getBlogById($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('blogs')->row();
    }

    // Fetch blog by id for edit
    public function getBlogByIdEdit($id)
    {
        $this->db->select('*');
        $this->db->from('blogs b');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }

    // Fetch all Notice
    public function getNotices()
    {
        return $this->db->order_by('id','desc')
                        ->get('notice')
                        ->result();
    }
    
    // Fetch notice with limit
    public function getNoticesLimit($lim)
    {
        return $this->db->order_by('id','desc')
                        ->limit($lim)
                        ->get('notice')
                        ->result();
    }

    // Fetch Notice by id
    public function getNoticeById($nid)
    {
        return $this->db->where('id',$nid)
                        ->get('notice')
                        ->row();
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

    

}
?>