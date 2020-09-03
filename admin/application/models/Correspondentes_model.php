<?php

class Correspondentes_model extends CI_Model {
	public $table = "correspondentes";

	public function __construct() {
		parent::__construct();
	}
    
    public function get_correspondentes() {
		return $this->db->query( "SELECT * FROM correspondentes ORDER BY nome_correspondente ASC ")
						->result();
	}

	public function get_correspondente($usuario_id) {
		return $this->db->query( "SELECT * FROM correspondentes WHERE id = $usuario_id ORDER BY nome_correspondente ASC ")
						->result();
	}
	
}