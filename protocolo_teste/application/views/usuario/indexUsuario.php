<?php 	include_once('cabecalhoUsuario.php');
		include_once('menuUsuario.php');?>

<div class="col-sm-8 text-left"> 
      <a class="navbar-brand"><?php echo 'Usuário (a):'.' '.$_SESSION["nome"];?></a>
      <hr>     
    <table class= "table">
        <tr bgcolor = "BEC8DF">
        <td><b>Número Protocolo</td>   
        <td><b>DataHora</td>   
        <td><b>Usuario</td>
        <td><b>Setor</td>
        <td> </td>
        <td> </td>
        <td> </td>
        </tr>
            <?php foreach($dados as $dados) : ?>
            <tr>
                <td><?php echo $dados['numeroprotocolo'];?></td>
                <td><?php echo $dados['datahora'];?></td>
                <td><?php echo $dados['usuario'];?></td>
                <td><?php echo $dados['setor_nome'];?></td>
                <?php if ($dados['recebido']==0){ ?>
  
                <td>
                <?= anchor("controleDocumento/editarDocumentoRecebido?id={$dados['id']}","Receber", array("class" => "btn btn-danger"))?>
                </td>
            <?php }?>

                <?php if ($dados['recebido']==1){ ?>
  
                 <td> <?= anchor("controleDocumento/editarDocumentoDespacho?id={$dados['id']}","Tramitar", array("class" => "btn btn-success"))?>
                </td>
                <td> <?= anchor("controleDocumento/editarDocumentoArquivado?id={$dados['id']}","Arquivar", array("class" => "btn btn-warning"))?>
                </td>
               
                <?php }?>
             <?php endforeach ?>
        </table>
    </div>
	
<br>
<br>	
<?php include_once('rodapeUsuario.php');?>
