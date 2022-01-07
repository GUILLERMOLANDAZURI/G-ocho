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
}
?>