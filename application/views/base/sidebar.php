<!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">

            <li class="header">Menu principal</li>

            <li class="active treeview">
              <a href="<?php echo site_url('painel/') ?>">
                <i class="fa fa-dashboard"></i> <span>Painel</span>
              </a>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>Alunos</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url('aluno/novo') ?>"><i class="fa fa-plus-circle"></i> Cadastrar Aluno</a></li>
                <li><a href="<?php echo site_url('aluno/cadastrados') ?>"><i class="fa fa-list-alt"></i> Alunos Cadastrados</a></li>
                <li><a href="<?php echo site_url('aluno/advertencia') ?>"><i class="fa fa-warning"></i> Cadastrar Advertência</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i>
                <span>Funcionários</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url('funcionario/novo') ?>"><i class="fa fa-plus-circle"></i> Cadastrar Funcionário</a></li>
                <li><a href="#"><i class="fa fa-list-alt"></i> Funcionários Cadastrados</a></li>
                <li><a href="#"><i class="fa fa-warning"></i> Cadastrar Advertência</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-star-o"></i>
                <span>Conquistas</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-trophy"></i> Medalhas</a></li>
                <li><a href="#"><i class="fa fa-heart"></i> Elogios</a></li>
                <li><a href="#"><i class="fa fa-graduation-cap"></i> Recomendações</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-gamepad"></i>
                <span>Missões</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-newspaper-o"></i> Provas</a></li>
                <li><a href="#"><i class="fa fa-pencil"></i> Exercicios</a></li>
                <li><a href="#"><i class="fa fa-pencil-square-o"></i> Atividade</a></li>
                <li><a href="#"><i class="fa fa-fighter-jet"></i> Desafios</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-bar-chart"></i>
                <span>Relatórios</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-bar-chart"></i> Alunos</a></li>
                <li><a href="#"><i class="fa fa-bar-chart"></i> Funcionários</a></li>
                <li><a href="#"><i class="fa fa-bar-chart"></i> Outros</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-wrench"></i>
                <span>Configurações</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="#"><i class="fa fa-gear"></i> Cursos <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('curso/novocurso') ?>"><i class="fa fa-plus-circle"></i> Novo Curso</a></li>                    
                    <li><a href="<?php echo site_url('curso/novaturma') ?>"><i class="fa fa-plus-circle"></i> Nova Turma</a></li>
                    <li><a href="#"><i class="fa fa-list-alt"></i> Cursos Cadastrados</a></li>
                    <li><a href="#"><i class="fa fa-list-alt"></i> Turmas Cadastradas</a></li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-gear"></i> Configuração Geral</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Multilevel</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>
            </li>

            <li><a href="#"><i class="fa fa-book"></i> Documentação</a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>