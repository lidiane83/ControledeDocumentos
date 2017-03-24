<?php include_once('cabecalho.php');?>
<?php
	echo form_open("controleSetor/atualizarSetor");?>
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
						<input type="hidden" name="id" value="<?php echo $setor['id'];?>" class="form-control" id = "id"/>
					
					</td>

						<td>
							<input type="text" name="Nome" value="<?php echo $setor['nome'];?>" class="form-control" id = "nome"/>
						</td>
					</div>
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
						<textarea class="form-control" name="descricao" id="descricao"><?=$setor['descricao']?></textarea>
					</td>
				</div>
				</tr>
			<tr> 
				<div class = "form-group col-md-9">
				<td>
							
					<?php
						echo form_button(array(
					"class"=>"btn btn-primary",
					"content"=>"Atualizar",
					"type"=>"submit"));
					echo form_close();
					?>
		<?=anchor("controleFuncao/voltar/","Voltar", array("class" => "btn btn-danger"));?></td>
			</td>
			</div>
		</tr>	
</div>	
<? include_once('rodape.php');?>