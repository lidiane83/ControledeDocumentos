<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');//protege o controler
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
class controleDocumento extends CI_Controller {

public function geraNumero(){
	autoriza(); // helper que autoriza ou nao a navegacao nas telas
	$this->load->model("documentos_model"); //carrega o modelo
	$ano = date('Y'); //pega o ano do sistema
	$numeroProtocolo = $this->documentos_model->buscaUltimo($ano); //pega o ultimo numero para gerar o protocolo
	$num = $numeroProtocolo['numero'];//
	$numero ['numero'] = $num;
	$numero['ano'] = $ano;
	$numero['documento'] = '000'.$numeroProtocolo['numero']."/".$ano;//string que gera o numero do protocolo;
	$doc = '000'.$numeroProtocolo['numero']."/".$ano; //numero para gravar no banco
	$num = $num+1;
	$documento = array("numero"=> $num,
						"ano"=>$ano);
	$this->documentos_model->insereProtocolo($documento);//guarda o numero do protocolo
	session_start(); //inicio a sessão para pegar os dados e salvar num array
	$numero ['usuario'] = $_SESSION["nome"];
	$usuario_banco = $_SESSION["nome"];
	$numero['id_setor'] = $_SESSION["id_setor"];
	$id_setor_banco = $_SESSION["id_setor"];
	$numero['datahora'] = $_SESSION["datahora"];
	$databanco = $_SESSION["datahora"];
	$assunto = 'Protocolo Gerado';
	$fase = 0;
	$tramitacao= 0;
	$documentoProtocolado = array( "numeroprotocolo"=> $doc,
								    "datahora"=> $databanco,
									"id_setor" => $id_setor_banco,
										"usuario" => $usuario_banco,
										"assunto"=> $assunto,
										"fase"=>$fase,
										"id_tramitacao"=>$tramitacao);
										
	$this->documentos_model->insereDocumento($documentoProtocolado); // insere no bd de documentos
	$this->documentos_model->insereHistorico($documentoProtocolado); // insere o primeiro registro no protocolo
	$this->load->view("documento/numeroProtocolo", $numero);
	
}	
public function buscarDocumento(){ // esta funcao lista todos os documentos que devem ser registrados
					$usuariologado = autoriza(); // autoriza a nevegacao entre telas
	$this->load->model("documentos_model");
	$dados['dados'] = $this->documentos_model->buscaTodosDocumentoRegistro();
	
	if($dados['dados']){
			$this->load->view("documento/listarDocumento.php",$dados);
		}else{
		$this->session->set_flashdata("danger" , "Não há documentos para registrar!");
		$this->load->view("protocolista/indexProtocolista.php");
		
	}
}//busca todos os ducumentos de registro

public function buscarDocumentoDespacho(){
			$usuariologado = autoriza(); // autoriza a nevegacao entre telas
	$this->load->model("documentos_model");
	$dados['dados'] = $this->documentos_model->buscaTodosDocumentoDespacho();
	
	if($dados['dados']){
			$this->load->view("documento/listarDocumentoDespacho.php",$dados);
		}else{
		$this->session->set_flashdata("danger" , "Não há documentos para registrar!");
		$this->load->view("protocolista/indexProtocolista.php");
		
	}
	
	
}
//buscar todos os documentos de despacho

public function buscarDocumentoemTramite()
{
	$usuariologado = autoriza(); 
	
	$this->load->model("documentos_model");
	
	$numero = $this->pegaSetor();
	
	$doc = $this->documentos_model->buscaTodosDocumentoemTramiteporSetor($numero);
	
	$dados['dados'] = $this->documentos_model->buscaTodosDocumentoemTramite();
	
	
	if($dados['dados']){
			if ($numero == 22){
				$this->load->view("documento/listarDocumentosemTramite.php",$dados);
	}else{
		$dados['dados'] = $doc;
		$this->load->view("documento/listarDocumentosemTramite.php",$dados);
		//$this->session->set_flashdata("danger" , "Não há documentos!");
		//$this->load->view("protocolista/indexProtocolista.php");
		
	}
		}else{
		$this->session->set_flashdata("danger" , "Não há documentos!");
		$this->load->view("protocolista/indexProtocolista.php");
		
	}
		
}//verifica o setor do usuário e lista os documentos em tramitacao por setor, mas se o setor for o do Admin ele lista tudo.

function pegaSetor(){
	session_start();
	return $_SESSION["id_setor"];
}
public function buscarDocumentoArquivar()
{
	$usuariologado = autoriza(); // autoriza a nevegacao entre telas
	$this->load->model("documentos_model");
	$dados['teste'] = $this->documentos_model->buscaTodosDocumentoArquivado();
	
	if($dados['teste']){
			$this->load->view("documento/listarDocumentoArquivado.php",$dados);
		}else{
		$this->session->set_flashdata("danger" , "Não há documentos!");
		$this->load->view("protocolista/indexProtocolista.php");
		
}
	
	
}

function editarDocumentoRegistro()
{
	
	$usuariologado = autoriza(); // autoriza a nevegacao entre telas
	
		$id = $this->input->get("id");
		$this->load->model("geral_model");
        $this->load->model("documentos_model");
        
		$documento = $this->documentos_model->buscarDocumentos($id);
      
		$dados = array("dados"=>$documento);
	
		$dados['tipo']=$this->geral_model->buscaTodosTipo();

		$this->load->view("documento/editarDocumento", $dados);
} // esta funcao pega o documento e o ID para abrir a tela de registro

 
 
 function editarDocumentoDespacho()  {
	 
	$usuariologado = autoriza(); // autoriza a nevegacao entre telas
		$id = $this->input->get("id");
		$this->load->model("geral_model");
        $this->load->model("documentos_model");
        $documento = $this->documentos_model->buscarDocumento($id);
      
		$dados = array("dados"=>$documento);

				$dados['setor']=$this->geral_model->buscaTodosSetor();
				$this->load->view("documento/editarDocumentoDespacho", $dados);
 } // esta funcao pega o documento e o ID para abrir a tela de registro

 
 function editarDocumentoArquivado() 
 {
	 
	$usuariologado = autoriza(); // autoriza a nevegacao entre telas
		$id = $this->input->get("id");
		$this->load->model("geral_model");
        $this->load->model("documentos_model");
        $documento = $this->documentos_model->buscarDocumento2($id);
      
		$dados = array("dados"=>$documento);

				$dados['setor']=$this->geral_model->buscaTodosSetor();
				$this->load->view("documento/editarDocumentoArquivado", $dados);
 } // esta funcao pega o documento e o ID para abrir a tela de registro
 
  
 function editarDocumentoReceber()
 {		autoriza(); // autoriza a nevegacao entre telas
		$id = $this->input->get("id");
		$this->load->model("documentos_model");
        $documento = $this->documentos_model->buscarDocumento2($id);
		$dados = array("dados"=>$documento);
		$this->load->view("documento/editarDocumentoReceber", $dados);
}
 
 public function atualizaTramite(){//PRIMEIRA TRAMITACAO
		$this->load->library("form_validation");
		$this->form_validation->set_rules("assunto", "Finalidade", "required");
		$this->form_validation->set_rules("id_setor", "setor", "required");
		$this->form_validation->set_error_delimiters("<p class='alert alert-danger', </p>");
		 if($this->form_validation->run() == FALSE){
			$this->session->set_flashdata("danger" , "Nada feito! campos vazios");
			$this->voltar();
		}else{
		
			$data['id'] = $this->input->post('id');
			$data['id_setor'] = $this->input->post('id_setor');
			$data['assunto'] = $this->input->post('assunto');
			$data['descricao'] = $this->input->post('descricao');
			$data ['fase'] = 2;
			$data['id_tramitacao'] = 2;
			session_start();
			$databanco = $_SESSION["datahora"];
			$usuario_banco = $_SESSION["nome"];
			$documentoProtocolado = array( "numeroprotocolo"=> $this->input->post('numeroprotocolo'),
								    "datahora"=> $databanco,
									"id_setor" => $this->input->post('id_setor'),
										"usuario" => $usuario_banco,
										"assunto"=> $this->input->post('assunto'),
										"fase"=>2,
										"id_tramitacao"=>2); // para armazenar no histórico
			$this->load->model('documentos_model');
		if($this->documentos_model->atualizaTramite($data)){
			$this->documentos_model->insereHistorico($documentoProtocolado);
			$this->voltar();	
		}else {log_message('error', 'Erro ao atualizar a pessoa.');}
	
}
}
//Atualiza o documento para a tramitação

 public function atualizaTramite2(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("assunto", "Finalidade", "required");
		$this->form_validation->set_rules("id_setor", "setor", "required");
		$this->form_validation->set_error_delimiters("<p class='alert alert-danger', </p>");
		 if($this->form_validation->run() == FALSE){
			$this->session->set_flashdata("danger" , "Nada feito! campos vazios");
			$this->voltar();
		}else{
		
			$data['id'] = $this->input->post('id');
			$data['id_setor'] = $this->input->post('id_setor');
			$data['assunto'] = $this->input->post('assunto');
			$data['descricao'] = $this->input->post('descricao');
			$data ['fase'] = 3;
			$data['id_tramitacao'] = 3;
			session_start();
			$databanco = $_SESSION["datahora"];
			$usuario_banco = $_SESSION["nome"];
			$documentoProtocolado = array( "numeroprotocolo"=> $this->input->post('numeroprotocolo'),
								    "datahora"=> $databanco,
									"id_setor" => $this->input->post('id_setor'),
										"usuario" => $usuario_banco,
										"assunto"=> $this->input->post('assunto'),
										"fase"=>3,
										"id_tramitacao"=>3); // para armazenar no histórico
			$this->load->model('documentos_model');
		if($this->documentos_model->atualizaTramite($data)){
			$this->documentos_model->insereHistorico($documentoProtocolado);
			$this->voltar();	
		}else {log_message('error', 'Erro ao atualizar a pessoa.');}
	
}
}//atualiza o documento para o arquivamento

public function atualizaTramite3(){			
			$data ['fase'] = 2;
			$data['id_tramitacao'] = 1;
			
			session_start();
			$databanco = $_SESSION["datahora"];
			$usuario_banco = $_SESSION["nome"];
			
			$documentoProtocolado = array( "numeroprotocolo"=> $this->input->post('numeroprotocolo'),
								    "datahora"=> $databanco,
									"id_setor" => $this->input->post('id_setor'),
										"usuario" => $usuario_banco,
										"assunto"=> $this->input->post('assunto'),
										"fase"=>2,
										"id_tramitacao"=>1,);// para armazenar no histórico
										
		$this->load->model('documentos_model');
		
		if($this->documentos_model->atualizaRecebido($data))
		{
			$this->documentos_model->insereHistorico($documentoProtocolado);
			$this->voltar();	
		}else {
			log_message('error', 'Erro ao atualizar a pessoa.');
}
}
  
public function atualizarDocumento()
 {				
		$data['id'] = $this->input->post('id');
		$data['numeroprotocolo'] = $this->input->post('numeroprotocolo');
		session_start(); //inicio a sessão para pegar os dados e salvar num array
		$databanco = $_SESSION["datahora"];
		$data['datahora'] = $databanco;
		$data['id_setor'] = 22; // por padrao assim que o documento é registrado ele fica no setor de protocolo para ser despachado
		$usuario_banco = $_SESSION["nome"];
		$data['usuario'] = $usuario_banco;
		$data['assunto'] = $this->input->post('assunto');
		$data['fase'] = 1;
		$data['id_tipo'] = $this->input->post('id_tipo');
		$data['descricao'] = $this->input->post('descricao');
		$data['municipio'] = $this->input->post('municipio');
		$data['estado'] = $this->input->post('area');
		$data['documentoOrigem'] = $this->input->post('documentoOrigem');
		$data['folhas'] = $this->input->post('folha');
		$data['numeroDocumento'] = $this->input->post('numeroDocumento');
		$data['data'] = $this->input->post('data');
		$data['volumes'] = $this->input->post('volume');
		$data['interessados'] = $this->input->post('interessados');
		$data['formaremessa'] = $this->input->post('formaremessa');
		$data['Origem'] = $this->input->post('Origem');
		$id_tramitacao = 5;
		$data['id_tramitacao'] = $id_tramitacao;
 		$this->load->model('documentos_model');
		
		$documentoProtocolado = array( "numeroprotocolo"=> $this->input->post('numeroprotocolo'),
								    "datahora"=> $databanco,
									"id_setor" => $this->input->post('id_setor'),
										"usuario" => $usuario_banco,
										"assunto"=> $this->input->post('assunto'),
										"fase"=>1,
										"id_tramitacao"=>$id_tramitacao,);
	
 		/* Executa a função atualizar do modelo passando como parâmetro os dados obtidos do formulário */
		if ($this->documentos_model->atualizaDocumento($data)) {
			$this->documentos_model->insereHistorico($documentoProtocolado);
			/* Caso sucesso ao atualizar, recarrega a página principal */
			$this->voltar();
		} else {
			/* Senão exibe a mensagem de erro */
			log_message('error', 'Erro ao atualizar a pessoa.');
		}
		
	}

public function voltar(){
			session_start();
			$perfil = $_SESSION["perfil"];
			if ($perfil == 1){
			$this->load->view("protocolista/indexProtocolista.php");}
			else
			{
				$numero=$this->pegaSetor();
				$this->load->model("documentos_model");
				$doc = $this->documentos_model->buscaTodosDocumentoemTramiteporSetor($numero);
				$dados['dados'] = $doc; 
				$this->load->view('usuario/indexUsuario.php', $dados);
	
			}		
}

public function tramitarDocumento(){
		autoriza();
		$this->load->view("documento/pesquisarDocumento.php");
	
}

public function buscarDocumentoTramite(){
	$usuariologado=autoriza();
	session_start(); 
	$id_setor_banco = $_SESSION["id_setor"];
	$protocolo = $this->input->post('protocolo');
	$this->load->model('documentos_model');
	$this->load->model("geral_model");
				$dados['setor']=$this->geral_model->buscaTodosSetor();
				$dados['tipo']=$this->geral_model->buscaTodosTipo();
				
	$dados['dados'] = $this->documentos_model->buscaDocumento($protocolo);
	$doc = $this->documentos_model->buscaDocumento($protocolo);
	
	if($dados['dados']){
			if($doc['id_setor']== $id_setor_banco){ // se o id do documento = ao id do setor do usuario
					$this->load->view('documento/editarDocumentoTramitar', $dados);
				}else{ 			
				$this->session->set_flashdata("danger" , "Documento não tramitando em seu setor! Contate o administrador!");
				redirect("/");
				//	$this->load->view("protocolista/indexProtocolista.php");
			}
		
	}else {
		$this->session->set_flashdata("danger" , "Não há documentos para tramitar");
		$this->load->view("protocolista/indexProtocolista.php");
		
	}
}

public function verificarTramite(){
	autoriza();
	$this->load->view('documento/pesquisarTramite');
}

public function buscarHistorico(){
					
	$protocolo = $this->input->post("protocolo");
	$this->load->model("documentos_model");
	$dados['dados'] = $this->documentos_model->buscaHistorico($protocolo);
	if($dados['dados']){
	$this->load->view("documento/listarHistorico.php",$dados);
	}else{
		$this->session->set_flashdata("danger" , "Usuário não encontrado!");
		$this->load->view("protocolista/indexProtocolista.php");
		
	}

}

}
