<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventors_model extends CI_Model {

    private $mpro_ventors = 'mpro_ventors_table';



   public function get_all_ventors() {
        $this->db->select($this->mpro_ventors . '.*');
        $this->db->where('status!=',3);
        $query = $this->db->get($this->mpro_ventors);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
    }

    function get_increment_code() {
        $increment_code = $this->db->count_all_results($this->mpro_ventors)+1;

        return $increment_code;
    }

        public function get_prefix()
    {
        $this->db->select("mpro_prefix_setting" . '.vendor_prefix');
        $query = $this->db->get("mpro_prefix_setting");
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
    }
   /**
     * Gst Data Add 
     */
    public function adding_ventors($adding_ventors_data)
    {
        if ($this->db->insert('mpro_ventors_table', $adding_ventors_data)) {
            $this->session->set_flashdata('vendor_success', 'Vendor Data Inserted');
            return TRUE;
        }
        return FALSE;       
    }

        public function editing_ventors($ventors_data,$id)
    {
        $ventors_data['updated_date'] = date('Y-m-d H:i:s');
        $this->db->where('id', $id);
        if ($this->db->update('mpro_ventors_table', $ventors_data)) {
            $this->session->set_flashdata('vendor_success', 'Vendor Data Updated');
            return TRUE;
        }
        return FALSE;       
    }

    /**
     * Gst Data Edit 
     */


    /**
     * Comman Model To Delete or update the Data
     * @param  [type] $table_name [description]
     * @param  [type] $id         [description]
     * @return [type]             [description]
     */
    public function delete($table_name,$id)
    {

        $this->db->where('id', $id);
        $data['status'] ="3";
        if ($this->db->update($table_name, $data)) {
            $this->session->set_flashdata('vendor_success', 'Vendor Data Deleted');
            return TRUE;
            echo $id;
        die();
        }
        return FALSE;  
        echo "err";     
        die();
    }


            public function add_customer_address($customer_address,$id)
    {
        $customer_address['Supplier_id']=$id;
        if ($this->db->insert('mpro_supplier_address', $customer_address)) {
            //$this->session->set_flashdata('customer_main_success', 'Customer Data Inserted');
            return TRUE;
        }
        return FALSE;       
    }
            public function edit_customer_address($customer_address,$id)
    {
        //$category_data['updated_date'] = date('Y-m-d H:i:s');
        $this->db->where('id', $id);
        if ($this->db->update('mpro_supplier_address', $customer_address)) {
            //$this->session->set_flashdata('categor_success', 'categories Data Updated');
            return TRUE;
        }
        return FALSE;       
    }


  
}