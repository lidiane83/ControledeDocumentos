<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');//protege o controler

class controleSecretaria extends CI_Controller {
	
	public function indexSecretaria(){
				autoriza();
				$this->load->view("geral/formularioSecretaria.php");
		
		}
		
		public function voltar(){
				$this->load->view("protocolista/indexProtocolista.php");
		
		}
 public function listarSecretaria()
{	$usuarioLogado = autoriza();
    $this->load->model("geral_model");
            
    $dados = $this->geral_model->buscaTodosSecretaria();
            
    $sec = array("sec"=>$dados);
	
    
    $this->load->view("geral/formularioListarSecretaria.php",$sec);


}
    public function cadastraSecretaria()
{		$this->load->library("form_validation");
		$this->form_validation->set_rules("Nome", "nome", "required");
		$this->form_validation->set_rules("descricao", "descricao", "required");
		$this->form_validation->set_error_delimiters("<p class='alert alert-danger', </p>");
		
		 if($this->form_validation->run() == FALSE){
			$this->indexSetor();
		}else{
		$usuarioLogado = $this->session->userdata("usuario_logado");
        $sec = array(
        "nome"=>$this->input->post("Nome"),
        "descricao"=>$this->input->post("descricao"));
        
        $this->load->model("geral_model");
        
        $this->geral_model->salvaSecretaria($sec);
        
        $this->listarSecretaria();
		}
}
        
    public function removerSecretaria($id)
    {
            
        $this->load->model("geral_model");   
        
         $this->geral_model->deletaSecretaria($id);
         
           $dados = $this->geral_model->buscaTodosSecretaria();
            
            $this->listarSecretaria();
    }
		
function editarSecretaria()  {
		$usuarioLogado = autoriza();
		$id = $this->input->get("id");
        $this->load->model("geral_model");
        $funcao = $this->geral_model->buscarSecretaria($id);
        $dados = array("sec"=>$funcao);
        $this->load->view("geral/formularioEditarSecretaria", $dados);
 }
  
function atualizarSecretaria() {
		$this->load->library("form_validation");
		$this->form_validation->set_rules("Nome", "nome", "required");
		$this->form_validation->set_rules("descricao", "descricao", "required");
		$this->form_validation->set_error_delimiters("<p class='alert alert-danger', </p>");
		if($this->form_validation->run() == FALSE){
			$this->session->set_flashdata("danger", "Produto não alterado com campos vazios");
			$this->voltar();
		}else{
 		$data['id'] = $this->input->post('id');
		$data['nome'] = ucwords($this->input->post('Nome'));
		$data['descricao'] = strtolower($this->input->post('descricao'));
 
 		$this->load->model('geral_model');
 
		/* Executa a função atualizar do modelo passando como parâmetro os dados obtidos do formulário */
		if ($this->geral_model->atualizaSecretaria($data)) {
			/* Caso sucesso ao atualizar, recarrega a página principal */
			$this->listarSecretaria();
		} else {
			/* Senão exibe a mensagem de erro */
			log_message('error', 'Erro ao atualizar a pessoa.');
		}
		}
	}
}
