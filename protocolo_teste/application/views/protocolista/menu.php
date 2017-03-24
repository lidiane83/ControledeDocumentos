<!--">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<div class = "row">
	<div class = "span12">
		<ul class = "nav nav-tabs">
			<li><a class="dropdown-toggle" data-toggle = "dropdown" role = "button" aria-expanded=" false" href="#">Protocolo <span class = "caret"> </span></a></li>
			<li><a class="dropdown-toggle" data-toggle = "dropdown" role = "button" aria-expanded=" false" href="#">Usuário<span class = "caret"> </span></a></li>
			<li><a class="dropdown-toggle" data-toggle = "dropdown" role = "button" aria-expanded=" false" href="#">Função<span class = "caret"> </span></a></li>
				<ul class="dropdown-menu" role="menu"><li></li></ul>
			<li><a class="dropdown-toggle" data-toggle = "dropdown" role = "button" aria-expanded=" false" href="#">Setor<span class = "caret"> </span></a></li>
			<li><a class="dropdown-toggle" data-toggle = "dropdown" role = "button" aria-expanded=" false" href="#">Tipo de Documento<span class = "caret"> </span></a></li>
			<li><a class="dropdown-toggle" data-toggle = "dropdown" role = "button" aria-expanded=" false" href="#">Pesquisar Protocolo<span class = "caret"> </span></a></li>
			<li><a class="dropdown-toggle" data-toggle = "dropdown" role = "button" aria-expanded=" false" href="#">Registrar Documento<span class = "caret"> </span></a></li>
			<li><a class="dropdown-toggle" data-toggle = "dropdown" role = "button" aria-expanded=" false" href="#">Sair<span class = "caret"> </span></a></li>
		</ul>
</div>-->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel = "stysheet" href="<?=base_url("css/bootstrap.css","css/bootstrap-theme.min.css")?>>
<link href = "css/bootstrap.css" rel= "stylesheet">
</head>
<body>
      			<ul class = "nav navbar-nav">
                    <ol class="breadcrumb">
                     <li ><b>Usuário</b></li>
                     <li><?php echo anchor('ControleUsuario/indexUsuario', 'Cadastrar', array("class" => "btn  btn-default"));?></li>
                    <li><?php echo anchor('ControleUsuario/listarTodos', 'Listar', array("class" => "btn  btn-default"));?></li>
                    </ol>
                    <ol class="breadcrumb">
				    <li><b>Função</b></li>
					<li><?php echo anchor('controleFuncao/indexFuncao', 'Cadastrar',array("class" => "btn  btn-default"));?></li>
					<li><?php echo anchor('controleFuncao/listarFuncao', 'Listar',array("class" => "btn  btn-default"));?></li>
                    </ol>
    <ol class="breadcrumb">                
				    <li><b>Setor</b></li>
					<li><?php echo anchor('controleSetor/indexSetor', 'Cadastrar',array("class" => "btn  btn-default"));?></li>
					<li><?php echo anchor('controleSetor/listarSetor', 'Listar',array("class" => "btn  btn-default"));?></li>
                    </ol>
                    <ol class="breadcrumb">    
				    <li><b>Documento</b></li>
					<li><?php echo anchor('controleDocumento/geraNumero', 'Gerar Protocolo',array("class" => "btn  btn-default"));?></li>
                    <li><?php echo anchor('controleDocumento/buscarDocumento', 'Registrar Documentos',array("class" => "btn  btn-default"));?></li>
			<li><?php echo anchor('controleDocumento/buscarDocumentoDespacho', 'Primeiro Tramite',array("class" => "btn  btn-default"));?></li>
			<li><?php echo anchor('controleDocumento/buscarDocumentoemTramite', 'Listar tramitando',array("class" => "btn  btn-danger"));?></li>
			<li><?php echo anchor('controleDocumento/buscarDocumentoArquivar', 'Listar Arquivados',array("class" => "btn  btn-default"));?></li>
			<li><?php echo anchor('controleDocumento/verificarTramite', 'Visualizar Trâmite',array("class" => "btn  btn-default"));?></li>
                    </ol>
                <ol class="breadcrumb">   
                <li><b>Tipo de Documento</b></li>
             <li><?php echo anchor('controleTipo/indexTipo', 'Cadastrar',array("class" => "btn  btn-default"));?></li>
            <li><?php echo anchor('controleTipo/listarTipo', 'Listar',array("class" => "btn  btn-default"));?></li>
                    </ol>
                   
                        <li> <?= anchor("loginAutenticar/logout","Sair", array("class" => "btn  btn-default"))?> </li>
                </ul>
		
		</div>
	</div>
	</div>
			
    </div>
	
</body>
</html>                                		



