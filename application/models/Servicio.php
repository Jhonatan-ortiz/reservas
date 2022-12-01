<?php
/**
 *
 */
class Servicio extends CI_Model
{
  function __construct()
  {
    parent :: __construct();

  }
  public function insertar ($datos){
    return $this->db->insert("servicio_de_habitacion",$datos);
  }
  public function obtenerTodos(){
      $servicio=$this->db->get("servicio_de_habitacion");
      if ($servicio->num_rows()>0) {
        return $servicio;
      } else {
        return false;
      }
  }
  // funcion para eliminar un estudiante se resive
  public function eliminarPorId($id){
    $this->db->where("id_serhab",$id);
    return $this->db->delete("servicio_de_habitacion");
  }
  public function obtenerPorId($id){
    $this->db->where("id_serhab",$id);
    $servicio=$this->db->get("servicio_de_habitacion");
    if ($servicio->num_rows()>0) {
      return $servicio->row();

    } else {
      return false;
    }
  }
  //proceso de actualozacion
  public function actualizar($id,$datos){
    $this->db->where("id_serhab",$id);
    return $this->db->update("servicio_de_habitacion",$datos);
  }
}//cierre de la case no borrar
