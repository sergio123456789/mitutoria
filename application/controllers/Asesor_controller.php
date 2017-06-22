<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asesor_Controller extends CI_Controller {

	public function index()
	{
		$this->load->view('Asesor/index.php','datos',false);
		
	}

}

/* End of file Asesor_controller.php */
/* Location: ./application/controllers/Asesor_controller.php */