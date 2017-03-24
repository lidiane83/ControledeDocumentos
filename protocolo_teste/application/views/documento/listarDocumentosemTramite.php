<?php include_once("cabecalho.php")?>
<body>
    <div class="container">
        <table class="table">
		 <?=anchor("controleFuncao/voltar/","Voltar", array("class" => "btn btn-default"), "onclick=\"return confirm('Deseja sair?')\"");?>
            <tr bgcolor = "BEC8DF">
		
                <td><b>Número Protocolo</td>   
				<td><b>DataHora</td>
				<td><b>Setor</td>
				<td><b>Tramitar</td>
				<td><b>Arquivar</td>
			</tr>
			<?php foreach($dados as $dados) : ?>
            <tr>
				<td><?php echo $dados['numeroprotocolo'];?></td>
                <td><?php echo $dados['datahora'];?></td>
				<td><?php echo $dados['setor_nome'];?></td>
				<td> <?= anchor("controleDocumento/editarDocumentoDespacho?id={$dados['id']}","Tramitar", array("class" => "btn btn-success"))?>
				</td>
				<td> <?= anchor("controleDocumento/editarDocumentoArquivado?id={$dados['id']}","Arquivar", array("class" => "btn btn-warning"))?>
				</td>
				</tr>
       		 <?php endforeach ?>
	      </table>
		 
        </body>
		
<?php include_once("rodape.php")?>