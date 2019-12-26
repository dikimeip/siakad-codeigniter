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
		if ($this->session->userdata('isSiswa') == "" ) {
			redirect('LoginController/index');
		}
	}

	public function index()
	{
		$data['sess'] = $this->session->userdata('isSiswa');
		$this->load->view('siswa/template/header',$data);
		$this->load->view('siswa/template/menu');
		$this->load->view('siswa/dasboard',$data);
		$this->load->view('siswa/template/footer');

	}

	public function pengumuman()
	{
		$data['sess'] = $this->session->userdata('isSiswa');
		$data['pengumuman']=$this->Models->cari_pengumumansiswa();
		$data['no']=1;
		$this->load->view('siswa/template/header',$data);
		$this->load->view('siswa/template/menu');
		$this->load->view('siswa/pengumuman',$data);
		$this->load->view('siswa/template/footer');
	}

	public function logout()
	{
		$this->session->unset_userdata('isSiswa');
		redirect('LoginCOntroller/index');
	}
}