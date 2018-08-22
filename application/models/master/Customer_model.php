<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class customer_model extends CI_Model {

    private $mpro_customer_group = 'mpro_customer_group';
    private $mpro_customers = 'mpro_customers';
    private $mpro_supplier_type = 'mpro_supplier_type';



   public function get_all_customer_group() {
        $this->db->select($this->mpro_customer_group . '.*');
        $this->db->where_not_in('status',3);
        $query = $this->db->get($this->mpro_customer_group);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }   
        return NULL;
    }


   public function get_all_supplier_type() {
        $this->db->select($this->mpro_supplier_type . '.*');
        $this->db->where_not_in('status',3);
        $query = $this->db->get($this->mpro_supplier_type);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }   
        return NULL;
    }
    function get_increment_code() {
        $increment_code = $this->db->count_all_results($this->mpro_customers)+1;

        return $increment_code;
    }

    public function get_prefix()
    {
        $this->db->select("mpro_prefix_setting" . '.customer_prefix');
        $query = $this->db->get("mpro_prefix_setting");
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
    }

   /**
     * Gst Data Add 
     */
    public function adding_customer_group($adding_customer_group_data)
    {
        if ($this->db->insert('mpro_customer_group', $adding_customer_group_data)) {
            $this->session->set_flashdata('customer_success', 'Customer Group Data Inserted');
            return TRUE;
        }
        return FALSE;       
    }

    /**
     * Gst Data Edit 
     */
    public function editing_customer_group($adding_customer_group_data_edit,$id)
    {
        $gst_data_edit['updated_date'] = date('Y-m-d H:i:s');
        $this->db->where('id', $id);
        if ($this->db->update('mpro_customer_group', $adding_customer_group_data_edit)) {
            $this->session->set_flashdata('customer_success', 'Customer Group Data Updated');
            return TRUE;
        }
        return FALSE;       
    }

    public function adding_customers($customers_data)
    {
        if ($this->db->insert('mpro_customers', $customers_data)) {
         $Customer_id=$this->db->insert_id();
         return $Customer_id;
            $this->session->set_flashdata('customer_main_success', 'Customer Data Inserted');
            return TRUE;
        }
        return FALSE;       
    }

    public function editing_customers($customers_data,$id)
    {
        $gst_data_edit['updated_date'] = date('Y-m-d H:i:s');

        $this->db->where('Customer_id', $id);
        if ($this->db->update('mpro_customers', $customers_data)) {
            $this->session->set_flashdata('customer_main_success', 'Customer Data Updated');
            return TRUE;
        }
        return FALSE;       
    }

       public function get_all_customers() {
        $this->db->select($this->mpro_customers . '.*');
        $this->db->where_not_in('status',3);
        $query = $this->db->get($this->mpro_customers);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }   
        return NULL;
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
        if($table_name=="mpro_customers"){$this->db->where('Customer_id', $id);}
        else{$this->db->where('id', $id);}
        if ($this->db->update($table_name, $data)) {
            $this->session->set_flashdata('customer_success', 'Customer Group Data Deleted');
            $this->session->set_flashdata('customer_main_success', 'Customer Data Deleted');
            
            return TRUE;
            echo $id;
        die();
        }
        return FALSE;  
        echo "err";     
        die();
    }

     public function get_branch_address() {
        $this->db->select("mpro_hub_branch". '.address');
        $this->db->select("mpro_hub_branch". '.address2');
        $this->db->select("mpro_hub_branch". '.country_id');
        $this->db->select("mpro_hub_branch". '.state_id');
        $this->db->select("mpro_hub_branch". '.city_id');
        $this->db->select("mpro_hub_branch". '.pincode');
        $this->db->where_not_in('status',3);
        $query = $this->db->get("mpro_hub_branch");
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }   
        return NULL;
    }


        public function add_customer_address($customer_address)
    {
        if ($this->db->insert('mpro_customer_address', $customer_address)) {
            //$this->session->set_flashdata('customer_main_success', 'Customer Data Inserted');
            return TRUE;
        }
        return FALSE;       
    }
            public function edit_customer_address($customer_address,$id)
    {
        //$category_data['updated_date'] = date('Y-m-d H:i:s');
        $this->db->where('id', $id);
        if ($this->db->update('mpro_customer_address', $customer_address)) {
            //$this->session->set_flashdata('categor_success', 'categories Data Updated');
            return TRUE;
        }
        return FALSE;       
    }
  
}