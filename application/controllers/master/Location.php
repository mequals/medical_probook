<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends CI_Controller {

	public function __construct() {
        parent::__construct();
        if ($this->session->userdata('is_logged_in') == '') {            
            redirect('login');
            session_destroy();
        }
        $this->load->model('master/Location_model');
    }

    /**
     * [Country Page]
     * @return [countty] Main Page
     * 
     */
	public function index()
	{		
		$template['table_name'] 	=	"mpro_countries";
		$template['country'] 		=	$this->Location_model->get_location_country();
		$template['page']			=	'master/location/countries';
        $this->load->view('template',$template);
	}

	/**
	 * Common Funtion To Delete Or Status Update To 3 
	 * @return [type] [description]
	 */
	public function delete()
	{
		$url 	= $this->input->post('url');	
		$id 	= $this->input->post('country_id');
		$table_name = $this->input->post('table_name'); $table_name = strtolower($table_name);
		$this->Location_model->delete($table_name,$id);
		redirect('master/location/'.$url.'');
	}

	public function country_add()
	{
		$country_data = $this->input->post('country');
		$this->Location_model->adding_country($country_data);
		redirect('master/location/');
	}

	public function country_edit()
	{
		$id = $this->input->post('country_id');
		$country_data = $this->input->post('country_edit');
		$this->Location_model->editing_country($country_data,$id);
		redirect('master/location/');
	}

	public function country_delete()
	{
		$url 	= $this->input->post('url');	
		$id 	= $this->input->post('country_id');
		$table_name = $this->input->post('table_name'); $table_name = strtolower($table_name);
		$this->Location_model->deleting_country($table_name,$id);
		redirect('master/location/'.$url.'');
	}	

	/**
	 * State CRUD Operations
	 */

	public function state()
	{		
		$template['table_name'] 	=	"mpro_states";
		$template['country'] 	=	$this->Location_model->get_location_country();
		$template['state'] 		=	$this->Location_model->get_location_state();
		$template['page']		=	'master/location/state';
        $this->load->view('template',$template);
	}

	public function state_add()
	{
		$state_data = $this->input->post('state');
		print_r($state_data);
		$this->Location_model->adding_state($state_data);
		redirect('master/location/state');
	}

	public function state_edit()
	{
		$id = $this->input->post('state_id');
		$state_data = $this->input->post('state');
		$this->Location_model->editing_state($state_data,$id);
		redirect('master/location/state');
	}	

	public function get_states_by_country_id($id) {
        $states = $this->Location_model->get_states_by_country_id($id);
        echo json_encode($states);

    }
    public function get_cities_by_state_id($id) {
        $cities = $this->Location_model->get_city_by_state_id($id);
        echo json_encode($cities);
    }


    
    /**
	 * City CRUD Operations
	 */
    
	public function city()
	{		
		$template['table_name'] 	=	"mpro_cities";
		$template['city'] 	=	$this->Location_model->get_location_city();
		$template['country'] 	=	$this->Location_model->get_location_country();
		$template['state'] 		=	$this->Location_model->get_location_state();		
		$template['page']='master/location/city';
        $this->load->view('template',$template);
	}

	public function city_add()
	{			
		$template['country'] 	=	$this->Location_model->get_location_country();
		$template['state'] 		=	$this->Location_model->get_location_state();
		$template['page']='master/location/city_add';
        $this->load->view('template',$template);
	}

	

	public function city_insert_data()
	{
		$city_data = $this->input->post('city');
		$this->Location_model->adding_city($city_data);
		redirect('master/location/city');
	}


	public function city_edit($edit_id)
	{
		$template['city_data'] 	=	$this->Location_model->get_city_edit($edit_id);
		$template['country'] 	=	$this->Location_model->get_location_country();
		$template['state'] 		=	$this->Location_model->get_location_state();
		$template['page']='master/location/city_edit';
        $this->load->view('template',$template);
	}

	public function city_update_data()
	{
		$id = $this->input->post('city_id');
		$city_data = $this->input->post('city');
		$this->Location_model->editing_city($city_data,$id);
		redirect('master/location/city');
	}		

	public function area()
	{		
		$template['table_name'] 	=	"mpro_areas";
		$template['area'] 	=	$this->Location_model->get_location_area();
		$template['country'] 	=	$this->Location_model->get_location_country();
		$template['state'] 		=	$this->Location_model->get_location_state();
		$template['all_city'] 	=	$this->Location_model->get_full_city_data();
		$template['page']='master/location/area';
        $this->load->view('template',$template);
	}

	public function area_add()
	{			
		$template['country'] 	=	$this->Location_model->get_location_country();
		$template['state'] 		=	$this->Location_model->get_location_state();
		// $template['cities'] 		=	$this->Location_model->get_location_state();
		$template['page']='master/location/area_add';
        $this->load->view('template',$template);
	}

	public function area_edit($edit_id)
	{
		$template['area_data'] 	=	$this->Location_model->get_area_edit($edit_id);
		$template['country'] 	=	$this->Location_model->get_location_country();
		$template['state'] 		=	$this->Location_model->get_location_state();
		$template['cities'] 		=	$this->Location_model->get_location_city();
		// var_dump($template['cities']);
		// var_dump($template['area_data']);
		// exit();
		$template['page']='master/location/area_edit';
        $this->load->view('template',$template);
	}

	public function area_insert_data()
	{
		$area_data = $this->input->post('area');
		$this->Location_model->adding_area($area_data);
		redirect('master/location/area');
	}

	public function area_update_data()
	{
		$id = $this->input->post('area_id');
		$area_data = $this->input->post('area');
		$this->Location_model->editing_area($area_data,$id);
		redirect('master/location/area');
	}



	public function duplicate_check(){
		$data 		= $this->input->post('data');
		$table_name = $this->input->post('table_name');
		$colum = $this->input->post('colum');
		$data = $this->Location_model->duplicate_check($data,$table_name,$colum);
		 print_r($data);
	}

	

}

/* End of file location.php */
/* Location: ./application/controllers/master/location.php */

?>