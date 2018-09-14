<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author 
*/
class Location extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('website');
	}
	public function index()
	{
		$location_id = $this->friend->base64url_decode($this->uri->segment(3));
		$data['location_info_key'] = $this->website->getLocationInfo($location_id);
		$data['all_services_key'] = $this->website->getAllServices();
		$data['all_location_key'] = $this->website->getAllLocation();
		$data['all_categoy_key'] = $this->website->getAllCategory();
		$data['all_profile_key'] = $this->website->getProfileByLocation($location_id);
		$this->load->view('location_view',$data);
	}
	public function city()
	{
		$city_id = $this->uri->segment(2);
		$data['location_info_key'] = $this->website->getSingleCityData($city_id);
		$data['all_services_key'] = $this->website->getAllServices();
		$data['all_location_key'] = $this->website->getAllLocation();
		$data['all_categoy_key'] = $this->website->getAllCategory();
		$data['all_profile_key'] = $this->website->getAllProfile(4);
		$this->load->view('city_view',$data);
	}
}