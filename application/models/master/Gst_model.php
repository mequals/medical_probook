<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class gst_model extends CI_Model {

    private $mpro_gst_table = 'mpro_gst';



   public function get_all_gst() {
        $this->db->select('*,mpro_gst.id as gst_id,mpro_gst.status as gst_status');
        $this->db->from('mpro_gst');
        $this->db->join('mpro_states as state', 'state.id = mpro_gst.state_id', 'left');
        $this->db->where('mpro_gst.status!=', 3);
        $query = $this->db->get();        
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
    }

   /**
     * Gst Data Add 
     */
    public function adding_gst($gst_data)
    {
        if ($this->db->insert('mpro_gst', $gst_data)) {
            $this->session->set_flashdata('gst_success', 'GST Data Inserted');
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
            $this->session->set_flashdata('gst_success', 'GST Data Updated');
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
            $this->session->set_flashdata('gst_success', 'GST Data Deleted');
            return TRUE;
            echo $id;
        die();
        }
        return FALSE;  
        echo "err";     
        die();
    }
  
}