<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('array');

		/* validação dos formulários */
		$this->load->library('form_validation');

		/* session do flash data de aviso de cadastro efetuado com sucesso no model*/
		$this->load->library('session');

	}

	public function index(){

		$dados = array(
			'titulo' => 'Funcionario index',
			'ondeesta' => 'Funcionario index',
			'descricao' => ' - Funcionario index'
		);

		$this->load->view('funcionario',$dados);
	}

	public function novo(){

		/*****************************************************
		* envia para a view algumas informações, como:
		*	Titulo da página
		*	Onde o usuário está
		* 	Descrição da página
		*	Tela a ser chamada 
		*****************************************************/
		$dados = array(
			'titulo' => 'Novo Funcionário - Controle Escolar',
			'ondeesta' => 'Novo Funcionário',
			'descricao' => 'Você está na página de registro de um novo funcionário!',
			'tela' => 'novo'
		);
		/* carrega a view e passa as informações usando a variável dados */
		$this->load->view('funcionario',$dados);	
			
	}



}
