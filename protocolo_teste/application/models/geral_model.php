<?php

class geral_model extends CI_Model{

public function salvaFuncao($funcao){

    $this->db->insert("funcao",$funcao);
}

public function buscaTodosFuncao() {
        return $this->db->get("funcao")->result_array();
    }
    
public function deletaFuncao($id){
    
        return $this->db->delete('funcao', array('id' => $id)); ;
  }
  
 public function buscar($id) {
	 
 return $this->db->get_where("funcao", array("id" => $id))->row_array();
}


public function atualiza($funcao){
	$this->db->where('id',$funcao["id"]);
	$this->db->set($funcao);
	return $this->db->update('funcao');
	
}
//CRUD DE FUNCOES
//----------------------------------------------------------------------------------------------------------------------------------------------------------------------
//CRUD Setor
public function salvaSetor($setor){

    $this->db->insert("setor",$setor);
}

public function buscaTodosSetor() {
        return $this->db->get("setor")->result_array();
    }
    
public function deletaSetor($id){
    
        return $this->db->delete('setor', array('id' => $id)); ;
  }
  
 public function buscarSetor($id) {
	 
 return $this->db->get_where("setor", array("id" => $id))->row_array();
}


public function atualizaSetor($setor){
	$this->db->where('id',$setor["id"]);
	$this->db->set($setor);
	return $this->db->update('setor');
	
}

//CRUD Tipo de Documento
public function salvaTipo($tipo){

    $this->db->insert("tipodocumento",$tipo);
}

public function buscaTodosTipo() {
        return $this->db->get("tipodocumento")->result_array();
    }
    
public function deletaTipo($id){
    
        return $this->db->delete('tipodocumento', array('id' => $id)); ;
  }
  
 public function buscarTipo($id) {
	 
 return $this->db->get_where("tipodocumento", array("id" => $id))->row_array();
}


public function atualizaTipo($tipo){
	$this->db->where('id',$tipo["id"]);
	$this->db->set($tipo);
	return $this->db->update('tipodocumento');
	
}
//CRUD perfil usuario

 public function buscarPerfil($id) {
	 
 return $this->db->get_where("perfil", array("id" => $id))->row_array();
}

public function buscaTodosPerfil() {
        return $this->db->get("perfil")->result_array();
    }

}