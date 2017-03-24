<?php

class usuarios_model extends CI_Model{



public function buscaMatriculaSenha($matricula, $senha)
{
	$this->db->where("matricula",$matricula);
	$this->db->where("senha",$senha);
	$usuario = $this->db->get("usuario")->row_array();
	return $usuario;
}



public function buscaMatricula($matricula)
{	
	$this->db->select("usuario.*, setor.nome as nome_setor,funcao.nome as nome_funcao, perfil.nome as nome_perfil");
	$this->db->from("usuario");
	$this->db->join("setor", "usuario.id_setor=setor.id");
	$this->db->join("funcao", "usuario.id_funcao=funcao.id");
	$this->db->join("perfil", "usuario.id_perfil=perfil.id");
	$this->db->where("matricula",$matricula);
	$usuario = $this->db->get()->row_array();
	return $usuario;
}


public function salvaUsuario($usuario){

    $this->db->insert("usuario",$usuario);
	
}


public function deletaUsuario($id){
    
        return $this->db->delete('usuario', array('id' => $id)); ;
  }

  
 public function buscarUsuario($id) {
	 
 return $this->db->get_where("usuario", array("id" => $id))->row_array();
}

public function atualizaUsuario($usuario)
{
	
	$this->db->where('id',$usuario["id"]);
	$this->db->set($usuario);
	return $this->db->update("usuario",$usuario);
	
}

public function atualizaUsuarioSenha($data){
	$this->db->where('id',$data["id"]);
	$this->db->set('senha', $data["senha"]);
	return $this->db->update("usuario");
}

public function buscaTodos()
{	
	$this->db->select("usuario.*, setor.nome as nome_setor,funcao.nome as nome_funcao, perfil.nome as nome_perfil");
	$this->db->from("usuario");
	$this->db->join("setor", "usuario.id_setor=setor.id");
	$this->db->join("funcao", "usuario.id_funcao=funcao.id");
	$this->db->join("perfil", "usuario.id_perfil=perfil.id");
	$usuarios = $this->db->get()->result_array();
    return $usuarios;
    }



}