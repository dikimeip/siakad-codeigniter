<?php  


/**
 * 
 */
class MyModel extends CI_Model
{
	
	public function login_siswa($uname,$pswd)
	{
		return $this->db->get_where('siswa',['nim_siswa'=>$uname,'password_siswa'=>$pswd])->result_array();
	}

	public function login_guru($uname,$pswd)
	{
		return $this->db->get_where('guru',['nidn_guru'=>$uname,'password_guru'=>$pswd])->result_array();
	}

	public function login_staff($uname,$pswd)
	{
		return $this->db->get_where('tu',['username_tu'=>$uname,'password'=>$pswd])->result_array();
	}

	public function get_siswa()
	{
		return $this->db->get('siswa')->result_array();
	}

	public function get_kelas()
	{
		return $this->db->get('kelas')->result_array();
	}

	public function post_siswa($data)
	{
		return $this->db->insert('siswa',$data);
	}

	public function id_siswa($id)
	{
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->join('kelas','kelas.id_kelas = siswa.id_kelas');
		$this->db->where('id_siswa',$id);
		return $this->db->get()->row_array();
	}

	public function edit_siswa1($id,$data)
	{
		$this->db->where('id_siswa',$id);
		return $this->db->update('siswa',$data);
	}

	public function edit_siswa($id,$data)
	{
		$this->db->where('id_siswa',$id);
		return $this->db->update('siswa',$data);
	}

	public function hapus_siswa($id)
	{
		$this->db->where('id_siswa',$id);
		return $this->db->delete('siswa');
	}

	public function cari_siswa()
	{
		$cari = $this->input->post('cari');
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->like('nama_siswa',$cari);
		return $this->db->get()->result_array();
	}

	public function get_pelajaran()
	{
		return $this->db->get('pelajaran')->result_array();
	}

	public function post_pelajaran($data)
	{
		return  $this->db->insert('pelajaran',$data) ;
	}

	public function hapus_pelajaran($id)
	{
		$this->db->where('id_pelajaran',$id);
		return $this->db->delete('pelajaran');
	}

	public function get_pelajaran_id($id)
	{
		$this->db->where('id_pelajaran',$id);
		return $this->db->get('pelajaran')->row_array();
	}

	public function edit_pelajaran($id,$data)
	{
		$this->db->where('id_pelajaran',$id);
		return $this->db->update('pelajaran',$data);
	}

	public function search_pelajaran($cari)
	{
		$this->db->select('*');
		$this->db->from('pelajaran');
		$this->db->like('nama_pelajaran',$cari);
		return $this->db->get()->result_array();
	}

	public function get_guru()
	{
		$this->db->select('*');
		$this->db->from('guru');
		$this->db->join('pelajaran','pelajaran.id_pelajaran = guru.id_pelajaran');
		$this->db->join('kelas','kelas.id_kelas = guru.id_kelas');
		return $this->db->get()->result_array();
	}

	public function post_guru($data)
	{
		return $this->db->insert('guru',$data);
	}

	public function id_guru($id)
	{
		$this->db->select('*');
		$this->db->from('guru');
		$this->db->join('pelajaran','pelajaran.id_pelajaran = guru.id_pelajaran');
		$this->db->join('kelas','kelas.id_kelas = guru.id_kelas');
		$this->db->where('id_guru',$id);
		return $this->db->get()->row_array();
	}

	public function edit_guru($id,$data)
	{
		$this->db->where('id_guru',$id);
		return $this->db->update('guru',$data);
	}

	public function edit_gurus($id,$data)
	{
		$this->db->where('id_guru',$id);
		return $this->db->update('guru',$data);
	}

	public function hapus_guru($id)
	{
		$this->db->where('id_guru',$id);
		return $this->db->delete('guru');
	}

	public function search_guru($cari)
	{
		$this->db->select('*');
		$this->db->from('guru');
		$this->db->join('pelajaran','pelajaran.id_pelajaran = guru.id_pelajaran');
		$this->db->join('kelas','kelas.id_kelas = guru.id_kelas');
		$this->db->like('nama_guru',$cari);
		return $this->db->get()->result_array();
	}

	public function cari_kelas($cari)
	{
		$this->db->select('*');
		$this->db->from('kelas');
		$this->db->like('nama_kelas',$cari);
		return $this->db->get()->result_array();
	}

	public function post_kelas($kelas)
	{
		return $this->db->insert('kelas',$kelas);
	}

	public function delete_kelas($id)
	{
		$this->db->where('id_kelas',$id);
		return $this->db->delete('kelas');
	}

	public function get_pengumuman()
	{
		return $this->db->get('pengumuman')->result_array();
	}

	public function post_pengumuman($data)
	{
		return $this->db->insert('pengumuman',$data);
	}

	public function get_pengumuman_id($id)
	{
		return $this->db->get_where('pengumuman',['id_pengumuman',$id])->row_array();
	}

	public function edit_pengumuman($id,$data)
	{
		$this->db->where('id_pengumuman',$id);
		return $this->db->update('pengumuman',$data) ;
	}

	public function delete_pengumuman($id)
	{
		$this->db->where('id_pengumuman',$id);
		return $this->db->delete('pengumuman');
	}

	public function cari_pengumuman($cari)
	{
		$this->db->select('*');
		$this->db->from('pengumuman');
		$this->db->like('nama_pengumuman',$cari);
		return $this->db->get()->result_array();
	}

	public function show_siswa($id)
	{
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->where('id_kelas',$id);
		$this->db->join('nilai','nilai.id_siswa = siswa.id_siswa');
		return $this->db->get()->result_array();
	}
	
	public function kelas_id($id)
	{
		$this->db->where('id_kelas',$id);
		return $this->db->get('kelas')->row_array();
	}

	public function post_nilai($data)
	{
		return $this->db->insert('nilai',$data) ;
	}

	public function get_siswa_nilai($id)
	{
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->where('id_kelas',$id);
		return $this->db->get()->result_array();
	}

	public function show_nilai()
	{
		$this->db->select('*');
		$this->db->from('nilai');
		$this->db->join('siswa','siswa.id_siswa = nilai.id_siswa');
		$this->db->join('pelajaran','pelajaran.id_pelajaran = nilai.id_pelajaran');
		return $this->db->get()->result_array();
	}

	public function show_nilai_id($id)
	{
		$this->db->select('*');
		$this->db->from('nilai');
		$this->db->join('siswa','siswa.id_siswa = nilai.id_siswa');
		$this->db->join('pelajaran','pelajaran.id_pelajaran = nilai.id_pelajaran');
		$this->db->where('id_nilai',$id);
		return $this->db->get()->row_array();
	}

	public function show_nilai_ids($cari)
	{
		$this->db->select('*');
		$this->db->from('nilai');
		$this->db->join('siswa','siswa.id_siswa = nilai.id_siswa');
		$this->db->join('pelajaran','pelajaran.id_pelajaran = nilai.id_pelajaran');
		$this->db->like('nama_siswa',$cari);
		return $this->db->get()->result_array();
	}

	public function ubah_nilai($id,$nilai)
	{
		$this->db->where('id_nilai',$id);
		return $this->db->update('nilai',$nilai);
	}

	public function hapus_nilai($id)
	{
		$this->db->where('id_nilai',$id);
		return $this->db->delete('nilai');
	}

	public function post_materi($data)
	{
		return $this->db->insert('materi',$data) ;
	}

	public function get_materi()
	{
		return $this->db->get_where('materi',['status'=>'aktif'])->result_array();
	}

	public function hapus_materi($id)
	{
		$this->db->where('id_materi',$id);
		return $this->db->delete('materi');
	}

	public function cari_materi($cari)
	{
		$this->db->select('*');
		$this->db->from('materi');
		$this->db->like('nama_materi',$cari);
		return $this->db->get()->result_array() ;
	}

	
	
}