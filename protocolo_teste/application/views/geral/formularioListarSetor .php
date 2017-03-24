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
            <?php foreach($setores as $setor) : ?>
             <tr>
                <td><?=$setor["nome"] ?></td>
                 <td><?=$setor["descricao"] ?></td>
                <td><?=anchor("controleSetor/removerSetor/" .$setor["id"], "Remover", array("class" => "btn btn-primary"), "onclick=\"return confirm('Confirma a exclusão deste registro?')\"");?>
				</td>
                <td><?= anchor("controleSetor/editarSetor?id={$setor['id']}","Alterar", array("class" => "btn btn-warning"))?></td>
			</tr>
        <?php endforeach ?>
			
	      </table>
		  
        </body>
<?php include_once("rodape.php");?>
