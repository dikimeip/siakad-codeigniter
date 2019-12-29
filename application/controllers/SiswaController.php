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

	public function cetak_nilai()
	{
		$data['sess'] = $this->session->userdata('isSiswa');
		$id = $data['sess'][0]['id_siswa'] ;
		$data['nilai'] = $this->Models->get_nilai_siswa($id);
		$data['siswa'] = $this->Models->id_siswa($id);
		$data['no']=1;
		$this->load->view('siswa/cetak_nilai',$data);

	}

	public function cari_nilai()
	{
		$data['sess'] = $this->session->userdata('isSiswa');
		$id = $data['sess'][0]['id_siswa'] ;
		$cari = $this->input->post('cari');
		$data['nilai'] = $this->Models->cari_nilai($cari,$id);
		$data['no']=1;
		$this->load->view('siswa/template/header',$data);
		$this->load->view('siswa/template/menu');
		$this->load->view('siswa/nilai',$data);
		$this->load->view('siswa/template/footer');
	}

	public function materi()
	{
		$data['sess'] = $this->session->userdata('isSiswa');
		$data['materi'] = $this->Models->get_materi();
		$data['no']=1;
		$this->load->view('siswa/template/header',$data);
		$this->load->view('siswa/template/menu');
		$this->load->view('siswa/materi',$data);
		$this->load->view('siswa/template/footer');
	}

	public function cari_materi()
	{
		$data['sess'] = $this->session->userdata('isSiswa');
		$cari = $this->input->post('cari');
		$data['materi'] = $this->Models->cari_materi($cari);
		$data['no']=1;
		$this->load->view('siswa/template/header',$data);
		$this->load->view('siswa/template/menu');
		$this->load->view('siswa/materi',$data);
		$this->load->view('siswa/template/footer');
	}

	public function ubah_user()
	{
		$data['sess'] = $this->session->userdata('isSiswa');
		$id = $data['sess'][0]['id_siswa'];
		$data['user'] = $this->Models->id_siswa($id);
		$this->load->view('siswa/template/header',$data);
		$this->load->view('siswa/template/menu');
		$this->load->view('siswa/edit_user',$data);
		$this->load->view('siswa/template/footer');
	}

	public function edit_siswa()
	{
		$file = $_FILES['foto']['name'];
		if ($file == "") {
			$data['sess'] = $this->session->userdata('isSiswa');
			$id = $data['sess'][0]['id_siswa'];
			$data = [
				'nama_siswa' => $this->input->post('nama'),
				'alamat_siswa' => $this->input->post('alamat'),
			];
			$query = $this->Models->edit_siswa($id,$data);
			if ($query) {
				$this->session->set_flashdata('success','Ubah Data Berhasil Dilakukan');
				redirect('SiswaController/index');
			} else {
				$this->session->set_flashdata('success','Ubah Data Gagal Dilakukan');
				redirect('SiswaController/index');
			}
		} else {
			$config['upload_path'] = "./asset/image/";
			$config['allowed_types'] = "jpg|png";
			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('foto')) {
				$this->session->set_flashdata('success','Ubah Data Failed');
				redirect('SiswaController/index');
			} else {
				$data['sess'] = $this->session->userdata('isSiswa');
				$id = $data['sess'][0]['id_siswa'];
				$data = [
					'nama_siswa' => $this->input->post('nama'),
					'alamat_siswa' => $this->input->post('alamat'),
					'foto_siswa' => $this->upload->data('file_name')
				];
				$query = $this->Models->edit_siswa($id,$data);
				if ($query) {
					$this->session->set_flashdata('success','Ubah Data Berhasil Dilakukan');
					redirect('SiswaController/index');
				} else {
					$this->session->set_flashdata('success','Ubah Data Gagal Dilakukan');
					redirect('SiswaController/index');
				}
			}
		}
	}

	public function password()
	{
		$data['sess'] = $this->session->userdata('isSiswa');
		$this->load->view('siswa/template/header',$data);
		$this->load->view('siswa/template/menu');
		$this->load->view('siswa/password',$data);
		$this->load->view('siswa/template/footer');
	}

	public function edit_password()
	{
		$pas1 = $this->input->post('pas1');
		$pas2 = $this->input->post('pas2');
		if ($pas1 == $pas2) {
			$data['sess'] = $this->session->userdata('isSiswa');
			$id = $data['sess'][0]['id_siswa'];
			$data = [
				'password_siswa' => $this->input->post('pas2'),
			];
			$query = $this->Models->edit_siswa($id,$data);
			if ($query) {
				$this->session->set_flashdata('success','Ubah Data Berhasil Dilakukan');
				redirect('SiswaController/index');
			} else {
				$this->session->set_flashdata('success','Ubah Data Gagal Dilakukan');
				redirect('SiswaController/index');
			}
		} else {
			$this->session->set_flashdata('success','Ubah Data Gagal Dilakukan');
			redirect('SiswaController/index');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('isSiswa');
		redirect('LoginController/index');
	}
}