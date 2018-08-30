<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay Rathod
*/
class Category extends MY_controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('website');
	}
	public function index()
	{
		$categoy_id = $this->friend->base64url_decode($this->uri->segment(2));
		$data['categoy_info_key'] = $this->website->getCategoryInfoById($categoy_id);

		
		$data['all_services_key'] = $this->website->getAllServices();
		$data['all_location_key'] = $this->website->getAllLocation();
		$data['all_categoy_key'] = $this->website->getAllCategory();
		$data['all_profile_key'] = $this->website->getAllProfile(4);
		$this->load->view('category_view',$data);
	}
}