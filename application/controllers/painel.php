<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Painel extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->helper('url');
		

	}

	public function index(){

		$dados = array(
			'titulo' => 'Painel - Controle Escolar',
			'ondeesta' => 'Painel',
			'descricao' => ' - Você está no Painel Principal!'
		);

		$this->load->view('painel',$dados);
	}
}
