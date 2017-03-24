<?php include_once('cabecalho.php');?>
<?php echo form_open_multipart("controleDocumento/atualizarDocumento");?>

<div class="panel panel-default">
  <div class="panel-heading">
<h2 class="panel-title"><b>Numero do protocolo: <?php echo $dados['numeroprotocolo'];?> </b></h2>
<br>
<ul class="list-group">
<li class="list-group-item list-group-item-info"><b>Tipo de Documento: </b>
<div class="row">
  <div class="col-xs-3">
	<select name="id_tipo" class = "form-control">
        <?php foreach($tipo as $tipo) : 
			 $essaEhOfuncao = $dados['id_tipo'] == $tipo['id'];
                $selecao = $essaEhOfuncao ? "selected='selected'" : "";
		?>
		<option value="<?=$tipo['id']?>" <?=$selecao?>>
                    <?=$tipo['nome']?>
            </option>
        <?php endforeach ?>
     </select>
</div>
</li>
<li class="list-group-item list-group-item-info"><b>Número do documento: </b><input type='text' name='numeroDocumento'  id = "numeroDocumento"></li>
 <li class="list-group-item list-group-item-info"><b>Origem do documento (Órgão ou particular):</b>
<div class="row">
<div class="col-xs-6">
  <input type='text' name='Origem'  class = "form-control" id = "Origem">
</div>
</div>
</li>

<li class="list-group-item list-group-item-info"><b>Município:</b>
<div class="row">
  <div class="col-xs-6">
    <input type='text' name='municipio'  class = "form-control" id = "municipio">
</div>
</div>
</li>
<li class="list-group-item list-group-item-info"><b>Estado: </b>
<div class="row">
  <div class="col-xs-6">
  <input type='text' name='estado'  class = "form-control" id = "estado">
</div>
</div>
</li>
<li class="list-group-item list-group-item-info"><b>Data do documento: </b><input type='date' name='data'  id = "data"></li>
<li class="list-group-item list-group-item-info"><b>Interessados: </b> 
<div class="row">
  <div class="col-xs-6">
  <textarea class="form-control" name="interessados" id="interessados"></textarea>
</div>
</div>
</li>
<li class="list-group-item list-group-item-info"><b> Quantidade de folhas: </b><input type='number' name='folha' id = "folha" min="0" max="100" ></li>

<li class="list-group-item list-group-item-info"><b>Volume: </b><input type='number' name='volume'  id = "volume" min="1" max="100"></li>

<li class="list-group-item list-group-item-info"><b>Forma de remessa: </b>
<div class="row">
  <div class="col-xs-6">
    <input type='text' name='formaremessa'  class = "form-control" id = "formaremessa">
</div>
</div>
<li class="list-group-item list-group-item-info">
  
     <input name="arquivo" type="file" id="arquivo">
     
</li>
</li>
<input type='hidden' name='id' value = "<?php echo $dados['id'];?>" class = "form-control" id = "id">
<li class="list-group-item list-group-item-info">
  <?=anchor("ControleUsuario/voltar/","Voltar", array("class" => "btn btn-default active"), "onclick=\"return confirm('Deseja sair?')\"");?> 
<input type='hidden' name='numeroprotocolo' value = "<?php echo $dados['numeroprotocolo'];?>" class = "form-control" id = "numeroprotocolo">
<?php       echo form_button(array(
          "class"=>"btn btn-primary active",
          "content"=>"Registrar",
          "type"=>"submit"));
          echo form_close();
          ?>
</li>
</li>
</ul>

  </div>
</div>

<?php include_once("rodape.php");?>