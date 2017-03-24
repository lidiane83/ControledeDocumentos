<?php include_once("cabecalho.php")?>

<body>
    <div class="container">
        <table class="table">
		 <?=anchor("controleFuncao/voltar/","Voltar", array("class" => "btn btn-default"), "onclick=\"return confirm('Deseja sair?')\"");?>
            <tr bgcolor = "BEC8DF">
                <td>Número Protocolo</td>   
				<td>DataHora</td>   
                <td>Usuario</td>
                <td>Opção</td>
			</tr>
			<?php foreach($dados as $dados) : ?>
            <tr>
				<td><?php echo $dados['numeroprotocolo'];?></td>
                <td><?php echo $dados['datahora'];?></td>
				<td><?php echo $dados['usuario'];?></td>	              	 			 
                <td> <?= anchor("controleDocumento/editarDocumentoRegistro?id={$dados['id']}","Registrar", array("class" => "btn btn-warning"))?>
				</td>
			</tr>
       		 <?php endforeach ?>
	      </table>
		 
        </body>
<?php include_once("rodape.php")?>