<?php include_once('cabecalho.php');?>
	
<div class="card" style="width: 40rem;">
   <div class="card-block">
    <h2 class="card-title">O número do seu processo é:</h2>
    <p class="card-text"><h3><?php 
			  			echo '<br>';
			  			echo $documento;
						echo '<br>';
						echo $datahora;
						echo '<br>';
					?> </h3></p>
   <input type="button" class ="btn btn-primary" name="imprimir" value="Imprimir" onclick="window.print();">
    <?=anchor("controleDocumento/voltar/","Voltar", array("class" => "btn btn-default"));?> 
  </div>
</div>


 
 
