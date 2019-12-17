<?php  

/**
 * 
 */
class LoginController extends CI_Controller
{
	function __construct (){
		parent::__construct();
		$this->load->model('MyModel','Models');
	}
	
	public function index()
	{
		$this->load->view('login');
	}

	public function DoLogin()
	{
		$id = $this->input->post('level');
		$uname = $this->input->post('email');
		$pswd = $this->input->post('password');
		if ($id == 0) {
			$query = $this->Models->login_siswa($uname,$pswd);
			if (count($query) > 0) {
				redirect('SiswaController/index');
			} else {
				echo "Gagal Login siswa";
			}
		} elseif ($id == 1) {
			$query = $this->Models->login_guru($uname,$pswd);
			if (count($query) > 0) {
				redirect('GuruController/index');
			} else {
				echo "Gagal Login teacher";
			}
		} elseif ($id == 2) {
			$query = $this->Models->login_staff($uname,$pswd);
			if (count($query) > 0) {
				echo "success login staff";
			} else {
				echo "Gagal Login staff";
			}
		}
	}
	
}