<?php
/**
 *
 */
class Categoria extends CI_Model
{
  function __construct()
  {
    parent :: __construct();

  }
  public function insertar ($datos){
    return $this->db->insert("categoria",$datos);
  }
  public function obtenerTodos(){
      $categoria=$this->db->get("categoria");
      if ($categoria->num_rows()>0) {
        return $categoria;
      } else {
        return false;
      }
  }
  // funcion para eliminar un estudiante se resive
  public function eliminarPorId($id){
    $this->db->where("id_cat",$id);
    return $this->db->delete("categoria");
  }
  public function obtenerPorId($id){
    $this->db->where("id_cat",$id);
    $categoria=$this->db->get("categoria");
    if ($categoria->num_rows()>0) {
      return $categoria->row();

    } else {
      return false;
    }
  }
  //proceso de actualozacion
  public function actualizar($id,$datos){
    $this->db->where("id_cat",$id);
    return $this->db->update("categoria",$datos);
  }
}//cierre de la case no borrar
