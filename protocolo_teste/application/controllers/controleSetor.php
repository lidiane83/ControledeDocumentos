<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');//protege o controler

class controleSetor extends CI_Controller {
	
	public function indexSetor(){
				autoriza();
				$this->load->view("geral/formularioSetor.php");
		
		}
		
		public function voltar(){
				$this->load->view("protocolista/indexProtocolista.php");
		
		}
 public function listarSetor()
{	$usuarioLogado = autoriza();
    $this->load->model("geral_model");
            
    $dados = $this->geral_model->buscaTodosSetor();
            
    $setores = array("setores"=>$dados);
	
    
    $this->load->view("geral/formularioListarSetor.php",$setores);


}
    public function cadastraSetor()
{		$this->load->library("form_validation");
		$this->form_validation->set_rules("Nome", "nome", "required");
		$this->form_validation->set_rules("descricao", "descricao", "required");
		$this->form_validation->set_error_delimiters("<p class='alert alert-danger', </p>");
		
		 if($this->form_validation->run() == FALSE){
			$this->indexSetor();
		}else{
		$usuarioLogado = $this->session->userdata("usuario_logado");
        $setor = array(
        "nome"=>$this->input->post("Nome"),
        "descricao"=>$this->input->post("descricao"));
        
        $this->load->model("geral_model");
        
        $this->geral_model->salvaSetor($setor);
        
        $this->listarSetor();
		}
}
        
    public function removerSetor($id)
    {
            
        $this->load->model("geral_model");   
        
         $this->geral_model->deletaSetor($id);
         
           $dados = $this->geral_model->buscaTodosSetor();
            
            $this->listarSetor();
    }
	
	
function editarSetor()  {
	$usuarioLogado = autoriza();
		$id = $this->input->get("id");
        $this->load->model("geral_model");
        $funcao = $this->geral_model->buscarSetor($id);
        $dados = array("setor"=>$funcao);
        $this->load->view("geral/formularioEditarSetor", $dados);
 }
 
 
function atualizarSetor() {
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
		if ($this->geral_model->atualizaSetor($data)) {
			/* Caso sucesso ao atualizar, recarrega a página principal */
			$this->listarSetor();
		} else {
			/* Senão exibe a mensagem de erro */
			log_message('error', 'Erro ao atualizar a pessoa.');
		}
		}
	}
}
 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
        
                     


