<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_Tareas extends CI_Controller {

	public function index(){
		if ($this->session->userdata('G-ocho')) {
			$vista = array();
			if ($this->input->server('REQUEST_METHOD')=='POST'){
				if (isset($_POST['crear'])) {
					date_default_timezone_set("America/Bogota"); $fecha=date("Y-m-d");
					$data = array();
					$data ['Detalle'] = $this->input->post('detalle');
					$data ['FechaVencimiento'] = $this->input->post('fecha');
					$data ['FechaCreacion'] = $fecha;
					$data ['Finalizado'] = 'NO';
					$data ['Nombre'] = $this->session->userdata('usuario');
					$this->load->model("M_Tarea");
					if ($this->M_Tarea->insertar($data)>0) {
						$vista ["mensaje"] = 'success';
						$vista ["texto"] = 'Tarea creada.!';
					}else{
						$vista ["mensaje"] = 'error';
						$vista ["texto"] = 'Error al crear tarea!';
					}
				}
				if (isset($_POST['actualizar'])) {
					$data = array();
					$data ['Detalle'] = $this->input->post('detalle');
					$data ['FechaVencimiento'] = $this->input->post('fecha');
					$data ['Finalizado'] = $this->input->post('finalizo');
					$this->load->model("M_Tarea");
					if ($this->M_Tarea->Actualizar($_POST['actualizar'],$data)>0) {
						$vista ["mensaje"] = 'success';
						$vista ["texto"] = 'Tarea actualizada.!';
					}else{
						$vista ["mensaje"] = 'error';
						$vista ["texto"] = 'Error al actualizar tarea!';
					}
				}

				if (isset($_POST['borrar'])) {
					$this->load->model("M_Tarea");
					if ($this->M_Tarea->borrar($_POST['borrar'])>0) {
						$vista ["mensaje"] = 'success';
						$vista ["texto"] = 'Tarea eliminada.!';
					}else{
						$vista ["mensaje"] = 'error';
						$vista ["texto"] = 'Error al eliminar tarea!';
					}
				}

			}

			$this->load->model("M_Tarea");
			$vista ["realizados"] = $this->M_Tarea->estado($this->session->userdata('usuario'),'SI');
			$vista ["norealizados"] = $this->M_Tarea->estado($this->session->userdata('usuario'),'NO');
			$vista ["tareas"] = $this->M_Tarea->ListarTareas($this->session->userdata('usuario'));

			$this->load->view('V_Tareas',$vista);
		}else{
			header("location:".base_url());
		}
	}
}
