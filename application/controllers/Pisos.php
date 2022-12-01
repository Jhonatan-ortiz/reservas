<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Pisos extends CI_Controller {
		public function __construct(){
			parent ::__construct();
			$this->load-> model("piso");
}
// rendereza la vista index de estudiantes
	public function index()
	{
		$data["listadoPisos"]=$this->piso->obtenerTodos();
		$this->load->view('header');
		$this->load->view('pisos/index',$data);
		$this->load->view('footer');
// renderiza la vista nueva de estudiante
	}
  public function nuevo(){
    $this->load->view('header');
		$this->load->view('pisos/nuevo');
		$this->load->view('footer');

}
	// funcian para capturar los valores de la clase nuevo
	public function guardarPiso(){
		$datosNuevoPiso=array(
			"numero_pis"=>$this->input->post('numero_pis'),
			"detalle_pis"=>$this->input->post('detalle_pis'),
			"estado_pis"=>$this->input->post('estado_pis')
		);
		print_r($datosNuevoPiso);
		if($this->piso->insertar($datosNuevoPiso)){
			redirect('pisos/index');
		}else{
			echo "<h1>error</h1>";
		}
	}
	//funcion para eliminar estudiantes
	public function borrar($id_pis){
		if ($this->piso->eliminarPorId($id_pis)) {
			redirect('pisos/index');
		} else {
			echo "Error al Eliminar :(";
		}
	}
	public function actualizar($id){
		$data["pisoEditar"]=$this->piso->obtenerPorId($id);
		$this->load->view("header");
		$this->load->view("pisos/actualizar",$data);
		$this->load->view("footer");
	}
	public function procesarActualizacion(){
		$datosPisoEditado=array(
      "numero_pis"=>$this->input->post('numero_pis'),
			"detalle_pis"=>$this->input->post('detalle_pis'),
			"estado_pis"=>$this->input->post('estado_pis')
		);
	 $id=$this->input->post("id_pis");
		if($this->piso->actualizar($id,$datosPisoEditado)){
			redirect('pisos/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
}
