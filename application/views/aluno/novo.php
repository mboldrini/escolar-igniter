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

              <?php echo form_open('aluno/novo')?>

              <?php 

                $codigo = array(
                  'id' => 'codigo',
                  'placeholder' => 'Código do aluno',
                  'class' => 'form-control',
                  'type' => 'number'
                );

                $nome = array(
                  'id' => 'nome',
                  'placeholder' => 'Nome completo do aluno',
                  'class' => 'form-control',
                  'type' => 'text'
                );

                $data_nasc = array(
                  'id' => 'data_nasc',
                  'placeholder' => 'Data de nascimento',
                  'class' => 'form-control',
                  'type' => 'date'
                );

               ?>

                <div class="col-md-8">

                  <div class="form-group col-md-12">
                    <label for="codigo"><?php echo form_label('Código:', 'codigo') ?></label>
                    <div class="col-md-3">
                      <?php echo form_input($codigo) ?>
                    </div>
                  </div>
                
                  <div class="form-group col-md-12">
                    <label for="nome"><?php echo form_label('Nome:', 'nome') ?></label>
                    <div class="col-md-8">
                      <?php echo form_input($nome) ?>
                    </div>
                  </div>

                  <div class="form-group col-md-12">
                    <label for="nome"><?php echo form_label('Data de nascimento:', 'data_nasc') ?></label>
                    <div class="col-md-4">
                      <?php echo form_input($data_nasc) ?>
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