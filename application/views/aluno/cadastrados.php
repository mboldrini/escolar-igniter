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
          <!-- Small boxes (Stat box) -->
          <div class="row">
      
            <div class="col-md-12">
              
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Código</th>
                      <th>Nome</th>
                      <th>Data de Nasc.</th>
                      <th>Turma</th>
                      <th>Turno</th>
                      <th>Email</th>
                      <th class='col-md-1'>Editar</th>
                      <th class='col-md-1'>Excluir</th>
                    </tr>
                  </thead>
                  
                  <?php 
                    foreach($alunos as $aluno){
                      echo '<tbody>';

                      echo '<td>'.$aluno->codigo.'</td>';
                      echo '<td><a href="#">'.$aluno->nome.'</a></td>';
                      echo '<td>'.$aluno->data_nasc.'</td>';
                      echo '<td><a href="#">'.$aluno->turma.'</a></td>';
                      echo '<td><a href="#">'.$aluno->codigo.'</a></td>';
                      echo '<td>'.$aluno->email.'</td>';

                      echo '<td>
                        <a href="#" title="Editar">
                          <button type="button" class="btn btn-primary fa fa-pencil-square">Editar</button>
                        </a></td>';
                      echo '<td>
                        <a href="#" title="Excluir">
                          <button type="button" class="btn btn-danger fa fa-trash-o">Excluir</button>
                        </a></td>';


                      echo '</tbody>';
                    }
                  ?>

              </table>
            </div>

            

            </div>      

          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->