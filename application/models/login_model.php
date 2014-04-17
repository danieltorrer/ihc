<?php

class login_model extends CI_Model {

	public function login($usuario, $pass){
		$data = array(
			'nombre' => $usuario,
			'password' => $pass
			);

		$query = $this->db->get_where('usuario', $data);
		return $query->result_array();
	}

}

?>