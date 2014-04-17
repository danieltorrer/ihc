<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function index(){
		$this->load->view("index_view");
	}

	public function desayuno(){
		$this->load->model("food_model");
		$resultado["bebida"] = $this->food_model->desayuno("Bebida");
		$resultado["alimento"] = $this->food_model->desayuno("Alimento");
		$resultado["tipo"] = "Desayuno";
		$this->load->view("comida", $resultado);
	}

	public function comida(){
		$this->load->model("food_model");
		$resultado["bebida"] = $this->food_model->comida("Bebida");
		$resultado["alimento"] = $this->food_model->comida("Alimento");
		$resultado["tipo"] = "Comida";
		$this->load->view("comida", $resultado);
	}

	public function cena(){
		$this->load->model("food_model");
		$resultado["bebida"] = $this->food_model->cena("Bebida");
		$resultado["alimento"] = $this->food_model->cena("Alimento");
		$resultado["tipo"] = "Cena";
		$this->load->view("comida", $resultado);
	}

	public function item($id){
		$this->load->model("food_model");
		$resultado["datos_item"] = $this->food_model->getInfo($id);
		$this->load->view("singlefood_view", $resultado);
	}

}