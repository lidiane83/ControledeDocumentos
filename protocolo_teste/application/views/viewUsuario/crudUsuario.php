<?php include_once('cabecalho.php');?>

<?php echo form_open("ControleUsuario/buscarUsuario");?>
				<tr>
						<td>
							<?php
								$atributos = (array("style"=>"color:#696969"));
								echo form_label("Pesquisa por","pesquisa",$atributos);
							?>
						</td>	
					</tr>		
				
				
				<tr>
						<td>
							<?php
								$atributos = (array("style"=>"color:#696969"));
								echo form_label("matrícula:","matricula",$atributos);
							?>
						</td>	
					</tr>		
					<tr>
						<td>
							<?php
								echo form_input(array(
								"name"=>"matricula",
								"id"=>"matricula",
								"class"=>"form-control"));
							?>
						</td>
					</tr>
					<br>
					<br>
					<tr>
					<td>
						<?php
							echo form_button(array(
						"class"=>"btn btn-default btn-lg active",
						"content"=>"Buscar",
						"type"=>"submit"));
							echo form_close();?>
					</td>
					<tr>
					<br>
					<td><?=anchor("ControleUsuario/voltar/","Voltar", array("class" => "btn btn-default btn-lg active"), "onclick=\"return confirm('Deseja sair?')\"");?></td>
					</tr>
					
					</td>
					</tr>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<?php include_once('rodape.php');?>
	