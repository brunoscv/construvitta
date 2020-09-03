<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Simulacoes extends MY_Controller {

	public $data;	
	function __construct(){
		parent::__construct();
		$this->_auth();
		$this->load->model("Simulacoes_model");
		$this->load->model("Clientes_model");
		$this->load->model("Corretores_model");
	}

	public function index(){ 

		$resultSimulacoes = $this->db
			->select("s.id, cr.nome_corretor, cl.nome_cliente, s.telefone, s.email, s.status, s.createdAt")
			->from("simulacoes AS s")
			->join("corretores AS cr", "s.corretores_id = cr.id")
			->join("clientes AS cl", "s.clientes_id = cl.id")
			->order_by("s.id", "DESC")
			->get();
		$this->data['listaSimulacoes'] = $resultSimulacoes->result();

	}

	function criar(){
		$this->data['item'] = new stdClass();
		
		//Campos relacionados
		//caso seja necessario adicione os relacionamento aqui
		$corretores = $this->Corretores_model->get_corretores();
		$this->data['listaCorretores'] = array();
		$this->data['listaCorretores'][''] = "Selecione um Corretor";
		foreach ($corretores as $corretor) {
			$this->data['listaCorretores'][$corretor->id] = $corretor->nome_corretor;
		}
		$clientes = $this->Clientes_model->get_clientes();
		$this->data['listaClientes'] = array();
		$this->data['listaClientes'][''] = "Selecione um Cliente";
		foreach ($clientes as $cliente) {
			$this->data['listaClientes'][$cliente->id] = $cliente->nome_cliente;
		}
		//fim Campos relacionados
		
		if($this->input->post('enviar')){
			
			if( $this->form_validation->run('Simulacoes') === FALSE || !empty($this->data['msg_error']) ){
				$this->data['msg_error'] = (!empty($this->data['msg_error'])) ? $this->data['msg_error'] : validation_errors("<p>","</p>");
			} else {
				//Preenche objeto com as informações do formulário			
				$simulacao = array();
				$simulacao['corretores_id'] 	= $this->input->post('corretores_id', TRUE);
				$simulacao['clientes_id'] 	 	= $this->input->post('clientes_id', TRUE);
				$simulacao['data_nasc'] 		= formatar_data($this->input->post('data_nasc', TRUE));
				$simulacao['email'] 		 	= $this->input->post('email', TRUE);
				$simulacao['telefone'] 	 	 	= $this->input->post('telefone', TRUE);
				$simulacao['imovel'] 	 		= $this->input->post('imovel', TRUE);
				$simulacao['renda_bruta'] 	 	= $this->input->post('renda_bruta', TRUE);
				$simulacao['compr_dependente']  = $this->input->post('compr_dependente', TRUE);
				$simulacao['fgts'] 		 	 	= $this->input->post('fgts', TRUE);
				$simulacao['valor_fgts'] 		= $this->input->post('valor_fgts', TRUE);
				$simulacao['loteamento_zona']  	= $this->input->post('loteamento_zona', TRUE);
				$simulacao['c0'] 		 		= $this->input->post('c0', TRUE);
				$simulacao['c0_s'] 		 	 	= $this->input->post('c0_s', TRUE);
				$simulacao['c1'] 		  	    = $this->input->post('c1', TRUE);
				$simulacao['c2'] 		 		= $this->input->post('c2', TRUE);
				$simulacao['c3'] 				= $this->input->post('c3', TRUE);
				$simulacao['c4'] 		 		= $this->input->post('c4', TRUE);
				$simulacao['c5'] 		 		= $this->input->post('c5', TRUE);
				$simulacao['com_muro'] 		 	= $this->input->post('com_muro', TRUE);
				$simulacao['outro_modelo'] 	 	= $this->input->post('outro_modelo', TRUE);
				$simulacao['observacoes'] 		= $this->input->post('observacoes', TRUE);
				$simulacao['status'] 		 	= 1;
				$simulacao['createdAt'] 	 	= date("Y-m-d H:i:s");

				//arShow($simulacao); exit;

				$this->db->insert("simulacoes", $simulacao);
	
				$this->data['msg_success'] = $this->session->set_flashdata("msg_success", "Registro adicionado com sucesso!");
				redirect('simulacoes/index');
			}
		} 	
    }
	
	public function editar(){
		//carregue os MODELs necessários aqui
		$id = $this->uri->segment(3);

		//Campos relacionados
		//caso seja necessario adicione os relacionamento aqui
		$corretores = $this->Corretores_model->get_corretores();
		$this->data['listaCorretores'] = array();
		foreach ($corretores as $corretor) {
			$this->data['listaCorretores'][$corretor->id] = $corretor->nome_corretor;
		}
		$clientes = $this->Clientes_model->get_clientes();
		$this->data['listaClientes'] = array();
		foreach ($clientes as $cliente) {
			$this->data['listaClientes'][$cliente->id] = $cliente->nome_cliente;
		}
		//fim Campos relacionados

		$simulacao = $this->db
			->from("simulacoes AS s")
			->where("id", $id)->get()->row();

		if(!$simulacao){
			$this->data['msg_error'] = $this->session->set_flashdata("msg_error", "Registro não encontrado!");
			redirect('simulacoes/index');
		} else {
			$this->data['item'] = $simulacao;
			
			if( $this->input->post('enviar') ){
				if( $this->form_validation->run('Simulacoes') === FALSE ){
					$this->data['msg_error'] = (!empty($this->data['msg_error'])) ? $this->data['msg_error'] : validation_errors("<p>","</p>");
				} else {
					
					$simulacao = array();
					$simulacao['corretores_id'] 	= $this->input->post('corretores_id', TRUE);
					$simulacao['clientes_id'] 	 	= $this->input->post('clientes_id', TRUE);
					$simulacao['data_nasc'] 		= formatar_data($this->input->post('data_nasc', TRUE));
					$simulacao['email'] 		 	= $this->input->post('email', TRUE);
					$simulacao['telefone'] 	 	 	= $this->input->post('telefone', TRUE);
					$simulacao['imovel'] 	 		= $this->input->post('imovel', TRUE);
					$simulacao['renda_bruta'] 	 	= $this->input->post('renda_bruta', TRUE);
					$simulacao['compr_dependente']  = $this->input->post('compr_dependente', TRUE);
					$simulacao['fgts'] 		 	 	= $this->input->post('fgts', TRUE);
					$simulacao['valor_fgts'] 		= $this->input->post('valor_fgts', TRUE);
					$simulacao['loteamento_zona']  	= $this->input->post('loteamento_zona', TRUE);
					$simulacao['c0'] 		 		= $this->input->post('c0', TRUE);
					$simulacao['c0_s'] 		 	 	= $this->input->post('c0_s', TRUE);
					$simulacao['c1'] 		  	    = $this->input->post('c1', TRUE);
					$simulacao['c2'] 		 		= $this->input->post('c2', TRUE);
					$simulacao['c3'] 				= $this->input->post('c3', TRUE);
					$simulacao['c4'] 		 		= $this->input->post('c4', TRUE);
					$simulacao['c5'] 		 		= $this->input->post('c5', TRUE);
					$simulacao['com_muro'] 		 	= $this->input->post('com_muro', TRUE);
					$simulacao['outro_modelo'] 	 	= $this->input->post('outro_modelo', TRUE);
					$simulacao['observacoes'] 		= $this->input->post('observacoes', TRUE);
					$simulacao['status'] 		 	= 1;
					$simulacao['createdAt'] 	 	= date("Y-m-d H:i:s");

					$this->db->where("id",$id);
					$this->db->update("simulacoes", $simulacao);
				
					$this->data['msg_success'] = $this->session->set_flashdata("msg_success", "Registro <b>#{$simulacao['id']}</b> atualizado!");
					redirect('simulacoes/index');
				}
			}
		}
	}

	public function ver(){
		//carregue os MODELs necessários aqui
		$id = $this->uri->segment(3);

		//Campos relacionados
		//caso seja necessario adicione os relacionamento aqui
		$corretores = $this->Corretores_model->get_corretores();
		$this->data['listaCorretores'] = array();
		foreach ($corretores as $corretor) {
			$this->data['listaCorretores'][$corretor->id] = $corretor->nome_corretor;
		}
		$clientes = $this->Clientes_model->get_clientes();
		$this->data['listaClientes'] = array();
		foreach ($clientes as $cliente) {
			$this->data['listaClientes'][$cliente->id] = $cliente->nome_cliente;
		}
		//fim Campos relacionados

		$simulacao = $this->db
			->from("simulacoes AS s")
			->where("id", $id)->get()->row();

		if(!$simulacao){
			$this->data['msg_error'] = $this->session->set_flashdata("msg_error", "Registro não encontrado!");
			redirect('simulacoes/index');
		} else {
			$this->data['item'] = $simulacao;
		}
	}

	public function delete(){
		$id = $this->uri->segment(3);
		
		$simulacao = $this->db
						->from("simulacoes AS s")
						->where("id", $id)->get()->row();
		$this->data['item'] = $simulacao;
		
		if( !$simulacao ){
			$this->data['msg_error'] = $this->session->set_flashdata("msg_error", "Registro não encontrado!");
			redirect('simulacoes/index');
		} else {
			$this->data['item'] = $simulacao;
			
			if( $this->input->post("enviar") ){
				
				$this->db->where("id", $simulacao->id);
				$this->db->delete("simulacoes");

				$this->data['msg_success'] = $this->session->set_flashdata("msg_success", "Registro deletado com sucesso!");
				redirect('simulacoes/index');
			}
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */