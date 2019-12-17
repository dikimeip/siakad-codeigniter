<?php  

/**
 * 
 */
class LoginController extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('login');
	}

	public function DoLogin()
	{
		$id = $this->input->post('level');
		if ($id == 0) {
			echo "Student";
		} elseif ($id == 1) {
			echo "Teacher";
		} elseif ($id == 2) {
			echo "Staff";
		}
	}
	
}