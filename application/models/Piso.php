<?php
/**
 *
 */
class Piso extends CI_Model
{
  function __construct()
  {
    parent :: __construct();

  }
  public function insertar ($datos){
    return $this->db->insert("piso",$datos);
  }
  public function obtenerTodos(){
      $piso=$this->db->get("piso");
      if ($piso->num_rows()>0) {
        return $piso;
      } else {
        return false;
      }
  }
  // funcion para eliminar un estudiante se resive
  public function eliminarPorId($id){
    $this->db->where("id_pis",$id);
    return $this->db->delete("piso");
  }
  public function obtenerPorId($id){
    $this->db->where("id_pis",$id);
    $piso=$this->db->get("piso");
    if ($piso->num_rows()>0) {
      return $piso->row();

    } else {
      return false;
    }
  }
  //proceso de actualozacion
  public function actualizar($id,$datos){
    $this->db->where("id_pis",$id);
    return $this->db->update("piso",$datos);
  }
}//cierre de la case no borrar
