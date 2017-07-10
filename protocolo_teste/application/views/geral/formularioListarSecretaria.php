<?php include_once("cabecalho.php");?>
<body>
    <div class="container">
        <table class="table">
		<?=anchor("controleFuncao/voltar/","Voltar", array("class" => "btn btn-default"), "onclick=\"return confirm('Deseja sair?')\"");?>
            <tr bgcolor = "BEC8DF">
                <td>Nome</td>
                <td>Descrição</td>   
                <td>Remover Registro</td>
                <td>Alterar Registro</td>
            </tr>
            <?php foreach($sec as $secretaria) : ?>
             <tr>
                <td><?=$secretaria["nome"] ?></td>
                 <td><?=$secretaria["descricao"] ?></td>
                <td><?=anchor("controleSecretaria/removerSecretaria/" .$secretaria["id"], "Remover", array("class" => "btn btn-primary"), "onclick=\"return confirm('Confirma a exclusão deste registro?')\"");?>
				</td>
                <td><?= anchor("controleSecretaria/editarSecretaria?id={$secretaria['id']}","Alterar", array("class" => "btn btn-warning"))?></td>
			</tr>
        <?php endforeach ?>
			
	      </table>
		  
        </body>
<?php include_once("rodape.php");?>
