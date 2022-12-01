<?php
/**
 *
 */
class Tiporeserva extends CI_Model
{
  function __construct()
  {
    parent :: __construct();

  }
  public function insertar ($datos){
    return $this->db->insert("tipo_reserva",$datos);
  }
  public function obtenerTodos(){
      $tipo_reserva=$this->db->get("tipo_reserva");
      if ($tipo_reserva->num_rows()>0) {
        return $tipo_reserva;
      } else {
        return false;
      }
  }
  // funcion para eliminar un estudiante se resive
  public function eliminarPorId($id){
    $this->db->where("id_tip",$id);
    return $this->db->delete("tipo_reserva");
  }
  public function obtenerPorId($id){
    $this->db->where("id_tip",$id);
    $tipo_reserva=$this->db->get("tipo_reserva");
    if ($tipo_reserva->num_rows()>0) {
      return $tipo_reserva->row();

    } else {
      return false;
    }
  }
  //proceso de actualozacion
  public function actualizar($id,$datos){
    $this->db->where("id_tip",$id);
    return $this->db->update("tipo_reserva",$datos);
  }
}//cierre de la case no borrar
