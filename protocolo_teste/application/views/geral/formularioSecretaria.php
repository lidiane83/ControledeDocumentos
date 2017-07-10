<?php include_once('cabecalho.php');?>
<?php
				echo form_open("controleSecretaria/cadastraSecretaria");?>
				<div class="form-group">
					
					<tr>
		<div class = "row">
			<div class = "form-group col-md-6">
						<td>
							<?php
								$atributos = (array("style"=>"color:#696969"));
								echo form_label("Nome","nome",$atributos);
							?>
						</td>	
					</tr>		
					<tr>
						<td>
							<?php
								echo form_input(array(
								"name"=>"Nome",
								"id"=>"nome",
								"class"=>"form-control",
								"value" => set_value("Nome","")));	
								echo form_error("Nome");
							?>
						</div>
						</td>
					</tr>
				<tr>
					<div class = "form-group col-md-6">
					<td>
						<?php
							$atributos = (array("style"=>"color:#696969"));
							echo form_label("Descrição", "descricao", $atributos);
						?>
					</td>
				</tr>	
				<tr>
					<td>
						<?php
							echo form_textarea(array(
							"name"=>"descricao",
							"id"=>"descricao",
							"class"=>"form-control",
							"type"=>"text",
							"value" => set_value("descricao","")));	
							echo form_error("descricao");	
						?>
					</td>
				</div>
				</tr>
	<tr>
		<div class = "form-group col-md-6">
				<td>
					<?php
						echo form_button(array(
					"class"=>"btn btn-primary",
					"content"=>"Cadastrar",
					"type"=>"submit"));
						echo form_close();?>
				 <?=anchor("controleTipo/voltar/","Voltar", array("class" => "btn btn-danger"));?>
				</div>
				</td>
			</div>
			</tr>	
		</div>
<? include_once('rodape.php');?>