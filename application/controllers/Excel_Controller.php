<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_Controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Usuario_model','usuario',true);
		$this->load->model('Datos_model','datos',true);
	}
public function UsuarioUploader()
	{
         
        if (isset($_FILES['file'])) {
            if (($gestor = fopen($_FILES['file']['tmp_name'], "r")) !== FALSE) {
				$coun = 0 ;
                while (($datos = fgetcsv($gestor, 1000, ";")) !== FALSE) {
                	
                	if ($coun!=0) {
                		
                	
                	$arid = $this->datos->Miareaacademica($datos['2']);
                	$dato = explode('-',$datos['12']);
                	$rut = $dato['0'];
                    $dv = $dato['1'];
                	$usu = array(
					'usu_nombre' => $datos['13'],
					'usu_correo' => $datos['15'],
					'usu_pass' => '123456',
					'usu_estado' => '1',
					'usu_are_id' => $arid,
					'usu_rut' => $rut,
					'usu_dv' => $dv
                	 );
                $usuario = $this->usuario->create($usu);
                $usuario->save();
                var_dump($usu);
                var_dump($coun);
               
                }
                 $coun = $coun + 1 ;
            }

                fclose($gestor);

            }
        }

 
	}


}

/* End of file Excel_Controller.php */
/* Location: ./application/controllers/Excel_Controller.php */