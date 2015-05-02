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

              <?php 
                  if($this->session->flashdata('cadastrook')){
                    echo '<div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">
                        &times;
                      </span>
                    </button>'.$this->session->flashdata('cadastrook').'</div>';
                  }
               ?>

              <?php echo form_open('aluno/novo')?>

                <div class="col-md-8">

                  <div class="form-group col-md-12">
                    <label for="codigo"><?php echo form_label('Código:', 'codigo') ?></label>
                    <div class="col-md-3">
                      <?php echo form_input(
                        array(
                          'name'=>'codigo',
                          'type'=>'number',
                          'placeholder'=>'Código do aluno'
                        ),
                        
                        set_value('codigo'),
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
                        
                        set_value('nome'),
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
                        
                        set_value('data_nasc'),
                          'class="form-control"')
                      ?>
                    </div>
                  </div>

                  <div class="form-group col-md-12">
                    <label for="nome"><?php echo form_label('Curso:', 'curso') ?></label>
                    <div class="col-md-8">
                      <?php echo form_input(
                        array(
                          'name'=>'curso',
                          'type'=>'text',
                          'placeholder'=>'Curso'),
                            
                        set_value('curso'),
                          'class="form-control"' ) 
                      ?>
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

                        set_value('turma'),
                          'class="form-control"')
                      ?>
                    </div>
                  </div>

                  <div class="form-group col-md-12">
                    <label for="nome"><?php echo form_label('Email:', 'email') ?></label>
                    <div class="col-md-8">
                      <?php echo form_input(
                        array(
                          'name'=>'email',
                          'type'=>'email',
                          'placeholder'=>'Email do Aluno'
                        ),

                        set_value('email'),
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
                          'placeholder'=>'Login de acesso do Aluno'
                        ),

                        set_value('login'),
                          'class="form-control"')
                      ?>
                    </div>
                  </div>                 

                  <div class="form-group col-md-12 has-success">
                    <label for="nome" class='fa fa-check'><?php echo form_label('Senha:', 'senha') ?></label>
                    <div class="col-md-4">
                      <?php echo form_input(
                        array(
                          'name'=>'senha',
                          'type'=>'password',
                          'placeholder'=>'Senha inicial para o usuário'
                        ),

                        set_value('senha'),
                          'class="form-control"')
                      ?>
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

                        set_value('observacoes'),
                          'class="form-control"')
                      ?>
                    </div>
                  </div>

                  <div class="form-group col-md-12">
                    <label for="nome"><?php echo form_label('Nível de acesso:', 'nivel_acesso') ?></label>
                    <div class="col-md-3" fieldset="disabled">
                      <?php echo form_input(
                        array(
                          'name'=>'nivel_acesso',
                          'type'=>'text',
                          'placeholder'=>'Nível de acesso',
                          'value'=>'1',
                          'readonly'=>'readonly'
                        ),

                        set_value('nivel_acesso'),
                          'class="form-control"')
                      ?>
                    </div>
                  </div> 

                  <div class="form-group">
                    <div class="col-md-offset-5 col-md-4">
                      <?php echo form_submit('', 'Enviar','class="btn btn-success"') ?>
                      <?php echo form_submit('', 'Cancelar','class="btn btn-danger"') ?>
                    </div>
                  </div>                  

                </div>   

               <?php echo form_close() ?>

            </div><!-- /.col-md-12 -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->