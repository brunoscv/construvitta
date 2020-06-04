<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clientes extends MY_Controller {

	public $data;	
	function __construct(){
		parent::__construct();
		/* $this->_auth(); */
		$this->load->model("Clientes_model");
	}

	public function index(){ 

		//Lista apenas os clientes que não tem contratos ativos.
		//contratos != on
		$resultClientes = $this->db
			->select("*")
			->from("clientes AS c")
			->order_by("c.id", "DESC")
			->where("c.contrato !=", "on")
			->get();
		$this->data['listaClientes'] = $resultClientes->result();

	}

	function criar(){
		$this->data['item'] = new stdClass();
		
		//Campos relacionados
		//caso seja necessario adicione os relacionamento aqui
		//fim Campos relacionados
		
		if($this->input->post('enviar')){
			
			if( $this->form_validation->run('Clientes') === FALSE || !empty($this->data['msg_error']) ){
				$this->data['msg_error'] = (!empty($this->data['msg_error'])) ? $this->data['msg_error'] : validation_errors("<p>","</p>");
			} else {
				//Preenche objeto com as informações do formulário			
				$cliente 					 = array();
				//$cliente['id'] 	     	 = $this->input->post('id', TRUE);
				$cliente['nome_cliente'] 	 = $this->input->post('nome_cliente', TRUE);
				$cliente['cpf'] 		 	 = $this->input->post('cpf', TRUE);
				$cliente['data_nasc'] 		 = formatar_data($this->input->post('data_nasc', TRUE));
				$cliente['email'] 		 	 = $this->input->post('email_cliente', TRUE);
				$cliente['telefone'] 	 	 = $this->input->post('telefone_cliente', TRUE);
				$cliente['renda_bruta'] 	 = $this->input->post('renda_bruta', TRUE);
				$cliente['compr_dependente'] = $this->input->post('compr_dependente', TRUE);
				$cliente['fgts'] 		 	 = $this->input->post('fgts', TRUE);
				$cliente['valor_fgts'] 		 = $this->input->post('valor_fgts', TRUE);
				$cliente['valor_sinal'] 	 = $this->input->post('valor_sinal', TRUE);
				$cliente['loteamento_zona']  = $this->input->post('loteamento_zona', TRUE);
				$cliente['c0'] 		 		 = $this->input->post('c0', TRUE);
				$cliente['c0_s'] 		 	 = $this->input->post('c0_s', TRUE);
				$cliente['c1'] 		  	     = $this->input->post('c1', TRUE);
				$cliente['c2'] 		 		 = $this->input->post('c2', TRUE);
				$cliente['c3'] 				 = $this->input->post('c3', TRUE);
				$cliente['c4'] 		 		 = $this->input->post('c4', TRUE);
				$cliente['c5'] 		 		 = $this->input->post('c5', TRUE);
				$cliente['com_muro'] 		 = $this->input->post('com_muro', TRUE);
				$cliente['outro_modelo'] 	 = $this->input->post('outro_modelo', TRUE);
				$cliente['observacoes'] 	 = $this->input->post('observacoes', TRUE);
				$cliente['user_id'] 		 = 1;
				$cliente['status'] 		 	 = 1;
				$cliente['createdAt'] 	 	 = date("Y-m-d H:i:s");

				$this->db->insert("clientes", $cliente);
				$cliente_id = $this->db->insert_id();

				$this->salvar_arquivos($cliente_id);
	
				$this->data['msg_success'] = $this->session->set_flashdata("msg_success", "Registro adicionado com sucesso!");
				redirect('clientes/index');
			}
		} 	
    }
	
	public function editar(){
		$id 	 = $this->uri->segment(3);
		$cliente = $this->db->from("clientes AS c")->where("id", $id)->get()->row();
		$cliente_arquivos = $this->db->from("clientes_arquivos AS ca")->where("cliente_id", $id)->get()->result();

		//arShow($cliente_arquivos);exit;

		if(!$cliente){
			$this->data['msg_error'] = $this->session->set_flashdata("msg_error", "Registro não encontrado!");
			redirect('clientes/index');
		} else {
			$this->data['item'] = $cliente;
			$this->data['cliente_arquivos'] = $cliente_arquivos;
			$this->data['cliente_id'] = $id;
			if( $this->input->post('enviar') ){
				if( $this->form_validation->run('Clientes') === FALSE ){
					$this->data['msg_error'] = (!empty($this->data['msg_error'])) ? $this->data['msg_error'] : validation_errors("<p>","</p>");
				} else {	
				//Preenche objeto com as informações do formulário			
				$cliente 					 = array();
				//$cliente['id'] 	     	 = $this->input->post('id', TRUE);
				$cliente['nome_cliente'] 	 = $this->input->post('nome_cliente', TRUE);
				$cliente['cpf'] 		 	 = $this->input->post('cpf', TRUE);
				$cliente['data_nasc'] 		 = formatar_data($this->input->post('data_nasc', TRUE));
				$cliente['email'] 		 	 = $this->input->post('email_cliente', TRUE);
				$cliente['telefone'] 	 	 = $this->input->post('telefone_cliente', TRUE);
				$cliente['renda_bruta'] 	 = $this->input->post('renda_bruta', TRUE);
				$cliente['compr_dependente'] = $this->input->post('compr_dependente', TRUE);
				$cliente['fgts'] 		 	 = $this->input->post('fgts', TRUE);
				$cliente['valor_fgts'] 		 = $this->input->post('valor_fgts', TRUE);
				$cliente['valor_sinal'] 	 = $this->input->post('valor_sinal', TRUE);
				$cliente['loteamento_zona']  = $this->input->post('loteamento_zona', TRUE);
				$cliente['c0'] 		 		 = $this->input->post('c0', TRUE);
				$cliente['c0_s'] 		 	 = $this->input->post('c0_s', TRUE);
				$cliente['c1'] 		  	     = $this->input->post('c1', TRUE);
				$cliente['c2'] 		 		 = $this->input->post('c2', TRUE);
				$cliente['c3'] 				 = $this->input->post('c3', TRUE);
				$cliente['c4'] 		 		 = $this->input->post('c4', TRUE);
				$cliente['c5'] 		 		 = $this->input->post('c5', TRUE);
				$cliente['com_muro'] 		 = $this->input->post('com_muro', TRUE);
				$cliente['outro_modelo'] 	 = $this->input->post('outro_modelo', TRUE);
				$cliente['observacoes'] 	 = $this->input->post('observacoes', TRUE);
				$cliente['user_id'] 		 = 1;
				$cliente['status'] 		 	 = 1;
				$cliente['updatedAt'] 	 	 = date("Y-m-d H:i:s");

				$this->db->where("id",$id);
				$this->db->update("clientes", $cliente);
				$this->salvar_arquivos($id);
				
				$this->data['msg_success'] = $this->session->set_flashdata("msg_success", "Registro <b>#{$id}</b> atualizado!");
				redirect('clientes/index');
				}
			}
		}
	}

	public function ver(){
		$id 	 		  = $this->uri->segment(3);
		$cliente 		  = $this->db->from("clientes AS c")->where("id", $id)->get()->row();
		$cliente_arquivos = $this->db->from("clientes_arquivos AS ca")->where("cliente_id", $id)->get()->result();
		
		if(!$cliente){
			$this->data['msg_error'] = $this->session->set_flashdata("msg_error", "Registro não encontrado!");
			redirect('clientes/index');
		} else {
			$this->data['item'] = $cliente;
			$this->data['cliente_arquivos'] = $cliente_arquivos;
			$this->data['cliente_id'] = $id;
		}
	}

	public function delete(){
		$id = $this->uri->segment(3);
		
		$cliente = $this->db
						->from("clientes AS c")
						->where("id", $id)->get()->row();
		$this->data['item'] = $cliente;
		
		if( !$cliente ){
			$this->data['msg_error'] = $this->session->set_flashdata("msg_error", "Registro não encontrado!");
			redirect('clientes/index');
		} else {
			$this->data['item'] = $cliente;
			
			if( $this->input->post("enviar") ){
				
				$this->db->where("id", $cliente->id);
				$this->db->delete("clientes");

				$this->data['msg_success'] = $this->session->set_flashdata("msg_success", "Registro deletado com sucesso!");
				redirect('clientes/index');
			}
		}
	}

	public function salvar_arquivos($cliente_id) {
		$data = array();
		if(isset($_FILES['files']['name']) && !empty($_FILES['files']['name'])){
			$filesCount = (is_array($_FILES['files']['name']) ? count($_FILES['files']['name']) : 0);
			for($i = 0; $i < $filesCount; $i++){
				$_FILES['file']['name']     = $_FILES['files']['name'][$i];
				$_FILES['file']['type']     = $_FILES['files']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
				$_FILES['file']['error']    = $_FILES['files']['error'][$i];
				$_FILES['file']['size']     = $_FILES['files']['size'][$i];
				
				$config['upload_path'] = FCPATH . '/public/uploads/arquivos/' . date("Ymd");
				if( !is_dir($config['upload_path']) ){
					mkdir($config['upload_path'], 0777, TRUE);
				}
				$config['allowed_types'] 	= 'jpg|jpeg|png|pdf';
				$config['max_size']				= 2*1024;
				$config['encrypt_name'] 	= TRUE;
				
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				
				if($this->upload->do_upload('file')){
					$fileData = $this->upload->data();
					
					$projectsFile[$i]['descricao']		= $fileData['file_name'];
					$projectsFile[$i]['tamanho'] 		= $fileData['file_size'];
					$projectsFile[$i]['tipo'] 			= $fileData['file_type'];
					$projectsFile[$i]['caminho'] 		= base_url() . 'public/uploads/arquivos/' . date("Ymd") . $cliente_id . '/';
					$projectsFile[$i]['data_envio'] 	= date("Y-m-d H:i:s");
					$projectsFile[$i]['cliente_id']		= $cliente_id;
					$projectsFile[$i]['status'] 		= 1;
					$projectsFile[$i]['createdAt']		= date("Y-m-d H:i:s");
					if(!empty($projectsFile)){
						$this->db->insert("clientes_arquivos", $projectsFile[$i]);
					}
				}
			}
		}
	}

	public function deletar_arquivos($arquivo_id) {

		$result = array();
		
		if(!$arquivo_id){
			$result['sucesso'] = false;
		} else {
			$this->db->where("id", $arquivo_id);
			$this->db->delete("clientes_arquivos");
			$result['sucesso'] = true;
    	}

	  	header('Content-Type: application/json');
		echo json_encode($result);
		exit;
	}

	function send_email() {
		$this->load->library('phpmailer_lib');

		$mail = $this->phpmailer_lib->load();

		//SMTP Configuration
		$mail->SetLanguage('br');
		$mail->CharSet = "utf8";
		$mail->IsSMTP(); // enable SMTP
		$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true; // authentication enabled
		$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
		$mail->Host = "construvitta.com.br";
		$mail->Port = 465; // or 587
		$mail->IsHTML(true);
		$mail->Username = "mensagens@construvitta.com.br";
		$mail->Password = "src#123CONSTRUVITTA";
		$mail->Priority = 1;
		$mail->SetFrom("mensagens@construvitta.com.br", "Contato Construvitta");
		$mail->AddReplyTo("mensagens@construvitta.com.br", "Contato Construvitta");
		$mail->AddAddress("japasoares@gmail.com.br");
		$mail->isHTML(true);
		$mail->Subject = "Assunto da mensagem";
		$mail->Body = "Escreva o texto do email aqui";
		if(!$mail->Send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
			echo "Mensagem enviada com sucesso";
		}



	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */