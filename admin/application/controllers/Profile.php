<?php 
/**
* @author Jay Rathod
*/
class Profile extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin');
	}
	public function add_new()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {

			if ($this->form_validation->run('profile')) {

				$response = json_decode($this->admin->setProfile($this->input->post()));
				
				if ($response->status == "success") {
					for ($i=0 ; $i < count($_FILES['escorts_images']['name']) ; $i++) {
					 	$_FILES['file']['name']     	= $_FILES['escorts_images']['name'][$i];
		                $_FILES['file']['type']     	= $_FILES['escorts_images']['type'][$i];
		                $_FILES['file']['tmp_name'] 	= $_FILES['escorts_images']['tmp_name'][$i];
		                $_FILES['file']['error']     	= $_FILES['escorts_images']['error'][$i];
		                $_FILES['file']['size']     	= $_FILES['escorts_images']['size'][$i];
		                $this->load->library('upload', $this->friend->profileImageUploadConfig());
		                $this->upload->initialize($this->friend->profileImageUploadConfig());
		                if ($this->upload->do_upload('file')) {
		                	$this->admin->setProfileName($this->upload->data('file_name'),$response->lase_inserted_id);
		                } else {
		                	$this->session->set_flashdata('error',$this->upload->display_errors());
							redirect('profile/add_new');
		                }
					}
					$this->session->set_flashdata('success','Post Insert successfully..!!!');
					redirect('profile/add_new');
				} else {
					$this->session->set_flashdata('error','Post Is not insert successfully');
					redirect('profile/add_new');
				}
			} 
		}
		$data['all_cities_key'] = $this->admin->getAllCities();
		$this->load->view('add_new_profile_view',$data);
	}
	public function area()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$city_id = $this->security->xss_clean($this->input->post('city_id'));
			if ($this->admin->checkCityIsPresentById($city_id)) {
				header('Content-Type: application/json');
    			echo json_encode(array('status' =>'success','area_data'=>$this->admin->getAllAreasByCityId($city_id),'message'=>'data fetch successfully'));
			} else {
				header('Content-Type: application/json');
    			echo json_encode(array('status' =>'failed','message'=>'area is not present'));
			}
		} else {
			header('Content-Type: application/json');
    		echo json_encode(array('status' =>'failed','message'=>'area is not present'));
		}
	}
}
