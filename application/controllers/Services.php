<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay rathod
*/
class Services extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('website');
	}
	public function index()
	{
		$services_id = $this->friend->base64url_decode($this->uri->segment(2));
		$data['seivices_info_key'] = $this->website->getServicesInfoById($services_id);
		$data['all_services_key'] = $this->website->getAllServices();
		$data['all_location_key'] = $this->website->getAllLocation();
		$data['all_categoy_key'] = $this->website->getAllCategory();
		$data['all_profile_key'] = $this->website->getAllProfile(4);
		$this->load->view('services_view',$data);
	}
}