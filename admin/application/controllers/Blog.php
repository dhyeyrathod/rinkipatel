<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay Rathod
*/
class Blog extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin');
	}
	public function add_new_blog()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->library('upload', $this->friend->blogImageUploadConfig());
			if ($this->form_validation->run('blog_form') && $this->upload->do_upload('file_upload')) {
				$this->admin->setBlog($this->input->post(),$this->upload->data('file_name'));
				$this->session->set_flashdata('success','Blog Insert successfully');
				redirect('blog/add_new_blog');
			} else {
				$data['image_upload_error'] = array('error' => $this->upload->display_errors());
			}
		}
		$data['test'] = '';
		$this->load->view('add_new_blog_view',$data);
	}
	public function blog_list()
	{
		$data['all_blog_list'] = $this->admin->getAllBlogs(); 
		$this->load->view('blog_listing_view',$data);
	}
	public function delete_blog()
	{
		$blog_id = $this->friend->base64url_decode($this->uri->segment(3));
		if ($this->session->userdata('admin_id') && is_numeric($blog_id)) {
			$this->admin->delete_blog($blog_id);
			$this->session->set_flashdata('success','Blog Deleted successfully');
			redirect('blog/blog_list');
		} else {
			$this->session->set_flashdata('error','Unauthorised User');
			redirect('blog/blog_list');
		}
	}
}