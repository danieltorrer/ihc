<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		
		$this->load->library('grocery_CRUD');    
	}

	public function index(){
		$this->load->view("login_view");
	}


	public function login(){
		$this->form_validation->set_rules('usuario', 'usuario', 'required');
		$this->form_validation->set_rules('pass', 'contraseña', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login_view');
		}

		else {
			$this->load->model("login_model");
			$consulta = $this->login_model->login( 
				$this->security->xss_clean($this->input->post('usuario')), 
				sha1($this->security->xss_clean($this->input->post('pass') ))
				);

			if ($consulta) {

				$sesion_data = array(
					"usuario" => $consulta[0]["nombre"],
					);

				$this->session->set_userdata($sesion_data);

				redirect("admin/menu");
				

			} else {
				redirect("inicio");
			}

		}
	}

	public function menu(){
		if ($this->isValidated()) {
			
			$this->grocery_crud->set_table('alimento');
			$this->grocery_crud->set_field_upload('imagen_1','img');
			$this->grocery_crud->set_field_upload('imagen_2','img');
			$this->grocery_crud->set_field_upload('imagen_3','img');
			$this->grocery_crud->set_field_upload('icono','img');
			$output = $this->grocery_crud->render();
			$this->load->view("adminmenu_view",$output);
		}

		else
			redirect("menu/index");
	}

	public function isValidated() {
		return isset($this->session->userdata['usuario']);
	}

	public function salir(){
		$this->session->sess_destroy();
		redirect("inicio");
	}

}