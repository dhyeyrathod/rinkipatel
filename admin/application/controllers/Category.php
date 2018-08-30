<?php 
/**
* @author Jay Rathod
*/
class Category extends MY_controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin');
	}
	public function index()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->form_validation->set_rules('new_category', 'New Category', 'required');
			$this->form_validation->set_rules('description', 'description', 'required');
			if ($this->form_validation->run()) {
				$category_name = $this->security->xss_clean($this->input->post('new_category'));
				$description = $this->input->post('description');
				$this->admin->setNewCategory($category_name,$description);
				$this->session->set_flashdata('success_category','Category Created Successfully');
				redirect('category');
			} 
		}
		$data['all_category_key'] = $this->admin->getAllCategory();
		$this->load->view('category_view',$data);
	}
	public function delete_category()
	{
		if ($this->admin->categoryPresent($this->friend->base64url_decode($this->uri->segment(3)))) {
			$this->admin->deleteCategory($this->friend->base64url_decode($this->uri->segment(3)));
			$this->session->set_flashdata('success_category','Deleted category Successfully..!!');
			redirect('category');
		} else {
			redirect('category');
		}
	}
}