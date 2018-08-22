<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

	public function __construct() {
        parent::__construct();
        if ($this->session->userdata('is_logged_in') == '') {            
            redirect('login');
            session_destroy();
        }
        $this->load->helper(array('form', 'url'));
        $this->load->model('master/Company_model');
        $this->load->model('master/Location_model');
        $this->load->model('master/Upload_model');
    }

    /**
     * [gst Page]
     * @return [countty] Main Page
     * 
     */
	public function index()
	{  
		$template['table_name'] 	=	"mpro_company_table";
        $template['company']        =   $this->Company_model->get_all_company();
		$template['page']		    =	'master/company/company';
        $this->load->view('template',$template);
	}

    public function company_add()
    {       
        $template['countries'] = $this->Location_model->get_location_country();
        $template['states'] = $this->Location_model->get_states_by_country_id(1);
        
        $template['table_name']     =   "mpro_company_table";
        $template['page']           =   'master/company/company_add';
        $this->load->view('template',$template);
    }

    public function company_edit()
    {   
        $id=$this->input->get('id');
        $template['countries']      = $this->Location_model->get_location_country();
        $template['states']         = $this->Location_model->get_states_by_country_id(1); 
        $template['city']           = $this->Location_model->get_full_city_data();       
        $template['edit_company']   = $this->Company_model->get_edit_company_data($id); 
        $template['page']           =   'master/company/company_edit';
        $this->load->view('template',$template);
    }

    public function adding_company()
    {        
        $company_add = $this->input->post('company');         
        $file_name   = $this->Upload_model->company_logo_upload_file();
        $company_add['CompanyLogo']= $file_name;
        $this->Company_model->insert_company($company_add);
        $this->session->set_flashdata('company_success', 'Company Added');
        redirect('master/company/');
    }

    public function editing_company()
    {
        $id = $this->input->post('id');
        $editing_company = $this->input->post('company');
        if($_FILES["CompanyLogo"]['name'] != NULL)
        {
            $image_data   = $this->Upload_model->replace_image();
            $this->Company_model->edit_company($editing_company,$id,$image_data);
        }else
        {
            $old_file_name = $this->input->post('old_file_name');
            $this->Company_model->edit_company($editing_company,$id,$old_file_name);
            echo $old_file_name;
        }
        $this->session->set_flashdata('company_success', 'Updated');        
        redirect('master/company/');
    }

    public function customer_group_edit()
    {
        $id = $this->input->post('customer_group_id');
        $customer_group_edit = $this->input->post('customergroup');
        $this->Customer_model->editing_customer_group($customer_group_edit,$id);
        redirect('master/customer/');
    }

    /**
     * Common Funtion To Delete Or Status Update To 3 
     * @return [type] [description]
     */
    public function delete()
    {
        
        $url    = $this->input->post('url');    
        $id     = $this->input->post('CompanyID');
        $table_name = $this->input->post('table_name'); $table_name = strtolower($table_name);
        $this->Company_model->delete($table_name,$id);
        $this->session->set_flashdata('company_success', 'Deleted');  
        redirect('master/'.$url.'');
    }

    // Prefix Funcion
    
    public function prefix_setting()
    {        
        $template['prefix_setting'] =  $this->Company_model->get_prefix_setting_data();
        $template['transaction_prefix'] =  $this->Company_model->get_transaction_prefix_data();
        $template['table_name']     =   "mpro_ ";        
        $template['page']           =   'master/company/prefix_setting';
        $this->load->view('template',$template);
    }

    public function prefix_setting_insert()
    {        
        print_r($_POST['common_prefix']);
        $this->Company_model->inserting_prefix_data($_POST['common_prefix']);
        redirect('master/company/prefix_setting/');
    }

    public function prefix_transaction_insert()
    {        
        print_r($_POST);
        //die();
        $this->Company_model->inserting_transaction_prefix_data($_POST['transaction_prefix']);
        redirect('master/company/prefix_setting/');
    }

    // Advance Setting

    public function advanced_setting()
    {        
        // Data Retriving
        //$template['currency']   =  $this->Company_model->get_currency_data();s
        $template['account']    =  $this->Company_model->account_setting_view();
        $template['currency']    =  $this->Company_model->currency_setting_view();
        $template['datenum']    =  $this->Company_model->date_num_setting_view();
        $template['signout']    =  $this->Company_model->signout_setting_view();

        $template['prefix_setting'] =  $this->Company_model->get_prefix_setting_data();
        $template['transaction_prefix'] =  $this->Company_model->get_transaction_prefix_data();
        $template['table_name']     =   "mpro_ ";        
        $template['page']           =   'master/company/advanced_setting';
        $this->load->view('template',$template);
    }

    public function account_setting()
    {
        print_r($_POST['advanced']);
        $this->Company_model->account_setting_insert($_POST['advanced']);
        redirect('master/company/advanced_setting/');
    }
    
    public function currency_setting()
    {
        print_r($_POST['currency']);        
        $this->Company_model->currency_setting_insert($_POST['currency']);
        redirect('master/company/advanced_setting/');
    }

    public function date_num_setting()
    {
        print_r($_POST['datenum']);
        $this->Company_model->date_num_setting_insert($_POST['datenum']);
        redirect('master/company/advanced_setting/');
    }

    public function signout_setting()
    {
        print_r($_POST['signout']);
        $this->Company_model->signout_setting_insert($_POST['signout']);
        redirect('master/company/advanced_setting/');
    }    


    public function advanced_setting_insert()
    {        
        print_r($_POST['common_advanced']);
        $this->Company_model->inserting_advanced_data($_POST['common_advanced']);
        redirect('master/company/advanced_setting/');
    }

    public function advanced_transaction_insert()
    {        
        print_r($_POST);
        //die();
        $this->Company_model->inserting_transaction_advanced_data($_POST['transaction_advanced']);
        redirect('master/company/advanced_setting/');
    }	

}

?>