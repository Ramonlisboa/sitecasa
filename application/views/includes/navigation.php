 <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=base_url() ?>">Administração do Site da Casa do Autista</a>
                <ul class="nav navbar-nav ">
                    <li class="active">
                        <a href='<?php echo site_url('admin/')?>'><i class="fa fa-fw fa-dashboard"></i> Home</a> 
                    </li>
                    <li>
                    <a href='<?php echo site_url('admin/menu_gerencia')?>'><i class="fa fa-fw fa-list"></i>     Menu</a> 
                    </li>
                    <li>
                        <a href='<?php echo site_url('admin/postagem_gerencia')?>'><i class="fa fa-fw fa-file"></i> Postagem</a>  
                    </li>                  
                    <li> 
                        <a href="javascript:;" data-toggle="collapse" data-target="#apoio"><i class="fa fa-fw fa-table"></i> Tabelas Apoio <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="apoio" class="collapse">
                            <li>
                                <a href='<?php echo site_url('admin/categoria_gerencia')?>'><i class="fa fa-fw fa-table"></i> Categorias</a>  
                            </li>
                            <li>
                                <a href='<?php echo site_url('admin/tipo_menu_gerencia')?>'><i class="fa fa-fw fa-table"></i>  Tipo Menu</a> 
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Top Menu Items -->
          
       <?php /*     <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                
            </div>
            <!-- /.navbar-collapse --> */?>
        </nav>