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

		/* session do flash data de aviso de cadastro efetuado com sucesso no model*/
		$this->load->library('session');

		/* carrega o model aluno com as funções do DB */
		$this->load->model('Aluno_model');

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

		/* validação dos campos de cadastro de um novo aluno */
		$this->form_validation->set_rules('codigo','Codigo','trim|numeric');
		/* name of student */
		$this->form_validation->set_rules('nome','Nome','trim|required');
		/* date of birthday */
		$this->form_validation->set_rules('data_nasc','Data de Nascimento','trim|required');
		/*sexo*/
		$this->form_validation->set_rules('sexo','Sexo','trim');
		/* course */
		$this->form_validation->set_rules('curso','Curso','trim|required');
		/* class */
		$this->form_validation->set_rules('turma','Turma','trim|required');
		/* turno */
		$this->form_validation->set_rules('turno','Turno','trim|required');
		/* email */
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[aluno.email]');
		/* login */
		$this->form_validation->set_rules('login','Login','trim|required|alpha_numeric|is_unique[aluno.login]');
		/* default password */
		$this->form_validation->set_rules('senha','Senha','trim|required|min_length[8]');
		/* observations */
		$this->form_validation->set_rules('observacoes','Observações','trim');
		/*access level*/
		$this->form_validation->set_rules('nivel_acesso','Nível de Acesso','trim');
		
		/* inicia o form validation */
		if($this->form_validation->run() == TRUE){
			$dados = elements(array('codigo','nome','data_nasc','sexo','curso','turma','turno','email','login','senha','observacoes','nivel_acesso'),$this->input->post() );
			
			/* criptografando a senha em md5 */
			$dados['senha'] = md5($dados['senha']);

			/* chama o model de alunos, e a função de inserção no DB */
			$this->Aluno_model->do_insert($dados);
		}	

		/*****************************************************
		* envia para a view algumas informações, como:
		*	Titulo da página
		*	Onde o usuário está
		* 	Descrição da página
		*	Tela a ser chamada 
		*****************************************************/
		$dados = array(
			'titulo' => 'Novo Aluno - Controle Escolar',
			'ondeesta' => 'Cadastrar Novo Aluno',
			'descricao' => 'Você está na página de registro de um novo aluno!',
			'tela' => 'novo',
			'cursos' => $this->Aluno_model->get_cursos()->result()
		);
		/* carrega a view e passa as informações usando a variável dados */
		$this->load->view('aluno',$dados);	
			
	}


	public function cadastrados(){

		/*****************************************************
		* envia para a view algumas informações, como:
		*	Titulo da página
		*	Onde o usuário está
		* 	Descrição da página
		*	Tela a ser chamada 
		*****************************************************/
		$dados = array(
			'titulo' => 'Alunos Cadastrados - Controle Escolar',
			'ondeesta' => 'Alunos Cadastrados',
			'descricao' => 'Você está na página de alunos cadastrados no sistema!',
			'tela' => 'cadastrados',
			'alunos' => $this->Aluno_model->get_all()->result()
		);

		/* carrega a view e passa as informações usando a variável dados */
		$this->load->view('aluno',$dados);
	}


	public function editar(){

		/* validação dos campos de cadastro de um novo aluno */
		$this->form_validation->set_rules('codigo','Codigo','trim|numeric');
		/* name of student */
		$this->form_validation->set_rules('nome','Nome','trim|required');
		/* date of birthday */
		$this->form_validation->set_rules('data_nasc','Data de Nascimento','trim|required');
		/*sexo*/
		$this->form_validation->set_rules('sexo','Sexo','trim');
		/* course */
		$this->form_validation->set_rules('curso','Curso','trim|required');
		/* class */
		$this->form_validation->set_rules('turma','Turma','trim|required');
		/* turno */
		$this->form_validation->set_rules('turno','Turno','trim|required');
		/* email */
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		/* login */
		$this->form_validation->set_rules('login','login','trim|required|alpha_numeric');
		/* observations */
		$this->form_validation->set_rules('observacoes','Observações','trim');
		
		/* inicia o form validation */
		if($this->form_validation->run() == TRUE){
			$dados = elements(array('codigo','nome','data_nasc','sexo','curso','turma','turno','observacoes'),$this->input->post() );

			/* chama o model de alunos, e a função de inserção no DB */
			$this->Aluno_model->do_update($dados,array('id'=>$this->input->post('idusuario') ) );
		}	

		/*****************************************************
		* envia para a view algumas informações, como:
		*	Titulo da página
		*	Onde o usuário está
		* 	Descrição da página
		*	Tela a ser chamada 
		*****************************************************/
		$dados = array(
			'titulo' => 'Editar Cadastro - Controle Escolar',
			'ondeesta' => 'Editar Cadastro de Aluno',
			'descricao' => 'Você está na página onde são feitas as atualizações no cadastro de um aluno!',
			'tela' => 'editar',
			'cursos' => $this->Aluno_model->get_cursos()->result()
		);

		/* carrega a view e passa as informações usando a variável dados */
		$this->load->view('aluno',$dados);

	}


	public function advertencia(){		

		/*****************************************************
		* envia para a view algumas informações, como:
		*	Titulo da página
		*	Onde o usuário está
		* 	Descrição da página
		*	Tela a ser chamada 
		*****************************************************/		
		$dados = array(
			'titulo' => 'Advertência - Controle Escolar',
			'ondeesta' => 'Advertência',
			'descricao' => 'Cadastro de advertência para alunos',
			'tela' => 'advertencia'
		);

		/* carrega a view e passa as informações usando a variável dados */
		$this->load->view('aluno',$dados);
	}

	public function perfil(){
		/*****************************************************
		* envia para a view algumas informações, como:
		*	Titulo da página
		*	Onde o usuário está
		* 	Descrição da página
		*	Tela a ser chamada 
		*****************************************************/		
		$dados = array(
			'titulo' => 'Perfil de Aluno - Controle Escolar',
			'ondeesta' => 'Perfil de Aluno(a)',
			'descricao' => 'Você está na página de perfil de um aluno(a)',
			'tela' => 'perfil'
		);

		/* carrega a view e passa as informações usando a variável dados */
		$this->load->view('aluno',$dados);
	}


}
