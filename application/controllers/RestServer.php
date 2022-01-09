<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Restserver\Libraries\REST_Controller;
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
class RestServer extends REST_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
	}

	public function Autenticacion($usuario = '',$contrasena = ''){
		$this->load->model("M_Usuario");
		$data_Usuario = $this->M_Usuario->verificar_usuario($usuario);
		if ($data_Usuario!= null) {
			$usuario = array();
			$usuario ["usuario"] = $data_Usuario;
			foreach ($usuario as $key => $value) {
				if (($value["Contrasena"] == $contrasena)&&($value["Estado"]  =='ACTIVO')){
					return 'success';
				}else{
					$vista ["mensaje"] = 'error';
					$vista ["texto"] = 'Usuario y/o contraseña incorrectos';
					$this->response($vista);
				}
			}
		}else{
			$vista ["mensaje"] = 'error';
			$vista ["texto"] = 'El Usuario '.$this->input->post('nombre').' no exite.!';
			$this->response($vista);
		}
	}

	public function Crear_post(){
		date_default_timezone_set("America/Bogota"); $fecha=date("Y-m-d");
		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('contrasena', 'Contrasena', 'required');
		$this->form_validation->set_rules('detalle', 'Detalle', 'required');
		$this->form_validation->set_rules('fecha', 'Fecha', 'required');
		if ($this->form_validation->run() == TRUE){
			$resultado = $this->Autenticacion($this->input->post('nombre'),$this->input->post('contrasena'));
			if ($resultado == 'success') {
				$data ['Detalle'] = $this->input->post('detalle');
				$data ['FechaVencimiento'] = $this->input->post('fecha');
				$data ['FechaCreacion'] = $fecha;
				$data ['Finalizado'] = 'NO';
				$data ['Nombre'] = $this->input->post('nombre');
				$this->load->model("M_Tarea");
				if ($this->M_Tarea->insertar($data)>0) {
					$this->response($data);
				}else{
					$vista ["mensaje"] = 'error';
					$vista ["texto"] = 'Error al crear tarea!';
					$this->response($vista);
				}
			}else{
				$this->response($resultado);
			}
		}else{
			$vista ["mensaje"] = 'error';
			$vista ["texto"] = validation_errors();
			$this->response($vista);
		}
	}

	public function Actualizar_post(){
		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('contrasena', 'Contrasena', 'required');
		$this->form_validation->set_rules('tarea', 'Tarea', 'required');
		$this->form_validation->set_rules('detalle', 'Detalle', 'required');
		$this->form_validation->set_rules('fecha', 'Fecha', 'required');
		$this->form_validation->set_rules('finalizo', 'Finalizo?', 'required');
		if ($this->form_validation->run() == TRUE){	
			$resultado = $this->Autenticacion($this->input->post('nombre'),$this->input->post('contrasena'));
			if ($resultado =='success') {
				$data = array();
				$data ['Detalle'] = $this->input->post('detalle');
				$data ['FechaVencimiento'] = $this->input->post('fecha');
				$data ['Finalizado'] = $this->input->post('finalizo');
				$this->load->model("M_Tarea");
				if ($this->M_Tarea->Actualizar($this->input->post('tarea'),$data)>0) {
					$this->response($data);
				}else{
					$vista ["mensaje"] = 'error';
					$vista ["texto"] = 'Error al crear tarea!';
					$this->response($vista);
				}
			}else{
				$this->response($resultado);
			}
		}else{
			$vista ["mensaje"] = 'error';
			$vista ["texto"] = validation_errors();
			$this->response($vista);
		}
	}

	public function Borrar_post(){
		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('contrasena', 'Contrasena', 'required');
		$this->form_validation->set_rules('tarea', 'Tarea', 'required');
		if ($this->form_validation->run() == TRUE){	
			$resultado = $this->Autenticacion($this->input->post('nombre'),$this->input->post('contrasena'));
			if ($resultado =='success') {
				$this->load->model("M_Tarea");
				if ($this->M_Tarea->borrar($this->input->post('tarea'))>0) {
					//$this->response($data);
				}else{
					$vista ["mensaje"] = 'error';
					$vista ["texto"] = 'Error al crear tarea!';
					$this->response($vista);
				}
			}else{
				$this->response($resultado);
			}
		}else{
			$vista ["mensaje"] = 'error';
			$vista ["texto"] = validation_errors();
			$this->response($vista);
		}
	}

	public function Consultar_get(){
		if ($this->input->get('parametro') !='' ){	
			$resultado = $this->Autenticacion($this->input->get('nombre'),$this->input->get('contrasena'));
			if ($resultado =='success') {
				$this->load->model("M_Tarea");
				switch($this->input->get('parametro')) {
					case 'TODO':
					$this->response($this->M_Tarea->listar());
					break;
					case 'USUARIO':
					$this->response($this->M_Tarea->ListarTareas($this->input->get('nombre')));
					break;
					case 'FINALIZADO':
					$this->response($this->M_Tarea->ListarEstado('SI'));
					break;
					case 'PENDIENTE':
					$this->response($this->M_Tarea->ListarEstado('NO'));
					break;
					default:
					echo 'NO HAS INGRESSADO UN PARAMETRO VALIDO';
				}
				$vista ["realizados"] = $this->M_Tarea->estado($this->session->userdata('usuario'),'SI');
				$vista ["realizados"] = $this->M_Tarea->estado($this->session->userdata('usuario'),'NO');
			}else{
				$this->response($resultado);
			}
		}else{
			$vista ["mensaje"] = 'error';
			$vista ["texto"] = 'NO HAS INGRESSADO UN PARAMETRO';
			$this->response($vista);
		}
	}
}
