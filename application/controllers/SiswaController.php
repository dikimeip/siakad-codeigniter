<?php  

/**
 * 
 */
class SiswaController extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MyModel','Models');
	}

	public function index()
	{
		$data['sess'] = $this->session->userdata('isSiswa');
		$this->load->view('siswa/template/header');
		$this->load->view('siswa/template/menu');
		$this->load->view('siswa/dasboard',$data);
		$this->load->view('siswa/template/footer');

	}
}