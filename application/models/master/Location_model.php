<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location_model extends CI_Model {

	private $location_country 	= 'mpro_countries';	
	private $location_state 	= 'mpro_states';	
	private $location_city 		= 'mpro_cities';	

	/**
	 * Countrty Data View 
	 */
	public function get_location_country()
	{
		$this->db->select($this->location_country . '.*');
		$this->db->where_not_in('status',3);
        $query = $this->db->get($this->location_country);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
	}

	/**
	 * Countrty Data Add 
	 */
	public function adding_country($country_data)
	{
		// Check Already Inserted 
		$this->db->select('*');
		$this->db->from('mpro_countries');
		$this->db->where('country_name', $country_data['country_name']);
		$this->db->where('status', 3);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {      
            $Updated = $query->result_array();
            $Updated[0]['status'] = '1';$id = $Updated[0]['id'];
			$this->db->where('id', $id);
        	$this->db->update('mpro_countries', $Updated[0]);
			$this->session->set_flashdata('country_success', 'Country Added');
        }else{
        	// Check Duplicate Value
        	$this->db->db_debug = false;
			if (!$this->db->insert('mpro_countries', $country_data)){
			 var_dump($this->db->error());		
			 	$this->session->set_flashdata('country_duplicate', 'Dupliacate Value');
			}else{
				// Insert The New Value
				$this->db->insert('mpro_countries', $country_data);
			    $this->session->set_flashdata('country_success', 'Country Added');
			}
        }
	}

	public function duplicate_check($data,$table_name,$colum){
		// Check Already Inserted 
		$this->db->select('*');
		$this->db->from($table_name);
		$this->db->where($colum, $data);
		$this->db->where('status!=', 3);
		$query = $this->db->get();
		if ($query->num_rows() > 0) { 
			return 1;
        }else{
        	return 0;
        }     
	}


	/**
	 * Countrty Data Edit 
	 */
	public function editing_country($country_data_edit,$id)
	{
		$country_data_edit['updated_date'] = date('Y-m-d H:i:s');
		$this->db->where('id', $id);
		if ($this->db->update('mpro_countries', $country_data_edit)) {
            $this->session->set_flashdata('country_success', 'Country Data Updated');			
			return TRUE;
		}
		return FALSE;		
	}

	/**
	 * Countrty Data Delete 
	 */
	public function deleting_country($table_name,$id)
	{
		echo 'Table Name =>'.$table_name.'  Id ==>'.$id;
		$this->db->select('*');
		$this->db->from('mpro_countries as country');
		$this->db->join('mpro_company_table as company', 'company.Country = country.id', 'left');
		$this->db->join('mpro_hub_branch as branch', 'branch.country_id = country.id', 'left');
		$this->db->join('mpro_users as user', 'user.country_id = country.id', 'left');
		$this->db->join('mpro_customers as customer', 'customer.B_country_id = country.id', 'left');
		$this->db->where('company.Country', $id);
		$this->db->where('branch.country_id', $id);
		$this->db->where('user.country_id', $id);
		$this->db->where('customer.B_country_id', $id);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {      
            $Updated = $query->result_array(); 
         //    echo "<pre>";
         // 		print_r($Updated);
        	// echo "</pre>";    
			$this->session->set_flashdata('country_duplicate', 'Already Used in Some Page');

        }
        else{
        	$data['status'] ="3";
			$this->db->where('id', $id);
			if ($this->db->update($table_name, $data)) {
	            $this->session->set_flashdata('country_success', 'Deleted');      
				return TRUE;
			}
        }
        	

		//die();
		
		return FALSE;		
	}
	/**
	 * Countrty Data Delete 
	 */
	public function delete($table_name,$id)
	{
		$data['status'] ="3";
		$this->db->where('id', $id);
		if ($this->db->update($table_name, $data)) {
            $this->session->set_flashdata('country_success', 'Country Data Deleted');
            $this->session->set_flashdata('state_success', 'State Data Deleted');
            $this->session->set_flashdata('city_success', 'City Data Deleted');
            $this->session->set_flashdata('area_success', 'Area Data Deleted');            
            $this->session->set_flashdata('Users_success', 'User Data Deleted');            
			return TRUE;
		}
		return FALSE;		
	}

	/**
	 * State Opertation Model
	 */

	public function get_location_state()
	{
		$this->db->select('mpro_states.id as state_id,mpro_states.state_name as state_name,	mpro_states.country_id as country_id,mpro_states.status as status,mpro_countries.country_name as country_name,mpro_states.state_code as state_code');
		$this->db->from('mpro_states');
		$this->db->join('mpro_countries', 'mpro_countries.id = mpro_states.country_id', 'left');
		$this->db->where('mpro_states.status!=',3);
		$query = $this->db->get();        
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
	}



	/**
	 * 
	 * Countrty Data Add 
	 */
	public function adding_state($state_data)
	{
		if ($this->db->insert('mpro_states', $state_data)) {
            $this->session->set_flashdata('state_success', 'State Data Inserted');			
			return TRUE;
		}
		return FALSE;		
	}

	/**
	 * State Data Edit 
	 */
	public function editing_state($state_data_edit,$id)
	{
		$state_data_edit['updated_date'] = date('Y-m-d H:i:s');
		$this->db->where('id', $id);
		if ($this->db->update('mpro_states', $state_data_edit)) {
            $this->session->set_flashdata('state_success', 'State Data Updated');			
			return TRUE;
		}
		return FALSE;		
	}

	/**
	 * City Operation
	 * @return [type] [description]
	 */
	public function get_location_city()
	{
		$this->db->select('
			 city.country_id as c_id,city.state_id,city.city_name,city.status,city.id as city_id,
			 state.id as state_id,state.state_name,
			 country.country_name
			');
		$this->db->from('mpro_cities as city');
		$this->db->join('mpro_states as state', 'state.id = city.state_id', 'left');
		$this->db->join('mpro_countries as country', 'country.id = city.country_id', 'left');
		$this->db->where('city.status!=',3);
		$query = $this->db->get();        
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
	}


	public function get_location_area()
	{
		$this->db->select('
			 area.country_id as country_id,area.state_id,area.city_id,area.area_name,area.status,area.id as area_id,
			 state.id as state_id,state.state_name,
			 country.country_name,city.city_name
			');
		$this->db->from('mpro_areas as area');
		$this->db->join('mpro_cities as city', 'city.id = area.city_id', 'left');
		$this->db->join('mpro_states as state', 'state.id = area.state_id', 'left');
		$this->db->join('mpro_countries as country', 'country.id = area.country_id', 'left');
		$this->db->where('area.status!=',3);
		$query = $this->db->get();        
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
	}

	function get_city_by_state_id($id) {
        $this->db->select($this->location_city . '.id, city_name');
        $this->db->where($this->location_city . '.state_id', $id);
        $this->db->where($this->location_city . '.status', 1);
        $this->db->where($this->location_city . '.is_deleted', 0);
        $this->db->order_by($this->location_city . '.city_name');
        $query = $this->db->get($this->location_city);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
    }


    public function get_full_city_data()
	{
		$this->db->select('*');
		$this->db->from('mpro_cities');
		$query = $this->db->get();        
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
	}

	public function adding_city($city_data)
	{
		if ($this->db->insert('mpro_cities', $city_data)) {
            $this->session->set_flashdata('city_success', 'City Data Inserted');
			return TRUE;
		}
		return FALSE;		
	}

	public function editing_city($city_data_edit,$id)
	{
		$city_data_edit['updated_date'] = date('Y-m-d H:i:s');
		$this->db->where('id', $id);
		if ($this->db->update('mpro_cities', $city_data_edit)) {
            $this->session->set_flashdata('city_success', 'City Data Updated');
			return TRUE;
		}
		return FALSE;		
	}

	// City Editing Data
	 
	public function get_city_edit($id)
	{
		$this->db->select('*,city.id as city_id,city.state_id as city_state_id');
		$this->db->from('mpro_cities as city');
		$this->db->join('mpro_states as state', 'state.id = city.state_id', 'left');
		$this->db->join('mpro_countries as country', 'country.id = city.country_id', 'left');
		$this->db->where('city.id', $id);
		$query = $this->db->get();        
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
	}

	function get_states_by_country_id($id) {
        $this->db->select('tab_1.id,tab_1.state_name');  
        $this->db->join($this->location_country.' AS tab_2', 'tab_2.id = tab_1.country_id', 'LEFT');        
        $this->db->where('tab_1.country_id', $id);
        $this->db->where('tab_1.is_deleted', 0);
        $this->db->where('tab_1.status', 1);
        $query = $this->db->get($this->location_state.' AS tab_1');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL; 
    }


    //ADDING AND EDITING AREA DATA'S

    public function adding_area($cityarea_data)
	{
		if ($this->db->insert('mpro_areas', $cityarea_data)) {
            $this->session->set_flashdata('area_success', 'Area Data Inserted');
			return TRUE;
		}
		return FALSE;		
	}


		// City Editing Data
	 
	public function get_area_edit($id)
	{
		$this->db->select('
			 area.country_id as country_id,area.state_id,area.city_id,area.area_name,area.status,area.id as area_id,
			 area.udf_1,area.udf_2,area.udf_3,area.udf_4,area.udf_5,area.udf_6,state.id as state_id,state.state_name,
			 country.country_name,city.city_name
			');
		$this->db->from('mpro_areas as area');
		$this->db->join('mpro_cities as city', 'city.id = area.city_id', 'left');
		$this->db->join('mpro_states as state', 'state.id = area.state_id', 'left');
		$this->db->join('mpro_countries as country', 'country.id = area.country_id', 'left');
		$this->db->where('area.status!=',3);
		$this->db->where('area.id', $id);
		$query = $this->db->get();        
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
	}

	public function editing_area($cityarea_data_edit,$id)
	{
		$city_data_edit['updated_date'] = date('Y-m-d H:i:s');
		$this->db->where('id', $id);
		if ($this->db->update('mpro_areas', $cityarea_data_edit)) {
            $this->session->set_flashdata('area_success', 'Area Data Updated');
			return TRUE;
		}
		return FALSE;		
	}


	

}

/* End of file Location_model.php */
/* Location: ./application/models/master/Location_model.php */