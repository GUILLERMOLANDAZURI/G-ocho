<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Capi extends CI_Controller {

	public function index(){
		// if ($this->session->userdata('G-ocho')) {
			$this->load->view('Vapi');
		// }else{
		// 	header("location:".base_url());
		// }
	}
}
