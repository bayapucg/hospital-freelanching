<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cron extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->library('user_agent');
		$this->load->helper('directory');
		$this->load->helper('security');
		$this->load->library('zend');
	
		$this->load->model('Cron_model');
		$this->load->library('zend');
			
		}
		
	public function index()
	{	
		
		$all_appointments=$this->Cron_model->get_all_appointments();
		if(count($all_appointments)>0){
			foreach($all_appointments as $list){
				
				$curent_date=date('Y-m-d');
				$c_time=date('H:i');
				$current_time=date("g:i a", strtotime($c_time));
				$current_date=$curent_date.' '.$current_time;
				$appoint_date=$list['date'].' '.$list['time'];
				if($current_date > $appoint_date){
					$this->Cron_model->delete_old_pending_appointment_bidding($list['b_id']);
					
				}
				
			}
		}
	}
	

	
	
	
}
