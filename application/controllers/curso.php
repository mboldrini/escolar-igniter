<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curso extends CI_Controller {

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
			'titulo' => 'Curso index',
			'ondeesta' => 'Curso index',
			'descricao' => ' - Curso index'
		);

		$this->load->view('curso',$dados);
	}

	public function novocurso(){

		/*****************************************************
		* envia para a view algumas informações, como:
		*	Titulo da página
		*	Onde o usuário está
		* 	Descrição da página
		*	Tela a ser chamada 
		*****************************************************/
		$dados = array(
			'titulo' => 'Novo Curso - Controle Escolar',
			'ondeesta' => 'Novo Curso',
			'descricao' => 'Você está na página de registro de um novo Curso!',
			'tela' => 'novocurso'
		);
		/* carrega a view e passa as informações usando a variável dados */
		$this->load->view('curso',$dados);	
			
	}



}
