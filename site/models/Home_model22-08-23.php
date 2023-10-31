<?php
class Home_Model extends CI_Model 
{
	function __construct() 
	{
		parent::__construct();
	}

	function get_blog_data_all()
	{	
		$this->db->select('*');
		$this->db->from('blogs');
		$this->db->order_by("id ","desc");	
		$query = $this->db->get();
		return $query->result();
   	}

   	function get_blog_detail($page_url)
	{
        $this->db->where('page_url=',$page_url);
        $query = $this->db->get('blogs');
        if ($query->num_rows() > 0)	{
            $result = $query->row();
            return $result;
        } else {
            return false;
        }
    
	}

	function latest_blog($id)
	{
		$sql = "SELECT * from blogs where id != '".$id."' order by id desc LIMIT 2";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$result = $query->result();
			return $result;
		}else
		{
			return false;
		}
	}

	
}