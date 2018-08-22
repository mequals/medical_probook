<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller {
	public function __construct() {
        parent::__construct();

        if ($this->session->userdata('is_logged_in') == '') {
            //$this->session->set_flashdata('msg', 'Please Login to Continue');
            redirect('login');
            session_destroy();

        }
        $this->load->model('master/Users_model');
        //$this->load->model('dashboard/Dashboard_model');
    }

	public function index()
	{
        
		$template['page']='dashboard/dashboard';
        $this->load->view('template',$template);
		
	}

}
