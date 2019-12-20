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
		$this->load->library('form_validation');
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

	public function tambah_siswa()
	{
		$data['sess'] = $this->session->userdata('isStaff');
		$data['kelas'] = $this->Models->get_kelas();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/menu',$data);
		$this->load->view('admin/tambah_siswa',$data);
		$this->load->view('admin/template/footer');
	}

	public function do_siswa()
	{
		$this->form_validation->set_rules('nim','Nim','required|max[10]|numeric');
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('tahun','Tahun','required|max[4]|numeric');
		$this->form_validation->set_rules('alamat','Alamat','required');
		if ($this->form_validation->run() == false) {
			$data['sess'] = $this->session->userdata('isStaff');
			$data['kelas'] = $this->Models->get_kelas();
			$this->load->view('admin/template/header');
			$this->load->view('admin/template/menu',$data);
			$this->load->view('admin/tambah_siswa',$data);
			$this->load->view('admin/template/footer');
		} else {
			$file = $_FILES['foto']['name'];
			if ($file == "" ) {
				echo "kosong";
			} else {
				$config['allowed_types'] = "png|jpg";
				$config['upload_path'] = "./asset/image/";
				$this->load->library('upload',$config);
				if (!$this->upload->do_upload('foto')) {
					echo "Kosong!";
				} else {
					echo "Ada";
				}
			}
		}
	}



	public function logout()
	{
		$this->session->unset_userdata('isStaff');
		redirect('LoginController/index');
	}
}