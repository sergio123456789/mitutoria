<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumno_Controller extends CI_Controller {

	public function index()
	{
		$this->load->view('Alumnos/index.php','datos',false);
	}

}

/* End of file Alumno_Controller.php */
/* Location: ./application/controllers/Alumno_Controller.php */