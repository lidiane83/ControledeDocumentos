<?php include_once('cabecalho.php')?>
<?php echo form_open("ControleUsuario/atualizaSenha");?>
<div class="form-group has-success">
<ul>
<tr> 
 <label class="control-label" for="inputSuccess1">Digite a nova senha:</label>
  <input type="password" class="form-control" name="senha" id="senha">
  <input type="hidden" class="form-control" name = "id" id="id" value = "<?php echo $dados['id']?>">
  <?php echo form_error("senha");?>
 </tr>
 <br>
 <tr>
  <?php				echo form_button(array(
					"class"=>"btn btn-default btn-lg active",
					"content"=>"Alterar",
					"type"=>"submit"));
					echo form_close();
	?>
</tr>
<tr>
<?=anchor("controleDocumento/voltar/","Voltar", array("class" => "btn btn-default btn-lg active"), "onclick=\"return confirm('Deseja sair?')\"");?> 
</tr>
</ul>
</div>



<?php include_once('rodape.php')?>