<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload_model extends CI_Model {

	    public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->library('image_lib');
        }

	public function company_logo_upload_file() {			

		         $config['upload_path']          = './attachments/company_logo/';
                 $config['allowed_types']        = 'gif|jpg|png';
		         $config['max_size']      		 = 10000; 
		         $config['max_width']     		 = 1024; 
		         $config['max_height']    		 = 768;  

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('CompanyLogo'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        $file_name = '';
                        return $file_name;                 
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $upload_data = $this->upload->data(); 
		         		$file_name =   $upload_data['file_name'];
		         		
		         		$configer =  array(
			              'image_library'   => 'gd2',
			              'source_image'    =>  $upload_data['full_path'],
			              'maintain_ratio'  =>  TRUE,
			              'width'           =>  150,
			              'height'          =>  150,
			            );
			            $this->image_lib->clear();
			            $this->image_lib->initialize($configer);
			            $this->image_lib->resize();
                        return $file_name;
                }

    }

    public function replace_image()
    {        
        $old_file_name = $this->input->post('old_file_name');   
        unlink(FCPATH . "attachments/company_logo/".$old_file_name);
        $file_name = $this->Upload_model->company_logo_upload_file();
        return $file_name;       
    }


    // Users Upload Module
    public function users_image_upload_file() {            

                 $config['upload_path']          = './attachments/users_image/';
                 $config['allowed_types']        = 'gif|jpg|png';
                 $config['max_size']             = 10000; 
                 $config['max_width']            = 1024; 
                 $config['max_height']           = 768;  

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('profile_image'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        $file_name = '';
                        return $file_name;                        
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $upload_data = $this->upload->data(); 
                        $file_name =   $upload_data['file_name'];
                        
                        $configer =  array(
                          'image_library'   => 'gd2',
                          'source_image'    =>  $upload_data['full_path'],
                          'maintain_ratio'  =>  TRUE,
                          'width'           =>  150,
                          'height'          =>  150,
                        );
                        $this->image_lib->clear();
                        $this->image_lib->initialize($configer);
                        $this->image_lib->resize();
                        return $file_name;
                }

    }

    public function users_replace_image()
    {        
        $old_file_name = $this->input->post('old_file_name');   
        unlink(FCPATH . "attachments/users_image/".$old_file_name);
        $file_name = $this->Upload_model->users_image_upload_file();
        return $file_name;       
    }


    // Product Upload Image

    public function product_image_upload_file() {            

                 $config['upload_path']          = './attachments/Products_image/';
                 $config['allowed_types']        = 'gif|jpg|png';
                 $config['max_size']             = 10000; 
                 $config['max_width']            = 1024; 
                 $config['max_height']           = 768;  

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('Product_image'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error); die();                        
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $upload_data = $this->upload->data(); 
                        $file_name =   $upload_data['file_name'];
                        
                        $configer =  array(
                          'image_library'   => 'gd2',
                          'source_image'    =>  $upload_data['full_path'],
                          'maintain_ratio'  =>  TRUE,
                          'width'           =>  150,
                          'height'          =>  150,
                        );
                        $this->image_lib->clear();
                        $this->image_lib->initialize($configer);
                        $this->image_lib->resize();
                        return $file_name;
                }

    }

    public function product_replace_image()
    {        
        $old_file_name = $this->input->post('old_file_name');   
        unlink(FCPATH . "attachments/Products_image/".$old_file_name);
        $file_name = $this->Upload_model->product_image_upload_file();
        return $file_name;       
    }


}

/* End of file Upload_model.php */
/* Location: ./application/models/Upload_model.php */