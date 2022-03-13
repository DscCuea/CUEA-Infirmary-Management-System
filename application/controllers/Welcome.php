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
		// $data['title'] = 'Login';
		//Set error message
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run() === FALSE) {
		//Check if the validation if failed
		$this->load->view('auth/login');
		} else {
			//Get username
			$username = $this->input->post('username');
			//Get and encrypt the password
			$password = md5($this->input->post('password'));
			//Login 
			if ($id = $this->admin_model->is_admin($username,$password)) {
				$admin = [
					'id' => $id,
					'username' => $username,
					'is_admin' => true,
					'logged_in' => true
				];
				//Set session
				$this->session->set_userdata($admin);
				redirect('admin_controller/user_admin');
			} elseif($id = $this->welcome_model->is_receptionist($username,$password)) {
				$user_data = [
					'id' => $id,
					'username' => $username,
					'is_receptionist' => true,
					'logged_in' => true
				];
				//Set session
				$this->session->set_userdata($user_data);
				redirect('welcome/receptionist');
			} else {
				//Set error Message
				$this->session->set_flashdata('login_failed','Incorrect Username or Password');

				redirect('welcome/index');
			}
		}
	}

	// receptionist
	public function receptionist(){
		$this->load->view('home/dashboard'); // just the header file
        $this->load->view('patient/patient');
        $this->load->view('home/footer'); // just the header file
	}
}
