<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <!-- Left column -->
            <ul class="nav nav-stacked">
                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu"><span class="glyphicon glyphicon-plus"></span> Cadastro<i class="glyphicon glyphicon-chevron-right"></i></a>
                    <ul class="nav nav-stacked collapse " id="userMenu">
                        <li><?php echo anchor('ControleUsuario/indexUsuario', 'Novo Usuário');?></li>
                        <li class="active"><?php echo anchor('controleTipo/indexTipo', 'Novo documento');?></li>
                        <li><?php echo anchor('controleSetor/indexSetor', 'Novo setor');?></li>
                        <li><?php echo anchor('controleFuncao/indexFuncao', 'Nova Função');?></li>
                        <li><?php echo anchor('controleSecretaria/indexSecretaria', 'Nova Secretaria');?></li>
                    </ul> 
                    <ul> <hr> </ul>   
                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#menu2"> <span class="glyphicon glyphicon-search"></span> Pesquisas<i class="glyphicon glyphicon-chevron-right"></i></a>
                    <ul class="nav nav-stacked collapse" id="menu2">
                        <li><?php echo anchor('controleTipo/listarTipo', 'Listar Tipos');?>
                        </li>
                        <li><?php echo anchor('controleSetor/listarSetor', 'Listar Setores');?>
                        </li>
                        <li><?php echo anchor('controleFuncao/listarFuncao', 'Listar Função');?>

                        </li>
                         <li><?php echo anchor('controleSecretaria/listarSecretaria', 'Listar Secretarias');?>
                          
                        </li>
                    </ul>
                </li>
          <ul> <hr> </ul>   
                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#"> <span class="glyphicon glyphicon-file"></span> Relatórios<i class="glyphicon glyphicon-chevron-right"></i></a>
</div>
 <div class="row">
                <!-- center left-->
    <div class="col-md-6">
<div class="row">
    <hr>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <a href="<?=site_url('controleDocumento/geraNumero');?>">
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Iniciar Processo</div>
                                         <div><span class = "glyphicon glyphicon-flash"></span></div>
                                    </div>
                                </div>
                            </div>
                            </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <a href="<?=site_url('controleDocumento/buscarDocumento');?>">
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Inserir informações</div>
                                        <div><span class = "glyphicon glyphicon-pencil"></span></div>
                                    </div>
                                </a>
                                </div>
                            </div>
                            </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <a href="<?=site_url('controleDocumento/buscarDocumentoDespacho');?>">
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Enviar documento</div>
                                        <div><span class = "glyphicon glyphicon-log-out"></span></div>
                                    </div>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
<div class="row">
    <hr>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <a href="<?=site_url('controleDocumento/buscarDocumentoemTramite');?>">
                                    <div class="col-xs-9 text-center"><b>
                                        <div class="huge">Documentos em trâmite</div>
                                        <div><span class = "glyphicon glyphicon-transfer"></span></div>
                                    </div>
                                </a>
                                </div>
                            </b>
                            </div>
                            </div>
                    </div>

        <div class="col-lg-4 col-md-6">
                        <div class="panel panel-info ">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <a href="<?=site_url('controleDocumento/buscarDocumentoArquivar');?>">
                                    <div class="col-xs-9 text-center">
                                        <div class="huge">Documentos Arquivados</div>
                                        <div><span class = "glyphicon glyphicon-folder-close"></span></div>
                                    </div>
                                </a>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-default ">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <a href="<?=site_url('controleDocumento/verificarTramite');?>">
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Verificar andamento</div>
                                        <div><span class = "glyphicon glyphicon-th-list"></span></div>
                                    </div>
                                </a>
                                <br>
                                <br>
                                </div>
                            </div>
                            
                        </div>
                    </div>
    
    

    </div>
                <!-- /.row -->


                    
                    
                  
</div>


