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
              <?php 

                /* essa é uma variavel de idendificação do usuário a ser editado
                * essa variavel recebe o valor por meio da url, 
                * já o segment eu não faço a minima ideia mas ta funcionando */
                $iduser = $this->uri->segment(3);

                /* se o cara tentar acessar aluno/editar sem enviar informação, ele é redirecionado para a tela
                * de alunos cadastrados no sistema */
                if($iduser == NULL){
                  redirect('aluno/cadastrados');
                }

                /* a variavel query é executada aqui,
                * chama o model Aluno_model,
                * chama a função get_byid( ) - passa a variavel de identificação do usuário a ser editado
                * o row pega a linha que está retornando do Aluno_model */ 
                $query = $this->Aluno_model->get_byid($iduser)->row();

              ?>
                  

            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title"><?php echo $query->nome ?></h3>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-3 col-lg-3 " align="center">
                    <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> 
                  </div>                

                  <div class=" col-md-9 col-lg-9 "> 
                    <table class="table table-user-information">
                      <tbody>
                        <tr>
                          <td>Código:</td>
                          <td><?php echo $query->codigo ?></td>
                        </tr>                       
                        <tr>
                          <td>Data de Nascimento:</td>
                          <td><?php echo $query->data_nasc ?></td>
                        </tr>                   
                        <tr>
                        <tr>
                          <td>Sexo:</td>
                          <td><?php echo $query->sexo ?></td>
                        </tr>
                        <tr>
                          <td>Curso:</td>
                          <td><?php echo $query->curso ?></td>
                        </tr>
                        <tr>
                          <td>Turma:</td>
                          <td><?php echo $query->turma; echo '  -  '; echo $query->turno; ?></a></td>
                        </tr>
                        <tr>
                          <td>Email:</td>
                          <td><?php echo $query->email; ?></td>                         
                        </tr>  
                        <tr>
                          <td>Observações:</td>
                          <td><?php echo $query->observacoes ?></td>
                        </tr>                   
                      </tbody>
                    </table>
                    
                    <a href="#" class="btn btn-primary">Enviar Mensagem</a>
                    
                  </div>
                </div>
              </div>

              <div class="panel-footer">
                <a href="#" class="btn btn-default fa fa-envelope-o">Enviar Mensagem</a>
                <a href="#" class="btn btn-default fa fa-trophy">Nova Recomendação</a>
                <span class="pull-right">
                  <a href="#" class="btn btn-primary fa fa-pencil-square-o">Editar</a>
                  <a href="#" class="btn btn-danger fa fa-trash-o">Excluir</a>
                </span>
              </div>
            
          </div>


              

            </div><!-- /.col-md-12 -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->