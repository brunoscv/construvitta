<?php

class Imobiliarias_model extends CI_Model {
	public $table = "imobiliarias";

	public function __construct() {
		parent::__construct();
	}

	public function get_imobiliarias() {
		return	$this->db->query(" SELECT id, nome_imobiliaria
								  	FROM imobiliarias
								   ORDER BY nome_imobiliaria ASC ")
						 ->result();
	}

	
}