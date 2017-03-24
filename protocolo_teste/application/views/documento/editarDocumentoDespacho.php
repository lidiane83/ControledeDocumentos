<?php include_once('cabecalho.php');?>
<?php echo form_open("controleDocumento/atualizaTramite");?>

<div class="panel panel-default">
  <div class="panel-heading">
<h2 class="panel-title"><b>Numero do protocolo: <?php echo $dados['numeroprotocolo'];?> </b></h2>
<br>
<ul class="list-group">
  <li class="list-group-item"><b>Tipo de documento: </b><?php echo $dados['tipo_nome'];?></li>
   <li class="list-group-item"><b>Numero do documento: </b><?php echo $dados['numeroDocumento'];?></li>
   <li class="list-group-item"><b>Origem (órgão ou pessoa): </b><?php echo $dados['Origem'];?></li>
  <li class="list-group-item"><b>Município: </b><?php echo $dados['municipio'];?> </li>
  <li class="list-group-item"><b>Estado: </b><?php echo $dados['estado'];?></li>
  <li class="list-group-item"><b>Data do documento: </b><?php echo $dados['data']?></li>
  <li class="list-group-item"><b>Interessados: </b><?php echo $dados['interessados'];?></li>
  <li class="list-group-item"><b>Folhas: </b><?php echo $dados['folhas'];?></li>
  <li class="list-group-item"><b>Volume: </b><?php echo $dados['volumes'];?></li>
 <li class="list-group-item"><b>Forma de remessa: </b><?php echo $dados['formaremessa'];?></li>
 <h3> <li class="list-group-item"><b>Encaminhar para: </b></li> </h3>
 <li class="list-group-item"><b>Setor: </b>
<select name="id_setor" class = "form-control">
        <?php foreach($setor as $tipo) : 
			 $essaEhOfuncao = $dados['id_tipo'] == $tipo['id'];
                $selecao = $essaEhOfuncao ? "selected='selected'" : "";
		?>
		<option value="<?=$tipo['id']?>" <?=$selecao?>>
                    <?=$tipo['nome']?>
            </option>
        <?php endforeach ?>
        </select>
</li>
<li class="list-group-item"><b>Finalidade: </b> <input type='text' name='assunto'  class = "form-control" id = "assunto"></li>
<li class="list-group-item"><b>Observações:</b><textarea class="form-control" name="descricao" id="descricao"></textarea></li>
<li class="list-group-item">
<input type='hidden' name='id' value = "<?php echo $dados['id'];?>" class = "form-control" id = "id">
<input type='hidden' name='numeroprotocolo' value = "<?php echo $dados['numeroprotocolo'];?>" class = "form-control" id = "numeroprotocolo">
    <?php				echo form_button(array(
					"class"=>"btn btn-primary",
					"content"=>"Registrar",
					"type"=>"submit"));
					echo form_close();
		?>
<?=anchor("controleDocumento/voltar/","Voltar", array("class" => "btn btn-danger"), "onclick=\"return confirm('Deseja sair?')\"");?> 

</li>

  </ul>
</div>
