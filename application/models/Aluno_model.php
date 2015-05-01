<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno_model extends CI_Model{

	public function do_insert($dados = NULL){
		if ($dados != NULL){
			/* insere na tabela alunos a variavel dados */
			$this->db->insert('aluno',$dados);

			/* se deu tudo certo envia para a view uma mensagem de sucesso */
			$this->session->set_flashdata('cadastrook','Cadastro efetuado com sucesso!');

			/* redireciona para a view de novo aluno já mostrando a mensagem de sucesso e limpa os dados */
			redirect('aluno/novo');
		}
	}


}