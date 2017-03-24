<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');//protege o controler
session_start();
class controleTipo extends CI_Controller {
	
	public function indexTipo(){
			autoriza();
				$this->load->view("geral/formularioTipo.php");
		
		}
		
		public function voltar(){
				$this->load->view("protocolista/indexProtocolista.php");
		
		}
		
 public function listarTipo()
{	$usuarioLogado = autoriza();
    $this->load->model("geral_model");
            
    $dados = $this->geral_model->buscaTodosTipo();
            
    $tipos = array("tipos"=>$dados);
    
    $this->load->view("geral/formularioListarTipo.php",$tipos);


}
    public function cadastraTipo()
{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("Nome", "nome", "required");
		$this->form_validation->set_rules("descricao", "descricao", "required");
		$this->form_validation->set_error_delimiters("<p class='alert alert-danger', </p>");
		
		 if($this->form_validation->run() == FALSE){
			$this->indexTipo();
		}else{
		$usuarioLogado = $this->session->userdata("usuario_logado");
        $setor = array(
        "nome"=>$this->input->post("Nome"),
        "descricao"=>$this->input->post("descricao"));
        
        $this->load->model("geral_model");
        
        $this->geral_model->salvaTipo($setor);
        
        $this->listarTipo();
}}
        
    public function removerTipo($id)
    {
            
        $this->load->model("geral_model");   
        
         $this->geral_model->deletaTipo($id);
         
           $dados = $this->geral_model->buscaTodosTipo();
            
            $this->listarTipo();
    }
	
function editarTipo()  {
	$usuarioLogado = autoriza();
		$id = $this->input->get("id");
        $this->load->model("geral_model");
        $funcao = $this->geral_model->buscarTipo($id);
        $dados = array("setor"=>$funcao);
        $this->load->view("geral/formularioEditarTipo", $dados);
 }
  
function atualizarTipo() {
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
		if ($this->geral_model->atualizaTipo($data)) {
			/* Caso sucesso ao atualizar, recarrega a página principal */
			$this->listarTipo();
		} else {
			/* Senão exibe a mensagem de erro */
			log_message('error', 'Erro ao atualizar a pessoa.');
		}}
	}
}
 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
        
                     


