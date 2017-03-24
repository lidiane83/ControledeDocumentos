
<?php include_once('cabecalho.php');?>
<?php echo form_open("controleDocumento/Receber");?>

<table class="table table-hover">
<tr><td class="danger"><b>Esta ação só pode ser executada se você receber o documento em mãos!</b></td></tr>
</table>


<div class="panel panel-default">
  <div class="panel-heading">

<h2 class="panel-title" ><b>Numero do protocolo: <?php echo $dados['numeroprotocolo'];?> 
<li class="list-group-item"><b>finalidade: </b><?php echo $dados['assunto'];?></li>
</b></h2>
<br>      
<ul class="list-group">
  <li class="list-group-item"><b>Tipo de documento: </b><?php echo $dados['tipo_nome'];?></li>
  <li class="list-group-item"><b>Numero do documento: </b><?php echo $dados['numeroDocumento'];?></li>
  <li class="list-group-item"><b>Origem: </b><?php echo $dados['Origem'];?></li>
  <li class="list-group-item"><b>Município: </b><?php echo $dados['municipio'];?> </li>
  <li class="list-group-item"><b>Estado: </b><?php echo $dados['estado'];?></li>
  <li class="list-group-item"><b>Data do documento: </b><?php echo $dados['data']?></li>
   <li class="list-group-item"><b>Interessados: </b><?php echo $dados['interessados'];?></li>
   <li class="list-group-item"><b>Folhas: </b><?php echo $dados['folhas'];?></li>
   <li class="list-group-item"><b>Volume: </b><?php echo $dados['volumes'];?></li>
    <li class="list-group-item"><b>Forma de remessa: </b><?php echo $dados['formaremessa'];?></li>

<input type='hidden' name='id_setor' value = "<?php echo $dados['id_setor'];?>" class = "form-control" id = "id_setor">
<input type='hidden' name='id' value = "<?php echo $dados['id'];?>" class = "form-control" id = "id">
<input type='hidden' name='assunto' value = "<?php echo $dados['assunto'];?>" class = "form-control" id = "assunto">
<input type='hidden' name='numeroprotocolo' value = "<?php echo $dados['numeroprotocolo'];?>" class = "form-control" id = "numeroprotocolo">
<center>
<?php       echo form_button(array(
          "class"=>"btn btn-danger btn-lg active",
          "content"=>"Receber",
          "type"=>"submit"));
          echo form_close();
          ?>
</li>
</center>
<li class="list-group-item"><?=anchor("controleDocumento/voltar/","Voltar", array("class" => "btn btn-default btn-lg active"), "onclick=\"return confirm('Deseja sair?')\"");?> </li>
  </ul>
</div>
