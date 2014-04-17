<?php

class food_model extends CI_Model {

	public function desayuno($tipo){
		$query = $this->db->get_where('alimento', array('horario_comida' => "Desayuno", "tipo" => $tipo));
		return $query->result_array();
	}

	public function comida($tipo){
		$query = $this->db->get_where('alimento', array('horario_comida' => "Comida", "tipo" => $tipo));
		return $query->result_array();
	}

	public function cena($tipo){
		$query = $this->db->get_where('alimento', array('horario_comida' => "Cena", "tipo" => $tipo));
		return $query->result_array();
	}

	public function getInfo($id){
		$query = $this->db->get_where('alimento', array('id' => $id));
		return $query->result_array();
	}
}

?>