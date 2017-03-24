<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');//protege o controler
session_start();
class controleFuncao extends CI_Controller {
	
	public function indexFuncao(){
				autoriza();
				$this->load->view("geral/formularioFuncao.php");
		
		}
		
		public function voltar(){
			$setor = $_SESSION["id_setor"];
			if ($setor == 1){
				$this->load->view("protocolista/indexProtocolista.php");
			}else {
				$numero=$this->pegaSetor();
				$this->load->model("documentos_model");
				$doc = $this->documentos_model->buscaTodosDocumentoemTramiteporSetor($numero);
				$dados['dados'] = $doc; 
				$this->load->view('usuario/indexUsuario.php', $dados);
			}
		
		}
		function pegaSetor(){
	//session_start();
	return $_SESSION["id_setor"];
}
 public function listarFuncao()
{ 	$usuarioLogado = autoriza();
    $this->load->model("geral_model");
            
    $dados = $this->geral_model->buscaTodosFuncao();
            
    $funcoes = array("funcoes"=>$dados);
    
    $this->load->view("geral/formularioListarFuncao.php",$funcoes);


}
    public function cadastraFuncao()
{		$this->load->library("form_validation");
		$this->form_validation->set_rules("Nome", "nome", "required");
		$this->form_validation->set_rules("descricao", "descricao", "required");
		$this->form_validation->set_error_delimiters("<p class='alert alert-danger', </p>");
		
		 
		
		
		if($this->form_validation->run() == FALSE){
			$this->indexFuncao();
		}else{
		$usuarioLogado = $this->session->userdata("usuario_logado");
		$funcao = array(
        "nome" =>$this->input->post("Nome"),
        "descricao"=>$this->input->post("descricao"));
        
        $this->load->model("geral_model");
        
        $this->geral_model->salvaFuncao($funcao);
        $this->listarFuncao();
		$this->session->set_flashdata("success", "Produto salvo com sucesso");
		}
		
		
}
    
    
    public function removerFuncao($id)
    {
    
        
        $this->load->model("geral_model");   
        
         $this->geral_model->deletaFuncao($id);
         
           $dados = $this->geral_model->buscaTodosFuncao();
            
            $funcoes = array("funcoes"=>$dados);
    
                $this->load->view("geral/formularioListarFuncao.php",$funcoes);
    }

	
	
	
	
	
function editarFuncao()  {
		$usuarioLogado = autoriza();
		$id = $this->input->get("id");
        $this->load->model("geral_model");
        $funcao = $this->geral_model->buscar($id);
        $dados = array("funcoes"=>$funcao);
        $this->load->view("geral/formularioEditarFuncao", $dados);
 }
 
 
 
 
function atualizarFuncao() {
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
		if ($this->geral_model->atualiza($data)) {
			/* Caso sucesso ao atualizar, recarrega a página principal */
			$this->listarFuncao();
		} else {
			/* Senão exibe a mensagem de erro */
			log_message('error', 'Erro ao atualizar a pessoa.');
		}
		}
	}
}
 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
        
                     


