<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gst extends CI_Controller {

	public function __construct() {
        parent::__construct();
        if ($this->session->userdata('is_logged_in') == '') {            
            redirect('login');
            session_destroy();
        }
        $this->load->model('master/Gst_model');
        $this->load->model('master/Location_model');
    }

    /**
     * [gst Page]
     * @return [countty] Main Page
     * 
     */
	public function index()
	{		
		$template['table_name'] 	=	"mpro_gst";
        $template['Gst']            =   $this->Gst_model->get_all_gst();
		$template['state'] 	        =	$this->Location_model->get_location_state();
		$template['page']		    =	'master/gst';
        $this->load->view('template',$template);
	}

    public function gst_add()
    {
        $gst_data = $this->input->post('gst');
        $this->Gst_model->adding_gst($gst_data);
        redirect('master/gst/');
    }

    public function gst_edit()
    {
        $id = $this->input->post('gst_id');
        $gst_data = $this->input->post('gst');
        $this->Gst_model->editing_gst($gst_data,$id);
        redirect('master/gst/');
    }

    /**
     * Common Funtion To Delete Or Status Update To 3 
     * @return [type] [description]
     */
    public function delete()
    {        
        $url    = $this->input->post('url');    
        $id     = $this->input->post('gst_id');
        $table_name = $this->input->post('table_name'); $table_name = strtolower($table_name);
        $this->Gst_model->delete($table_name,$id);
        redirect('master/'.$url.'');
    }

	

}

/* End of file location.php */
/* Location: ./application/controllers/master/location.php */

?>