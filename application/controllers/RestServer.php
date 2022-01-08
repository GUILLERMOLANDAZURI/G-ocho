<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class RestServer extends REST_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function Crear_post(){
		$array = array('hola','mundo','como estas? '.$this->input->post('hola'));
		$this->response($array);
	}


}
