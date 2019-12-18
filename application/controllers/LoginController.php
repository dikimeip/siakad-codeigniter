<?php  

/**
 *  
 */
class LoginController extends CI_Controller
{
	function __construct (){
		parent::__construct();
		$this->load->model('MyModel','Models');
		$this->load->library('session');
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
				$this->session->set_userdata([
					'isSiswa' => $query
				]);
				redirect('SiswaController/index');
			} else {
				$this->session->set_flashdata('gagal','Username atau password Salah');
				redirect('LoginController/index');
			}
		} elseif ($id == 1) {
			$query = $this->Models->login_guru($uname,$pswd);
			if (count($query) > 0) {
				$this->session->set_userdata([
					'isGuru' => $query
				]);
				redirect('GuruController/index');
			} else {
				$this->session->set_flashdata('gagal','Username atau password Salah');
				redirect('LoginController/index');
			}
		} elseif ($id == 2) {
			$query = $this->Models->login_staff($uname,$pswd);
			if (count($query) > 0) {
				$this->session->set_userdata([
					'isStaff' => $query
				]);
				redirect('StaffController/index');
			} else {
				$this->session->set_flashdata('gagal','Username atau password Salah');
				redirect('LoginController/index');
			}
		}
	}
	
}