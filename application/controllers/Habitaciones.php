<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Habitaciones extends CI_Controller {
		public function __construct(){
			parent ::__construct();
			$this->load-> model("habitacion");
}
// rendereza la vista index de estudiantes
	public function index()
	{
		$data["listadoHabitaciones"]=$this->habitacion->obtenerTodos();
		$this->load->view('header');
		$this->load->view('habitaciones/index',$data);
		$this->load->view('footer');
// renderiza la vista nueva de estudiante
	}
  public function nuevo(){
    $this->load->view('header');
		$this->load->view('habitaciones/nuevo');
		$this->load->view('footer');

}
	// funcian para capturar los valores de la clase nuevo
	public function guardarHabitacion(){
		$datosNuevaHabitacion=array(
			"numero_hab"=>$this->input->post('numero_hab'),
			"detalle_hab"=>$this->input->post('detalle_hab'),
			"precio_hab"=>$this->input->post('precio_hab'),
			"estado_hab"=>$this->input->post('estado_hab')
		);
		print_r($datosNuevaHabitacion);
		if($this->habitacion->insertar($datosNuevaHabitacion)){
			redirect('habitaciones/index');
		}else{
			echo "<h1>error</h1>";
		}
	}
	//funcion para eliminar estudiantes
	public function borrar($id_hab){
		if ($this->habitacion->eliminarPorId($id_hab)) {
			redirect('habitaciones/index');
		} else {
			echo "Error al Eliminar :(";
		}
	}
	public function actualizar($id){
		$data["habitacionEditar"]=$this->habitacion->obtenerPorId($id);
		$this->load->view("header");
		$this->load->view("habitaciones/actualizar",$data);
		$this->load->view("footer");
	}
	public function procesarActualizacion(){
		$datosHabitacionEditado=array(
      "numero_hab"=>$this->input->post('numero_hab'),
			"detalle_hab"=>$this->input->post('detalle_hab'),
			"precio_hab"=>$this->input->post('precio_hab'),
			"estado_hab"=>$this->input->post('estado_hab')
		);
	 $id=$this->input->post("id_hab");
		if($this->habitacion->actualizar($id,$datosHabitacionEditado)){
			redirect('habitaciones/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
}
