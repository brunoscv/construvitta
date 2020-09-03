<?php

class Corretores_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}

	public function get_corretores() {
		return	$this->db->query(" SELECT id, nome_corretor
								  	FROM corretores
								  ORDER BY nome_corretor ASC ")
						 ->result();
	}
	
	public function get_corretor($corretor_id) {
		return	$this->db->query(" SELECT id, nome_corretor
								  	FROM corretores
									WHERE id = $corretor_id
								  ORDER BY nome_corretor ASC ")
						 ->result();
	}

	public function get_corretores_by_imobiliaria($imobiliaria_id) {
		return	$this->db->query(" SELECT c.id, c.nome_corretor
								  	FROM corretores AS c
									INNER JOIN imobiliarias AS i
									ON c.imobiliarias_id = i.id
									WHERE c.imobiliarias_id = $imobiliaria_id
								  ORDER BY nome_corretor ASC ")
						 ->result();
	}

	
}