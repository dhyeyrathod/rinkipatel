<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay rathod
*/
class Booking extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('website');
	}
	public function index()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			if ($this->form_validation->run('booking')) {
				if ($this->website->setBooking($this->input->post())) {
					$this->session->set_flashdata('success','Your Appointment has booked successfully..!!');
					redirect('booking');
				} 
			} 
		}
		$data['all_services_key'] = $this->website->getAllServices();
		$data['all_location_key'] = $this->website->getAllLocation();
		$data['all_categoy_key'] = $this->website->getAllCategory();
		$data['all_profile_key'] = $this->website->getAllProfile(4);
		$this->load->view('booking_view',$data);
	}
}