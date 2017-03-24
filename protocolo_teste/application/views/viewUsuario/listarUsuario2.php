<?php include_once("cabecalho.php")?>

<body>
    <div class="container">
        <table class="table">
            <?=anchor("controleFuncao/voltar/","Voltar", array("class" => "btn btn-default"), "onclick=\"return confirm('Deseja sair?')\"");?>
            <tr bgcolor = "BEC8DF">
                <td>Nome</td>
                <td>Matrícula</td>   
                <td>Setor</td>
				<td>Perfil</td>
				<td>funcao</td>
				<td>Remover</td>
				<td>Alterar</td
            </tr>
            <tr>
             <?php foreach($usuario as $dados) : ?>
                <td><?php echo $dados['Nome'];?></td>
                 <td><?php echo $dados['matricula'];?></td>
				 <td><?php echo $dados['nome_setor'];?></td>
				 <td><?php echo $dados['nome_perfil'];?></td>
				<td><?php echo $dados['nome_funcao'];?></td>
				<td><?=anchor("ControleUsuario/removerUsuario/".$dados["id"], "Remover", array("class" => "btn btn-success"), "onclick=\"return confirm('Confirma a exclusão deste registro?')\"");?>
				</td>
                <td><?= anchor("ControleUsuario/editarUsuario?id={$dados['id']}","Alterar", array("class" => "btn btn-warning"))?></td>
			</tr>
       	<?php endforeach ?>	
	      </table>
		  
        </body>
<?php include_once("rodape.php")?>