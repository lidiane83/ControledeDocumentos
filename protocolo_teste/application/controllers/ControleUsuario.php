<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');//protege o controler
session_start();
class controleUsuario extends CI_Controller {
	
	public function indexUsuario(){
			
			 $this->load->model("geral_model");
				$dados['perfil']=$this->geral_model->buscaTodosPerfil();	
				$dados['setor']=$this->geral_model->buscaTodosSetor();
				$dados['funcao']=$this->geral_model->buscaTodosFuncao();
				$dados['sec']=$this->geral_model->buscaTodosSecretaria();
				autoriza();
				$this->load->view("viewUsuario/formularioUsuario.php", $dados);
		
		}
		
		public function pesquisarUsuario()
		{		autoriza();
				$this->load->view("viewUsuario/crudUsuario.php");

		}
		
		
		
		public function voltar(){
				$this->load->view("protocolista/indexProtocolista.php");
		
}


public function novo() {
		 
		$this->load->library("form_validation");
		$this->form_validation->set_rules("nome", "nome", "required");
		$this->form_validation->set_rules("matricula", "Matrícula", "required");
		$this->form_validation->set_rules("senha", "Senha", "required");
		$this->form_validation->set_error_delimiters("<p class='alert alert-danger', </p>");
		 if($this->form_validation->run() == FALSE){
			$this->indexUsuario();
		}else{
		$usuarioLogado = $this->session->userdata("usuario_logado");		
		$usuario = array(
            "nome" => $this->input->post("nome"),
            "matricula" => $this->input->post("matricula"),
            "senha" => md5($this->input->post("senha")),
			"id_setor"=> $this->input->post("id_setor"),
			"id_perfil"=>$this->input->post("id_perfil"),
			"id_funcao"=>$this->input->post("id_funcao"),
			"id_secretaria"=>$this->input->post("id_secretaria"));

		$this->load->model("usuarios_model");
        $this->usuarios_model->salvaUsuario($usuario);
        $this->load->view("protocolista/indexProtocolista");
}
}

	public function listarUsuario()
{
    $this->load->model("geral_model");
            
    $dados = $this->geral_model->buscaTodosSetor();
            
    $setores = array("setores"=>$dados);
    
    $this->load->view("geral/formularioListarSetor.php",$setores);


}
function editarUsuario()  {
	$usuarioLogado = autoriza();
		$id = $this->input->get("id");
		$this->load->model("geral_model");
        $this->load->model("usuarios_model");
        $usuario = $this->usuarios_model->buscarUsuario($id);
      
		$dados = array("dados"=>$usuario);

				$dados['perfil']=$this->geral_model->buscaTodosPerfil();	
				$dados['setor']=$this->geral_model->buscaTodosSetor();
				$dados['funcao']=$this->geral_model->buscaTodosFuncao();
				$dados['id_secretaria']=$this->geral_model->buscaTodosSecretaria();
				$this->load->view("viewUsuario/listarUsuario", $dados);
 }

public function buscarUsuario(){
				autoriza();
				$this->load->model("geral_model");
				$dados['perfil']=$this->geral_model->buscaTodosPerfil();	
				$dados['setor']=$this->geral_model->buscaTodosSetor();
				$dados['funcao']=$this->geral_model->buscaTodosFuncao();

	$matricula = $this->input->post("matricula");
	$this->load->model("usuarios_model");
	$dados['dados'] = $this->usuarios_model->buscaMatricula($matricula);
	
	if($dados['dados']){
	
	$this->load->view("viewUsuario/listarUsuario2.php",$dados);
	}else{
		$this->session->set_flashdata("danger" , "Usuário não encontrado!");
		$this->load->view("protocolista/indexProtocolista.php");
		
	}
}
 public function removerUsuario($id)
    {
            
        $this->load->model("usuarios_model");   
        
         $this->usuarios_model->deletaUsuario($id);
         $this->load->view("protocolista/indexProtocolista"); 
           
    }
		
	public function atualizarUsuario() {
		$this->load->library("form_validation");
		$this->form_validation->set_rules("nome", "nome", "required");
		$this->form_validation->set_rules("matricula", "Matrícula", "required");
		$this->form_validation->set_rules("senha", "Senha", "required");
		$this->form_validation->set_error_delimiters("<p class='alert alert-danger', </p>");
		 if($this->form_validation->run() == FALSE){
			$this->session->set_flashdata("danger" , "Nada feito! campos vazios");
			$this->voltar();
		}else{
		
		$data['id'] = $this->input->post('id');
		$data['nome'] = ucwords($this->input->post('nome'));
		$data['matricula'] = strtolower($this->input->post('matricula'));
		$data['senha'] = md5($this->input->post('senha'));
		$data['id_setor'] = $this->input->post('id_setor');
		$data['id_perfil'] = $this->input->post('id_perfil');
		$data['id_funcao'] = $this->input->post('id_funcao');
		$data['id_secretaria'] = $this->input->post('id_secretaria');
 		$this->load->model('usuarios_model');
 
		/* Executa a função atualizar do modelo passando como parâmetro os dados obtidos do formulário */
		if ($this->usuarios_model->atualizaUsuario($data)) {
			/* Caso sucesso ao atualizar, recarrega a página principal */
			$this->voltar();
		} else {
			/* Senão exibe a mensagem de erro */
			log_message('error', 'Erro ao atualizar a pessoa.');
		}
		}
	}
	public function alterarSenha(){
        $id =$_SESSION["id"];
		$this->load->model('usuarios_model');
		$usuario ['dados'] = $this->usuarios_model->buscarUsuario($id);
		$this->load->view("viewUsuario/AlterarSenha.php", $usuario);
	}
	
	public function atualizaSenha(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("senha", "Senha", "required");
		$this->form_validation->set_error_delimiters("<p class='alert alert-danger', </p>");
		if($this->form_validation->run()==False){
			$this->session->set_flashdata("danger" , "Nada feito! campos vazios");
		redirect('/');}else{
			$dados ['id'] = $this->input->post("id");
			$dados['senha'] = md5($this->input->post("senha"));
			$this->load->model('usuarios_model');
			if ($this->usuarios_model->atualizaUsuarioSenha($dados))
			{		
				$this->session->set_flashdata("danger" , "senha alterada com sucesso! Digite sua nova senha");
				session_destroy();
				redirect('/');
			}
			
			
			
		}
			
			
		
		
	}
	
    
    
     public function listarTodos()
{	
     autoriza();
    $this->load->model("usuarios_model");
            
    $dados = $this->usuarios_model->buscaTodos();
            
    $usuario = array("usuario"=>$dados);
    
    $this->load->view("viewUsuario/listarUsuario2.php",$usuario);


}

    
    
	
	
}






















