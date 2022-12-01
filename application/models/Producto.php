<?php
/**
 *
 */
class Producto extends CI_Model
{
  function __construct()
  {
    parent :: __construct();

  }
  public function insertar ($datos){
    return $this->db->insert("producto",$datos);
  }
  public function obtenerTodos(){
      $producto=$this->db->get("producto");
      if ($producto->num_rows()>0) {
        return $producto;
      } else {
        return false;
      }
  }
  // funcion para eliminar un estudiante se resive
  public function eliminarPorId($id){
    $this->db->where("id_pro",$id);
    return $this->db->delete("producto");
  }
  public function obtenerPorId($id){
    $this->db->where("id_pro",$id);
    $producto=$this->db->get("producto");
    if ($producto->num_rows()>0) {
      return $producto->row();

    } else {
      return false;
    }
  }
  //proceso de actualozacion
  public function actualizar($id,$datos){
    $this->db->where("id_pro",$id);
    return $this->db->update("producto",$datos);
  }
}//cierre de la case no borrar
