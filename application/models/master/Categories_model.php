<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories_model extends CI_Model {

	private $super_categories 		= 'mpro_super_categories';	
	private $categories 			= 'mpro_categories';	
	private $sub_categories 		= 'mpro_sub_categories';	
	private $products 				= 'mpro_products';

	public function get_all_categories()
	{
		$this->db->select($this->categories . '.*');
		$this->db->where_not_in('status',3);
        $query = $this->db->get($this->categories);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
	}

	/**
	 * Countrty Data Add 
	 */
	public function adding_category($category)
	{
		if ($this->db->insert('mpro_categories', $category)) {
            $this->session->set_flashdata('categor_success', 'categories Data Inserted');
			return TRUE;
		}
		return FALSE;		
	}

	/**
	 * Countrty Data Edit 
	 */
	public function editing_category($category_data,$id)
	{
		$category_data['updated_date'] = date('Y-m-d H:i:s');
		$this->db->where('id', $id);
		if ($this->db->update('mpro_categories', $category_data)) {
            $this->session->set_flashdata('categor_success', 'categories Data Updated');
			return TRUE;
		}
		return FALSE;		
	}


	/**
	 * Comman Model To Delete or update the Data
	 * @param  [type] $table_name [description]
	 * @param  [type] $id         [description]
	 * @return [type]             [description]
	 */
	public function delete($table_name,$id)
	{
		if($table_name=="mpro_products"){
		
			$data['Status'] ="3";
			$this->db->where('Product_id', $id);
			$product_delete=$this->db->update("mpro_products", $data);

			$product_unit=$this->db->update("mpro_product_units", $data);
			
			$product_supplier=$this->db->update("mpro_product_suppliers", $data);
			}else{ 
				$data['status'] ="3";
				$this->db->where('id', $id);
				$query = $this->db->update($table_name, $data);}
				if ($query) {
            		$this->session->set_flashdata('super_category_success', 'Super Category Data Deleted');
            		$this->session->set_flashdata('categor_success', 'categories Data Deleted');
            		$this->session->set_flashdata('sub_category_success', 'categories Data Deleted');
            		
					return TRUE;
				}
				return FALSE;		
	}

	/**
	 * State Opertation Model
	 */

	public function get_super_categories()
	{
		$this->db->select($this->super_categories . '.*');
		$this->db->where_not_in('status',3);
        $query = $this->db->get($this->super_categories);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
	}


public function get_all_Products()
	{
		$this->db->select($this->products . '.*');
		$this->db->where_not_in('status',3);
        $query = $this->db->get($this->products);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
	}
	

	/**
	 * 
	 * Countrty Data Add 
	 */
	public function adding_super_category($super_data)
	{
		if ($this->db->insert('mpro_super_categories', $super_data)) {
            $this->session->set_flashdata('super_category_success', 'Super Category Data Inserted');
			return TRUE;
		}
		return FALSE;		
	}

	function get_increment_code() {
        $entry_number = $this->db->count_all_results($this->products)+1;

        return $entry_number;
    }
	/**
	 * State Data Edit 
	 */
	public function editing_super_category($super_data,$id)
	{
		$super_data['updated_date'] = date('Y-m-d H:i:s');
		$this->db->where('id', $id);
		if ($this->db->update('mpro_super_categories', $super_data)) {
            $this->session->set_flashdata('super_category_success', 'Super Category Data Updated');
			return TRUE;
		}
		return FALSE;		
	}

	/**
	 * City Operation
	 * @return [type] [description]
	 */
	public function get_sub_categories()
	{
		$this->db->select($this->sub_categories . '.*');
		$this->db->where_not_in('status',3);
        $query = $this->db->get($this->sub_categories);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
	}

	public function adding_sub_categories($sub_data)
	{
		if ($this->db->insert('mpro_sub_categories', $sub_data)) {
            $this->session->set_flashdata('sub_category_success', 'Sub Category Data Inserted');
			return TRUE;
		}
		return FALSE;		
	}

	public function editing_sub_categories($sub_data,$id)
	{
		$sub_data['updated_date'] = date('Y-m-d H:i:s');
		$this->db->where('id', $id);
		if ($this->db->update('mpro_sub_categories', $sub_data)) {
            $this->session->set_flashdata('sub_category_success', 'Sub Category Data Updated');
			return TRUE;
		}
		return FALSE;		
	}

	// City Editing Data
	 
	public function adding_products($product_data)
	{
		if ($this->db->insert('mpro_products', $product_data)) {
			$Product_id=$this->db->insert_id();
    return $Product_id;
		}
		return FALSE;		
	}

	// Add Product Units data

	  public function add_product_units($product_id,$units){

                  $cnt=count($units);

               for ($i=0; $i < $cnt ; $i++) { 
                   $product_units[]=array(
                    'Units_id'=>isset($units[$i + 0]) ? $units[$i + 0] : null,
                
                   
                    );
                   $product_units[$i]['Product_id']=$product_id;
  }

   $insert_id=$this->db->insert_batch('mpro_product_units',$product_units);
    return $insert_id;
}

		  public function edit_product_units($product_id,$units){
		  	$this->db->query("delete from mpro_product_units where Product_id='{$product_id}'");
	                  $cnt=count($units);

	               for ($i=0; $i < $cnt ; $i++) { 
	                   $product_units[]=array(
	                    'Units_id'=>isset($units[$i + 0]) ? $units[$i + 0] : null,
	                
	                   
	                    );
	                   $product_units[$i]['Product_id']=$product_id;
	  }

	   $insert_id=$this->db->insert_batch('mpro_product_units',$product_units);
	    return $insert_id;
	}	


// Add Product Suppliers data

	public function add_product_suppliers($product_id,$suppliers){

                  $cnt=count($suppliers);

               for ($i=0; $i < $cnt ; $i++) { 
                   $product_units[]=array(
                    'Supplier_id	'=>isset($suppliers[$i + 0]) ? $suppliers[$i + 0] : null,
                
                   
                    );
                   $product_units[$i]['Product_id']=$product_id;
  }

   $insert_id=$this->db->insert_batch('mpro_product_suppliers',$product_units);
    return $insert_id;
}	

		public function edit_product_suppliers($product_id,$suppliers){
			$this->db->query("delete from mpro_product_suppliers where Product_id='{$product_id}'");
                  $cnt=count($suppliers);

               for ($i=0; $i < $cnt ; $i++) { 
                   $product_units[]=array(
                    'Supplier_id	'=>isset($suppliers[$i + 0]) ? $suppliers[$i + 0] : null,
                
                   
                    );
                   $product_units[$i]['Product_id']=$product_id;
  }

   $insert_id=$this->db->insert_batch('mpro_product_suppliers',$product_units);
    return $insert_id;
}

	public function edit_products($Product_data,$id,$image_data)
	{

		$Product_data['Product_image'] = $image_data;
		$Product_data['updated_date'] = date('Y-m-d H:i:s');
		$this->db->where('Product_id', $id);
		if ($this->db->update('mpro_products', $Product_data)) {
			// $Product_id=$this->db->insert_id();
   //  		return $Product_id;
			return TRUE;
		}
		return FALSE;		
	}

// GET PREFIX (ITEM)

public function get_prefix()
	{
		$this->db->select("mpro_prefix_setting" . '.item_prefix');
        $query = $this->db->get("mpro_prefix_setting");
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
	}


	

}

/* End of file Location_model.php */
/* Location: ./application/models/master/Location_model.php */