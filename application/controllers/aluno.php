<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('array');

		/* validação dos formulários */
		$this->load->library('form_validation');

		$this->load->library('session');

		//função de criação de tabela html no retrieve
		$this->load->library('table');
		

	}

	public function index(){

		$dados = array(
			'titulo' => 'Aluno index',
			'ondeesta' => 'Aluno index',
			'descricao' => ' - aluno index'
		);

		$this->load->view('aluno',$dados);
	}

	public function novo(){

		$this->form_validation->set_rules('nome','Nome','trim|required|alpha');
		

		$dados = array(
			'titulo' => 'Novo Aluno - Controle Escolar',
			'ondeesta' => 'Novo Aluno',
			'descricao' => 'Você está na página de registro de um novo aluno!',
			'tela' => 'novo'
		);

		if($this->form_validation->run() == TRUE){
			echo 'tuto ok';
		}

		

		$this->load->view('aluno',$dados);
			
	}

	public function cadastrados(){

		$dados = array(
			'titulo' => 'Alunos Cadastrados - Controle Escolar',
			'ondeesta' => 'Alunos Cadastrados',
			'descricao' => 'Você está na página de alunos cadastrados no sistema!',
			'tela' => 'cadastrados'
		);

		$this->load->view('aluno',$dados);
	}

	public function advertencia(){		
		
		$dados = array(
			'titulo' => 'Advertência - Controle Escolar',
			'ondeesta' => 'Advertência',
			'descricao' => 'Cadastro de advertência para alunos',
			'tela' => 'advertencia'
		);

		$this->load->view('aluno',$dados);
	}


}
