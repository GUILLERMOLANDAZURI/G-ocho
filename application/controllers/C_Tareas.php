<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_Tareas extends CI_Controller {

	public function index(){
		// if ($this->session->userdata('G-ocho')) {
			$this->load->view('V_Tareas');
		// }else{
		// 	header("location:".base_url());
		// }
	}
}
