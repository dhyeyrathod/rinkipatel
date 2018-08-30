<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay Rathod
*/
class Escorts extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('website');
	}
	public function index()
	{
		$profile_id = $this->friend->base64url_decode($this->uri->segment(3));


		$data['all_services_key'] = $this->website->getAllServices();
		$data['all_location_key'] = $this->website->getAllLocation();
		$data['all_categoy_key'] = $this->website->getAllCategory();


		$data['profile_details_key'] = $this->website->getSingleProfileById($profile_id);
		$data['profile_image_key'] = $this->website->getSingleProfileImagesById($profile_id);

		$this->load->view('detail_view',$data);
	}
	public function girls()
	{
		$data['all_services_key'] = $this->website->getAllServices();
		$data['all_location_key'] = $this->website->getAllLocation();
		$data['all_categoy_key'] = $this->website->getAllCategory();
		$data['all_profile_key'] = $this->website->getAllProfile(4);
		
		$this->load->view('escorts_view',$data);
	}
}