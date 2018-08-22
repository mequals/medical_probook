<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit extends CI_Controller {

	public function __construct() {
        parent::__construct();
        if ($this->session->userdata('is_logged_in') == '') {            
            redirect('login');
            session_destroy();
        }
        $this->load->model('master/Units_model');
    }

    /**
     * [Units Page]
     * @return [countty] Main Page
     * 
     */
	public function index()
	{		
		$template['table_name'] 	=	"mpro_units";
		$template['units'] 			=	$this->Units_model->get_all_units();
		$template['page']			=	'master/unit';
        $this->load->view('template',$template);

	}

	public function delete()
	{
		$url 	= $this->input->post('url');	
		$id 	= $this->input->post('Units_id');
		$table_name = $this->input->post('table_name'); $table_name = strtolower($table_name);
		$this->Units_model->delete($table_name,$id);
		redirect('master/'.$url.'');
	}


	public function Units_add()
	{
		$Units_data = $this->input->post('Units');
		$this->Units_model->adding_Units($Units_data);
		redirect('master/unit/');
	}

	public function Units_edit()
	{
		$id = $this->input->post('Units_id');
		$units_data = $this->input->post('Units_edit');

		$this->Units_model->editing_Units($units_data,$id);
		redirect('master/unit/');
	}

	

}

/* End of file location.php */
/* Location: ./application/controllers/master/location.php */

?>