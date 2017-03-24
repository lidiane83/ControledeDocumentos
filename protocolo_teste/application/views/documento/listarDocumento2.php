<?php include_once("cabecalho.php")?>

<body>
    <div class="container">
        <table class="table">
            <tr bgcolor = "BEC8DF">
                <td>Número Protocolo</td>   
				<td>DataHora</td>   
                <td>Usuario</td>
				
		</tr>
            <tr>
				<td><?php echo $dados['numeroprotocolo'];?></td>
                <td><?php echo $dados['datahora'];?></td>
				<td><?php echo $dados['usuario'];?></td>
				                	 			 
                <td><?= anchor("controleDocumento/editarDocumentoTramitar?id={$dados['id']}","Tramitar", array("class" => "btn btn-warning"))?></td>
			</tr>
       		
	      </table>
		  <?=anchor("controleFuncao/voltar/","Voltar", array("class" => "btn btn-default"), "onclick=\"return confirm('Deseja sair?')\"");?>
        </body>
<?php include_once("rodape.php")?>