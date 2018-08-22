<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventors extends CI_Controller {

	public function __construct() {
        parent::__construct();
        if ($this->session->userdata('is_logged_in') == '') {            
            redirect('login');
            session_destroy();
        }
        $this->load->model('master/Branch_model');
        $this->load->model('master/Location_model');
        $this->load->model('master/Ventors_model');
        $this->load->model('master/Customer_model');
    }

    /**
     * [gst Page]
     * @return [countty] Main Page
     * 
     */
	public function index()
	{		
		$template['table_name'] 	=	"mpro_ventors_table";
        $template['Ventors']        =   $this->Ventors_model->get_all_ventors();
        $template['Prefix']         = $this->Ventors_model->get_prefix();
        $template['Ventor_code'] = $this->Ventors_model->get_increment_code();
        $template['branch']     =   $this->Branch_model->get_all_branch();
        $template['Customer_group'] =   $this->Customer_model->get_all_customer_group();
        $template['Supplier_type'] =   $this->Customer_model->get_all_supplier_type();
        $template['country']    =   $this->Location_model->get_location_country();
        $template['state']      =   $this->Location_model->get_location_state();
        $template['cities']         =   $this->Location_model->get_location_city();
		$template['page']		    =	'master/ventors/ventors';
        $this->load->view('template',$template);
	}


    public function ventors_add()
    {
        $ventors_add = $this->input->post('ventors');
        // print_r($ventors_add);
        // die();
        $this->Ventors_model->adding_ventors($ventors_add);
        redirect('master/Ventors');
    }

        public function ventors_edit()
    {
        $id = $this->input->post('Ventor_id');
        $ventors_edit = $this->input->post('ventors');
        // var_dump($ventors_edit);
        // exit();
        $this->Ventors_model->editing_ventors($ventors_edit,$id);
        redirect('master/Ventors');
    }


    /**
     * Common Funtion To Delete Or Status Update To 3 
     * @return [type] [description]
     */
    public function delete()
    {
        
        $url    = $this->input->post('url');    
        $id     = $this->input->post('delete_id');
        $table_name = $this->input->post('table_name'); $table_name = strtolower($table_name);
        $this->Ventors_model->delete($table_name,$id);
        redirect('master/'.$url.'');
    }
}


?>