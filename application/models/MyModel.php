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
	
}