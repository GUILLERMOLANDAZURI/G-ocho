<?php 
class M_Usuario extends Ci_Model{
	public function __contruct(){
		parent::__contruct();
	}
	private $tabla = "Usuarios";
	public function insertar($datos){
		return $this->db->insert($this->tabla,$datos);
	}
	public function listar(){
		$resultado = $this->db->get($this->tabla);
		return $resultado->result();
	}
	public function actualizar($id,$datos){
		$this->db->where("Nombre",$id);
		return $this->db->update($this->tabla,$datos);
	}
	public function borrar($id){
		$this->db->where("Nombre",$id);
		return $this->db->delete($this->tabla);
	}
	public function verificar_usuario($id){
		$this->db->where("Nombre",$id);
		$resultado = $this->db->get($this->tabla);
		return $resultado->row_array();
	}
	
}
?>