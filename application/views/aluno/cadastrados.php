  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?php echo $ondeesta ?>
            <small><?php echo $descricao ?></small>
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">

          <span class="pull-right btn-tela-al-cad">
            <a href="<?= base_url('aluno/novo/') ?>" class="btn btn-default btn-xs">Novo aluno</a>
          </span>

          <!-- Small boxes (Stat box) -->
          <div class="row">          
      
            <div class="col-md-12">

              <?php 
                  if($this->session->flashdata('edicaook')){
                    echo '<div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">
                        &times;
                      </span>
                    </button>'.$this->session->flashdata('edicaook').'</div>';
                  }
               ?>
              
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Código</th>
                      <th>Nome</th>
                      <th>Curso</th>
                      <th>Turma</th>
                      <th>Turno</th>
                      <th>Email</th>
                      <th class='col-md-1'>Editar</th>
                      <th class='col-md-1'>Excluir</th>
                    </tr>
                  </thead>
                  
                  <?php foreach($alunos as $aluno){ ?>

                      <tbody>
                        <td>
                          <?php echo $aluno->codigo ?>
                        </td>
                        <td>
                          <a href="<?= base_url('aluno/perfil/' . $aluno->id) ?>">
                            <?php echo $aluno->nome ?>
                          </a>
                        </td>
                        <td>
                          <?php echo $aluno->curso ?>
                        </td>
                        <td>
                          <?php echo $aluno->turma ?>                        
                        </td>
                        <td>
                          <?php echo $aluno->turno ?>
                        </td>
                        <td>
                          <?php echo $aluno->email ?>
                        </td>

                        <td>
                          <a href="<?= base_url('aluno/editar/' . $aluno->id) ?>" class="btn btn-primary fa fa-pencil-square">
                            Editar
                          </a>
                        </td>
                        <td>
                          <a href="#" class="btn btn-danger fa fa-trash-o">
                            Excluir
                          </a>
                        </td>
                      </tbody>
                   <?php } ?>    
  

              </table>
            </div>

            

            </div>      

          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->