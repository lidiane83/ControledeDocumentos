    <!--    <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Início <span class="sr-only">(current)</span></a></li>
            <li><?php echo anchor('ControleUsuario/indexUsuario', 'Novo Usuário');?></li>
            <li></li>
            <li><?php echo anchor('controleTipo/indexTipo', 'Tipo de Documento');?></li>
            <li><?php echo anchor('controleTipo/listarTipo', 'Listar Tipos');?></li>
            <li><?php echo anchor('controleSetor/indexSetor', 'Cadastrar Setor');?></li>
            <li><?php echo anchor('controleSetor/listarSetor', 'Listar Setores');?></li>
             <li><?php echo anchor('controleFuncao/indexFuncao', 'Cadastrar Função');?></li>
             <li><?php echo anchor('controleFuncao/listarFuncao', 'Listar Função');?></li> 

          </ul>


      </ul>
    

    
      </ul>
    </li>


        </div>
      </div>-->

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          
        <!--  <p class="text-right"><?php echo 'Usuário (a):'.' '.$_SESSION["nome"];?></p>-->
          
          <div class="row placeholders">
            <div class="col-xs-4 col-sm-3 placeholder">
                <?php echo anchor('controleDocumento/geraNumero', 'Gerar Protocolo',array("class" => "btn  btn-default"));?>
             </div>
             <div class="col-xs-4 col-sm-3 placeholder">
                <?php echo anchor('controleDocumento/buscarDocumento', 'Registrar Documentos',array("class" => "btn  btn-default"));?>
            </div>
            <div class="col-xs-4 col-sm-3 placeholder">
                <?php echo anchor('controleDocumento/buscarDocumentoDespacho', 'Primeiro Tramite',array("class" => "btn  btn-default"));?>
            </div>
            <div class="col-xs-4 col-sm-3 placeholder">
              <?php echo anchor('controleDocumento/buscarDocumentoemTramite', 'Listar tramitando',array("class" => "btn  btn-danger"));?>
            </div>
            <div class="col-xs-4 col-sm-3 placeholder">
              <?php echo anchor('controleDocumento/buscarDocumentoArquivar', 'Listar Arquivados',array("class" => "btn  btn-default"));?>
            </div>
          <div class="col-xs-4 col-sm-3 placeholder">
              <?php echo anchor('controleDocumento/verificarTramite', 'Visualizar Trâmite',array("class" => "btn  btn-default"));?>
          </div>

</div>
          