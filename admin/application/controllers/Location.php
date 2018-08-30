<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author jay rathod
*/
class Location extends MY_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin');
	}
	public function cities()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->form_validation->set_rules('city_name', 'City Name', 'required|is_unique[cities.city_name]');
			if ($this->form_validation->run()) {
				$this->admin->addNewCity($this->security->xss_clean($this->input->post('city_name')));
				$this->session->set_flashdata('success_city','City Added successfully..!!');
				redirect('location/cities');
			}
		}
		if ($this->uri->segment(3) && $this->admin->cityPresent($this->friend->base64url_decode($this->uri->segment(3)))) {
			if ($this->admin->checkProfilePresentInCity($this->friend->base64url_decode($this->uri->segment(3)))) {
				$this->session->set_flashdata('error_city','Some Profile is present in this City');
				redirect('location/cities');
			} else {
				$this->admin->deleteCity($this->friend->base64url_decode($this->uri->segment(3)));
				$this->session->set_flashdata('success_city','City Deleted successfully..!!');
				redirect('location/cities');	
			}
			
		}
		$data['all_cities_key'] = $this->admin->getAllCities();
		$this->load->view('cities_view',$data);
	}
	public function area()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->form_validation->set_rules('city','City','required');
			$this->form_validation->set_rules('area_name','Area Name','required|is_unique[area.area_name]');
			$this->form_validation->set_rules('description','description','required');
			if ($this->form_validation->run()) {
				$city_id = $this->security->xss_clean($this->input->post('city'));
				$area_name = $this->security->xss_clean($this->input->post('area_name'));
				$description = $this->security->xss_clean($this->input->post('description'));
				$this->admin->addNewArea($city_id,$area_name,$description);
				$this->session->set_flashdata('success_area','area Added successfully..!!');
				redirect('location/area');
			}
		}
		if ($this->uri->segment(3) && $this->admin->areaPresent($this->friend->base64url_decode($this->uri->segment(3)))) {
			if ($this->admin->checkProfilePresentInArea($this->friend->base64url_decode($this->uri->segment(3)))) {
				$this->session->set_flashdata('error_area','Cant Delete city Some Profile is present in this area');
				redirect('location/area');
			} else {
				$this->admin->deleteArea($this->friend->base64url_decode($this->uri->segment(3)));
				$this->session->set_flashdata('success_area','Delete Area successfully..!!');
				redirect('location/area');				
			}

		}
		$data['all_cities_key'] = $this->admin->getAllCities();
		$data['all_area_key'] = $this->admin->getAllArea();
		$this->load->view('area_view',$data);	
	}
}