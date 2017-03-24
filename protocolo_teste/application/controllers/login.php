
<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');//protege o controler

	class Login extends CI_Controller {
			
		public function index(){
				$this->load->view("login/index.php");
		
		}
	
			
	}
	
	