<?php
    class Policies_product_repository_model extends CI_Model 
    {
		private $_data = array();
	    function __construct() 
    {
		parent::__construct();
	}

	function add($content)
 	{	
		$L_strErrorMessage='';
		$data['plan_name'] = $content['plan_name'];		$data['cat_id'] = $content['cat_id'];
        // $data['price'] = $content['price'];
       /*  $data['csum_insure'] = $content['csum_insure'];

        $data['other_description'] = $content['other_description'];
       $data['coverage_detail'] = $content['coverage_detail'];
        $data['coverage_score'] = $content['coverage_score'];
        $data['sub_limit_detail'] = $content['sub_limit_detail'];
        $data['sub_limit_score'] = $content['sub_limit_score'];
        $data['flexibility_detail'] = $content['flexibility_detail'];
        $data['flexibility_score'] = $content['flexibility_score'];
        $data['discount_detail'] = $content['discount_detail'];
        $data['discount_score'] = $content['discount_score'];
        $data['premium_detail'] = $content['premium_detail'];
        $data['premium_score'] = $content['premium_score'];
        $data['note'] = $content['note'];
        $data['pro_desc'] = $content['pro_desc'];
        if($content['image'] !="")
        {
            $data['image'] = $content['image']; 
        } */
        if($content['company_id'] !="")
        {
            $data['company_id'] = $content['company_id']; 
        }
         /* if($content['sum_insured_id'] !="")
        {
            $data['sum_insured_id'] = implode(',',$content['sum_insured_id']); 
        }
        if($content['pdf_file'] !="")
        {
            $data['pdf_file'] = $content['pdf_file']; 
        }
        if($content['brochure'] !="")
        {
            $data['brochure'] = $content['brochure']; 
        } */
        // echo "<pre>";print_r($data);echo "<pre>";exit;
		$this->_data = $data;
		if ($this->db->insert('policies_product_repository', $this->_data))
			{	
				$id = $this->db->insert_id();
            if (count($_POST['top_feature']) > 0 && $_POST['top_feature'] != '') 
            {
                for ($i = 0; $i < count($_POST['top_feature']); $i++) 
                {   
                    if($_POST['top_feature'][$i] !='')
                    {

                        $data7['p_id'] = $id;
                         $data7['name'] = $_POST['top_feature'][$i];
                         // $data1['description'] = $_POST['description'][$i];
                         // echo "<pre>";print_r($data1);echo "</pre>";exit;
                        //$this->insert_topFeature($data7);
                   }
                }
            }

            if (count($_POST['test_price']) > 0 && $_POST['test_price'] != '') 
            {
                for ($i = 0; $i < count($_POST['test_price']); $i++) 
                {   
                    if($_POST['test_price'][$i] !='')
                    {

                        $data1['sins_id'] = $id;
                         $data1['sum_insured_id'] = $_POST['sum_insured_id'][$i];
                         $data1['price'] = $_POST['test_price'][$i];
                         // echo "<pre>";print_r($data1);echo "</pre>";exit;
                        //$this->insert_sum_insured($data1);
                   }
                }
            }

            if (count($_POST['description']) > 0 && $_POST['description'] != '') 
            {
                for ($i = 0; $i < count($_POST['description']); $i++) 
                {   
                    if($_POST['description'][$i] !='')
                    {

                        $data1['c_id'] = $id;
                         $data1['name'] = $_POST['name'][$i];
                         $data1['description'] = $_POST['description'][$i];
                         // echo "<pre>";print_r($data1);echo "</pre>";exit;
                        //$this->insert_attribute($data1);
                   }
                }
            }

            if (count($_POST['title']) > 0 && $_POST['title'] != '') 
            {
                for ($i = 0; $i < count($_POST['title']); $i++) 
                {   
                    if($_POST['title'][$i] !='')
                    {

                        $data1['excl_id'] = $id;
                         // $data1['emp_benifit_desc'] = $_POST['emp_benifit_desc'][$i];
                         $data1['title'] = $_POST['title'][$i];
                         $data1['desc'] = $_POST['desc'][$i];
                        //$this->insert_exclusion($data1);
                   }
                }
            }
            // echo "<pre>";print_r($_POST['title']);echo "</pre>";exit;
            if (count($_POST['compare_id']) > 0 && $_POST['compare_id'] != '') 
            {
                for ($i = 0; $i < count($_POST['compare_id']); $i++) 
                {   
                    if($_POST['compare_id'][$i] !='')
                    {

                        $data3['policies_id'] = $id;
                         $data3['compare_id'] = $_POST['compare_id'][$i];
                         $data3['title_id'] = $_POST['title_id'][$i];
                         $data3['yes_no'] = $_POST['yes_no'][$i];
                         
                         $data3['cname'] = $_POST['cname'][$i];

                        //$this->compare_attribute($data3);
                   }
                }
            }
				return true;
		 	}else
			{
				return false;
			}
    }


	function edit($id, $content) 
	{
        $data['plan_name'] = $content['plan_name'];        $data['cat_id'] = $content['cat_id'];						$this->policies_product_repository_model->update_prduct_repo($id,$data['cat_id']);
        // $data['price'] = $content['price'];
        /* $data['csum_insure'] = $content['csum_insure'];
        $data['other_description'] = $content['other_description'];
        
        $data['coverage_detail'] = $content['coverage_detail'];
        $data['coverage_score'] = $content['coverage_score'];
        $data['sub_limit_detail'] = $content['sub_limit_detail'];
        $data['sub_limit_score'] = $content['sub_limit_score'];
        $data['flexibility_detail'] = $content['flexibility_detail'];
        $data['flexibility_score'] = $content['flexibility_score'];
        $data['discount_detail'] = $content['discount_detail'];
        $data['discount_score'] = $content['discount_score'];
        $data['premium_detail'] = $content['premium_detail'];
        $data['premium_score'] = $content['premium_score'];
        $data['note'] = $content['note'];
        $data['pro_desc'] = $content['pro_desc'];
        if($content['image'] !="")
        {
            $data['image'] = $content['image']; 
        } */
        if($content['company_id'] !="")
        {
            $data['company_id'] = $content['company_id']; 
        }
        /* if($content['sum_insured_id'] !="")
        {
            $data['sum_insured_id'] = implode(',',$content['sum_insured_id']); 
        }
        if($content['pdf_file'] !="")
        {
            $data['pdf_file'] = $content['pdf_file']; 
        }
        if($content['brochure'] !="")
        {
            $data['brochure'] = $content['brochure']; 
        } */
		$this->_data = $data;
		$this->db->where('id', $id);
        if ($this->db->update('policies_product_repository', $this->_data))	
        {	 
            // echo "<pre>";print_r($_POST['title1']);echo "</pre>";exit;
            if ($_POST['top_feature1'] != '' && count($_POST['top_feature1']) > 0) {
                for ($i = 0; $i < count($_POST['top_feature1']); $i++) {

                    if ($_POST['top_feature1'][$i] != '') {
                        $content2['p_id'] = $id;
                        $content2['name'] = $_POST['top_feature1'][$i];
                        //$this->insert_topFeature($content2);
                    }
                }
            }

            /* if (count($_POST['test_priceu']) > 0 && $_POST['test_priceu'] != '') {
                for ($i = 0; $i < count($_POST['test_priceu']); $i++) {

                    $content1['sins_id'] = $id;
                    $content1['sum_insured_idu'] = $_POST['sum_insured_idu'][$i];
                    $content1['test_priceu'] = $_POST['test_priceu'][$i];
                    $content1['updateid1xxx4141'] = $_POST['updateid1xxx4141'][$i];

                    //$this->update_sum_insured($content1);
                }
            } */

            if ($_POST['test_price1'] != '' && count($_POST['test_price1']) > 0) {
                for ($i = 0; $i < count($_POST['test_price1']); $i++) {

                    if ($_POST['test_price1'][$i] != '') {
                        $content2['sins_id'] = $id;
                        $content2['price'] = $_POST['test_price1'][$i];
                        $content2['sum_insured_id'] = $_POST['sum_insured_id1'][$i];
                        //$this->insert_sum_insured($content2);
                    }
                }
            }

            /* if (count($_POST['top_featureu']) > 0 && $_POST['top_featureu'] != '') {
                for ($i = 0; $i < count($_POST['top_featureu']); $i++) {

                    $content1['p_id'] = $id;
                    $content1['top_featureu'] = $_POST['top_featureu'][$i];
                    // $content1['descriptionu'] = $_POST['descriptionu'][$i];
                    $content1['updateid1xxx333'] = $_POST['updateid1xxx333'][$i];

                    //$this->update_topFeature($content1);
                }
            } */

            if ($_POST['title1'] != '' && count($_POST['title1']) > 0) {
                for ($i = 0; $i < count($_POST['title1']); $i++) {

                    if ($_POST['title1'][$i] != '') {
                        $content2['c_id'] = $id;
                        $content2['name'] = $_POST['title1'][$i];
                        $content2['description'] = $_POST['description1'][$i];
                        //$this->insert_attribute($content2);
                    }
                }
            }

            /* if (count($_POST['titleu']) > 0 && $_POST['titleu'] != '') {
                for ($i = 0; $i < count($_POST['titleu']); $i++) {

                    $content1['c_id'] = $id;
                    $content1['titleu'] = $_POST['titleu'][$i];
                    $content1['descriptionu'] = $_POST['descriptionu'][$i];
                    $content1['updateid1xxx'] = $_POST['updateid1xxx'][$i];

                    //$this->update_attribute($content1);
                }
            } */

             if ($_POST['desc1'] != '' && count($_POST['desc1']) > 0) {
                for ($i = 0; $i < count($_POST['desc1']); $i++) {
                    if ($_POST['desc1'][$i] != '') {
                        $content2['excl_id'] = $id;
                        $content2['title'] = $_POST['name1'][$i];
                        $content2['desc'] = $_POST['desc1'][$i];
                        //$this->insert_exclusion($content2);
                    }
                }
            }

            /* if (count($_POST['nameu']) > 0 && $_POST['nameu'] != '') {
                for ($i = 0; $i < count($_POST['nameu']); $i++) {

                    $content1['excl_id'] = $id;
                    $content1['nameu'] = $_POST['nameu'][$i];
                    $content1['descu'] = $_POST['descu'][$i];
                    $content1['updateid1xxx1'] = $_POST['updateid1xxx1'][$i];

                    //$this->update_exclusion($content1);
                }
            } */

             // echo "<pre>";print_r($_POST['title_id1']);echo "</pre>";exit;
             if ($_POST['compare_id1'] != '' && count($_POST['compare_id1']) > 0) {
                for ($i = 0; $i < count($_POST['compare_id1']); $i++) {

                    if ($_POST['compare_id1'][$i] != '') {
                        $content2['policies_id'] = $id;
                        $content2['compare_id'] = $_POST['compare_id1'][$i];
                        $content2['title_id'] = $_POST['title_id1'][$i];
                        $content2['yes_no'] = $_POST['yes_no1'][$i];
                        $content2['cname'] = $_POST['cname1'][$i];
                        //$this->compare_attribute($content2);
                    }
                }
            }

            /* if (count($_POST['compare_idu']) > 0 && $_POST['compare_idu'] != '') {
                for ($i = 0; $i < count($_POST['compare_idu']); $i++) {

                    $content1['policies_id'] = $id;
                    $content1['compare_idu'] = $_POST['compare_idu'][$i];
                    $content1['title_idu'] = $_POST['title_idu'][$i];
                    $content1['yes_nou'] = $_POST['yes_nou'][$i];
                    $content1['cnameu'] = $_POST['cnameu'][$i];
                    $content1['updateid1xxx222'] = $_POST['updateid1xxx222'][$i];
                    // echo "<pre>";print_r($content1);echo "</pre>";exit;
                    //$this->update_comp_attribute($content1);
                }
            } */
			return true;
        } 
        else 
        {
			return false;
		}
	}			
	
	function update_prduct_repo($id,$cat_id) {        
	    //$data['p_id'] = $content['p_id'];        
	    $data1['cat_id'] = $cat_id;        
	    $this->db->where('policy_id =', $id);        
	    if ($this->db->update('product_repository', $data1)) {
	        return true;        
	        
	    } else {            
	        return false;        
	        
	    }    
	    
	}

    function insert_topFeature($content) {
        $data['p_id'] = $content['p_id'];
        $data['name'] = $content['name'];
        // $data['description'] = $content['description'];
        $this->_data = $data;
        if ($this->db->insert('top_feature', $this->_data)) {
            return true;
        } else {
            return false;
        }
    }

    function insert_sum_insured($content) {
        $data['sins_id'] = $content['sins_id'];
        $data['price'] = $content['price'];
        $data['sum_insured_id'] = $content['sum_insured_id'];
        $this->_data = $data;
        if ($this->db->insert('sum_insuranced_attr', $this->_data)) {
            return true;
        } else {
            return false;
        }
    }

     function update_sum_insured($content) {

        $data1['sins_id'] = $content['sins_id'];
        $data1['price'] = $content['test_priceu'];
        $data1['sum_insured_id'] = $content['sum_insured_idu'];

        $this->db->where('id =', $content['updateid1xxx4141']);

        if ($this->db->update('sum_insuranced_attr', $data1)) {
            return true;
        } else {
            return false;
        }
    }

    function update_topFeature($content) {

        $data1['p_id'] = $content['p_id'];
        $data1['name'] = $content['top_featureu'];
        // $data1['description'] = $content['descriptionu'];

        $this->db->where('id =', $content['updateid1xxx333']);

        if ($this->db->update('top_feature', $data1)) {
            return true;
        } else {
            return false;
        }
    }

    function insert_attribute($content) {
        $data['c_id'] = $content['c_id'];
        $data['name'] = $content['name'];
        $data['description'] = $content['description'];
        $this->_data = $data;
        if ($this->db->insert('coverage_attr', $this->_data)) {
            return true;
        } else {
            return false;
        }
    }

    function compare_attribute($content) {
        $data['policies_id'] = $content['policies_id'];
        $data['compare_id'] = $content['compare_id'];
        $data['title_id'] = $content['title_id'];
        $data['yes_no'] = $content['yes_no'];
        $data['name'] = $content['cname'];
        $this->_data = $data;
        if ($this->db->insert('compare_attribute', $this->_data)) {
            return true;
        } else {
            return false;
        }
    }

    function update_attribute($content) {

        $data1['c_id'] = $content['c_id'];
        $data1['name'] = $content['titleu'];
        $data1['description'] = $content['descriptionu'];

        $this->db->where('id =', $content['updateid1xxx']);

        if ($this->db->update('coverage_attr', $data1)) {
            return true;
        } else {
            return false;
        }
    }

     function insert_exclusion($content) {
        $data['excl_id'] = $content['excl_id'];
        $data['title'] = $content['title'];
        $data['description'] = $content['desc'];
        $this->_data = $data;
        if ($this->db->insert('exclusions_attr', $this->_data)) {
            return true;
        } else {
            return false;
        }
    }

    function update_exclusion($content) {

        $data1['excl_id'] = $content['excl_id'];
        $data1['title'] = $content['nameu'];
        $data1['description'] = $content['descu'];

        $this->db->where('id =', $content['updateid1xxx1']);

        if ($this->db->update('exclusions_attr', $data1)) {
            return true;
        } else {
            return false;
        }
    }

    function update_comp_attribute($content) {

        $data1['policies_id'] = $content['policies_id'];
        $data1['compare_id'] = $content['compare_idu'];
        $data1['title_id'] = $content['title_idu'];
        $data1['yes_no'] = $content['yes_nou'];
        $data1['name'] = $content['cnameu'];
        // echo "<pre>";print_r($data1);echo "</pre>";exit;
        $this->db->where('id =', $content['updateid1xxx222']);

        if ($this->db->update('compare_attribute', $data1)) {
            return true;
        } else {
            return false;
        }
    }


	function updateorder($id,$val){

		$content['set_order'] = $val;

		$this->db->where('id',$id);

		return $this->db->update('policies_product_repository', $content);	
	}


    function lists($num, $offset, $content) 
	{
		if($offset == '')
		{
			$offset = '0';
		}
		$sql = "SELECT * FROM policies_product_repository where id <> 0 ";
		if($num!='' || $offset!='')
			{
				$sql .=	"  order by id desc limit ".$offset." , ".$num." ";
			}
		$query = $this->db->query($sql);
		/*if($num!='' || $offset!='')
			{
				$sql .=	"  order by id desc limit ".$offset." , ".$num." ";
			}*/
		$sql_count = "SELECT * FROM policies_product_repository WHERE id <> 0";
		$query1 = $this->db->query($sql_count);
		$ret['result'] = $query->result_array();
		$ret['count']  = $query1->num_rows();
	    return $ret;
	}

	function deletes($id) 
	{
 		$this->db->where('id = ',$id);
        if ($this->db->delete('policies_product_repository'))	
        {
			return true;
        } 
        else 
        {
			return false;
		}
    }

	function is_exist($id)
	{
		$this->db->where('id = ',$id);
		$query = $this->db->get('policies_product_repository');
		if ($query->num_rows() > 0)
		{
			$result = $query->row();
			return $result;
		}
		else
		{
			return false;
		}
	}

    function addition_item($id) {
        $this->db->where('c_id = ', $id);
        $query = $this->db->get('coverage_attr');
        if ($query->num_rows() > 0) {
            $result = $query->result();
            return $result;
        } else {
            return false;
        }
    }

     function exclusion_item($id) {
        $this->db->where('excl_id = ', $id);
        $query = $this->db->get('exclusions_attr');
        if ($query->num_rows() > 0) {
            $result = $query->result();
            return $result;
        } else {
            return false;
        }
    }

    function top_feature_item($id) {
        $this->db->where('p_id = ', $id);
        $query = $this->db->get('top_feature');
        if ($query->num_rows() > 0) {
            $result = $query->result();
            return $result;
        } else {
            return false;
        }
    }

     function sum_insuranced_attr($id) {
        $this->db->where('sins_id = ', $id);
        $query = $this->db->get('sum_insuranced_attr');
        if ($query->num_rows() > 0) {
            $result = $query->result();
            return $result;
        } else {
            return false;
        }
    }

    function remove_topFeature($policies_id, $id) {
        $this->db->where('p_id = ', $policies_id);
        $this->db->where('id = ', $id);
        if ($this->db->delete('top_feature')) {
            return true;
        } else {
            return false;
        }
    }

    function remove_sum_insuranc($policies_id, $id) {
        $this->db->where('sins_id = ', $policies_id);
        $this->db->where('id = ', $id);
        if ($this->db->delete('sum_insuranced_attr')) {
            return true;
        } else {
            return false;
        }
    }

     function removeattriute($coverage_id, $id) {
        $this->db->where('c_id = ', $coverage_id);
        $this->db->where('id = ', $id);
        if ($this->db->delete('coverage_attr')) {
            return true;
        } else {
            return false;
        }
    }

    function remove_exclusion($exclusion_id, $id) {
        $this->db->where('excl_id = ', $exclusion_id);
        $this->db->where('id = ', $id);
        if ($this->db->delete('exclusions_attr')) {
            return true;
        } else {
            return false;
        }
    }

    function remove_compare($compare_id, $id) {
        $this->db->where('policies_id = ', $compare_id);
        $this->db->where('id = ', $id);
        if ($this->db->delete('compare_attribute')) {
            return true;
        } else {
            return false;
        }
    }

    function updateorder_status($id, $val) {
        $query = "update policies_product_repository set status = '" . $val . "'  where id = '" . $id . "'";
        $result = $this->db->query($query);
        return $result;
    }

    function alldata($table_name) {
        $query = $this->db->get($table_name);
        if ($query->num_rows() > 0) {
            $result = $query->result();
            return $result;
        } else {
            return false;
        }
    }

    function all_sum_insure($table_name) {
        $query = $this->db->get($table_name);
        if ($query->num_rows() > 0) {
            $result = $query->result();
            return $result;
        } else {
            return false;
        }
    }

     function get_company_name($id) {
        $this->db->where('id = ', $id);
        $query = $this->db->get('company_name');
        if ($query->num_rows() > 0) {
            $result = $query->row()->name;
            return $result;
        } else {
            return false;
        }
    }		
    
    function get_category_name($id) {        
        $this->db->where('id = ', $id);       
        $query = $this->db->get('policy_category');        
        if ($query->num_rows() > 0) {            
            $result = $query->row()->name;            
            return $result;        
            
        } else {           
            return false;        
            
        }    
        
    }

    function get_sum_insured_name($id) {
        $this->db->where('id = ', $id);
        $query = $this->db->get('sum_insured');
        if ($query->num_rows() > 0) {
            $result = $query->row()->name;
            return $result;
        } else {
            return false;
        }
    }

    function all_compare($table_name) {
        $query = $this->db->get($table_name);
        if ($query->num_rows() > 0) {
            $result = $query->result();
            return $result;
        } else {
            return false;
        }
    }

    function all_title($table_name) {
        $query = $this->db->get($table_name);
        if ($query->num_rows() > 0) {
            $result = $query->result();
            return $result;
        } else {
            return false;
        }
    }

    function addition_detail($id) {
        $this->db->where('policies_id = ', $id);
        $query = $this->db->get('compare_attribute');
        if ($query->num_rows() > 0) {
            $result = $query->result();
            return $result;
        } else {
            return false;
        }
    }

    function show_title($id){

       $sql = "select  * from title where compare_id = '".$id."'";

        $query = $this->db->query($sql);

        if($query->num_rows() > 0){

            return $query->result();
        }else{

            return false;
        }
    }
}
?>