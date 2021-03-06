<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cron_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public  function get_all_appointments(){
		$this->db->select('*')->from('appointment_bidding_list');
		$this->db->where('status !=',1);
		return $this->db->get()->result_array();
	}
	public  function delete_old_pending_appointment_bidding($b_id){
		$this->db->where('b_id',$b_id);
		return $this->db->delete('appointment_bidding_list');
	}
}