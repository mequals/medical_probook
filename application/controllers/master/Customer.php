<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct() {
        parent::__construct();
        if ($this->session->userdata('is_logged_in') == '') {            
            redirect('login');
            session_destroy();
        }
        $this->load->model('master/Customer_model');
        $this->load->model('master/Branch_model');
        $this->load->model('master/Location_model');
    }

    /**
     * [gst Page]
     * @return [countty] Main Page
     * 
     */
	public function index()
	{		
		$template['table_name'] 	=	"mpro_customer_group";
        $template['customer_group'] =   $this->Customer_model->get_all_customer_group();
		$template['page']		    =	'master/customer/customer_group';
        $this->load->view('template',$template);
	}

    public function customer_group_add()
    {
        // $customer_group['created_by'] = ;
        $customer_group = $this->input->post('customergroup');
        $this->Customer_model->adding_customer_group($customer_group);
        redirect('master/customer/');
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
        $id     = $this->input->post('customer_id');
        $table_name = $this->input->post('table_name'); $table_name = strtolower($table_name);
        $this->Customer_model->delete($table_name,$id);
        redirect('master/'.$url.'');
    }

    public function customer()
    {
        $template['Prefix']         = $this->Customer_model->get_prefix();
        $template['table_name']     =   "mpro_customers";
        $template['customer_id'] = $this->Customer_model->get_increment_code();
        $template['branch']     =   $this->Branch_model->get_all_branch();
        $template['Customer_group'] =   $this->Customer_model->get_all_customer_group();
        $template['country']    =   $this->Location_model->get_location_country();
        $template['state']      =   $this->Location_model->get_location_state();
        $template['cities']         =   $this->Location_model->get_location_city();
        $template['Customers']     =   $this->Customer_model->get_all_customers();
        // $template['Customers'] =   $this->Customer_model->get_all_customers();
        $template['page']           =   'master/customer/customer';
        $this->load->view('template',$template);
    }

    public function customer_add()
    {
        // $customer_group['created_by'] = ;
        $customer_address=array();
        $customers_data = $this->input->post('customers');
        $Same_as_billing = $this->input->post('Same_as_billing');
        $customers_data['S_country_id']=$this->input->post('S_country_id');
        $customers_data['S_state_id']=$this->input->post('S_state_id');
        $customers_data['S_city_id']=$this->input->post('S_city_id');
        if($Same_as_billing!=null){
            $customers_data['S_address1']=$customers_data['B_address1'];
            $customers_data['S_address2']=$customers_data['B_address2'];
            $customers_data['S_country_id']=$customers_data['B_country_id'];
            $customers_data['S_state_id']=$customers_data['B_state_id'];
            $customers_data['S_city_id']=$customers_data['B_city_id'];
            $customers_data['S_pincode']=$customers_data['B_pincode'];
        }
        $customers_data['Same_as_billing']=$Same_as_billing;
        
        $result=$this->Customer_model->adding_customers($customers_data);

            $customer_address['Customer_id']=$customer_edit['B_address1'];
            $customer_address['B_address1']=$customer_edit['B_address1'];
            $customer_address['B_address2']=$customer_edit['B_address2'];
            $customer_address['B_country_id']=$customer_edit['B_country_id'];
            $customer_address['B_state_id']=$customer_edit['B_state_id'];
            $customer_address['B_city_id']=$customer_edit['B_pincode'];
            $customer_address['B_pincode']=$customer_edit['B_pincode'];
            $customer_address['S_address1']=$customer_edit['S_address1'];
            $customer_address['S_address2']=$customer_edit['S_address2'];
            $customer_address['S_country_id']=$customer_edit['S_country_id'];
            $customer_address['S_state_id']=$customer_edit['S_state_id'];
            $customer_address['S_city_id']=$customer_edit['S_pincode'];
            $customer_address['S_pincode']=$customer_edit['S_pincode'];

            $address = $this->Customer_model->add_customer_address($customer_address,$result);


        redirect('master/customer/customer');
    }

    public function customer_edit()
    {
        $customer_address=array();
        $id = $this->input->post('Customer_id');
        $customer_edit = $this->input->post('customers');
        $Same_as_billing = $this->input->post('Same_as_billing');
        $customer_edit['S_country_id']=$this->input->post('S_country_id');
        $customer_edit['S_state_id']=$this->input->post('S_state_id');
        $customer_edit['S_city_id']=$this->input->post('S_city_id');
        if($Same_as_billing!=null){
            $customer_edit['S_address1']=$customer_edit['B_address1'];
            $customer_edit['S_address2']=$customer_edit['B_address2'];
            $customer_edit['S_country_id']=$customer_edit['B_country_id'];
            $customer_edit['S_state_id']=$customer_edit['B_state_id'];
            $customer_edit['S_city_id']=$customer_edit['B_city_id'];
            $customer_edit['S_pincode']=$customer_edit['B_pincode'];
        }
        $customer_edit['Same_as_billing']=$Same_as_billing;
        // var_dump($customer_edit);
        //     die();


        $result=$this->Customer_model->editing_customers($customer_edit,$id);

            $customer_address['Customer_id']=$id;
            $customer_address['B_address1']=$customer_edit['B_address1'];
            $customer_address['B_address2']=$customer_edit['B_address2'];
            $customer_address['B_country_id']=$customer_edit['B_country_id'];
            $customer_address['B_state_id']=$customer_edit['B_state_id'];
            $customer_address['B_city_id']=$customer_edit['B_pincode'];
            $customer_address['B_pincode']=$customer_edit['B_pincode'];
            $customer_address['S_address1']=$customer_edit['S_address1'];
            $customer_address['S_address2']=$customer_edit['S_address2'];
            $customer_address['S_country_id']=$customer_edit['S_country_id'];
            $customer_address['S_state_id']=$customer_edit['S_state_id'];
            $customer_address['S_city_id']=$customer_edit['S_pincode'];
            $customer_address['S_pincode']=$customer_edit['S_pincode'];

            $address = $this->Customer_model->edit_customer_address($customer_address, $id);
        redirect('master/customer/customer');
    }

     public function get_address() {
        
       $id = $this->input->post('id');
        $result=$this->Customer_model->get_branch_address($id);
        echo json_encode($result);
    }
	

}

/* End of file location.php */
/* Location: ./application/controllers/master/location.php */

?>