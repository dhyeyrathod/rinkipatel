<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author jay rathod
*/
class Contact_us extends MY_Controller
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
		$this->load->view('contact_us_view',$data);
	}
}