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
              <label for="nome"><?php echo form_label('Nome:', 'lblNome') ?></label>
              <div class="col-md-8">
                <?php echo form_input(
                  array(
                    'name'=>'nome',
                    'type'=>'text',
                    'placeholder'=>'Nome do Curso'
                  ),
                  
                  set_value('nome'),
                    'class="form-control"')
                ?>
              </div>
            </div>

            <div class="form-group col-md-12">
              <label for="nome"><?php echo form_label('Descrição:', 'Descrição') ?></label>
              <div class="col-md-8">
                <?php echo form_textarea(
                  array(
                    'name'=>'descricao',
                    'type'=>'text-area',
                    'placeholder'=>'Descrição do Curso'
                  ),

                  set_value('descricao'),
                    'class="form-control"')
                ?>
              </div>
            </div>          

            <div class="form-group">
              <div class=" col-md-4">
                <?php echo form_submit('', 'Enviar','class="btn btn-success"') ?>
                <?php echo form_reset('', 'Cancelar','class="btn btn-danger"') ?>
              </div>
            </div>                  

          </div>   

         <?php echo form_close() ?>   

      </div><!-- /.col-md-12 -->
    </div><!-- /.row -->

  </section><!-- /.content -->
</div><!-- /.content-wrapper -->