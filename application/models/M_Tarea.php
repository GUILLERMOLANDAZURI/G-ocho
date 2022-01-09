<?php 
class M_Tarea extends Ci_Model{
	public function __contruct(){
		parent::__contruct();
	} 
	private $tabla = "Tareas";
	public function insertar($datos){
		return $this->db->insert($this->tabla,$datos);
	}
	public function listar(){
		$resultado = $this->db->get($this->tabla);
		$this->db->order_by('FechaVencimiento', 'ASC');
		return $resultado->result();
	}
	public function ListarTareas($id){
		$this->db->where("Nombre",$id);
		$this->db->order_by('FechaVencimiento', 'ASC');
		$resultado = $this->db->get($this->tabla);
		return $resultado->result();
	}
	public function ListarEstado($id){
		$this->db->where("Finalizado",$id);
		$this->db->order_by('FechaVencimiento', 'ASC');
		$resultado = $this->db->get($this->tabla);
		return $resultado->result();
	}
	public function Actualizar($id,$datos){
		$this->db->where("idTareas",$id);
		return $this->db->update($this->tabla,$datos);
	}
	public function borrar($id){
		$this->db->where("idTareas",$id);
		return $this->db->delete($this->tabla);
	}
	public function verificar_usuario($datos){
		$this->db->where("Finalizado",$datos);
		$resultado = $this->db->get($this->tabla);
		return $resultado->row_array();
	}
	public function estado($id,$datos){ 
		$resultado = $this->db->query("SELECT COUNT(`idTareas`)as TOTAL FROM `Tareas` WHERE `Finalizado` = '".$datos."' and `Nombre` = '".$id."'");
		return $resultado->result();
	}
}
?>