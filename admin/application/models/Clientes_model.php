<?php

class Clientes_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function get_clientes() {
		return	$this->db->query(" SELECT id, nome_cliente
									FROM clientes
								   ORDER BY nome_cliente ASC ")
						 ->result();
	}

	public function get_cliente($id) {
		return	$this->db->query(" SELECT id, nome_cliente
									FROM clientes
									WHERE id = $id
								   ORDER BY nome_cliente ASC ")
						 ->result();
	}

	public function get_status_clientes() {
		return	$this->db->query(" SELECT id, descricao
									FROM clientes_status
								   ORDER BY descricao ASC ")
						 ->result();
	}


	
}