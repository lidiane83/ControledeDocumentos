
<?php include_once("cabecalho.php");?>
<?php
    foreach ($funcoes as $funcao):
        $link = anchor("controleFuncao/removerFuncao/" .$funcao["id"], "[ X ]", "onclick=\"return confirm('Confirma a exclusão deste registro?')\"");
        $link .= " - ";
        $link .= anchor("controleFuncao/removerFuncao/". $funcao["id"]," <strong>" . $funcao["nome"] ."</strong>,".$funcao["descricao"]);
        $ul[] = $link;
		echo ($link);
	endforeach;
 ?>

 
<?php include_once("rodape.php");?>
