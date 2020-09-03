<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clientescontratos extends MY_Controller {

	public $data;	
	function __construct(){
		parent::__construct();
		$this->_auth();
		$this->load->model("Clientes_model");
		$this->load->model("Clientescontratos_model");
		$this->load->model("Corretores_model");
		$this->load->model("Correspondentes_model");

		//adiciona os dados do login para fazer as visualizacoes de informacoes
		$this->data['admin']  	  = $this->session->userdata('userdata')['principal'];
		$this->data['id'] 		  = $this->session->userdata('userdata')['id'];
		$this->data['usuario_id'] = $this->session->userdata('userdata')['usuario_id'];
		$this->data['tipo_id'] 	  = $this->session->userdata('userdata')['tipo_id'];
	}

	public function index(){ 
		
		//Lista apenas os clientes que não tem contratos ativos.
		//contratos != on
		//print_r($this->data['usuario_id']); exit;
		if($this->data['admin'] != 1) {
			switch ($this->data['tipo_id']) {
				case 1:
					$this->db->where("c.user_id", $this->data['usuario_id']);
				break;
				case 2:
					//$this->db->where("c.user_id", $this->data['usuario_id']);
				break;
				case 3:
					$this->db->join("corretores AS co", "co.id = c.user_id")->join("imobiliarias AS im", "im.id = co.imobiliarias_id")->where("im.id", $this->data['usuario_id']);
				break;
				default:
					//$this->db->where("c.user_id", $this->data['usuario_id']);
				break;
			}
		}
		
		$resultClientes = $this->db
			->select("*")
			->from("clientes AS c")
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
					$this->db->join("corretores AS co", "co.id = c.user_id")->join("imobiliarias AS im", "im.id = co.imobiliarias_id")->where("im.id", $this->data['usuario_id']);
				break;
				default:
					//$this->db->where("c.user_id", $this->data['usuario_id']);
				break;
			}
		}

		$this->data['listaClientes'] = $resultClientes->result();
		//arShow($this->data['listaClientes']); exit;
		
		$displayed = ($this->data['admin'] != 1) ? $displayed = "style='display:none;'" : $displayed = "";
		$this->data['displayed'] = $displayed;

	}

	function criar(){
		$this->data['item'] = new stdClass();
		$usuario_id = $this->data['usuario_id'];
		
		//Campos relacionados
		//caso seja necessario adicione os relacionamento aqui
		if($this->data['admin'] != 1) {
			switch ($this->data['tipo_id']) {
				case 1:
					$corretores = $this->Corretores_model->get_corretor($usuario_id);
					$correspondentes = $this->Correspondentes_model->get_correspondentes();
				break;
				case 2:
					$corretores = $this->Corretores_model->get_corretores();
					$correspondentes = $this->Correspondentes_model->get_correspondente($usuario_id);
				break;
				case 3:
					//nesse caso o usuario_id seria igual ao id da imobiliaria que esta logada.
					$corretores = $this->Corretores_model->get_corretores_by_imobiliaria($usuario_id);	
					$correspondentes = $this->Correspondentes_model->get_correspondentes();			
				break;
				default:
					//$this->db->where("c.user_id", $this->data['usuario_id']);
				break;
			}
		} else {
			$corretores = $this->Corretores_model->get_corretores();
			$correspondentes = $this->Correspondentes_model->get_correspondentes();
		}
		$this->data['listaCorretores'] = array();
		foreach ($corretores as $corretor) {
			$this->data['listaCorretores'][$corretor->id] = $corretor->nome_corretor;
		}

		$this->data['listaCorrespondentes'] = array();
		foreach ($correspondentes as $correspondente) {
			$this->data['listaCorrespondentes'][$correspondente->id] = $correspondente->nome_correspondente;
		}
		//fim Campos relacionados
		
		if($this->input->post('enviar')){
			
			if( $this->form_validation->run('ClientesContratos') === FALSE || !empty($this->data['msg_error']) ){
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
				$cliente['valor_lote'] 	 	 = $this->input->post('valor_lote', TRUE);
				$cliente['valor_casa'] 	 	 = $this->input->post('valor_casa', TRUE);
				$cliente['extra'] 	 		 = $this->input->post('extra', TRUE);
				$cliente['muro'] 	 		 = $this->input->post('muro', TRUE);
				$cliente['cerca_eletrica'] 	 = $this->input->post('cerca_eletrica', TRUE);
				$cliente['portao_automatico']= $this->input->post('portao_automatico', TRUE);
				$cliente['observacoes'] 	 = $this->input->post('observacoes', TRUE);
				$cliente['contrato'] 	 	 = $this->input->post('contrato', TRUE);
				$cliente['user_id'] 		 = $this->input->post('user_id', TRUE);
				$cliente['correspondente_id']= $this->input->post('correspondente_id', TRUE);
				$cliente['status'] 		 	 = 1;
				$cliente['createdAt'] 	 	 = date("Y-m-d H:i:s");

				$this->db->insert("clientes", $cliente);
				$cliente_id = $this->db->insert_id();

				$this->salvar_arquivos($cliente_id);
				$this->enviar_email($cliente_id);
	
				$this->data['msg_success'] = $this->session->set_flashdata("msg_success", "Registro adicionado com sucesso!");
				redirect('clientes-contratos/index');
			}
		} 	
    }

	public function ver(){
		$id 	 		  = $this->uri->segment(3);
		$cliente 		  = $this->db->select('c.*, cr.nome_corretor, co.nome_correspondente')->from("clientes AS c")->join('corretores AS cr', 'c.user_id = cr.id')->join('correspondentes AS co', 'c.correspondente_id = co.id')->where("c.id", $id)->get()->row();
		$cliente_arquivos = $this->db->from("clientes_arquivos AS ca")->where("cliente_id", $id)->get()->result();


		if(!$cliente){
			$this->data['msg_error'] = $this->session->set_flashdata("msg_error", "Registro não encontrado!");
			redirect('clientes-contratos/index');
		} else {
			$this->data['item'] = $cliente;
			$this->data['cliente_arquivos'] = $cliente_arquivos;
			$this->data['cliente_id'] = $id;
		}
	}

	public function contrato(){
		$id 	 = $this->uri->segment(3);
		$cliente = $this->db->from("clientes AS c")->where("id", $id)->get()->row();
		$cliente_arquivos = $this->db->from("clientes_arquivos AS ca")->where("cliente_id", $id)->get()->result();
        $usuario_id = $this->data['usuario_id'];

		//Campos relacionados
		//caso seja necessario adicione os relacionamento aqui
		if($this->data['admin'] != 1) {
			switch ($this->data['tipo_id']) {
				case 1:
					$corretores = $this->Corretores_model->get_corretor($usuario_id);
					$correspondentes = $this->Correspondentes_model->get_correspondentes();
				break;
				case 2:
					$corretores = $this->Corretores_model->get_corretores();
					$correspondentes = $this->Correspondentes_model->get_correspondente($usuario_id);
				break;
				case 3:
					//nesse caso o usuario_id seria igual ao id da imobiliaria que esta logada.
					$corretores = $this->Corretores_model->get_corretores_by_imobiliaria($usuario_id);	
					$correspondentes = $this->Correspondentes_model->get_correspondentes();			
				break;
				default:
					//$this->db->where("c.user_id", $this->data['usuario_id']);
				break;
			}
		} else {
			$corretores = $this->Corretores_model->get_corretores();
			$correspondentes = $this->Correspondentes_model->get_correspondentes();
		}
		$this->data['listaCorretores'] = array();
		foreach ($corretores as $corretor) {
			$this->data['listaCorretores'][$corretor->id] = $corretor->nome_corretor;
		}

		$this->data['listaCorrespondentes'] = array();
		foreach ($correspondentes as $correspondente) {
			$this->data['listaCorrespondentes'][$correspondente->id] = $correspondente->nome_correspondente;
		}
		//fim Campos relacionados

		if(!$cliente){
			$this->data['msg_error'] = $this->session->set_flashdata("msg_error", "Registro não encontrado!");
			redirect('clientes-contratos/index');
		} else {
			$this->data['item'] = $cliente;
			$this->data['cliente_arquivos'] = $cliente_arquivos;
			$this->data['cliente_id'] = $id;
			if( $this->input->post('enviar') ){
				
				if( $this->form_validation->run('ClientesContratos') === FALSE ){
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
				$cliente['valor_lote'] 	 	 = $this->input->post('valor_lote', TRUE);
				$cliente['valor_casa'] 	 	 = $this->input->post('valor_casa', TRUE);
				$cliente['extra'] 	 		 = $this->input->post('extra', TRUE);
				$cliente['muro'] 	 		 = $this->input->post('muro', TRUE);
				$cliente['cerca_eletrica'] 	 = $this->input->post('cerca_eletrica', TRUE);
				$cliente['portao_automatico']= $this->input->post('portao_automatico', TRUE);
				$cliente['observacoes'] 	 = $this->input->post('observacoes', TRUE);
				$cliente['contrato'] 		 = $this->input->post('contrato', TRUE);
				$cliente['user_id'] 		 = $this->input->post('user_id', TRUE);
				$cliente['correspondente_id']= $this->input->post('correspondente_id', TRUE);
				$cliente['status'] 		 	 = 1;
				$cliente['updatedAt'] 	 	 = date("Y-m-d H:i:s");
				
				$this->salvar_arquivos($id);
				$this->db->where("id",$id);
				$this->db->update("clientes", $cliente);
				$this->enviar_email($id);
				
				$this->data['msg_success'] = $this->session->set_flashdata("msg_success", "Registro <b>#{$cliente['id']}</b> atualizado!");
				redirect('clientes-contratos/index');
				}
			}
		}
	}

	public function salvar_arquivos($cliente_id) {
		
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
				$config['max_size']			= 20*1024;
				$config['encrypt_name'] 	= TRUE;
				
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				
				if($this->upload->do_upload('file')){
					
					$fileData = $this->upload->data();
					
					$projectsFile[$i]['descricao']		= $fileData['file_name'];
					$projectsFile[$i]['nome_arquivo']   = preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $fileData['orig_name'] ) );
					$projectsFile[$i]['tamanho'] 		= $fileData['file_size'];
					$projectsFile[$i]['tipo'] 			= $fileData['file_type'];
					$projectsFile[$i]['caminho'] 		= 'public/uploads/arquivos/' . date("Ymd") . '/';
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

	public function buscar(){

		$this->data['listaClientes'] = $this->db->from("clientes AS c")->get()->result();

		if( $this->input->post("enviar") ){
			$where 			   = array();
			$casa_muro 		   = $this->input->post('casa_muro', TRUE);
			$cerca_eletrica    = $this->input->post('cerca_eletrica', TRUE);
			$portao_automatico = $this->input->post('portao_automatico', TRUE);
			$modelo_casa	   = $this->input->post('modelo_casa', TRUE);
			
			if( $casa_muro ){ $where[] = " `muro` = '{$casa_muro}'"; }
			if( $cerca_eletrica ){ $where[] = " `cerca_eletrica` = '{$cerca_eletrica}'"; }
			if( $portao_automatico ){ $where[] = " `portao_automatico` = '{$portao_automatico}'"; }

			$sql = " SELECT id, nome_cliente, telefone, email, contrato, status, createdAt FROM clientes ";
			if( sizeof( $where ) ) {
				$sql .= ' WHERE '.implode( ' AND ', $where );
			}
			$result = $this->db->query("$sql")->result();

			if(!$result) {
				$this->data['msg_error'] = $this->session->set_flashdata("msg_error", "Os filtros estão vazios ou não há registros encontrados!");
				redirect('clientes-contratos/buscar');
			} else {
				$this->data["casa_muro"] = $casa_muro;
				$this->data["cerca_eletrica"] = $cerca_eletrica;
				$this->data["portao_automatico"] = $portao_automatico;
				$this->data["listaClientes"] = $result;
			}
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
			redirect('clientes-contratos/index');
		} else {
			$this->data['item'] = $cliente;
			
			if( $this->input->post("enviar") ){
				
				$this->db->where("id", $cliente->id);
				$this->db->delete("clientes");

				$this->data['msg_success'] = $this->session->set_flashdata("msg_success", "Registro deletado com sucesso!");
				redirect('clientes-contratos/index');
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

	function enviar_email($cliente_id = null) {
		//$cliente_id = $this->uri->segment(3);
		$this->load->library('phpmailer_lib');
		
		$corretor = $this->db->select("c.id, c.nome_corretor, c.email")->from("clientes AS cl")->join("corretores AS c", "cl.user_id = c.id")->where("cl.id", $cliente_id)->get()->result();
		$imob 	  = $this->db->select("im.id, im.nome_imobiliaria, im.email")->from("imobiliarias AS im")->join("corretores AS c", "im.id = c.imobiliarias_id")->where("c.id", $corretor[0]->id)->get()->result();
		$correspondente = $this->db->select("co.id, co.nome_correspondente, co.email")->from("correspondentes AS co")->join("clientes AS cl", "cl.correspondente_id = co.id")->where("cl.id", $cliente_id)->get()->result();
		$cliente  = $this->db->select("cl.nome_cliente, cl.cpf, cl.email, cl.telefone, cl.renda_bruta, cl.compr_dependente, cl.fgts,
		cl.valor_fgts, cl.valor_sinal, cl.loteamento_zona, cl.c0, cl.c0_s, cl.c1, cl.c2, cl.c3, cl.c4, cl.c5, cl.com_muro, 
		cl.outro_modelo, cl.valor_lote, cl.valor_casa, cl.extra, cl.muro, cl.cerca_eletrica, cl.portao_automatico, cl.observacoes, DATE_FORMAT(cl.createdAt,'%d/%m/%Y') AS date")
		->from("clientes AS cl")
		->where("cl.id", $cliente_id)
		->get()->result();
		$arquivos = $this->db->select("a.caminho, a.descricao")->from("clientes_arquivos AS a")->where("a.cliente_id", $cliente_id)->get()->result();
		$emails   = array($corretor[0]->email, "contato@construvitta.com.br", $imob[0]->email, $correspondente[0]->email);
		
		//print_r($cliente_id); exit;

		$view = APPPATH . "views/modulos/clientes/mail/mail.html";
		$message = file_get_contents($view);
		$message = str_replace('%nome_cliente%', $cliente[0]->nome_cliente, $message); 
		$message = str_replace('%cpf_cliente%', $cliente[0]->cpf, $message);
		$message = str_replace('%telefone%', $cliente[0]->telefone, $message);
		$message = str_replace('%email%', $cliente[0]->email, $message);
		$message = str_replace('%nome_corretor%', $corretor[0]->nome_corretor, $message);
		$message = str_replace('%nome_imobiliaria%', $imob[0]->nome_imobiliaria, $message);
		$message = str_replace('%nome_correspondente%', $correspondente[0]->nome_correspondente, $message);
		$message = str_replace('%renda_bruta%', $cliente[0]->renda_bruta, $message);
		$message = str_replace('%compr_dependente%', $cliente[0]->compr_dependente, $message);
		$message = str_replace('%fgts%', $cliente[0]->fgts, $message);
		$message = str_replace('%valor_fgts%', $cliente[0]->valor_fgts, $message);
		$message = str_replace('%valor_sinal%', $cliente[0]->valor_sinal, $message);
		$message = str_replace('%loteamento_zona%', $cliente[0]->loteamento_zona, $message);
		$message = str_replace('%outro_modelo%', $cliente[0]->outro_modelo, $message);
		$message = str_replace('%observacoes%', $cliente[0]->observacoes, $message);

		$mail = $this->phpmailer_lib->load();

		//SMTP Configuration
		$mail->SetLanguage('br');
		$mail->CharSet = "UTF-8";
		$mail->Encoding = 'base64';
		$mail->IsSMTP(); // enable SMTP
		$mail->SMTPDebug = false; // debugging: 1 = errors and messages, 2 = messages only
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
		foreach ($emails as $key => $e) {
			$mail->AddAddress("{$e}");
		}
		foreach ($arquivos as $key => $uf) {
			$mail->AddAttachment($uf->caminho . $uf->descricao);
		}
		//$mail->AddAttachment($uploadfile);
		$mail->isHTML(true);
		$mail->Subject = "Dados Referentes ao Cadastro de: " . $cliente[0]->nome_cliente;
		$mail->MsgHTML($message);
		//$mail->Body = "Escreva o texto do email aqui2222";
		if(!$mail->Send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
			$this->data['msg_success'] = $this->session->set_flashdata("msg_success", "Registro adicionado com sucesso!");
			redirect('clientes-contratos/index');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */