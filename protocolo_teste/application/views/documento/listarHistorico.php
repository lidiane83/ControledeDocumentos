<?php include_once("cabecalho.php")?>

<body>
<h3> Tramitação-internos </h3>
    <div class="container">
	 <?=anchor("controleDocumento/voltar/","Voltar", array("class" => "btn btn-danger"), "onclick=\"return confirm('Deseja sair?')\"");?>
	 	<input type="button" name="imprimir" value="Imprimir" onclick="window.print();" class = " btn btn-warning">
        
        
        
<div class="panel panel-default">
  <div class="panel-heading">
      <h2 class="panel-title" ><b>Numero do protocolo: <?php echo $documento['numeroprotocolo'];?> </b></h2>

<br>
<ul class="list-group">
    <li class="list-group-item"><b>Tipo: </b><?php echo $documento['nometipo'];?></li>
    <li class="list-group-item"><b>Origem: </b><?php echo $documento['Origem'];?></li>
    <li class="list-group-item"><b>Município: </b><?php echo $documento['municipio'];?> </li>
    <li class="list-group-item"><b>Estado: </b><?php echo $documento['estado'];?></li>
    <li class="list-group-item"><b>Data do documento: </b><?php echo $documento['data']?></li>
    <li class="list-group-item"><b>Interessados: </b><?php echo $documento['interessados'];?></li>
    <li class="list-group-item"><b>Folhas: </b><?php echo $documento['folhas'];?></li>
    <li class="list-group-item"><b>Volume: </b><?php echo $documento['volumes'];?></li>
    <li class="list-group-item"><b>Forma de remessa: </b><?php echo $documento['formaremessa'];?></li>
   <?php echo form_open_multipart("controleDocumento/download");?>
    <input type='hidden' name='url' value = "<?php echo $documento['anexo'];?>" class = "form-control" id = "id">
<li class="list-group-item">
 <?php       echo form_button(array(
          "class"=>"btn btn-primary active",
          "content"=>"download",
          "type"=>"submit"));
          echo form_close();
          ?>
   </li>
      </ul>
      <table class="table">
		<tr class="danger">
			 <td><b> Data/hora:</b></td>
            <td><b> Usuário Origem:</b></td>
			 <td><b>Setor destino:</b></td>
			 <td><b>Situação:</b></td>
            <td><b>Observação:</b></td>
			 	</tr>
			 <?php foreach($dados as $dados) : ?>
			<tr>
				<td><?php echo $dados['datahora'];?></td>
                <td><?php echo $dados['usuario'];?></td>
               	<td><?php echo $dados['nome']?></td>	
				<td><?php echo $dados['assunto'];?></td>
                <td><?php echo $dados['descricao'];?></td>
			<?php endforeach ?>             		
	    </table>
		
		  </body>
<?php include_once("rodape.php")?>