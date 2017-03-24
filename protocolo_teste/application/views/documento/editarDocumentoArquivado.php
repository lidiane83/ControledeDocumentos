<?php include_once('cabecalho.php');?>
<?php echo form_open("controleDocumento/atualizaTramite2");?>

<div class="panel panel-default">
  <div class="panel-heading">
<h2 class="panel-title" ><b>Numero do protocolo: <?php echo $dados['numeroprotocolo'];?> 
<li class="list-group-item"><b>Setor: </b><?php echo $dados['setor_nome'];?></li>
<li class="list-group-item"><b>finalidade: </b><?php echo $dados['assunto'];?></li>
</b></h2>
<br>
<ul class="list-group">
  <li class="list-group-item"><b>Tipo de documento: </b><?php echo $dados['tipo_nome'];?></li>
  <li class="list-group-item"><b>Município: </b><?php echo $dados['municipio'];?> </li>
  <li class="list-group-item"><b>Área: </b><?php echo $dados['estado'];?></li>
  <li class="list-group-item"><b>Origem: </b><?php echo $dados['Origem'];?></li>
  <li class="list-group-item"><b>Folhas: </b><?php echo $dados['folhas'];?></li>
  <li class="list-group-item"><b>Apensos: </b><?php echo $dados['numeroDocumento'];?></li>
  <li class="list-group-item"><b>Volume: </b><?php echo $dados['volumes'];?></li>
  <li class="list-group-item"><b>Anexos: </b><?php echo $dados['data']?></li>
  <li class="list-group-item"><b>Interessados: </b><?php echo $dados['interessados'];?></li>
  <li class="list-group-item"><b>Forma de remessa: </b><?php echo $dados['formaremessa'];?></li>
 <h4> <li class="list-group-item"><b>Descreva o motivo do arquivamento: </b></li> </h4>
 <li class="list-group-item"><b>Observação:</b><textarea class="form-control" name="descricao" id="descricao"></textarea></li>
<li class="list-group-item">
<input type='hidden' name='id_setor' value = "<?php echo $dados['id_setor'];?>" class = "form-control" id = "id_setor">
<input type='hidden' name='id' value = "<?php echo $dados['id'];?>" class = "form-control" id = "id">
<input type='hidden' name='numeroprotocolo' value = "<?php echo $dados['numeroprotocolo'];?>" class = "form-control" id = "numeroprotocolo">
<?php				echo form_button(array(
					"class"=>"btn btn-primary active",
					"content"=>"Arquivar",
					"type"=>"submit"));
					echo form_close();
					?>
<?=anchor("controleDocumento/voltar/","Voltar", array("class" => "btn btn-danger "), "onclick=\"return confirm('Deseja sair?')\"");?> 

</li>
  </ul>
</div>
