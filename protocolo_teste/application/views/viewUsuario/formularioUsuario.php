<?php include_once('cabecalho.php');?>
<?php
	echo form_open("ControleUsuario/novo");?>
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
							
							<?php
								echo form_input(array(
								"name"=>"nome",
								"id"=>"nome",
								"class"=>"form-control",
								"value" => set_value("Nome","")));	
								echo form_error("nome");
							?>
						</div>
					
						</td>
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
						<?php
								echo form_input(array(
								"name"=>"matricula",
								"id"=>"matricula",
								"class"=>"form-control",
								"value" => set_value("matricula","")));	
								echo form_error("matricula");
						?>
					</div>
					</td>
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
						<?php
								echo form_input(array(
								"name"=>"senha",
								"id"=>"senha",
								"class"=>"form-control",
								"value" => set_value("Nome","")));	
								echo form_error("senha");
						?>
					</div>
					</td>
				</tr>
				<tr>
				<div class = "form-group col-md-4">
					<td class = "form-control">Setor</td>
    <td>
        <select name="id_setor" class = "form-control">
        <?php foreach($setor as $setor) : ?>
        <option value="<?=$setor['id']?>"><?=$setor['nome']?></option>
        <?php endforeach ?>
        </select>
    </div>
    </td>
	</tr>
	<tr>
				<div class = "form-group col-md-4">
					<td class = "form-control">Secretaria</td>
    <td>
        <select name="id_secretaria" class = "form-control">
        <?php foreach($sec as $secretaria) : ?>
        <?= var_dump($secretaria['id'])?>
        <option value="<?=$secretaria['id']?>"><?=$secretaria['nome']?></option>
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
        <?php foreach($perfil as $perfil) : ?>
        <option value="<?=$perfil['id']?>"><?=$perfil['nome']?></option>
        <?php endforeach ?>
        </select>
    </div>
    </td>
</tr>
<tr>
	<div class = "form-group col-md-4">
			<td class = "form-control"> <?php $atributos = (array("style"=>"color:#696969"));
									echo form_label("Função", "funcao", $atributos);
								?></td>
		    <td>
		        <select name="id_funcao" class = "form-control">
		        <?php foreach($funcao as $funcao) : ?>
		        <option value="<?=$funcao['id']?>"><?=$funcao['nome']?></option>
		        <?php endforeach ?>
		        </select>
    </div>
    </td>
</tr>
			</td>
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
					<?=anchor("ControleUsuario/voltar/","Voltar", array("class" => "btn btn-danger"));?>				
			</div>
					</td>
				</tr>
	

			<tr>
				<td>
				<td>
				<br>
				<br>
				</td>
					
				</td>
				
			</tr>
</div>


<?php include_once("rodape.php");?>