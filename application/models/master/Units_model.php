<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Units_model extends CI_Model {

    private $mpro_units = 'mpro_units';



    function get_all_units() {
        $this->db->select($this->mpro_units . '.*');
        $this->db->where('status!=', 3);
        $query = $this->db->get($this->mpro_units);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
    }

    /**
     * Countrty Data Add 
     */
    public function adding_Units($Units_data)
    {
        if ($this->db->insert('mpro_units', $Units_data)) {
            $this->session->set_flashdata('unit_success', 'Unit Data Inserted'); 
            return TRUE;
        }
        return FALSE;       
    }

    /**
     * Countrty Data Edit 
     */
    public function editing_Units($Units_data_edit,$id)
    {
        $Units_data_edit['updated_date'] = date('Y-m-d H:i:s');
        $this->db->where('id', $id);
        if ($this->db->update('mpro_units', $Units_data_edit)) {
            $this->session->set_flashdata('unit_success', 'Unit Data Updated');
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
            $this->session->set_flashdata('unit_success', 'Unit Data Deleted');            
            return TRUE;
        }
        return FALSE;       
    }

    

  
}