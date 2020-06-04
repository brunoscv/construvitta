<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Imobiliarias extends MY_Controller {

	public $data;	
	function __construct(){
		parent::__construct();
		/* $this->_auth(); */
		$this->load->model("Imobiliarias_model");
	}

	public function index(){ 

		$resultImobiliarias = $this->db
			->select("*")
			->from("imobiliarias AS i")
			->order_by("i.id", "DESC")
			->get();
		$this->data['listaImobiliarias'] = $resultImobiliarias->result();

	}

	function criar(){
		$this->data['item'] = new stdClass();
		
		//Campos relacionados
		//caso seja necessario adicione os relacionamento aqui
		//fim Campos relacionados
		
		if($this->input->post('enviar')){
			
			if( $this->form_validation->run('Imobiliarias') === FALSE || !empty($this->data['msg_error']) ){
				$this->data['msg_error'] = (!empty($this->data['msg_error'])) ? $this->data['msg_error'] : validation_errors("<p>","</p>");
			} else {
				//Preenche objeto com as informações do formulário			
				$imobiliaria 					 = array();
				//$imobiliaria['id'] 	     	 = $this->input->post('id', TRUE);
				$imobiliaria['nome_imobiliaria'] = $this->input->post('nome_imobiliaria', TRUE);
				$imobiliaria['email'] 		 	 = $this->input->post('email_imobiliaria', TRUE);
				$imobiliaria['telefone'] 	 	 = $this->input->post('telefone_imobiliaria', TRUE);
				$imobiliaria['cnpj'] 	 		 = $this->input->post('cnpj', TRUE);
				$imobiliaria['creci'] 	 		 = $this->input->post('creci', TRUE);
				/* $imobiliaria['descricao'] 	 = $this->input->post('descricao', TRUE); */
				$imobiliaria['status'] 		 	 = 1;
				$imobiliaria['createdAt'] 	 	 = date("Y-m-d H:i:s");

				//print_r($imobiliaria);exit;
				$this->db->insert("imobiliarias", $imobiliaria);
	
				$this->data['msg_success'] = $this->session->set_flashdata("msg_success", "Registro adicionado com sucesso!");
				redirect('imobiliarias/index');
			}
		} 	
	}
	
	public function ver(){
		//carregue os MODELs necessários aqui
		$id = $this->uri->segment(3);

		$imobiliaria = $this->db
			->from("imobiliarias AS i")
			->where("id", $id)->get()->row();

		if(!$imobiliaria){
			$this->data['msg_error'] = $this->session->set_flashdata("msg_error", "Registro não encontrado!");
			redirect('imobiliarias/index');
		} else {
			$this->data['item'] = $imobiliaria;
		}
	}

	
	public function editar(){
		//carregue os MODELs necessários aqui
		$id = $this->uri->segment(3);

		$imobiliaria = $this->db
			->from("imobiliarias AS i")
			->where("id", $id)->get()->row();

		if(!$imobiliaria){
			$this->data['msg_error'] = $this->session->set_flashdata("msg_error", "Registro não encontrado!");
			redirect('imobiliarias/index');
		} else {
			$this->data['item'] = $imobiliaria;
			
			if( $this->input->post('enviar') ){
				if( $this->form_validation->run('Imobiliarias') === FALSE ){
					$this->data['msg_error'] = (!empty($this->data['msg_error'])) ? $this->data['msg_error'] : validation_errors("<p>","</p>");
				} else {
					
					$imobiliaria = array();
					$imobiliaria['nome_imobiliaria'] = $this->input->post('nome_imobiliaria', TRUE);
					$imobiliaria['email'] 		 	 = $this->input->post('email_imobiliaria', TRUE);
					$imobiliaria['telefone'] 	 	 = $this->input->post('telefone_imobiliaria', TRUE);
					$imobiliaria['cnpj'] 	 		 = $this->input->post('cnpj', TRUE);
					$imobiliaria['creci'] 	 		 = $this->input->post('creci', TRUE);
					$imobiliaria['status']			= 1;
					$imobiliaria['updatedAt']		= date("Y-m-d H:i:s");

					$this->db->where("id",$id);
					$this->db->update("imobiliarias", $imobiliaria);
				
					$this->data['msg_success'] = $this->session->set_flashdata("msg_success", "Registro <b>#{$imobiliaria['id']}</b> atualizado!");
					redirect('imobiliarias/index');
				}
			}
		}
	}

	public function delete(){
		$id = $this->uri->segment(3);
		
		$imobiliaria = $this->db
						->from("imobiliarias AS i")
						->where("id", $id)->get()->row();
		$this->data['item'] = $imobiliaria;
		
		if( !$imobiliaria ){
			$this->data['msg_error'] = $this->session->set_flashdata("msg_error", "Registro não encontrado!");
			redirect('imobiliarias/index');
		} else {
			$this->data['item'] = $imobiliaria;
			
			if( $this->input->post("enviar") ){
				
				$this->db->where("id", $imobiliaria->id);
				$this->db->delete("imobiliarias");
				$this->data['msg_success'] = $this->session->set_flashdata("msg_success", "Registro deletado com sucesso!");
				redirect('imobiliarias/index');
			}
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */