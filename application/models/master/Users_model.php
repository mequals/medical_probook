<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Users_model extends CI_Model {

    private $user_type_table = 'mpro_user_types';
    private $user_permission_table = 'mpro_user_type_permissions';
    private $user_modules_table = 'mpro_user_modules';
    private $user_sections_table = 'mpro_user_sections';
    private $mpro_users_table = 'mpro_users';
    function insert_user_type($data) {
        if ($this->db->insert($this->user_type_table, $data)) {
            $insert_id = $this->db->insert_id();
            $this->session->set_flashdata('users_success', 'User Data Inserted');
            return $insert_id;
        }
        return FALSE;
    }

    public function get_prefix()
    {
        $this->db->select("mpro_prefix_setting" . '.user_prefix');
        $query = $this->db->get("mpro_prefix_setting");
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
    }

    function insert_user_permission($data) {
        if ($this->db->insert($this->user_permission_table, $data)) {
            $sal_id = $this->db->insert_id();
            return true;
        }
        return false;
    }

    function update_user_type($data, $id) {
        $data['updated_date'] = date('Y-m-d H:i:s');
        $this->db->where('id', $id);
        if ($this->db->update($this->user_type_table, $data)) {
            $this->session->set_flashdata('users_success', 'User Data Updated');
            return TRUE;
        }
        return FALSE;
    }

    public function delete($table_name,$id)
    {
        $data['status'] ="3";
        $this->db->where('id', $id);
        if ($this->db->update($table_name, $data)) {           
            $this->session->set_flashdata('users_success', 'User Data Deleted');            
            $this->session->set_flashdata('user_success', 'User Data Deleted');            
            return TRUE;
        }
        return FALSE;       
    }
    function get_all_user_types() {
        $this->db->select($this->user_type_table . '.*');
        $this->db->where('status!=', 3);
        $query = $this->db->get($this->user_type_table);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
    }

    function get_all_users() {
        $this->db->select($this->mpro_users_table . '.*');
        $this->db->where('status!=', 3);
        $query = $this->db->get($this->mpro_users_table);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
    }
    function get_user_by_id($user_id) {
       
$this->db->select($this->mpro_users_table . '.*');
 $this->db->where('id', $user_id);
        $query = $this->db->get($this->mpro_users_table);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
       
    }

        function get_user_desp($user_id) {
       
$this->db->select($this->user_type_table . '.description');
 $this->db->where('id', $user_id);
        $query = $this->db->get($this->user_type_table);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
       
    }

    function get_user_type_by_id($id) {
        $this->db->select($this->user_type_table . '.*');
        $this->db->where($this->user_type_table . '.id', $id);
        $query = $this->db->get($this->user_type_table);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
    }

    function get_all_user_sections_with_modules() {
        $this->db->select($this->user_modules_table . '.*');
        $query = $this->db->get($this->user_modules_table);
        $modules = $query->result_array();
        $user_section_arr = array();
        if (!empty($modules)) {
            foreach ($modules as $module) {
                $sections = $this->get_user_sections_by_module_id($module['id']);
                $user_section_arr[$module['id']] = $module;
                $user_section_arr[$module['id']]['sections'] = $sections;
            }
        }
        return $user_section_arr;
    }   

    function get_user_sections_by_module_id($id) {
        $this->db->select('tab_1.id,tab_1.user_section_name,,tab_1.user_section_key,acc_view,acc_add,acc_edit,acc_delete');
        $this->db->join($this->user_modules_table . ' AS tab_2', 'tab_2.id = tab_1.module_id', 'LEFT');
        $this->db->where('tab_1.module_id', $id);
        $this->db->where('tab_1.status', 1);
        $query = $this->db->get($this->user_sections_table . ' AS tab_1');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
    }

    function get_user_permissions_by_type($user_type_id) {
        $this->db->select('tab_1.*');
        $this->db->where('tab_1.user_type_id', $user_type_id);
        $query = $this->db->get($this->user_permission_table . ' AS tab_1');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
    }


    function get_user_permissions_by_type_1($user_type_id) {
        // $this->db->select('tab_1.*');
        // $this->db->where('tab_1.user_type_id', $user_type_id);
        $query = $this->db->query("SELECT user_type_id,module_id FROM `mpro_user_type_permissions` WHERE user_type_id='{$user_type_id}' group by `module_id` ");
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
    }
    function delete_user_permission_by_type($type) {
        $this->db->where('user_type_id', $type);
        if ($this->db->delete($this->user_permission_table)) {
            if ($this->db->affected_rows() > 0) {
                return true;
            }
        }
        return false;
    }


    function get_increment_code() {
        $entry_number = $this->db->count_all_results($this->mpro_users_table)+1;

        return $entry_number;
    }

    function insert_user($data) {
        $data['password'] = md5($data['password']);
        if ($this->db->insert($this->mpro_users_table, $data)) {
            $user_id = $this->db->insert_id();
            $this->session->set_flashdata('user_success', 'User Data Inserted');
            return $user_id;
        }
        return FALSE;
    }

        function update_user($data, $user_id,$image_data) {
           
        if (empty($data['password'])) {
            unset($data['password']);
        } else {
            $data['password'] = md5($data['password']);
        }
        $data['updated_date'] = date('Y-m-d H:i:s');
        $data['profile_image'] = $image_data;
        $this->db->where('id', $user_id);
        if ($this->db->update($this->mpro_users_table, $data)) {
            return TRUE;
        }
        return FALSE;
    }

   
}