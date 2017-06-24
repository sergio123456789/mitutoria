<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asesor_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->layout->setLayout('/MasterPage',false);
	}
	public function index()
	{
		$this->layout->view('/Asesor/index.php','datos',false);
	}

}

/* End of file Asesor_controller.php */
/* Location: ./application/controllers/Asesor_controller.php */