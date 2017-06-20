<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		
		   
		}
		$this->load->view('login',$data);
	}public function login()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data =array();
		//$data['img'] = base_url()."/img/logos/".$this->client.'.png';	
		$data;	 
		if(isset($_REQUEST['user']) && isset($_REQUEST['password']))
		{
			$user     =  $_REQUEST['user'];
			$password =	 $_REQUEST['password'];
		   //se fijan las rreglas de validación 	   
		   $this->form_validation->set_rules('user', 'user', 'trim|required|xss_clean');
		   $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean|callback_check_database'); //valida el form y checkea la bd
		   //var_dump($this->form_validation->_error_array); exit();
		   if($this->form_validation->run()) //si la validación falla se envía al form de nuevo
		   {
		   		$user = $this->session->userdata('logged_in');
	   			if(count($user['permisos']) > 0){
					if () {
	   					redirect('/index','refresh');
	   				}elseif () {
	   					redirect('/index','refresh');
	   				}elseif () {
	   					
		   		
		   }else{
		   	
		   	   $data['error'] = "Usuario y/o contraseña incorrecta";
		   }
		   
		}
		$this->load->view('login',$data);
	}
	
	function logout(){
	   //session_start();
	   session_destroy();
	   $this->session->unset_userdata('logged_in');
	   //session_destroy(); //destruye la sesión, o sea el arreglo de sesión logged_in
	   redirect('login', 'refresh');
	}
	function valida_rut($rut)
	{
	    $rut = preg_replace('/[^k0-9]/i', '', $rut);
	    $dv  = substr($rut, -1);
	    $numero = substr($rut, 0, strlen($rut)-1);
	    $i = 2;
	    $suma = 0;
	    foreach(array_reverse(str_split($numero)) as $v)
	    {
	        if($i==8)
	            $i = 2;
	        $suma += $v * $i;
	        ++$i;
	    }
	    $dvr = 11 - ($suma % 11);
	    
	    if($dvr == 11)
	        $dvr = 0;
	    if($dvr == 10)
	        $dvr = 'K';
	    if($dvr == strtoupper($dv))
	        return true;
	    else
	        return false;
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */