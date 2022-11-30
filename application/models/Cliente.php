<?php
/**
 *
 */
class Cliente extends CI_Model
{
  function __construct()
  {
    parent :: __construct();

  }
  public function insertar ($datos){
    return $this->db->insert("cliente",$datos);
  }
  public function obtenerTodos(){
      $cliente=$this->db->get("cliente");
      if ($cliente->num_rows()>0) {
        return $cliente;
      } else {
        return false;
      }
  }
  // funcion para eliminar un estudiante se resive
  public function eliminarPorId($id){
    $this->db->where("id_cli",$id);
    return $this->db->delete("cliente");
  }
  public function obtenerPorId($id){
    $this->db->where("id_cli",$id);
    $cliente=$this->db->get("cliente");
    if ($cliente->num_rows()>0) {
      return $cliente->row();

    } else {
      return false;
    }
  }
  //proceso de actualozacion
  public function actualizar($id,$datos){
    $this->db->where("id_cli",$id);
    return $this->db->update("cliente",$datos);
  }
}//cierre de la case no borrar
