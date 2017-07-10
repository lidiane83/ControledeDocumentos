<?php

class documentos_model extends CI_Model
{
	public function buscaUltimo($ano)
	{
		$this->db->select_max('numero');
		$this->db->where('ano',$ano);
		return $this->db->get('numeroprotocolo')->row_array();
		
	} // esta função retorna a última linha do numero do protocolo

public function insereProtocolo($protocolo)
{
	$this->db->insert("numeroprotocolo", $protocolo);
} 

public function insereDocumento($documento){
	$this->db->insert("documento",$documento);
}
public function insereHistorico($documento){
	$this->db->insert("historico",$documento);
	
}
public function recebido($documento){
	$this->db->where('id',$documento["id"]);
	$this->db->set('recebido', $documento['recebido']);
	return $this->db->update("documento");
}
public function buscaTodosDocumentoRegistro() {
		$fase = 0;
		$this->db->where("fase",$fase);
        return $this->db->get("documento")->result_array();
    }
    // esta funcao retorna todos os documentos que estao para ser registrados
    public function buscaTodosDocumentoRegistroSetor($setor, $sec) {
		$fase = 0;
		$this->db->where("fase",$fase);
		$this->db->where('documento.id_setor',$setor);
		$this->db->where('documento.id_secretaria',$sec);
        return $this->db->get("documento")->result_array();
    } //esta função mostra os documentos a serem registrados por setor
  public function buscaTotalRegistrar() {
		$fase = 0;
		$this->db->select('count(*)');
		$this->db->where("fase",$fase);
		return $this->db->get("documento")->result();
	 
    }

	// esta funcao retorna todos os documentos que precisam ser despachados para os setores
	public function buscaTodosDocumentoDespacho(){
		$fase = 1;
		$this->db->where("fase",$fase);
    	$protocolo = $this->db->get("documento")->result_array();
	    return $protocolo;
		
	}

	public function buscaTodosDocumentoDespachoSetor($setor){
		$fase = 1;
		$setor = 2;
		$this->db->where("fase",$fase);
		$this->db->where('documento.id_setor',$setor);
    	$protocolo = $this->db->get("documento")->result_array();
    	 return $protocolo;
}


public function buscaTodosDocumentoemTramite()
{
	$fase = 2;
	$this->db->select("documento.*, setor.nome as setor_nome");
	$this->db->from("documento");
	$this->db->join("setor", "documento.id_setor = setor.id");
	$this->db->where("documento.fase",$fase);
	return $this->db->get()->result_array();
}

public function buscaTodosDocumentoemTramite2()
{		$fase=2;
		$this->db->where('fase',$fase);
		return $this->db->get('documento')->result_array();
}

public function buscaTodosDocumentoemTramiteporSetor($setor)
{	$fase=2;
	$this->db->select("documento.*, setor.nome as setor_nome");
	$this->db->from("documento");
	$this->db->join("setor", "documento.id_setor = setor.id");
	$this->db->where("documento.fase",$fase);
	$this->db->where('documento.id_setor',$setor);
	return $this->db->get()->result_array();
}
	
public function atualizaTramite($documento){
	$this->db->where('id',$documento["id"]);
	$this->db->set('id_setor', $documento['id_setor']);
	$this->db->set('assunto', $documento['assunto']);
	$this->db->set('descricao', $documento['descricao']);
	$this->db->set('fase', $documento['fase']);
	$this->db->set('id_tramitacao', $documento['id_tramitacao']);
	$this->db->set('usuario', $documento['usuario']);
	$this->db->set('datahora', $documento['datahora']);
	return $this->db->update("documento");
}
public function atualizaRecebido($documento){
	$this->db->where('id',$documento["id"]);
	$this->db->set('fase', $documento['fase']);
	$this->db->set('id_tramitacao', $documento['id_tramitacao']);
	return $this->db->update("documento");
}
public function buscaDocumento($documento)
{	$fase = 1;
		$this->db->where("fase",$fase);
    	$this->db->where("numeroprotocolo",$documento);
	$protocolo = $this->db->get("documento")->row_array();
	return $protocolo;
}

 public function buscarDocumento($id) {
	$this->db->select("documento.*, tipodocumento.nome as tipo_nome");
	$this->db->from("documento");
	$this->db->where("documento.id",$id);
	$this->db->join("tipodocumento", "documento.id_tipo= tipodocumento.id");
	return $this->db->get()->row_array();
}
public function buscarDocumento2($id) {
	$this->db->select("documento.*, tipodocumento.nome as tipo_nome, setor.nome as setor_nome");
	$this->db->from("documento");
	$this->db->where("documento.id",$id);
	$this->db->join("tipodocumento", "documento.id_tipo= tipodocumento.id");
	$this->db->join("setor", "documento.id_setor= setor.id");
	return $this->db->get()->row_array();
}

public function buscaTodosDocumentoArquivado()
{	$fase = 3;
	$this->db->select("documento.*, setor.nome as setor_nome");
	$this->db->from("documento");
	$this->db->where("documento.fase",$fase);
	$this->db->join("setor", "documento.id_setor = setor.id");
	return $this->db->get()->result_array();
}

public function buscarDocumentos($id) {
		return $this->db->get_where("documento", array("id" => $id))->row_array();
}

public function atualizadocumento($documento)
{
	
	$this->db->where('id',$documento["id"]);
	$this->db->set($documento);
	return $this->db->update("documento",$documento);
	
}

public function buscaHistorico($documento)
{	$this->db->select("historico.*, setor.nome, secretaria.nome as sec");
	$this->db->from("historico");
	$this->db->join("setor", "historico.id_setor= setor.id");
	$this->db->join("secretaria", "historico.id_secretaria= secretaria.id");
	$this->db->where("numeroprotocolo",$documento);
	$this->db->order_by("historico.datahora", "asc");
	return $this->db->get()->result_array();
}

public function buscaHistoricoDados($documento)
{	$this->db->select("documento.*, tipodocumento.nome as nometipo");
	$this->db->from("documento");
	$this->db->where("numeroprotocolo",$documento);
	$this->db->join("tipodocumento", "documento.id_tipo= tipodocumento.id");
	return $this->db->get()->row_array();
}



}
