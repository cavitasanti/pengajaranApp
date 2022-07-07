<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function upload_avatar()
{
	$this->load->model('profile_model');
	$data['current_user'] = $this->auth_model->current_user();

	if ($this->input->method() === 'post') {
		// the user id contain dot, so we must remove it
		$file_name = str_replace('.','',$data['current_user']->id);
		$config['upload_path']          = FCPATH.'/upload/avatar/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png';
		$config['file_name']            = $file_name;
		$config['overwrite']            = true;
		$config['max_size']             = 1024; // 1MB
		$config['max_width']            = 1080;
		$config['max_height']           = 1080;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('avatar')) {
			$data['error'] = $this->upload->display_errors();
		} else {
			$uploaded_data = $this->upload->data();

			$new_data = [
				'id' => $data['current_user']->id,
				'avatar' => $uploaded_data['file_name'],
			];
	
			if ($this->profile_model->update($new_data)) {
				$this->session->set_flashdata('message', 'Avatar updated!');
				redirect(site_url('admin/setting'));
			}
		}
	}

	$this->load->view('admin/setting_upload_avatar.php', $data);
}
}
