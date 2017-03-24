<?php include_once('cabecalho.php');?>

<?php echo form_open("controleDocumento/buscarhistorico");?>
				
	<div class="row">
		<div class="col-md-8">
			<h2>Informe o Número do seu protocolo</h2>
       			 <div class="search">

       			 	<?php
								echo form_input(array(
								"name"=>"protocolo",
								"id"=>"protocolo",
								"class"=>"form-control input-sm"));
					?>
					<hr>
					<?php
							echo form_button(array(
						"class"=>" btn-primary btn-sm",
						"content"=>"Buscar",
						"type"=>"submit"));
							echo form_close();?>
	<?=anchor("controleDocumento/voltar/","Voltar", array("class" => "btn btn-danger"), "onclick=\"return confirm('Deseja sair?')\"");?>

</div>
	</div>
</div>
</div>

					
					
					
<?php include_once('rodape.php');?>
	