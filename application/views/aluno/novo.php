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

              <?php echo validation_errors('<p>','</p>'); ?>

              <?php echo form_open('aluno/novo')?>

              <?php 

                $turma = array(
                  'id' => 'turma',
                  'placeholder' => 'Turma',
                  'class' => 'form-control',
                  'type' => 'text'
                );

                $login = array(
                  'id' => 'login',
                  'placeholder' => 'Login',
                  'class' => 'form-control',
                  'type' => 'text'
                );

                $email = array(
                  'id' => 'email',
                  'placeholder' => 'Email',
                  'class' => 'form-control',
                  'type' => 'email'
                );

                $observacoes = array(
                  'id' => 'observacoes',
                  'placeholder' => 'Observações',
                  'class' => 'form-control',
                  'type' => 'textarea'
                );

                $senha = array(
                  'id' => 'senha',
                  'placeholder' => 'Senha',
                  'class' => 'form-control',
                  'type' => 'password'
                );

               ?>

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
                      <?php echo form_input($turma) ?>
                    </div>
                  </div>

                  <div class="form-group col-md-12">
                    <label for="nome"><?php echo form_label('Email:', 'email') ?></label>
                    <div class="col-md-8">
                      <?php echo form_input($email) ?>
                    </div>
                  </div>

                  <div class="form-group col-md-12">
                    <label for="nome"><?php echo form_label('Login:', 'login') ?></label>
                    <div class="col-md-6">
                      <?php echo form_input($login) ?>
                    </div>
                  </div>                 

                  <div class="form-group col-md-12">
                    <label for="nome"><?php echo form_label('Senha:', 'senha') ?></label>
                    <div class="col-md-4">
                      <?php echo form_input($senha) ?>
                    </div>
                  </div>

                  <div class="form-group col-md-12">
                    <label for="nome"><?php echo form_label('Observações:', 'observacoes') ?></label>
                    <div class="col-md-8">
                      <?php echo form_textarea($observacoes) ?>
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