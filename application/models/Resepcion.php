<?php
/**
 *
 */
class resepcion extends CI_Model
{
  function __construct()
  {
    parent :: __construct();

  }
  public function insertar ($datos){
    return $this->db->insert("resepsion",$datos);
  }
  public function obtenerTodos(){
      $resepcion=$this->db->get("resepcion");
      if ($resepcion->num_rows()>0) {
        return $resepcion;
      } else {
        return false;
      }
  }
  // funcion para eliminar un estudiante se resive
  public function eliminarPorId($id){
    $this->db->where("id_res",$id);
    return $this->db->delete("resepcion");
  }
  public function obtenerPorId($id){
    $this->db->where("id_res",$id);
    $resepcion=$this->db->get("resepcion");
    if ($resepcion->num_rows()>0) {
      return $resepcion->row();

    } else {
      return false;
    }
  }
  //proceso de actualozacion
  public function actualizar($id,$datos){
    $this->db->where("id_res",$id);
    return $this->db->update("resepcion",$datos);
  }
}//cierre de la case no borrar
