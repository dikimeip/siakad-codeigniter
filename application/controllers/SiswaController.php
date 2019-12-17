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
	}

	public function index()
	{
		echo "Controller Siswa";
	}
}