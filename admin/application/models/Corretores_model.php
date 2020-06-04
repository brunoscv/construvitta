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

	
}