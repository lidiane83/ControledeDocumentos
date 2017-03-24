<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');//protege o controler
session_start();
date_default_timezone_set('America/Belem');
//error_reporting(E_ALL & ~E_NOTICE);
class LoginAutenticar extends CI_Controller {
public function autenticar()
{			$this->load->model("usuarios_model");
			$matricula = $this->input->post("matricula");
			$senha = md5($this->input->post("senha"));
			$usuario = $this->usuarios_model->buscaMatriculaSenha($matricula, $senha);
			
			if($usuario){
			//	session_start();
				$_SESSION["nome"] = $usuario['Nome'];
				$_SESSION["id_setor"] = $usuario['id_setor'];
				$_SESSION["datahora"]= date('Y-m-j H:i:s');
				$_SESSION["perfil"] = $usuario['id_perfil'];
				$_SESSION["id"] = $usuario['id'];
				$this->session->set_userdata("usuario_logado",$usuario);
				$this->verificaPerfil($usuario);
			}else{  
				$this->session->set_flashdata("danger" , "Usuário ou senha inválida!");
				//redirect('/');
				header( "refresh:0;url=/protocoloCompletoII/protocolo_teste/index.php" );
}
}
     
function logout()
	{
		
		unset($_SESSION['nome']);
		unset($_SESSION['id_setor']);
		unset($_SESSION['datahora']);
		unset($_SESSION['perfil']);
		$this->session->unset_userdata("usuario_logado");
		$this->session->set_flashdata("success", "Deslogado com sucesso!");
		session_destroy();
		//redirect('/','refresh');
		header( "refresh:0;url=/protocoloCompletoII/protocolo_teste/index.php" );
	}
	
 function verificaPerfil($usuario)
	{
		if($usuario["id_perfil"]==1)
			
			{ 	
				$this->load->model("documentos_model");
				$total= $this->documentos_model->buscaTotalRegistrar();
				$reg['soma']=$total;
				$this->load->view('protocolista/indexProtocolista.php',$reg);
		}else{
			if($usuario["id_perfil"]==2){ 
			
				$numero=$this->pegaSetor();
				$this->load->model("documentos_model");
				$doc = $this->documentos_model->buscaTodosDocumentoemTramiteporSetor($numero);
				$dados['dados'] = $doc; 
				$this->load->view('usuario/indexUsuario.php', $dados);
			}
		}
	}
		
function pegaSetor(){
	//session_start();
	return $_SESSION["id_setor"];
}
	
public function voltar()
{
				$numero=$this->pegaSetor();
				$this->load->model("documentos_model");
				$doc = $this->documentos_model->buscaTodosDocumentoemTramiteporSetor($numero);
				$dados['dados'] = $doc; 
				$this->load->view('usuario/indexUsuario.php', $dados);
	
}		
	
}