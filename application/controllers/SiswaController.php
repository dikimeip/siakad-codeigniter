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
		$data['pengumuman']=$this->Models->pengumuman_siswa();
		$data['no']=1;
		$this->load->view('siswa/template/header',$data);
		$this->load->view('siswa/template/menu');
		$this->load->view('siswa/pengumuman',$data);
		$this->load->view('siswa/template/footer');
	}

	public function cari_pengumuman()
	{
		$data['sess'] = $this->session->userdata('isSiswa');
		$cari = $this->input->post('cari');
		$data['pengumuman']=$this->Models->cari_pengumumansiswa($cari);
		$data['no']=1;
		$this->load->view('siswa/template/header',$data);
		$this->load->view('siswa/template/menu');
		$this->load->view('siswa/pengumuman',$data);
		$this->load->view('siswa/template/footer');
	}

	public function nilai()
	{
		$data['sess'] = $this->session->userdata('isSiswa');
		$id = $data['sess'][0]['id_siswa'] ;
		$data['nilai'] = $this->Models->get_nilai_siswa($id);
		$data['no']=1;
		$this->load->view('siswa/template/header',$data);
		$this->load->view('siswa/template/menu');
		$this->load->view('siswa/nilai',$data);
		$this->load->view('siswa/template/footer');
	}

	public function logout()
	{
		$this->session->unset_userdata('isSiswa');
		redirect('LoginCOntroller/index');
	}
}