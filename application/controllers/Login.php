<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller {

    

	public function __construct() {
        parent::__construct();
        $this->load->model('login/Login_model');
        $this->load->model('master/Users_model');
    }
	public function index()
	{
		$this->load->view('login');
		  // $template['page']='admin/index';
    //       $this->load->view('template',$template);		
    //       
	}

	public function validate() {

        

        $username = $this->security->xss_clean($this->input->post('username'));
        $password = md5($this->input->post('password'));
        $validate = $this->Login_model->validate($username, $password);
        
        if (empty($validate)) {
            //$this->session->set_flashdata('msg1', 'Username or Password Incorrect!');
            $value="1";
            // $value= getHostByName(getHostName());
            echo json_encode($value);
            //redirect('login');
        } else {
            $get_user_details = $this->Login_model->get_user_details($username, $password);
            $UserID = $get_user_details->user_id;
            $UserTypeID = $get_user_details->user_type_id;
            $Name = $get_user_details->firstname;
            $Address = $get_user_details->address_line_1;
            $Email = $get_user_details->email_address;
            $Mobile = $get_user_details->mobile_number;
            // $HubID = $get_user_details->HubID;
            $Username = $get_user_details->username;
            $Password = $get_user_details->password;
            $JoiningDate = $get_user_details->created_date;
            //$UserTypeName = $get_user_details->UserTypeName;
            $Profile = $get_user_details->profile_image;
            $data = array('UserID' => $UserID, 'UserTypeID' => $UserTypeID, 'UserTypeName' => $Name, 'Name' => $Name, 'Address' => $Address, 'Email' => $Email, 'Mobile' => $Mobile,   'UserTypeName' => $Name,  'Profile' => $Profile, 'is_logged_in' => true);
            
            $data['menu_permission']=$this->Users_model->get_user_permissions_by_type_1($UserTypeID);
            $data['section_permission']=$this->Users_model->get_user_permissions_by_type($UserTypeID);
            $date_time = date('Y-m-d h:i:s');
            $login_history = array();
            $login_history['UserID'] = $UserID;
            $login_history['DateTime'] = $date_time;
            $login_history['Login'] = 'Login';
            $login_history['LoginHisStatus'] = 1;
            $this->db->insert('login_history_table', $login_history);
            $this->session->set_userdata($data);
            $this->session->set_flashdata('login_success', 'Success message.');

            $value="dashboard/dashboard";
            echo json_encode($value);
            //redirect('dashboard/dashboard');
        }
    }
    public function logout() {
        $UserID = $this->session->userdata('UserID');
        $date_time = date('Y-m-d h:i:s');
        $login_history = array();
        $login_history['UserID'] = $UserID;
        $login_history['DateTime'] = $date_time;
        $login_history['Logout'] = 'Logout';
        $login_history['LoginHisStatus'] = 1;
        $this->db->insert('login_history_table', $login_history);
        $logout = array('UserID', 'UserTypeID', 'Name', 'Address', 'Email', 'Mobile', 'UserTypeName', 'is_logged_in');
        $this->session->unset_userdata($logout);
        $this->session->set_flashdata('msg', 'You Signed Out Now!');
        redirect('login');
        session_destroy();
    }
    public function change_password() {
        $value="1";
            echo json_encode($value);
            exit();

        // $UserID = $this->session->userdata('UserID');
        // $this->db->select("Password");
        // $this->db->from("login");
        // $this->db->where("UserID=$UserID");
        // $result = $this->db->get()->row();
        // $oldpassword = $result->Password;
        // $pwsd = $this->input->post('n_password');
        // $get_password = md5($this->input->post('password'));
        // if ($oldpassword !== $get_password) {
        //     // $this->session->set_flashdata('message', array('message' => 'Invalid Old Password', 'title' => 'Warning !', 'class' => 'warning'));
        //     $value="1";
        //     echo json_encode($get_password);

           
        // } else {
             
        //         $UserID = $this->session->userdata('UserID');
        //         $new_password = md5($this->input->post('n_password'));
        //         $atrr = array('Password' => $new_password, 'pwd' => $pwsd);
        //         $this->db->where('UserID', $UserID);
        //         $this->db->update('login', $atrr);
        //         //$this->session->set_flashdata('message', array('message' => 'Password updated successfully', 'title' => 'Success !', 'class' => 'success'));
                
        //         session_destroy();
        //         $value="login";
        //         echo json_encode($value);
        //     }
        
    }

    public function check(){


 echo $browserAgent = $_SERVER['HTTP_USER_AGENT'];       


 $user_agent = $_SERVER['HTTP_USER_AGENT']; 
    if (preg_match('/MSIE/i', $user_agent)) { 
       echo "Internet Explorer";
    }
    if (preg_match('/Firefox/i', $user_agent)) { 
       echo "FireFox";
    }
    if (strpos( $user_agent, 'Chrome') !== false)
    {
        echo "Google Chrome";
    }
    if (strpos( $user_agent, 'Safari') !== false)
    {
       echo "Safari";
    }
    if (preg_match('/Opera/i', $user_agent)) { 
       echo "Opera";
    }


    }
}
