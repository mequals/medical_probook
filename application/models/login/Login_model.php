<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Login_model extends CI_Model {
    public function validate($username, $password) {
        $this->db->select('*');
        $this->db->from('mpro_users');
        // $this->db->join('usertype_table', 'usertype_table.UserTypeID = user_table.UserTypeID');
        $this->db->where('password', $password);
        $this->db->where('username', $username);
        $this->db->where('status', 1);
        $query = $this->db->get();
        return $query->row();
    }
    public function get_user_details($username, $password) {
        $this->db->select('*');
        $this->db->from('mpro_users');
        // $this->db->join('usertype_table', 'usertype_table.UserTypeID = user_table.UserTypeID');
        $this->db->where('password', $password);
        $this->db->where('username', $username);
        $this->db->where('status', 1);
        
        $query = $this->db->get();
        return $query->row();
    }
}