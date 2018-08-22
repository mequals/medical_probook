<?php 
error_reporting(0);
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

class Main extends CI_Controller {

	public function index()
	{
		$template['page']='admin/index';
        $this->load->view('template',$template);
		//$this->load->view('welcome_message');
	}

}
