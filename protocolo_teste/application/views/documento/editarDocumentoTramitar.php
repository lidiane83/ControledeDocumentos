<?php include_once('cabecalho.php');?>
  
  <?php echo form_open("controleDocumento/atualizarDocumento");?>
	<tr>
					<td>
						<?php
							$atributos = (array("style"=>"color:#696969"));
							echo form_label("Número protocolo :", "numero", $atributos);
						?>
					</td>
					
					<td><?php echo $dados['numeroprotocolo'];?></td>
						<td>
								<input type='hidden' name='numeroprotocolo' value= "<?php echo $dados['numeroprotocolo'];?>" readonly="readonly" class = "form-control" id = "numeroprotocolo">
						</td>	
					<td>
						<?php
							$atributos = (array("style"=>"color:#696969"));
							echo form_label("Origem :", "origem", $atributos);
						?>
					</td>
				
				<td>
						<?php echo $dados['Origem'];?>
						<input type='hidden' name='origem' value= "<?php echo $dados['Origem'];?>"class = "form-control" id = "Origem">
						
				</td>
					<td>
						<?php
							$atributos = (array("style"=>"color:#696969"));
							echo form_label("Area", "area", $atributos);
						?>
					</td>
						<td><?php echo $dados['area'];?></td>
							<td>
								<input type='hidden' name='area' value= "<?php echo $dados['area'];?>"  class = "form-control" id = "area" readonly="readonly">
							</td>	
					</tr>		
					
	
	<tr> <br> </tr>				
					<tr>
					<td>
						<input type="hidden" name="id" value="<?php echo $dados['id'];?>" class="form-control" id = "id"/>
					</td>
					</tr>
<tr>
					<br>
					<td>
						<?php
							$atributos = (array("style"=>"color:#696969"));
							echo form_label("Órgão de procedencia", "orgao", $atributos);
						?>
					</td>
					<td><?php echo $dados['orgao'];?></td>
					<td>
						<input type='hidden' name='orgao' value= "<?php echo $dados['orgao'];?>"  class = "form-control" id = "orgao" readonly="readonly">
					</td>
					<br>
					<td class = "form-control">Tipo de Documento</td>
				
    <td>
        <select name="id_tipo" class = "form-control">
        <?php foreach($tipo as $tipo) : 
			 $essaEhOfuncao = $dados['id_tipo'] == $tipo['id'];
                $selecao = $essaEhOfuncao ? "selected='selected'" : "";
		?>
		<option value="<?=$tipo['id']?>" <?=$selecao?> readonly="readonly">
                    <?=$tipo['nome']?>
            </option>
        <?php endforeach ?>
        </select>
					
</tr>		
<tr>
<br>
<br>
	<td>
						<?php
							$atributos = (array("style"=>"color:#696969"));
							echo form_label("Municipio", "municipio", $atributos);
						?>
	</td>
			<td><?php echo $dados['municipio'];?></td>	
	<tr>
						<td>
								<input type='hidden' name='municipio' value= "<?php echo $dados['municipio'];?>"  class = "form-control" id = "municipio" readonly="readonly">
								<br>
							</td>	
					</tr>	
<td>
						<?php
							$atributos = (array("style"=>"color:#696969"));
							echo form_label("Folhas", "folhas", $atributos);
						?>
						<?php echo $dados['folhas'];?>
					</td>
						<td>
								<input type='hidden' name='folhas' value= "<?php echo $dados['folhas'];?>"  class = "form-control" id = "folhas" readonly="readonly">
								
							</td>	
					<br>
<td>
						<?php
							$atributos = (array("style"=>"color:#696969"));
							echo form_label("Apensos", "apensos", $atributos);
						?>
						<?php echo $dados['apensos'];?>
					</td>
							<td>
								<input type='hidden' name='apensos' value= "<?php echo $dados['apensos'];?>"  class = "form-control" id = "apensos" readonly="readonly">
							</td>	
							<br>
					</tr>		
					<td>
						<?php
							$atributos = (array("style"=>"color:#696969"));
							echo form_label("Anexos", "anexos", $atributos);
						?>
						<?php echo $dados['anexos'];?>
					</td>
						<td>
								<input type='hidden' name='anexos' value= "<?php echo $dados['anexos'];?>"  class = "form-control" id = "anexos" readonly="readonly">
							</td>	
					<br>		
				<td>
						<?php
							$atributos = (array("style"=>"color:#696969"));
							echo form_label("Volume", "volume", $atributos);
						?>
						<?php echo $dados['volumes'];?>
					</td>
				</tr>	
	<tr>
						<td>
								<input type='hidden' name='volumes' value= "<?php echo $dados['volumes'];?>"  class = "form-control" id = "volumes" readonly="readonly">
							</td>	
					<br>		
					<td>
						<?php
							$atributos = (array("style"=>"color:#696969"));
							echo form_label("Forma de remessa", "formaremessa", $atributos);
						?>
						<?php echo $dados['formaremessa'];?>
					</td>
				</tr>	
	<tr>
						<td>
								<input type='hidden' name='formaremessa' value= "<?php echo $dados['formaremessa'];?>"  class = "form-control" id = "formaremessa" readonly="readonly">
							</td>	
					<br>
				
	</tr>
						<tr>
					<td>
						<?php
							$atributos = (array("style"=>"color:#696969"));
							echo form_label("Setor de destino", "setor", $atributos);
						?>
					</td>
				</tr>	
	<tr>
		<td>
		 <select name="id_setor" class = "form-control">
        <?php foreach($setor as $setor) : 
			 $essaEhOSetor = $dados['id_setor'] == $setor['id'];
                $selecao = $essaEhOSetor ? "selected='selected'" : "";
		?>
		<option value="<?=$setor['id']?>" <?=$selecao?>>
                    <?=$setor['nome']?>
            </option>
        <?php endforeach ?>
        </select>
		<?php echo form_error("id_setor");?>
    </td>
	</tr>
					<tr>
	<tr>
					<td>
						<?php
							$atributos = (array("style"=>"color:#696969"));
							echo form_label("Finalidade", "assunto", $atributos);
						?>
					</td>
				</tr>	
	<tr>
						<td>
								<input type='text' name='assunto' value= "<?php echo $dados['assunto'];?>"  class = "form-control" id = "assunto">
								<?php echo form_error("assunto");?>
							</td>	
					</tr>		
					
					<td>
						<?php
							$atributos = (array("style"=>"color:#696969"));
							echo form_label("Documento de Origem", "origem", $atributos);
						?>
					</td>
				</tr>	
	<tr>
						<td>
								<input type='text' name='origem' value= "<?php echo $dados['documentoOrigem'];?>"  class = "form-control" id = "documentoOrigem" readonly="readonly">
								<?php echo form_error("documentoOrigem");?>
							
							</td>	
					</tr>		
					
    </td>
	</tr>
	<tr>
					<td>
						<?php
							$atributos = (array("style"=>"color:#696969"));
							echo form_label("Observação", "descricao", $atributos);
						?>
						<?php echo form_error("descricao");?>
					</td>
				</tr>	
				
	<td>
						<?php
							$atributos = (array("style"=>"color:#696969"));
							echo form_label("Observação", "observacao", $atributos);
						?>
					</td>
					<td>
						<textarea class="form-control" name="descricao" id="descricao"><?=$dados['descricao']?></textarea>
								
					</td>
				</tr>
				<tr>
				<br>
				</tr>
					<tr>
						<td>
							<?php
								$atributos = (array("style"=>"color:#696969"));
								echo form_label("Interessados", "descricao", $atributos);?>
								<?=$dados['interessados']?>
					
							<textarea type = "hidden" class="form-control" name="interessados" id="interessados" ><?=$dados['interessados']?></textarea>
						
					</td>
				</tr>		
			<tr>
				<td>
				<td>
				<br>
				<br>
				<td>
					<?php
						echo form_button(array(
					"class"=>"btn btn-default btn-lg active",
					"content"=>"Registrar",
					"type"=>"submit"));
					echo form_close();
					?></td>
				<td></td>
	</tr>
	<br>
<?=anchor("controleDocumento/voltar/","Voltar", array("class" => "btn btn-default btn-lg active"), "onclick=\"return confirm('Deseja sair?')\"");?>


<?php include_once("rodape.php");?>