<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_model extends CI_Model {

    private $mpro_company = 'mpro_company_table';



    public function get_all_company() {
        $this->db->select('company.*,country.country_name,state.state_name,city.city_name');
        $this->db->from('mpro_company_table as company');
        $this->db->join('mpro_cities as city', 'city.id = company.CityID', 'left');
        $this->db->join('mpro_states as state', 'state.id = company.StateID', 'left');
        $this->db->join('mpro_countries as country', 'country.id = company.Country', 'left');
        $this->db->where('company.CompanyStatus!=',3);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
    }

    public function get_edit_company_data($id)
    {
        $this->db->select('*');     
        $this->db->from('mpro_company_table');
        $this->db->where('CompanyID', $id);
        $query = $this->db->get();        
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
    }

   /**
     * Company Data Add 
     */
    public function insert_company($adding_company_data)
    {
        if ($this->db->insert('mpro_company_table', $adding_company_data)) {
            $this->session->set_flashdata('category_success', 'Success message.');
            return TRUE;
        }
        return FALSE;       
    }

    /**
     * Company Data Add 
     */
    public function edit_company($editing_company_data,$id,$image_data)
    {
        $editing_company_data['updatedon'] = date('Y-m-d H:i:s');
        $editing_company_data['CompanyLogo'] = $image_data;
        $this->db->where('CompanyID', $id);
        if ($this->db->update('mpro_company_table', $editing_company_data)) {
            return TRUE;
        }
        return FALSE;       
    }

    /**
     * Company Data Edit 
     */
    public function editing_customer_group($adding_customer_group_data_edit,$id)
    {
        $Company_data_edit['updated_date'] = date('Y-m-d H:i:s');
        $this->db->where('id', $id);
        if ($this->db->update('mpro_customer_group', $adding_customer_group_data_edit)) {
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

        $data['CompanyStatus'] ="3";
        $this->db->where('CompanyID', $id);
        if ($this->db->update($table_name, $data)) {
            return TRUE;
            echo $id;
        die();
        }
        return FALSE;  
        echo "err";     
        die();
    }

    // Prefix Get Data
    
    public function get_prefix_setting_data()
    {
        $query = $this->db->get('mpro_prefix_setting');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
    }

    public function inserting_prefix_data($prefix_data)
    {
        $prefix_data['updated_date'] = date('Y-m-d H:i:s');
        $this->db->where('id', 1);
        if ($this->db->update('mpro_prefix_setting', $prefix_data)) {
            return TRUE;
        }
        return FALSE; 
    }

    public function get_transaction_prefix_data()
    {
        $query = $this->db->get('mpro_transaction_prefix');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
    }

    public function inserting_transaction_prefix_data($transaction_data)
    {
        $transaction_data['updated_date'] = date('Y-m-d H:i:s');
        $this->db->where('id', 1);
        if ($this->db->update('mpro_transaction_prefix', $transaction_data)) {
            return TRUE;
        }
        return FALSE; 
    }

    // Advanced Setting
    
    // Inserting
    public function account_setting_insert($account_data)
    {
        $account_data['updated_date'] = date('Y-m-d H:i:s');
        $this->db->where('id', 1);
        if ($this->db->update('mpro_account_setting', $account_data)) {
            return TRUE;
        }
        return FALSE; 
    }

    // Viewing
    public function account_setting_view()
    {
        $query = $this->db->get('mpro_account_setting');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
    }

    // Inserting
    public function currency_setting_insert($currency_data)
    {
        $currency_data['updated_date'] = date('Y-m-d H:i:s');
        $this->db->where('id', 1);
        if ($this->db->update('mpro_currency_setting', $currency_data)) {
            return TRUE;
        }
        return FALSE; 
    }

    // Viewing
    public function date_num_setting_view()
    {
        $query = $this->db->get('mpro_date_number_setting');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
    }

    // Inserting
    public function date_num_setting_insert($date_num_data)
    {
        //print_r($date_num_data); die();
        $date_num_data['updated_date'] = date('Y-m-d H:i:s');
        $this->db->where('id', 1);
        if ($this->db->update('mpro_date_number_setting', $date_num_data)) {
            return TRUE;
        }
        return FALSE; 
    }

    // Viewing
    public function currency_setting_view()
    {
        $query = $this->db->get('mpro_currency_setting');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
    }

    // Inserting
    public function signout_setting_insert($signout_data)
    {
        //print_r($date_num_data); die();
        $signout_data['updated_date'] = date('Y-m-d H:i:s');
        $this->db->where('id', 1);
        if ($this->db->update('mpro_signout_setting', $signout_data)) {
            return TRUE;
        }
        return FALSE; 
    }

    // Viewing
    public function signout_setting_view()
    {
        $query = $this->db->get('mpro_signout_setting');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
    }
}