<!DOCTYPE HTML>
<html lang="pt-br">
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset ="utf-8">
		<title>Sistema de protocolo</title>
        <link rel = "icon" href="imagem/documentos.jpg">
        <link rel="stylesheet" href="<?php echo base_url().'/css/bootstrap.min.css'?>">
		<link rel= "stylesheet" type = "text/css" href="<?php echo base_url().'css/bootstrap.css'?>"/>
		<link rel= "stylesheet" type = "text/css" href="<?php echo base_url().'css/meuestilo.css'?>"/>
		<script src="<?php echo base_url().'js/jquery-3.1.1.min.js'?>"></script>
  		<script src="<?php echo base_url().'js/bootstrap.min.js'?>"></script>
</head>
<body>
<nav class="navbar navbar-inverse"style ='background-color: #000080;'>
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#">Início</a></li>
        <li><a href="#">Sobre</a></li>
        <li><a href="#">Contato</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="<?=site_url('ControleUsuario/alterarSenha');?>"><span class="glyphicon glyphicon-user
glyphicon "></span> Alterar Senha</a></li>
      	<li><a href="<?=site_url('loginAutenticar/logout');?>"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
      </ul>
    </div>
  </div>
</nav>





  
  
 
  
