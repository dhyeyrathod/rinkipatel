<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay Rathod
*/
class Services extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin');
	}
	public function index()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->form_validation->set_rules('new_services', 'New Services', 'required');
			$this->form_validation->set_rules('description', 'description', 'required');
			if ($this->form_validation->run()) {
				$services_name = $this->security->xss_clean($this->input->post('new_services'));
				$description = $this->input->post('description');
				$this->admin->setServices($services_name,$description);
				$this->session->set_flashdata('success_services','Services Created Successfully');
				redirect('services');
			} 
		}
		$data['all_services_key'] = $this->admin->getAllServices();
		$this->load->view('services_view',$data);
	}
	public function delete_services()
	{
		if ($this->admin->servicesPresent($this->friend->base64url_decode($this->uri->segment(3)))) {
			$this->admin->deleteServices($this->friend->base64url_decode($this->uri->segment(3)));
			$this->session->set_flashdata('success_services','Deleted services Successfully..!!');
			redirect('services');
		} else {
			redirect('services');
		}
	}
}