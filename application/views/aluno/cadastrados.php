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
                      <th>Idade</th>
                      <th>Turma</th>
                      <th>Turno</th>
                      <th>Email</th>
                      <th>Editar</th>
                      <th>Excluir</th>
                    </tr>
                  </thead>
                  
                  <?php 
                    foreach($alunos as $aluno){
                      echo '<tbody>';

                      echo '<td><a href="#">'.$aluno->codigo.'</a></td>';
                      echo '<td><a href="#">'.$aluno->nome.'</a></td>';
                      echo '<td><a href="#">'.$aluno->codigo.'</a></td>';
                      echo '<td><a href="#">'.$aluno->turma.'</a></td>';
                      echo '<td><a href="#">'.$aluno->codigo.'</a></td>';
                      echo '<td><a href="#">'.$aluno->email.'</a></td>';

                      echo '<td><a href="#">EDITAR</a></td>';
                      echo '<td><a href="#">EXCLUIR</a></td>';


                      echo '</tbody>';
                    }
                  ?>

              </table>
            </div>

            

            </div>      

          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->