<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	public function __construct() {
        parent::__construct();
        if ($this->session->userdata('is_logged_in') == '') {            
            redirect('login');
            session_destroy();
        }
        $this->load->model('master/Categories_model');
        $this->load->model('master/Location_model');
        $this->load->model('master/Units_model');
        $this->load->model('master/Gst_model');
        $this->load->model('master/Ventors_model');
        $this->load->model('master/Upload_model');
    }

    /**
     * [Country Page]
     * @return [countty] Main Page
     * 
     */
	public function index()
	{		
		$template['table_name'] 	=	"mpro_categories";
		$template['category'] 	=	$this->Categories_model->get_all_categories();
		$template['page']		=	'master/categories/categories';
        $this->load->view('template',$template);
	}

	/**
	 * Common Funtion To Delete Or Status Update To 3 
	 * @return [type] [description]
	 */
	public function delete()
	{
		$url 	= $this->input->post('url');	
		$id 	= $this->input->post('delete_id');
		$table_name = $this->input->post('table_name'); $table_name = strtolower($table_name);
		$this->Categories_model->delete($table_name,$id);
		$this->session->set_flashdata('product_success', 'Product Data Deleted');
		redirect('master/categories/'.$url.'');
	}

	public function category_add()
	{
		$category = $this->input->post('category');
		$this->Categories_model->adding_category($category);
		redirect('master/categories/');
	}

	public function category_edit()
	{
		$id = $this->input->post('category_id');
		$category_edit = $this->input->post('category_edit');
		$this->Categories_model->editing_category($category_edit,$id);
		redirect('master/categories/');
	}

	/**
	 * State CRUD Operations
	 */

	public function super_category()
	{		
		$template['table_name'] 	=	"mpro_super_categories";
		$template['category'] 		=	$this->Categories_model->get_super_categories();
		$template['page']		=	'master/categories/super_categories';
        $this->load->view('template',$template);
	}

	public function product()
	{		
		$template['Category']			= $this->Categories_model->get_all_categories();
		$template['Prefix']			= $this->Categories_model->get_prefix();
		$template['Suppliers']        =   $this->Ventors_model->get_all_ventors();
        $template['Units'] 				= $this->Units_model->get_all_units();
        $template['Subcategory'] 		=	$this->Categories_model->get_sub_categories();
        $template['Supercategory'] 		=	$this->Categories_model->get_super_categories();
        $template['Gst']            	=   $this->Gst_model->get_all_gst();
        // var_dump($template['Gst']);
        // exit();
        $template['State'] 	        =	$this->Location_model->get_location_state();
        $template['Products'] = $this->Categories_model->get_all_Products();
        // var_dump($template['Products']);
        // exit();
		$template['Item_code'] 			= $this->Categories_model->get_increment_code();
		$template['table_name'] 		=	"mpro_products";
		// $template['category'] 		=	$this->Categories_model->get_all_products();
		$template['page']				=	'master/categories/products';
        $this->load->view('template',$template);
	}

	public function super_add()
	{
		$super_data = $this->input->post('category');
		print_r($super_data);
		$this->Categories_model->adding_super_category($super_data);
		redirect('master/categories/super_category');
	}

	public function super_edit()
	{
		$id = $this->input->post('category_id');
		$super_data = $this->input->post('category_edit');
		$this->Categories_model->editing_super_category($super_data,$id);
		redirect('master/categories/super_category');
	}	

	// public function get_states_by_country_id($id) {
 //        $states = $this->Location_model->get_states_by_country_id($id);
 //        echo json_encode($states);
 //    }
    
    /**
	 * City CRUD Operations
	 */
    
	public function sub_category()
	{		
		$template['table_name'] 	=	"mpro_sub_categories";
		$template['category'] 	=	$this->Categories_model->get_sub_categories();		
		$template['page']='master/categories/sub_categories';
        $this->load->view('template',$template);
	}

	

	public function sub_add()
	{
		$sub_data = $this->input->post('category');
		$this->Categories_model->adding_sub_categories($sub_data);
		redirect('master/categories/sub_category');
	}

	

	public function sub_edit()
	{
		$id = $this->input->post('category_id');
		$sub_data = $this->input->post('category_edit');
		$this->Categories_model->editing_sub_categories($sub_data,$id);
		redirect('master/categories/sub_category');
	}	

	public function add_product()
    {
        $template['Category']		= $this->Categories_model->get_all_categories();
        $template['Units'] 			= $this->Units_model->get_all_units();
        $template['Subcategory'] 	=	$this->Categories_model->get_sub_categories();
        $template['Supercategory'] 		=	$this->Categories_model->get_super_categories();
        
        $template['Item_code'] = $this->Categories_model->get_increment_code();
        // echo $user_id=$this->Users_model->get_increment_code();
        // exit();
        $template['page']='master/categories/add_products';
        $this->load->view('template',$template);
    }	

    public function product_add()
	{

		$product_data = array();
        
        $product_data['Item_code'] = $this->input->post('Item_code');
        $product_data['Product_type'] = $this->input->post('Product_type');
         $product_data['Inventory_tracking'] = $this->input->post('Inventory_tracking');
        $product_data['Item_name'] = $this->input->post('Item_name');
        $product_data['Hsn_code'] = $this->input->post('Hsn_code');
        $product_data['Product_units'] =implode(',',$this->input->post('Units_id[]'));
        $product_data['Product_suppliers'] =implode(',',$this->input->post('Prefered_supplier_id[]'));
        $product_data['Category_id'] = $this->input->post('Category_id');
        $product_data['Sub_cat_id'] = $this->input->post('Sub_cat_id');
        $product_data['Material_type_id'] = $this->input->post('Material_type_id');
        $product_data['Product_image'] = $this->input->post('Image');       
        $product_data['Sales_price'] = $this->input->post('Sales_price');
        $product_data['S_inclusive_of_tax'] = $this->input->post('S_inclusive_of_tax');
        $product_data['Tax'] = $this->input->post('Tax');
        $product_data['Cost'] = $this->input->post('Cost');
        $product_data['P_inclusive_of_tax'] = $this->input->post('P_inclusive_of_tax');
        $product_data['Purchase_tax'] = $this->input->post('Purchase_tax');
        $product_data['Description'] = $this->input->post('Description');

        // Product Image Upload
        $file_name   = $this->Upload_model->product_image_upload_file();
        $product_data['Product_image']= $file_name;

		$result=$this->Categories_model->adding_products($product_data);

		$product_units = $this->input->post('Units_id[]');
		$cat = $this->Categories_model->add_product_units($result, $product_units);

		$product_supplier = $this->input->post('Prefered_supplier_id[]');
		$cat = $this->Categories_model->add_product_suppliers($result, $product_supplier);

            $this->session->set_flashdata('product_success', 'Product Data Inserted');

		redirect('master/categories/product');
	}


 public function product_edit()
	{
		$product_id = $this->input->post('Product_id');
		$product_data = array();
        
        $product_data['Item_code'] = $this->input->post('Item_code');
        $product_data['Product_type'] = $this->input->post('Product_type');
        $product_data['Inventory_tracking'] = $this->input->post('Inventory_tracking');
        $product_data['Item_name'] = $this->input->post('Item_name');
        $product_data['Hsn_code'] = $this->input->post('Hsn_code');
        $product_data['Product_units'] =implode(',',$this->input->post('Units_id[]'));
        $product_data['Product_suppliers'] =implode(',',$this->input->post('Prefered_supplier_id[]'));
        $product_data['Category_id'] = $this->input->post('Category_id');
        $product_data['Sub_cat_id'] = $this->input->post('Sub_cat_id');
        $product_data['Material_type_id'] = $this->input->post('Material_type_id');
        $product_data['Product_image'] = $this->input->post('Image');
        $product_data['Sales_price'] = $this->input->post('Sales_price');
        $product_data['S_inclusive_of_tax'] = $this->input->post('S_inclusive_of_tax');
        $product_data['Tax'] = $this->input->post('Tax');
        $product_data['Cost'] = $this->input->post('Cost');
        $product_data['P_inclusive_of_tax'] = $this->input->post('P_inclusive_of_tax');
        $product_data['Purchase_tax'] = $this->input->post('Purchase_tax');
        $product_data['Description'] = $this->input->post('Description');
        
        if($_FILES["Product_image"]['name'] != NULL)
        {
            $image_data   = $this->Upload_model->product_replace_image();
            $this->Categories_model->edit_products($product_data,$product_id,$image_data);
        }else
        {
            $old_file_name = $this->input->post('old_file_name');
            $this->Categories_model->edit_products($product_data,$product_id,$old_file_name);
            echo $old_file_name;
        //     var_dump($product_data);
        // die();
        }        
        
        // die();
        // $product_data['Creat'] = $this->input->post('Creat');
		// $product_data = $this->input->post('product');
		// $result=$this->Categories_model->edit_products($product_data,$product_id);

		$product_units = $this->input->post('Units_id[]');
		$cat = $this->Categories_model->edit_product_units($product_id, $product_units);

		$product_supplier = $this->input->post('Prefered_supplier_id[]');
		$cat = $this->Categories_model->edit_product_suppliers($product_id, $product_supplier);
            $this->session->set_flashdata('product_success', 'Product Data Updated');

		redirect('master/categories/product');
	}
	
}

/* End of file location.php */
/* Location: ./application/controllers/master/location.php */

?>