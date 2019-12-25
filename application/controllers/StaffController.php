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
		$this->load->library('pagination');
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
		$jumlah = count($data['siswa']);
		//pagination
		// $config['base_url'] = 'http://localhost/siakad/StaffController/cari_siswa/';
		// $config['total_rows'] = $jumlah;
		// $config['per_page'] = 2;
		// $this->pagination->initialize($config);

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
					$data = [
						'id_kelas' => $this->input->post('kelas'),
						'nama_siswa' => $this->input->post('nama'),
						'nim_siswa' => $this->input->post('nim'),
						'thn_siswa' => $this->input->post('tahun'),
						'alamat_siswa' => $this->input->post('alamat'),
						'foto_siswa' => $_FILES['foto']['name'],
						'password_siswa' => $this->input->post('nim'),
					];

					$query = $this->Models->post_siswa($data);
					if ($query) {
						$this->session->set_flashdata('success','tambah data succes');
						redirect('StaffController/siswa');
					} else {
						$this->session->set_flashdata('success','tambah data failed');
						redirect('StaffController/siswa');
					}
				}
			}
		}
	}

	public function edit_siswa($id)
	{
		$data['sess'] = $this->session->userdata('isStaff');
		$data['kelas'] = $this->Models->get_kelas();
		$data['siswa'] = $this->Models->id_siswa($id);
		//var_dump($data['siswa']);
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/menu',$data);
		$this->load->view('admin/edit_siswa',$data);
		$this->load->view('admin/template/footer');
	}

	public function do_edit_siswa()
	{
		$foto = $_FILES['foto']['name'];
		if ($foto == "") {
			$id = $this->input->post('id');
			$data = [
				'id_kelas' => $this->input->post('kelas'),
				'nama_siswa' => $this->input->post('nama'),
				'nim_siswa' => $this->input->post('nim'),
				'thn_siswa' => $this->input->post('tahun'),
				'alamat_siswa' => $this->input->post('alamat'),
				'password_siswa' => $this->input->post('nim'),
			];
			$query = $this->Models->edit_siswa1($id,$data);
			if ($query) {
				$this->session->set_flashdata('success','ubah data succes');
				redirect('StaffController/siswa');
			} else {
				$this->session->set_flashdata('success','ubah data failed');
				redirect('StaffController/siswa');
			}

		} else {
			$config['allowed_types'] = "png|jpg";
			$config['upload_path'] = "./asset/image/";
			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('foto')) {
				echo "Kosong!";
			} else {
				$id = $this->input->post('id');
				$data = [
					'id_kelas' => $this->input->post('kelas'),
					'nama_siswa' => $this->input->post('nama'),
					'nim_siswa' => $this->input->post('nim'),
					'thn_siswa' => $this->input->post('tahun'),
					'alamat_siswa' => $this->input->post('alamat'),
					'foto_siswa' => $_FILES['foto']['name'],
					'password_siswa' => $this->input->post('nim'),
				];

				$query = $this->Models->edit_siswa($id,$data);
				if ($query) {
					$this->session->set_flashdata('success','ubah data succes');
					redirect('StaffController/siswa');
				} else {
					$this->session->set_flashdata('success','ubah data failed');
					redirect('StaffController/siswa');
				}
			}
		}
	}

	public function show_siswa($id)
	{
		$data['sess'] = $this->session->userdata('isStaff');
		$data['siswa'] = $this->Models->id_siswa($id);
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/menu',$data);
		$this->load->view('admin/show_siswa',$data);
		$this->load->view('admin/template/footer');
	}

	public function hapus_siswa($id)
	{
		$query = $this->Models->hapus_siswa($id);
		if ($query) {
			$this->session->set_flashdata('success','hapus data succes');
			redirect('StaffController/siswa');
		} else {
			$this->session->set_flashdata('success','hapus data failed');
			redirect('StaffController/siswa');
		}
	}

	public function cari_siswa()
	{
		$data['sess'] = $this->session->userdata('isStaff');
		$data['siswa'] = $this->Models->cari_siswa();
		$data['no'] =1;
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/menu',$data);
		$this->load->view('admin/siswa',$data);
		$this->load->view('admin/template/footer');
	}

	public function guru()
	{ 
		$data['sess'] = $this->session->userdata('isStaff');
		$data['siswa'] = $this->Models->get_guru();
		$data['no'] =1;
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/menu',$data);
		$this->load->view('admin/guru',$data);
		$this->load->view('admin/template/footer');
	}

	public function tambah_guru()
	{
		$data['sess'] = $this->session->userdata('isStaff');
		$data['pelajaran'] = $this->Models->get_pelajaran();
		$data['kelas'] = $this->Models->get_kelas();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/menu',$data);
		$this->load->view('admin/tambah_guru',$data);
		$this->load->view('admin/template/footer');
	}

	public function post_guru()
	{
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('nidn','Nidn','required|max[10]');
		$this->form_validation->set_rules('tahun','Tahun','required|max[4]');
		$this->form_validation->set_rules('alamat','Alamat','required');
		if ($this->form_validation->run() == false) {
			$data['sess'] = $this->session->userdata('isStaff');
			$data['pelajaran'] = $this->Models->get_pelajaran();
			$data['kelas'] = $this->Models->get_kelas();
			$this->load->view('admin/template/header');
			$this->load->view('admin/template/menu',$data);
			$this->load->view('admin/tambah_guru',$data);
			$this->load->view('admin/template/footer');
		} else {
			$file = $_FILES['foto']['name'];
			if ($file == "") {
				echo "Kosong";
			} else {
				$config['allowed_types'] = 'jpg|png';
				$config['upload_path'] = './asset/image';
				$this->load->library('upload',$config);
				if (!$this->upload->do_upload('foto')) {
					echo "Failed";
				} else {
					$data = [
						'id_pelajaran' => $this->input->post('pelajaran'),
						'nama_guru' => $this->input->post('nama'),
						'thn_guru' => $this->input->post('tahun'),
						'nidn_guru' => $this->input->post('nidn'),
						'alamat_guru' => $this->input->post('alamat'),
						'foto_guru' => $_FILES['foto']['name'],
						'id_kelas' => $this->input->post('kelas'),
						'password_guru' => $this->input->post('nidn'),
					];
					$query = $this->Models->post_guru($data);
					if ($query) {
						$this->session->set_flashdata('success','input data succes');
						redirect('StaffController/guru');
					} else {
						$this->session->set_flashdata('success','input data failed');
						redirect('StaffController/guru');
					}
				}
			}
		}
	}

	public function edit_guru($id)
	{
		$data['sess'] = $this->session->userdata('isStaff');
		$data['pelajaran'] = $this->Models->get_pelajaran();
		$data['kelas'] = $this->Models->get_kelas();
		$data['guru'] = $this->Models->id_guru($id);
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/menu',$data);
		$this->load->view('admin/edit_guru',$data);
		$this->load->view('admin/template/footer');
	}

	public function edits_guru()
	{
		$foto = $_FILES['foto']['name'];
		if ($foto == "") {
			$id = $this->input->post('id');
			$data = [
				'id_pelajaran' => $this->input->post('pelajaran'),
				'nama_guru' => $this->input->post('nama'),
				'thn_guru' => $this->input->post('tahun'),
				'nidn_guru' => $this->input->post('nidn'),
				'alamat_guru' => $this->input->post('alamat'),
				'id_kelas' => $this->input->post('kelas'),
				'password_guru' => $this->input->post('nidn'),
			];
			$query = $this->Models->edit_guru($id,$data);
			if ($query) {
				$this->session->set_flashdata('success','Update data succes');
				redirect('StaffController/guru');
			} else {
				$this->session->set_flashdata('success','Update data failed');
				redirect('StaffController/guru');
			}
		} else {
			$config['upload_path'] = './asset/image';
			$config['allowed_types'] = 'png|jpg';
			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('foto')) {
				$this->session->set_flashdata('success','Update data failed');
				redirect('StaffController/guru');
			} else {
				$id = $this->input->post('id');
				$data = [
					'id_pelajaran' => $this->input->post('pelajaran'),
					'nama_guru' => $this->input->post('nama'),
					'thn_guru' => $this->input->post('tahun'),
					'nidn_guru' => $this->input->post('nidn'),
					'alamat_guru' => $this->input->post('alamat'),
					'foto_guru' => $_FILES['foto']['name'],
					'id_kelas' => $this->input->post('kelas'),
					'password_guru' => $this->input->post('nidn'),
				];
				$query = $this->Models->edit_gurus($id,$data);
				if ($query) {
					$this->session->set_flashdata('success','Update data succes');
					redirect('StaffController/guru');
				} else {
					$this->session->set_flashdata('success','Update data failed');
					redirect('StaffController/guru');
				}
			}
		}
	}

	public function show_guru($id)
	{	
		$data['sess'] = $this->session->userdata('isStaff');
		$data['guru'] = $this->Models->id_guru($id);
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/menu',$data);
		$this->load->view('admin/show_guru',$data);
		$this->load->view('admin/template/footer');
	}

	public function delete_guru($id)
	{
		$query = $this->Models->hapus_guru($id);
		if ($query) {
			$this->session->set_flashdata('success','Update data succes');
			redirect('StaffController/guru');
		} else {
			$this->session->set_flashdata('success','Update data failed');
			redirect('StaffController/guru');
		}
	}

	public function search_guru()
	{
		$cari = $this->input->post('cari');
		$data['sess'] = $this->session->userdata('isStaff');
		$data['siswa'] = $this->Models->search_guru($cari);
		$data['no'] =1;
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/menu',$data);
		$this->load->view('admin/guru',$data);
		$this->load->view('admin/template/footer');
	}

	public function post_kelas()
	{
		$nama = [
			'nama_kelas' =>strtoupper($this->input->post('nama'))
		];

		$query = $this->Models->post_kelas($nama);
		if ($query) {
			$this->session->set_flashdata('success','Update data succes');
			redirect('StaffController/kelas');
		} else {
			$this->session->set_flashdata('success','Update data failed');
			redirect('StaffController/kelas');
		}
	}

	public function delete_kelas($id)
	{
		$query = $this->Models->delete_kelas($id);
		if ($query) {
			$this->session->set_flashdata('success','Hapus data succes');
			redirect('StaffController/kelas');
		} else {
			$this->session->set_flashdata('success','Hapus data failed');
			redirect('StaffController/kelas');
		}
	}
	public function cari_kelas()
	{
		$cari = $this->input->post('cari');
		$data['sess'] = $this->session->userdata('isStaff');
		$data['kelas'] = $this->Models->cari_kelas($cari);
		$data['no'] =1;
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/menu',$data);
		$this->load->view('admin/kelas',$data);
		$this->load->view('admin/template/footer');
	}

	public function kelas()
	{
		$data['sess'] = $this->session->userdata('isStaff');
		$data['kelas'] = $this->Models->get_kelas();
		$data['no'] =1;
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/menu',$data);
		$this->load->view('admin/kelas',$data);
		$this->load->view('admin/template/footer');
	}

	public function pelajaran()
	{
		$data['sess'] = $this->session->userdata('isStaff');
		$data['pelajaran'] = $this->Models->get_pelajaran();
		$data['no'] =1;
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/menu',$data);
		$this->load->view('admin/pelajaran',$data);
		$this->load->view('admin/template/footer');
	}

	public function do_pelajaran()
	{
		$data = [
			'nama_pelajaran' => $this->input->post('nama'),
			'jam_pelajaran' => $this->input->post('jam'),
		];

		$query = $this->Models->post_pelajaran($data);
		if ($query) {
			$this->session->set_flashdata('success','Tambah data berhasil');
			redirect('StaffController/pelajaran');
		} else {
			$this->session->set_flashdata('success','Tambah data Failed');
			redirect('StaffController/pelajaran');
		}
	}

	public function delete_pelajaran($id)
	{
		$query = $this->Models->hapus_pelajaran($id);
		if ($query) {
			$this->session->set_flashdata('success','hapus data succes');
			redirect('StaffController/pelajaran');
		} else {
			$this->session->set_flashdata('success','hapus data failed');
			redirect('StaffController/pelajaran');
		}
	}

	public function ubah_pelajaran($id)
	{
		$data['sess'] = $this->session->userdata('isStaff');
		$data['pelajaran'] = $this->Models->get_pelajaran_id($id);
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/menu',$data);
		$this->load->view('admin/edit_pelajaran');
		$this->load->view('admin/template/footer');
	}

	public function edit_pelajaran()
	{
		$id = $this->input->post('id');
		$data = [
			'nama_pelajaran' => $this->input->post('nama'),
			'jam_pelajaran' => $this->input->post('jam'),
		];

		$query = $this->Models->edit_pelajaran($id,$data);
		if ($query) {
			$this->session->set_flashdata('success','Tambah data berhasil');
			redirect('StaffController/pelajaran');
		} else {
			$this->session->set_flashdata('success','Tambah data Failed');
			redirect('StaffController/pelajaran');
		}

	}

	public function search_pelajaran()
	{
		$cari = $this->input->post('cari');
		$data['sess'] = $this->session->userdata('isStaff');
		$data['pelajaran'] = $this->Models->search_pelajaran($cari);
		$data['no'] =1;
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/menu',$data);
		$this->load->view('admin/pelajaran',$data);
		$this->load->view('admin/template/footer');
	}

	public function pengumuman()
	{
		//$cari = $this->input->post('cari');
		$data['sess'] = $this->session->userdata('isStaff');
		$data['pengumuman'] = $this->Models->get_pengumuman();
		$data['no'] =1;
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/menu',$data);
		$this->load->view('admin/pengumuman',$data);
		$this->load->view('admin/template/footer');
	}
	
	public function do_post()
	{
		$data = [
			'nama_pengumuman' => $this->input->post('nama'),
			'desk_pengumuman' => $this->input->post('desk'),
			'status' => 1,
		];

		$query = $this->Models->post_pengumuman($data);
		if ($query) {
			$this->session->set_flashdata('success','Tambah data berhasil');
			redirect('StaffController/pengumuman');
		} else {
			$this->session->set_flashdata('success','Tambah data Failed');
			redirect('StaffController/pengumuman');
		}

	}

	public function edit_pengumuman($id)
	{
		$data['sess'] = $this->session->userdata('isStaff');
		$data['pengumuman'] = $this->Models->get_pengumuman_id($id);
		$data['no'] =1;
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/menu',$data);
		$this->load->view('admin/edit_pengumuman',$data);
		$this->load->view('admin/template/footer');
	}

	public function edit_pengumumans()
	{
		$id = $this->input->post('id');
		$data = [
			'nama_pengumuman' => $this->input->post('nama'),
			'desk_pengumuman' => $this->input->post('desk'),
			'status' => $this->input->post('status'),
		];

		$query = $this->Models->edit_pengumuman($id,$data);
		if ($query) {
			$this->session->set_flashdata('success','Edit data berhasil');
			redirect('StaffController/pengumuman');
		} else {
			$this->session->set_flashdata('success','Edit data Failed');
			redirect('StaffController/pengumuman');
		}

	}

	public function delete_pengumuman($id)
	{
		$query = $this->Models->delete_pengumuman($id);
		if ($query) {
			$this->session->set_flashdata('success','Delete data berhasil');
			redirect('StaffController/pengumuman');
		} else {
			$this->session->set_flashdata('success','Delete data Failed');
			redirect('StaffController/pengumuman');
		}
	}

	public function cari_pengumuman()
	{
		$cari = $this->input->post('cari');
		$data['sess'] = $this->session->userdata('isStaff');
		$data['pengumuman'] = $this->Models->cari_pengumuman($cari);
		$data['no'] =1;
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/menu',$data);
		$this->load->view('admin/pengumuman',$data);
		$this->load->view('admin/template/footer');
	}

	public function nilai()
	{
		$data['sess'] = $this->session->userdata('isStaff');
		$data['nilai'] = $this->Models->show_nilai();
		$data['no']=1;
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/menu',$data);
		$this->load->view('admin/nilai',$data);
		$this->load->view('admin/template/footer');
	}





	public function logout()
	{
		$this->session->unset_userdata('isStaff');
		redirect('LoginController/index');
	}
}