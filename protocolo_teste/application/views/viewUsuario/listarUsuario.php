<?php include_once('cabecalho.php');?>
  
  <?php echo form_open("ControleUsuario/atualizarUsuario");?>
  <div class="form-group">
<tr>
	<div class = "row">
		<div class = "form-group col-md-6">
						<td>
							<?php
								$atributos = (array("style"=>"color:#696969"));
								echo form_label("Nome completo","nome",$atributos);
							?>
						</td>	
					</tr>		
					<tr>
					<td>
						<input type="hidden" name="id" value="<?php echo $dados['id'];?>" class="form-control" id = "id"/>
						<input type="text" name="nome" value="<?php echo $dados['Nome'];?>" class="form-control" id = "nome"/>	
					</td>
					</div>
					</tr>

				<tr>
					<div class = "form-group col-md-4">
					<td>
						<?php
							$atributos = (array("style"=>"color:#696969"));
							echo form_label("Matrícula", "matricula", $atributos);
						?>
					</td>
				</tr>	
				<tr>
					<td>
						<input type="text" name="matricula" value="<?php echo $dados['matricula'];?>" class="form-control" id = "matricula"/>
					</td>
				</div>
				</tr>
					<tr>
						<div class = "form-group col-md-2">
					<td>
						<?php
							$atributos = (array("style"=>"color:#696969"));
							echo form_label("Senha", "senha", $atributos);
						?>
					</td>
				</tr>	
			<tr>
				
					<td>
						<input type="text" name="senha" class="form-control" id = "senha"/>
					</td>
				</div>
				</tr>
				<tr>
		<div class = "form-group col-md-4">
					<td class = "form-control">Setor</td>
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
    </div>
    </td>
	</tr>
				<tr>
					<div class = "form-group col-md-4">
					<td class = "form-control">Perfil</td>
				
    <td>
        <select name="id_perfil" class = "form-control">
        <?php foreach($perfil as $perfil) : 
			 $essaEhOPerfil = $dados['id_perfil'] == $perfil['id'];
                $selecao = $essaEhOPerfil ? "selected='selected'" : "";
		?>
		<option value="<?=$perfil['id']?>" <?=$selecao?>>
                    <?=$perfil['nome']?>
            </option>
        <?php endforeach ?>
        </select>
    </div>
    </td>
	</tr>
	<tr>
		<div class = "form-group col-md-4">
			<td class = "form-control">Função</td>
				
    <td>
        <select name="id_funcao" class = "form-control">
        <?php foreach($funcao as $funcao) : 
			 $essaEhOfuncao = $dados['id_funcao'] == $funcao['id'];
                $selecao = $essaEhOfuncao ? "selected='selected'" : "";
		?>
		<option value="<?=$funcao['id']?>" <?=$selecao?>>
                    <?=$funcao['nome']?>
            </option>
        <?php endforeach ?>
        </select>
    </div>
    </td>
	</tr>
	
			<tr>
				<div class = "form-group col-md-6">
				<td>
					<?php
						echo form_button(array(
					"class"=>"btn btn-primary",
					"content"=>"Atualizar",
					"type"=>"submit"));
					echo form_close();
					?>
					<?=anchor("ControleUsuario/voltar/","Voltar", array("class" => "btn btn-default active"));?>

				</td>
			</div>
		</tr>
			
</div>
	</tr>

</div>

<?php include_once("rodape.php");?>