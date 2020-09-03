<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Correspondentes extends MY_Controller {

	public $data;	
	function __construct(){
		parent::__construct();
		$this->_auth();
		$this->load->model("Correspondentes_model");
	}

	public function index(){ 

		$resultCorrespondentes = $this->db
			->select("*")
			->from("correspondentes AS c")
			->order_by("c.id", "DESC")
			->get();
		$this->data['listaCorrespondentes'] = $resultCorrespondentes->result();

	}

	function criar(){
		$this->data['item'] = new stdClass();
		
		//Campos relacionados
		//caso seja necessario adicione os relacionamento aqui
		//fim Campos relacionados
		
		if($this->input->post('enviar')){
			
			if( $this->form_validation->run('Correspondentes') === FALSE || !empty($this->data['msg_error']) ){
				$this->data['msg_error'] = (!empty($this->data['msg_error'])) ? $this->data['msg_error'] : validation_errors("<p>","</p>");
			} else {
				//Preenche objeto com as informações do formulário			
				$correspondente = array();
				//$correspondente['id'] 	     = $this->input->post('id', TRUE);
				$correspondente['nome_correspondente'] = $this->input->post('nome_correspondente', TRUE);
				$correspondente['email'] 		 = $this->input->post('email_correspondente', TRUE);
				$correspondente['telefone'] 	 = $this->input->post('telefone_correspondente', TRUE);
				/* $correspondente['descricao'] 	 = $this->input->post('descricao', TRUE); */
				$correspondente['status'] 		 = 1;
				$correspondente['createdAt'] 	 = date("Y-m-d H:i:s");

				//print_r($correspondente);exit;
				$this->db->insert("correspondentes", $correspondente);
	
				$this->data['msg_success'] = $this->session->set_flashdata("msg_success", "Registro adicionado com sucesso!");
				redirect('correspondentes/index');
			}
		} 	
    }
	
	public function editar(){
		//carregue os MODELs necessários aqui
		$id = $this->uri->segment(3);

		$correspondente = $this->db
			->from("correspondentes AS c")
			->where("id", $id)->get()->row();

		if(!$correspondente){
			$this->data['msg_error'] = $this->session->set_flashdata("msg_error", "Registro não encontrado!");
			redirect('correspondentes/index');
		} else {
			$this->data['item'] = $correspondente;
			
			if( $this->input->post('enviar') ){
				if( $this->form_validation->run('Correspondentes') === FALSE ){
					$this->data['msg_error'] = (!empty($this->data['msg_error'])) ? $this->data['msg_error'] : validation_errors("<p>","</p>");
				} else {
					
					$correspondente = array();
					$correspondente['id']				= $this->input->post('id', true);
					$correspondente['nome_correspondente']	= $this->input->post('nome_correspondente', true);
					$correspondente['email']			= $this->input->post('email_correspondente', true);
					$correspondente['telefone']		= $this->input->post('telefone_correspondente', true);
					$correspondente['status']			= 1;
					$correspondente['updatedAt']		= date("Y-m-d H:i:s");

					$this->db->where("id",$id);
					$this->db->update("correspondentes", $correspondente);
				
					$this->data['msg_success'] = $this->session->set_flashdata("msg_success", "Registro <b>#{$correspondente['id']}</b> atualizado!");
					redirect('correspondentes/index');
				}
			}
		}
	}

	public function delete(){
		$id = $this->uri->segment(3);
		
		$correspondente = $this->db
						->from("correspondentes AS c")
						->where("id", $id)->get()->row();
		$this->data['item'] = $correspondente;
		
		if( !$correspondente ){
			$this->data['msg_error'] = $this->session->set_flashdata("msg_error", "Registro não encontrado!");
			redirect('correspondentes/index');
		} else {
			$this->data['item'] = $correspondente;
			
			if( $this->input->post("enviar") ){
				
				$this->db->where("id", $correspondente->id);
				$this->db->delete("correspondentes");

				$this->data['msg_success'] = $this->session->set_flashdata("msg_success", "Registro deletado com sucesso!");
				redirect('correspondentes/index');
			}
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */