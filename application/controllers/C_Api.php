<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_Api extends CI_Controller {

	public function index(){
		// if ($this->session->userdata('G-ocho')) {
			$this->load->view('V_Api');
		// }else{
		// 	header("location:".base_url());
		// }
	}
}
