<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct() {
        parent::__construct();
        if ($this->session->userdata('is_logged_in') == '') {
            //$this->session->set_flashdata('msg', 'Please Login to Continue');
            redirect('login');
            session_destroy();


        }
        $this->load->model('master/Users_model');
        $this->load->model('master/Location_model');
        $this->load->model('master/Upload_model');
    }



// User Role
	public function index()
	{
        $template['table_name']="mpro_user_types";
        $template['user_types'] = $this->Users_model->get_all_user_types();
		$template['page']='master/users/user_type';
        $this->load->view('template',$template);
	}

    public function add_user_type()
    {
        $template['page']='master/users/add_user_type';
        $this->load->view('template',$template);
    }

// Users
    public function user()
    {
        $template['table_name']="mpro_users";
        $template['user_types'] = $this->Users_model->get_all_user_types();
        $template['users'] = $this->Users_model->get_all_users();
        $template['page']='master/users/user';
        $this->load->view('template',$template);
    }

    public function view($type)
    {
        $template['user_type_id'] = $type;
        $template['user_type'] = $this->Users_model->get_user_type_by_id($type);
        $template['user_sections'] = $this->Users_model->get_all_user_sections_with_modules();
        $user_permissions = $this->Users_model->get_user_permissions_by_type($type);
        $user_permissions_arr = array();
        if (!empty($user_permissions)) {    
            foreach ($user_permissions as $key => $value) {
                $user_permissions_arr[$value['module_id']][$value['section_id']] = array('acc_all' => $value['acc_all'], 'acc_view' => $value['acc_view'], 'acc_add' => $value['acc_add'], 'acc_edit' => $value['acc_edit'], 'acc_delete' => $value['acc_delete']);
            }
        }
        $template['user_permissions'] = $user_permissions_arr;
        $template['page']='master/users/user_permissions';
        $this->load->view('template',$template);
    }

    public function user_permission($type)
    {
        if ($this->input->post('permissions', TRUE)) {
            $permissions = $this->input->post('permissions');
            $grand_all = $this->input->post('grand_all');
            $grand_all = !empty($grand_all) ? $grand_all : 0;
            //echo '<pre>'; print_r($this->input->post()); exit;
            $user_type = array('grand_all' => $grand_all);
            $this->Users_model->update_user_type($user_type, $type);
            if (!empty($permissions)) {
                $this->Users_model->delete_user_permission_by_type($type);
                foreach ($permissions as $module_id => $sections) {
                    if (!empty($sections)) {
                        foreach ($sections as $section_id => $item) {
                            $permission_arr = array(
                                'user_type_id' => $type,
                                'module_id' => $module_id,
                                'section_id' => $section_id,
                                'acc_all' => !empty($item['acc_all']) ? 1 : 0,
                                'acc_view' => !empty($item['acc_view']) ? 1 : 0,
                                'acc_add' => !empty($item['acc_add']) ? 1 : 0,
                                'acc_edit' => !empty($item['acc_edit']) ? 1 : 0,
                                'acc_delete' => !empty($item['acc_delete']) ? 1 : 0,
                                'created_date' => date('Y-m-d H:i:s')
                            );
                            $this->Users_model->insert_user_permission($permission_arr);
                        }
                    }
                }
            }
            // $this->session->set_flashdata('flashSuccess', 'User Type Permission successfully updated!');
            redirect('master/users');
        }

        $template['user_type_id'] = $type;
        $template['user_type'] = $this->Users_model->get_user_type_by_id($type);
        $template['user_sections'] = $this->Users_model->get_all_user_sections_with_modules();
        $user_permissions = $this->Users_model->get_user_permissions_by_type($type);
        $user_permissions_arr = array();
        if (!empty($user_permissions)) {    
            foreach ($user_permissions as $key => $value) {
                $user_permissions_arr[$value['module_id']][$value['section_id']] = array('acc_all' => $value['acc_all'], 'acc_view' => $value['acc_view'], 'acc_add' => $value['acc_add'], 'acc_edit' => $value['acc_edit'], 'acc_delete' => $value['acc_delete']);
            }
        }
        $template['user_permissions'] = $user_permissions_arr;
        $template['page']='master/users/user_permissions';
        $this->load->view('template',$template);
    }

    public function add_user()
    {
        $template['Prefix']         = $this->Users_model->get_prefix();
        $template['countries'] = $this->Location_model->get_location_country();
        $template['states'] = $this->Location_model->get_states_by_country_id(1);
        $template['user_types'] = $this->Users_model->get_all_user_types();
        $template['user_id'] = $this->Users_model->get_increment_code();
        // echo $user_id=$this->Users_model->get_increment_code();
        // exit();
        $template['page']='master/users/add_user';
        $this->load->view('template',$template);
    }

    public function edit_user()
    {
        $id=$this->input->get('id');
        $template['users']          = $this->Users_model->get_user_by_id($id);
        $template['countries']      = $this->Location_model->get_location_country();
        $template['states']             = $this->Location_model->get_states_by_country_id($template['users'][0]['country_id']);
        $template['cities']             = $this->Location_model->get_city_by_state_id($template['users'][0]['state_id']);
        
        // var_dump($template['users']);exit();
        $template['user_types']        = $this->Users_model->get_all_user_types();
        
        $template['page']='master/users/edit_user';
        $this->load->view('template',$template);
    }

    public function add_user_edit()
    {
        $template['page']='master/users/add_user_edit';
        $this->load->view('template',$template);
    }

    public function user_type_add() {
        $data = array();

        
        $data['title'] = 'User Types - Add New User Type';
        if ($this->input->post('user_type')) {
            $user_type = $this->input->post('user_type');
            $user_type['created_date'] = date('Y-m-d H:i:s');
            $insert = $this->Users_model->insert_user_type($user_type);
            $this->session->set_flashdata('flashSuccess', 'User Type Added');
            redirect('master/users');
        }
        $this->template->write_view('content', 'master/users', $data);
        $this->template->render();
    }
    public function user_type_edit() {
        $data = array();
        $data['title'] = 'User Types - Edit User Type';
        if ($this->input->post('user_type')) {
            $id = $this->input->post('user_type_id');
            $user_type = $this->input->post('user_type');
            $user_type['updated_date'] = date('Y-m-d H:i:s');
            $update = $this->Users_model->update_user_type($user_type, $id);
            $this->session->set_flashdata('flashSuccess', 'User Type Updated');
            redirect('master/users');
        }
        $data['user_type'] = $this->user_type_model->get_user_type_by_id($id);
        $this->template->write_view('content', 'master/users', $data);
        $this->template->render();
    }
     

     public function user_add() {
        $user = array();
        
        $user['firstname'] = $this->input->post('firstname');
        $user['user_id'] = $this->input->post('user_id');
        $user['dob'] = $this->input->post('dob');
        $user['email_address'] = $this->input->post('email_address');
        $user['mobile_number'] = $this->input->post('mobile_number');
        $user['phone_number'] = $this->input->post('phone_number');
        $user['country_id'] = $this->input->post('country_id');
        $user['state_id'] = $this->input->post('state_id');
        $user['city_id'] = $this->input->post('city_id');
        $user['address_line_1'] = $this->input->post('address_line_1');
        $user['address_line_2'] = $this->input->post('address_line_2');
        $user['zipcode'] = $this->input->post('zipcode');
        $user['profile_image'] = $this->input->post('profile_image');
        $user['username'] = $this->input->post('username');
        $user['password'] = $this->input->post('password');
        $user['user_type_id'] = $this->input->post('user_type_id');

        // File Upload
        $file_name   = $this->Upload_model->users_image_upload_file();
        $user['profile_image'] = $file_name;
        // echo $file_name;
        // print_r($user);
        // //echo $user;
        // exit();
        
     if ($this->input->post('user_id')) {           
                $user['created_date'] = date('Y-m-d H:i:s');
                $insert_id = $this->Users_model->insert_user($user);
            if (!empty($insert_id)) {
                redirect('master/users/user');                
            }
        }
    }

     public function user_edit() {
        $id = $this->input->post('id');
        $user = array();
        $user['user_id'] = $this->input->post('user_id');
        $user['firstname'] = $this->input->post('firstname');
        $user['user_id'] = $this->input->post('user_id');
        $user['dob'] = $this->input->post('dob');
        $user['email_address'] = $this->input->post('email_address');
        $user['mobile_number'] = $this->input->post('mobile_number');
        $user['phone_number'] = $this->input->post('phone_number');
        $user['country_id'] = $this->input->post('country_id');
        $user['state_id'] = $this->input->post('state_id');
        $user['city_id'] = $this->input->post('city_id');
        $user['address_line_1'] = $this->input->post('address_line_1');
        $user['address_line_2'] = $this->input->post('address_line_2');
        $user['zipcode'] = $this->input->post('zipcode');
        
        $user['username'] = $this->input->post('username');
        $user['password'] = $this->input->post('password');
        $user['user_type_id'] = $this->input->post('user_type_id');

        //$image_data   = $this->Upload_model->users_replace_image();
        // $user['profile_image'] = $this->input->post('profile_image');
        print_r($_FILES["profile_image"]['name']);
        // print_r($user);

        if($_FILES["profile_image"]['name'] != NULL)
        {
             $image_data   = $this->Upload_model->users_replace_image();
             $update = $this->Users_model->update_user($user, $id,$image_data);
        }else
        {
            $old_file_name = $this->input->post('old_file_name');
            $update = $this->Users_model->update_user($user, $id,$old_file_name);
        }

        
            if (!empty($profile_image))
                $user['profile_image'] = $profile_image;
            if (empty($user['password']) || trim($user['password']) == '')
                unset($user['password']);
        
        
        // $update = $this->Users_model->update_user($user, $id);
        $this->session->set_flashdata('user_success', 'User Data Updated');
        redirect('master/users/user');
        
        

    }

    public function get_states_by_country_id() {
        $id = $this->input->post('country_id');
        $states = $this->Location_model->get_states_by_country_id($id);
     
        echo json_encode($states);
        
    }
        public function delete()
    {
        $url    = $this->input->post('url');    
        $id     = $this->input->post('delete_id');
        $table_name = $this->input->post('table_name'); $table_name = strtolower($table_name);
        $this->Users_model->delete($table_name,$id);
        redirect('/master/'.$url.'');
    }

    public function get_desp() {
       $id = $this->input->post('id');
        $result=$this->Users_model->get_user_desp($id);
        echo json_encode($result);
    }

}

/* End of file Users.php */
/* Location: ./application/controllers/master/users/Users.php */
