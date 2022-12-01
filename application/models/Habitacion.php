<?php
/**
 *
 */
class Habitacion extends CI_Model
{
  function __construct()
  {
    parent :: __construct();

  }
  public function insertar ($datos){
    return $this->db->insert("habitacion",$datos);
  }
  public function obtenerTodos(){
      $habitacion=$this->db->get("habitacion");
      if ($habitacion->num_rows()>0) {
        return $habitacion;
      } else {
        return false;
      }
  }
  // funcion para eliminar un estudiante se resive
  public function eliminarPorId($id){
    $this->db->where("id_hab",$id);
    return $this->db->delete("habitacion");
  }
  public function obtenerPorId($id){
    $this->db->where("id_hab",$id);
    $habitacion=$this->db->get("habitacion");
    if ($habitacion->num_rows()>0) {
      return $habitacion->row();

    } else {
      return false;
    }
  }
  //proceso de actualozacion
  public function actualizar($id,$datos){
    $this->db->where("id_hab",$id);
    return $this->db->update("habitacion",$datos);
  }
}//cierre de la case no borrar
