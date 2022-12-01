<?php
/**
 *
 */
class Empleado extends CI_Model
{
  function __construct()
  {
    parent :: __construct();

  }
  public function insertar ($datos){
    return $this->db->insert("empleado",$datos);
  }
  public function obtenerTodos(){
      $empleado=$this->db->get("empleado");
      if ($empleado->num_rows()>0) {
        return $empleado;
      } else {
        return false;
      }
  }
  // funcion para eliminar un estudiante se resive
  public function eliminarPorId($id){
    $this->db->where("id_emp",$id);
    return $this->db->delete("empleado");
  }
  public function obtenerPorId($id){
    $this->db->where("id_emp",$id);
    $empleado=$this->db->get("empleado");
    if ($empleado->num_rows()>0) {
      return $empleado->row();

    } else {
      return false;
    }
  }
  //proceso de actualozacion
  public function actualizar($id,$datos){
    $this->db->where("id_emp",$id);
    return $this->db->update("empleado",$datos);
  }
}//cierre de la case no borrar
