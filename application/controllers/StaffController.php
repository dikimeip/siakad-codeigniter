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
	}

	public function index()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/menu');
		$this->load->view('admin/dasboard');
		$this->load->view('admin/template/footer');
	}
}