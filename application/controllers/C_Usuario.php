<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_Usuario extends CI_Controller {

	public function index(){
		if ($this->session->userdata('G-ocho')) {
			header("location:".base_url()."bienvenido");
		}else{
			$vista = array();
			if ($this->input->server('REQUEST_METHOD')=='POST') {
				$tablet_browser = 0;
				$mobile_browser = 0;
				if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
					$tablet_browser++;
				}
				if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
					$mobile_browser++;
				}
				if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
					$mobile_browser++;
				}
				$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
				$mobile_agents = array(
					'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
					'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
					'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
					'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
					'newt','noki','palm','pana','pant','phil','play','port','prox',
					'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
					'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
					'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
					'wapr','webc','winw','winw','xda ','xda-');

				if (in_array($mobile_ua,$mobile_agents)) {
					$mobile_browser++;
				}
				if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'opera mini') > 0) {
					$mobile_browser++;
					$stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
					if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
						$tablet_browser++;
					}
				}
				if ($tablet_browser > 0) {
					$device = 'tablet';
				}
				else if ($mobile_browser > 0) {
					$device = 'mobile';
				}
				else {
					$device = 'desktop';
				}
				$usuario = $this->input->post('nombre'); 
				$contrasena = $this->input->post('contrasena');
				$this->load->model("M_Usuario");
				$data_Usuario = $this->M_Usuario->verificar_usuario($usuario);
				if ($data_Usuario!= null) {
					$data = array();
					$data ["usuario"] = $data_Usuario;

					foreach ($data as $key => $value) {
						if (($value["Contrasena"] == $contrasena)&&($value["Estado"]  =='ACTIVO')){
							$sesion = array(
								'usuario' => $value["Nombre"],
								'contrasena' => $value["Contrasena"],
								'device' => $device,
								'G-ocho'=> true );
							$this->session->set_userdata($sesion);
							header("location:".base_url()."bienvenido");
						}else{
							$vista ["mensaje"] = 'error';
							$vista ["texto"] = 'Usuario y/o contraseña incorrectos';
						}
					}
				}else{
					$vista ["mensaje"] = 'error';
					$vista ["texto"] = 'El Usuario '.$usuario.' no exite.!';
				}
			}
			$this->load->view('V_Login',$vista);
		}
	}
	public function registro(){
		if ($this->session->userdata('G-ocho')) {
			header("location:".base_url()."bienvenido");
		}else{
			$vista = array();
			if ($this->input->server('REQUEST_METHOD')=='POST') {
				$usuario = $this->input->post('nombre'); 
				$contrasena = $this->input->post('contrasena');
				$this->load->model("M_Usuario");
				$data_Usuario = $this->M_Usuario->verificar_usuario($usuario);
				if ($data_Usuario!= null) {
					$vista ["mensaje"] = 'error';
					$vista ["texto"] = 'El usuario '.$usuario.' ya esta registrado.!' ;
				}else{
					$data = array();
					$data ['Nombre'] = $usuario;
					$data ['Contrasena'] = $contrasena;
					$data ['Estado'] = 'ACTIVO';
					if ($this->M_Usuario->insertar($data)>0) {
						$vista ["mensaje"] = 'success';
						$vista ["texto"] = 'Usuario creado.!';
					}else{
						$vista ["mensaje"] = 'error';
						$vista ["texto"] = 'Error al crear usuario!';
					}
				}
			}
			$this->load->view('V_Registro',$vista);
		}
	}
	public function actualizar(){
		if ($this->session->userdata('G-ocho')) {
			$vista = array();
			if ($this->input->server('REQUEST_METHOD')=='POST') {
				if (isset($_POST['borrar'])) {
					$this->load->model("M_Usuario");
					$data = array();
					$data ['Estado'] = 'INACTIVO';
					if ($this->M_Usuario->actualizar($this->session->userdata('usuario'),$data)>0) {
						header("location:".base_url()."salir");
					}else{
						$vista ["mensaje"] = 'error';
						$vista ["texto"] = 'Error al eliminar usuario!';
					} 
				}else{ 
					$contrasena = $this->input->post('contrasena');
					$this->load->model("M_Usuario");
					$data = array();
					$data ['Contrasena'] = $contrasena;
					if ($this->M_Usuario->actualizar($this->session->userdata('usuario'),$data)>0) {
						$vista ["mensaje"] = 'success';
						$vista ["texto"] = 'Usuario actualizaco.!';
					}else{
						$vista ["mensaje"] = 'error';
						$vista ["texto"] = 'Error al actualizar usuario!';
					}
				}
			}
			$this->load->view('V_Usuario',$vista);
		}else{
			header("location:".base_url());
		}
	}
	public function salir(){
		$this->session->sess_destroy();
		header("location:".base_url());
	}
}
