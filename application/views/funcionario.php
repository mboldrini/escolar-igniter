<?php 

	$this ->load-> view('base/header');
	$this->load->view('base/sidebar');


	if($tela != ''){
		 $this -> load -> view('funcionario/'.$tela);
	}else{
		redirect('/painel');
	}


	$this->load->view('base/footer');