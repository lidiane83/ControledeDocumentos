<! DOCTYPE html >
<?php include_once('cabecalhoLogin.php')?>
<html lang="en">
<head> 
	<meta charset="UTF-8">
			<title>Sistema de Protocolo</title>
			<link rel = "icon" href="imagem/documentos.jpg">
				<link rel = "stysheet" href="<?=base_url("css/bootstrap.css")?>">
		<body >
	<br>
	<br>
	<center>
		<?php echo '<img src="imagem/topo.jpg" height="20%" width="30%"/> ';?>
		
	</center>
		<br>
        <br>
    </head>
	<center>
	<p class ="alert-danger"><?=@$this->session->flashdata('danger');?></p>

				<div class = "container">
					 <div class="row vertical-offset-100">
    					<div class="col-md-4 col-md-offset-4">
    						<div class="panel panel-default">
			  					<div class="panel-heading">
			  						<h3 class="panel-title"><b>SisProcesso</h3>
			  					</div>
			  					<?php echo form_open("loginAutenticar/autenticar");?>
					
			  				<div class="panel-body">
			  					<fieldset>
			    	  	<div class="form-group">
			    		    <?php
								echo form_input(array(
								"name"=>"matricula",
								"id"=>"matricula",
								"class"=>"form-control",
								"placeholder"=>"Matrícula"));
								
							?>
			    		</div>
			    		<div class="form-group">
			    			
						<?php
							echo form_input(array(
							"name"=>"senha",
							"id"=>"senha",
							"class"=>"form-control",
							"type"=>"password",
							"placeholder"=>"senha"));
						?>
		
		    		</div>	
					
					<?php
						echo form_button(array(
					"class"=>"btn btn-lg btn-primary btn-block",
					"content"=>"Login",
					"type"=>"submit"));
						echo form_close();?>
				</fieldset>
			 </div>
			</div>
		</div>
	</div>
</div>
<footer class="footer">
      <div class="container">
        <p class="text-muted">Sistema de controle de documentos</p>
      </div>
    </footer>

<body>
</html>

