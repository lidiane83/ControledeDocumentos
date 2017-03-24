<?php include_once('cabecalho.php');?>

<?php echo form_open("controleDocumento/buscarDocumentoTramite");?>
				<tr>
						<td>
							<?php
								$atributos = (array("style"=>"color:#696969"));
								echo form_label("Informe o ","pesquisa",$atributos);
							?>
						</td>	
					</tr>		
				
				
				<tr>
						<td>
							<?php
								$atributos = (array("style"=>"color:#696969"));
								echo form_label("número protocolo :","numeroProtocolo",$atributos);
							?>
						</td>	
					</tr>		
					<tr>
						<td>
							<?php
								echo form_input(array(
								"name"=>"protocolo",
								"id"=>"protocolo",
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
					<td><?=anchor("controleDocumento/voltar/","Voltar", array("class" => "btn btn-default btn-lg active"), "onclick=\"return confirm('Deseja sair?')\"");?></td>
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
	