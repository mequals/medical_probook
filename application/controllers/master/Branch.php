<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch extends CI_Controller {

	public function __construct() {
        parent::__construct();
        if ($this->session->userdata('is_logged_in') == '') {            
            redirect('login');
            session_destroy();
        }
        $this->load->model('master/Branch_model');
        $this->load->model('master/Location_model');
        $this->load->model('master/Company_model');
    }

    /**
     * [Country Page]
     * @return [countty] Main Page
     * 
     */
	public function index()
	{		
		$template['table_name'] =	"mpro_hub_branch";
		$template['branch'] 	=	$this->Branch_model->get_all_branch();
		$template['page']		=	'master/branch/branch';
        $this->load->view('template',$template);
	}

	public function delete()
	{
		$url 	= $this->input->post('url');	
		$id 	= $this->input->post('Branch_id');
		$table_name = $this->input->post('table_name'); $table_name = strtolower($table_name);
		$this->Branch_model->delete($table_name,$id);
		redirect('master/branch/');
	}

	public function adding_branch()
	{		
		$template['hub_code'] 		= $this->Branch_model->get_hub_increment_code();	
		$template['company'] 		= $this->Company_model->get_all_company();	
		$template['branch_code'] 	= $this->Branch_model->get_branch_increment_code();
		$template['countries'] 		= $this->Location_model->get_location_country();
        $template['states'] 		= $this->Location_model->get_states_by_country_id(1);
		$template['table_name'] 	=	"mpro_hub_branch";		
		$template['page']			=	'master/branch/branch_add';
        $this->load->view('template',$template);
	}

	public function editing_branch()
	{	
		$id=$this->input->get('id');
		$template['countries'] 		= $this->Location_model->get_location_country();
        $template['states'] 		= $this->Location_model->get_states_by_country_id(1);			
        $template['city'] 			= $this->Location_model->get_full_city_data();			
		$template['branch'] 	=	$this->Branch_model->get_all_branch_specific($id);		
		$template['table_name'] =	"mpro_hub_branch";		
		$template['page']		=	'master/branch/branch_edit';
        $this->load->view('template',$template);
	}

	public function updating_branch ()
	{
		$id = $this->input->post('branch_id');
        $branch_edit = $this->input->post('branch');
        $this->Branch_model->updating_branch($branch_edit,$id);
        redirect('master/branch/');
	}

	public function adding_branch_insert()
	{	
		$branch_data=array();	
		$branch_data = $this->input->post('branch');
		$gst_no= $this->input->post('gst_no');
		$gst_prefix=$this->input->post('gst_no_prefix');
		$branch_data['gst_no']=$gst_prefix.$gst_no;
		$hub_code = $this->input->post('hub_code');
		$this->Branch_model->inserting_branch($branch_data);
        redirect('master/branch/');
	}

	// Prefix Funcion    
    public function prefix_setting()
    {        
        $template['prefix_setting'] =  $this->Company_model->get_prefix_setting_data();
        $template['transaction_prefix'] =  $this->Company_model->get_transaction_prefix_data();
        $template['table_name']     =   "mpro_ ";        
        $template['page']           =   'master/branch/prefix_setting';
        $this->load->view('template',$template);
    }

        public function get_statecode() {
       $id = $this->input->post('id');
        $result=$this->Branch_model->get_state_code($id);
        echo json_encode($result);
    }

	

}

?>