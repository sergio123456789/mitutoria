<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asesor_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->layout->setLayout('/MasterPage',false);
		$this->load->model('Usuario_model','usuario',true);
		$this->load->model('Horario_model','horario',true);
	}
	public function index()
	{
		$this->layout->view('/Asesor/index.php','datos',false);
	}

	public function verAlumnos(){
		$this->layout->view('/Asesor/VerAlumno.php');
	}

	public function verDetallesAlumno(){
		
	}

	public function verProfesor(){
		$this->layout->view('/Asesor/VerProfesores.php');
	}

	public function verTutorias(){
		$horarios = $this->horario->findAll();
		$datos["horarios"] = $horarios;
		$this->layout->view('/Asesor/verTutoriasAsesor.php',$datos,false);
	}

}

/* End of file Asesor_controller.php */
/* Location: ./application/controllers/Asesor_controller.php */