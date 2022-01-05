<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cusuario extends CI_Controller {

	public function index(){
		if ($this->session->userdata('G-ocho')) {
			header("location:".base_url()."bienvenido");
		}else{
			$this->load->view('Vlogin');
		}

	}


	public function registro(){
		if ($this->session->userdata('G-ocho')) {
			header("location:".base_url()."bienvenido");
		}else{
			$this->load->view('Vregistro');
		}

	}



	public function usuario(){
		if ($this->session->userdata('G-ocho')) {
			header("location:".base_url()."bienvenido");
		}else{
			$this->load->view('Vusuario');
		}

	}





}
