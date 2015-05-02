<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno_model extends CI_Model{

	public function do_insert($dados = NULL){
		if ($dados != NULL){
			/* insere na tabela alunos a variavel dados */
			$this->db->insert('aluno',$dados);

			/* se deu tudo certo envia para a view uma mensagem de sucesso */
			$this->session->set_flashdata('cadastrook','Uhul! Um novo aluno foi cadastrado no sistema! - <div class="fa fa-smile-o"></div>');

			/* redireciona para a view de novo aluno já mostrando a mensagem de sucesso e limpa os dados */
			redirect('aluno/novo');
		}
	}

	// pega todos os alunos cadastrados
	public function get_all(){
		return $this->db->get('aluno');
	}

	/* função de seleção por ID para posteriormente ir pra tela de edição */
	public function get_byid( $id = NULL ){
		if( $id != NULL ){
			/* seleciona no DB onde o campo ID == $id */
			$this->db->where('id',$id);
			
			/* mostra apenas 1 resultado, e TEM q ser 1 resultado pois ID é unico */
			$this->db->limit(1);
			
			/* pega a tabela aluno */
			return $this->db->get('aluno');
		}else{
			return FALSE;			
		}
	}

	/* função de atualização no banco de dados, que vem tudo da tela de edição */
	public function do_update($dados = NULL, $condicao = NULL){
		if ($dados != NULL && $condicao != NULL){

			/* atualiza o banco de dados aluno com os $dados usando a $condição */
			$this->db->update('aluno',$dados,$condicao);

			/* retorna para a view de alunos cadastrados uma mensagem  de edição ok */
			$this->session->set_flashdata('edicaook','Uhul! Um registro foi editado com sucesso! - <div class="fa fa-smile-o"></div>');

			/* ao terminar de editar o registro vai para a tela de alunos cadastrados */
			redirect('aluno/cadastrados');
		}
	}

	/* seleciona os cursos da tabela cursos */
	public function get_cursos(){
		return $this->db->get('curso');
	}


}