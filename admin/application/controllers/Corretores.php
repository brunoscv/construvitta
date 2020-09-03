<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Corretores extends MY_Controller {

	public $data;	
	function __construct(){
		parent::__construct();
		$this->_auth();
		$this->load->model("Corretores_model");
		$this->load->model("Imobiliarias_model");

		//adiciona os dados do login para fazer as visualizacoes de informacoes
		$this->data['admin'] 	= $this->session->userdata('userdata')['principal'];
		$this->data['user_id'] 	= $this->session->userdata('userdata')['id'];
		$this->data['usuario_id'] = $this->session->userdata('userdata')['usuario_id'];
		$this->data['tipo_id'] 	  = $this->session->userdata('userdata')['tipo_id'];
	}

	public function index(){ 

		if($this->data['admin'] != 1) {
			switch ($this->data['tipo_id']) {
				case 1:
					$this->db->where("c.user_id", $this->data['usuario_id']);
				break;
				case 2:
					//$this->db->where("c.user_id", $this->data['usuario_id']);
				break;
				case 3:
					$this->db->where("i.id", $this->data['usuario_id']);
				break;
				default:
					//$this->db->where("c.user_id", $this->data['usuario_id']);
				break;
			}
		}
		$resultCorretores = $this->db
			->select("c.id, c.nome_corretor, i.nome_imobiliaria, c.telefone, c.email, c.status, c.createdAt")
			->from("corretores AS c")
			->join("imobiliarias AS i", "c.imobiliarias_id = i.id")
			->order_by("c.id", "DESC")
			->get();
			if($this->data['admin'] != 1) {
				switch ($this->data['tipo_id']) {
					case 1:
						$this->db->where("c.user_id", $this->data['usuario_id']);
					break;
					case 2:
						//$this->db->where("c.user_id", $this->data['usuario_id']);
					break;
					case 3:
						$this->db->where("i.id", $this->data['usuario_id']);
					break;
					default:
						//$this->db->where("c.user_id", $this->data['usuario_id']);
					break;
				}
			}
		$this->data['listaCorretores'] = $resultCorretores->result();

	}

	function criar(){
		$this->data['item'] = new stdClass();
		
		//Campos relacionados
		//caso seja necessario adicione os relacionamento aqui
		$imobiliarias = $this->Imobiliarias_model->get_imobiliarias();
		$this->data['listaImobiliarias'] = array();
		$this->data['listaImobiliarias'][''] = "Selecione uma Imobiliaria";
		foreach ($imobiliarias as $imobiliaria) {
			$this->data['listaImobiliarias'][$imobiliaria->id] = $imobiliaria->nome_imobiliaria;
		}
		//fim Campos relacionados
		
		if($this->input->post('enviar')){
			
			if( $this->form_validation->run('Corretores') === FALSE || !empty($this->data['msg_error']) ){
				$this->data['msg_error'] = (!empty($this->data['msg_error'])) ? $this->data['msg_error'] : validation_errors("<p>","</p>");
			} else {
				//Preenche objeto com as informações do formulário			
				$corretor = array();
				//$corretor['id'] 	     		= $this->input->post('id', TRUE);
				$corretor['nome_corretor'] 		= $this->input->post('nome_corretor', TRUE);
				$corretor['email'] 		   		= $this->input->post('email_corretor', TRUE);
				$corretor['telefone'] 	  		= $this->input->post('telefone_corretor', TRUE);
				$corretor['data_nasc'] 	   		= formatar_data($this->input->post('data_nasc', TRUE));
				$corretor['cpf'] 	   			= $this->input->post('cpf', TRUE);
				$corretor['creci'] 	   			= $this->input->post('creci', TRUE);
				$corretor['imobiliarias_id'] 	= $this->input->post('imobiliarias_id', TRUE);
				$corretor['status'] 	   		= 1;
				$corretor['createdAt'] 	   		= date("Y-m-d H:i:s");

				//print_r($corretor);exit;
				$this->db->insert("corretores", $corretor);
	
				$this->data['msg_success'] = $this->session->set_flashdata("msg_success", "Registro adicionado com sucesso!");
				redirect('corretores/index');
			}
		} 	
    }
	
	public function editar(){
		//carregue os MODELs necessários aqui
		$id = $this->uri->segment(3);

		//Campos relacionados
		//caso seja necessario adicione os relacionamento aqui
		$imobiliarias = $this->Imobiliarias_model->get_imobiliarias();
		$this->data['listaImobiliarias'] = array();
		foreach ($imobiliarias as $imobiliaria) {
			$this->data['listaImobiliarias'][$imobiliaria->id] = $imobiliaria->nome_imobiliaria;
		}
		//fim Campos relacionados

		$corretor = $this->db
			->from("corretores AS c")
			->where("id", $id)->get()->row();

		if(!$corretor){
			$this->data['msg_error'] = $this->session->set_flashdata("msg_error", "Registro não encontrado!");
			redirect('corretores/index');
		} else {
			$this->data['item'] = $corretor;
			
			if( $this->input->post('enviar') ){
				if( $this->form_validation->run('Corretores') === FALSE ){
					$this->data['msg_error'] = (!empty($this->data['msg_error'])) ? $this->data['msg_error'] : validation_errors("<p>","</p>");
				} else {
					
				$corretor = array();
				$corretor['nome_corretor'] 		= $this->input->post('nome_corretor', TRUE);
				$corretor['email'] 		   		= $this->input->post('email_corretor', TRUE);
				$corretor['telefone'] 	  		= $this->input->post('telefone_corretor', TRUE);
				$corretor['data_nasc'] 	   		= formatar_data($this->input->post('data_nasc', TRUE));
				$corretor['creci'] 	   			= $this->input->post('creci', TRUE);
				$corretor['cpf'] 	   			= $this->input->post('cpf', TRUE);
				$corretor['imobiliarias_id'] 	= $this->input->post('imobiliarias_id', TRUE);
				$corretor['status'] 	   		= 1;
				$corretor['updatedAt']			= date("Y-m-d H:i:s");

				$this->db->where("id",$id);
				$this->db->update("corretores", $corretor);
			
				$this->data['msg_success'] = $this->session->set_flashdata("msg_success", "Registro <b>#{$id}</b> atualizado!");
				redirect('corretores/index');
				}
			}
		}
	}

	public function ver(){
		//carregue os MODELs necessários aqui
		$id = $this->uri->segment(3);

		//Campos relacionados
		//caso seja necessario adicione os relacionamento aqui
		$imobiliarias = $this->Imobiliarias_model->get_imobiliarias();
		$this->data['listaImobiliarias'] = array();
		foreach ($imobiliarias as $imobiliaria) {
			$this->data['listaImobiliarias'][$imobiliaria->id] = $imobiliaria->nome_imobiliaria;
		}
		//fim Campos relacionados

		$corretor = $this->db
			->from("corretores AS c")
			->where("id", $id)->get()->row();

		if(!$corretor){
			$this->data['msg_error'] = $this->session->set_flashdata("msg_error", "Registro não encontrado!");
			redirect('corretores/index');
		} else {
			$this->data['item'] = $corretor;
		}
	}

	public function delete(){
		$id = $this->uri->segment(3);
		
		$corretor = $this->db
						->from("corretores AS c")
						->where("id", $id)->get()->row();
		$this->data['item'] = $corretor;
		
		if( !$corretor ){
			$this->data['msg_error'] = $this->session->set_flashdata("msg_error", "Registro não encontrado!");
			redirect('corretores/index');
		} else {
			$this->data['item'] = $corretor;
			
			if( $this->input->post("enviar") ){
				
				$this->db->where("id", $corretor->id);
				$this->db->delete("corretores");

				$this->data['msg_success'] = $this->session->set_flashdata("msg_success", "Registro deletado com sucesso!");
				redirect('corretores/index');
			}
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */