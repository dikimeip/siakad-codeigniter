<?php  

/**
 * 
 */
class StaffController extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MyModel','Models');
		if ($this->session->userdata('isStaff') == "") {
			redirect('LoginController/index');
		}
	}

	public function index()
	{
		$data['sess'] = $this->session->userdata('isStaff');
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/menu',$data);
		$this->load->view('admin/dasboard',$data);
		$this->load->view('admin/template/footer');
	}

	public function siswa()
	{
		$data['sess'] = $this->session->userdata('isStaff');
		$data['siswa'] = $this->Models->get_siswa();
		$data['no'] =1;
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/menu',$data);
		$this->load->view('admin/siswa',$data);
		$this->load->view('admin/template/footer');
	}

	public function logout()
	{
		$this->session->unset_userdata('isStaff');
		redirect('LoginController/index');
	}
}