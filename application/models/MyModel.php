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
	
}