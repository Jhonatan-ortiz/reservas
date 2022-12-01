<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Tiporeservas extends CI_Controller {
		public function __construct(){
			parent ::__construct();
			$this->load-> model("tipo_reserva");
}
// rendereza la vista index de estudiantes
	public function index()
	{
		$data["listadoTipo"]=$this->tipo->obtenerTodos();
		$this->load->view('header');
		$this->load->view('tipos/index',$data);
		$this->load->view('footer');
// renderiza la vista nueva de estudiante
	}
  public function nuevo(){
    $this->load->view('header');
		$this->load->view('tipos/nuevo');
		$this->load->view('footer');

}
	// funcian para capturar los valores de la clase nuevo
	public function guardarTipo(){
		$datosNuevoTipo=array(
      "numero_tip"=>$this->input->post('numero_tip'),
      "detalle_tip"=>$this->input->post('detalle_tip'),
      "estado_tip"=>$this->input->post('estado_tip')

		);
		print_r($datosNuevoTipo);
		if($this->tipo_reserva->insertar($datosNuevoTipo)){
			redirect('tipos/index');
		}else{
			echo "<h1>error</h1>";
		}
	}
	//funcion para eliminar estudiantes
	public function borrar($id_tip){
		if ($this->tipo_reserva->eliminarPorId($id_tip)) {
			redirect('tipoS/index');
		} else {
			echo "Error al Eliminar :(";
		}
	}
	public function actualizar($id){
		$data["tipoEditar"]=$this->tipo_reserva->obtenerPorId($id);
		$this->load->view("header");
		$this->load->view("tipos/actualizar",$data);
		$this->load->view("footer");
	}
	public function procesarActualizacion(){
		$datosTipoEditado=array(
			"numero_tip"=>$this->input->post('numero_tip'),
      "detalle_tip"=>$this->input->post('detalle_tip'),
      "estado_tip"=>$this->input->post('estado_tip')

		);
	 $id=$this->input->post("id_tip");
		if($this->tipo_reserva->actualizar($id,$datosTipoEditado)){
			redirect('tipos/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
}
