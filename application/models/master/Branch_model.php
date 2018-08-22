<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch_model extends CI_Model {

    private $mpro_gst_table = 'mpro_hub_branch';



   public function get_all_branch() {
        $this->db->select('*');
        $this->db->from('mpro_hub_branch');        
        $this->db->where('mpro_hub_branch.Status!=', 3);
        $query = $this->db->get();        
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
    }

    public function get_all_branch_specific($id) {
        $this->db->select('*');
        $this->db->from('mpro_hub_branch');        
        //$this->db->where('mpro_hub_branch.Status!=', 3);
        $this->db->where('id', $id);
        $query = $this->db->get();        
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
    }

    public function get_hub_increment_code() {
         $query = $this->db->query("SELECT count(hub_code) as hub_code FROM mpro_hub_branch");
         $entry_number=$query->row()->hub_code+1;
         return $entry_number;
    }

    public function get_branch_increment_code() {

        $query = $this->db->query('SELECT count(branch_code) as branch_code FROM mpro_hub_branch');
        $entry_number=$query->row()->branch_code+1;
        return $entry_number;
    }

   /**
     * Branch Data Add 
     */
    public function inserting_branch($branch_data)
    {
        $branch_data['created_date'] = date('Y-m-d H:i:s');
        if ($this->db->insert('mpro_hub_branch', $branch_data)) {
            $this->session->set_flashdata('branch_success', 'Branch Data Deleted');
            return TRUE;
        }
        return FALSE;       
    }

    public function get_state_code($id) {
        $this->db->select("mpro_states" . '.state_code');
        $this->db->where('id', $id);
        $query = $this->db->get("mpro_states");
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
       
    }

    /**
     * Branch Data Update 
     */
    public function updating_branch($branch_data,$id)
    {
        $branch_data['update_date'] = date('Y-m-d H:i:s');
        $this->db->where('id', $id);
        if ($this->db->update('mpro_hub_branch', $branch_data)) {
            $this->session->set_flashdata('branch_success', 'Branch Data Updated');
            return TRUE;
        }
        return FALSE;       
    }

    /**
     * Gst Data Edit 
     */
    public function editing_gst($gst_data_edit,$id)
    {
        $gst_data_edit['updated_date'] = date('Y-m-d H:i:s');
        $this->db->where('id', $id);
        if ($this->db->update('mpro_gst', $gst_data_edit)) {
            return TRUE;
        }
        return FALSE;       
    }


    /**
     * Comman Model To Delete or update the Data
     * @param  [type] $table_name [description]
     * @param  [type] $id         [description]
     * @return [type]             [description]
     */
    public function delete($table_name,$id)
    {
        $data['status'] ="3";
        $this->db->where('id', $id);
        if ($this->db->update($table_name, $data)) {
            $this->session->set_flashdata('branch_success', 'Branch Data Deleted');
            return TRUE;
            echo $id;
        die();
        }
        return FALSE;  
        echo "err";     
        die();
    }
  
}