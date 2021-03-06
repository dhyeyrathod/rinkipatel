<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay rathod
*/
class Home extends MY_Controller
{
	 public function __construct()
	{
		parent::__construct();
		$this->load->model('website');
	}
	public function index()
	{
		$data['all_services_key'] = $this->website->getAllServices();
		$data['all_location_key'] = $this->website->getAllLocation();
		$data['all_categoy_key'] = $this->website->getAllCategory();
		$data['all_profile_key'] = $this->website->getAllProfile();
		$this->load->view('home_view',$data);
	}
}