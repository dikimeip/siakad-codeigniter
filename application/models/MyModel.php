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
		return $this->db->get_where('siswa',['id_siswa'=>$id])->row_array();
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
	
}