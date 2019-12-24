<?php  

/** 
 * 
 */
class GuruController extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MyModel','Models');
		if ($this->session->userdata('isGuru') == "") {
			redirect('LoginController/index');
		}
	}

	public function index()
	{
		$data['sess'] = $this->session->userdata('isGuru');
		$this->load->view('guru/template/header');
		$this->load->view('guru/template/menu',$data);
		$this->load->view('guru/dasboard',$data);
		$this->load->view('guru/template/footer');
	}

	public function nilai()
	{
		$data['sess'] = $this->session->userdata('isGuru');
		$id = $data['sess'][0]['id_kelas'];
		$data['nilai'] = $this->Models->show_siswa($id);
		$data['no'] =1;
		$this->load->view('guru/template/header');
		$this->load->view('guru/template/menu',$data);
		$this->load->view('guru/nilai',$data);
		$this->load->view('guru/template/footer');
	}

	public function logout()
	{
		$this->session->unset_userdata('isGuru');
		redirect('LoginController/index');
	}
}