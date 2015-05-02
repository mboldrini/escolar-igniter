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

              <?php echo validation_errors(
                  '<div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">
                        &times;
                      </span>
                    </button>'
                ,
                  '</div>'
                ); 
              ?>

              <?php echo form_open("aluno/editar/$iduser")?>
                
              <?php echo form_hidden('idusuario',$query->id);  ?>

                <div class="col-md-8">

                <div class="form-group col-md-12">
                    <label for="codigo"><?php echo form_label('Código:', 'codigo') ?></label>
                    <div class="col-md-4">
                      <?php echo form_input(
                        array(
                          'name'=>'codigo',
                          'type'=>'number',
                          'placeholder'=>'Código do aluno'
                        ),
                        
                        set_value('codigo',$query->codigo),
                          'class="form-control"') 
                      ?>
                    </div>
                  </div>
                
                  <div class="form-group col-md-12">
                    <label for="nome"><?php echo form_label('Nome:', 'lblNome') ?></label>
                    <div class="col-md-8">
                      <?php echo form_input(
                        array(
                          'name'=>'nome',
                          'type'=>'text',
                          'placeholder'=>'Nome do Aluno'
                        ),
                        
                        set_value('nome',$query->nome),
                          'class="form-control"')
                      ?>
                    </div>
                  </div>

                  <div class="form-group col-md-12">
                    <label for="nome"><?php echo form_label('Data de nascimento:', 'data_nasc') ?></label>
                    <div class="col-md-4">
                      <?php echo form_input(
                        array(
                          'name'=>'data_nasc',
                          'type'=>'date'
                        ),
                        
                        set_value('data_nasc',$query->data_nasc),
                          'class="form-control"')
                      ?>
                    </div>
                  </div>

                  <div class="form-group col-md-12">
                    <label for="nome"><?php echo form_label('Sexo:', 'sexo') ?></label>
                    <div class="col-md-4">
                        <select name="sexo" id="sexo" class="form-control">
                          <option value="Masculino">Masculino</option>
                          <option value="Feminino">Feminino</option>
                        </select>
                    </div>
                  </div>

                  <div class="form-group col-md-12">
                    <label for="nome"><?php echo form_label('Curso:', 'curso') ?></label>
                    <div class="col-md-4">
                      <select name="curso" id="curso" class="form-control">
                        <?php foreach ($cursos as $curso) { ?>
                            <option value="<?php echo $curso->curso ?>"><?php echo $curso->curso ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>

                  <div class="form-group col-md-12">
                    <label for="nome"><?php echo form_label('Turma:', 'turma') ?></label>
                    <div class="col-md-8">
                      <?php echo form_input(
                        array(
                          'name'=>'turma',
                          'type'=>'text',
                          'placeholder'=>'Turma'
                        ),

                        set_value('turma',$query->turma),
                          'class="form-control"')
                      ?>
                    </div>
                  </div>

                  <div class="form-group col-md-12">
                    <label for="nome"><?php echo form_label('Turno:', 'turno') ?></label>
                    <div class="col-md-4">
                        <select name="turno" id="turno" class="form-control">
                          <option value="Matutino">Matutino</option>
                          <option value="Vespertino">Vespertino</option>
                          <option value="Noturno">Noturno</option>
                          <option value="Outros">Outros</option>                          
                        </select>
                    </div>
                  </div>

                  <div class="form-group col-md-12">
                    <label for="nome"><?php echo form_label('Email:', 'email') ?></label>
                    <div class="col-md-8">
                      <?php echo form_input(
                        array(
                          'name'=>'email',
                          'type'=>'email',
                          'placeholder'=>'Email do Aluno',                          
                          'readonly'=>'readonly'
                        ),

                        set_value('email',$query->email),
                          'class="form-control"')
                      ?>
                    </div>
                  </div>

                  <div class="form-group col-md-12">
                    <label for="nome"><?php echo form_label('Login:', 'login') ?></label>
                    <div class="col-md-6">
                      <?php echo form_input(
                        array(
                          'name'=>'login',
                          'type'=>'text',
                          'placeholder'=>'Login de acesso do Aluno',                          
                          'readonly'=>'readonly'
                        ),

                        set_value('login',$query->login),
                          'class="form-control"')
                      ?>
                    </div>
                  </div>                 

                  <div class="form-group col-md-12">
                    <label for="nome"><?php echo form_label('Senha:', 'senha') ?></label>
                    <div class="col-md-4">
                      <a class="btn btn-default" href="#" role="button">Trocar Senha</a>
                    </div>
                  </div>

                  <div class="form-group col-md-12">
                    <label for="nome"><?php echo form_label('Observações:', 'observacoes') ?></label>
                    <div class="col-md-8">
                      <?php echo form_textarea(
                        array(
                          'name'=>'observacoes',
                          'type'=>'text-area',
                          'placeholder'=>'Observações'
                        ),

                        set_value('observacoes',$query->observacoes),
                          'class="form-control"')
                      ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class=" col-md-4">
                      <?php echo form_submit('', 'Enviar','class="btn btn-success"') ?>
                    </div>
                  </div>                  

                </div>   

               <?php echo form_close() ?>

            </div><!-- /.col-md-12 -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->