<?php include_once("cabecalho.php")?>

<body>
    <div class="container">
	 <?=anchor("controleFuncao/voltar/","Voltar", array("class" => "btn btn-default"), "onclick=\"return confirm('Deseja sair?')\"");?>
	 <input type="button" name="imprimir" value="Imprimir" onclick="window.print();" class = " btn btn-default">
        <table class="table">
            <tr bgcolor = "BEC8DF">
                <td>Número Protocolo</td>   
				<td>DataHora</td>   
               	<td>Setor </td>
				<td>Motivo </td>
							
		</tr>
		<?php foreach($teste as $teste) : ?>
            <tr>
				<td><?php echo $teste['numeroprotocolo'];?></td>
                <td><?php echo $teste['datahora'];?></td>
				<td><?php echo $teste['setor_nome'];?></td>	
				<td><?php echo $teste['descricao'];?></td>	
			 </tr>
       		<?php endforeach ?>   
	      </table>
		 	
        </body>
<?php include_once("rodape.php")?>