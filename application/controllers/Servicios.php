<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Servicios extends CI_Controller {
		public function __construct(){
			parent ::__construct();
			$this->load-> model("servicio");
}
// rendereza la vista index de estudiantes
	public function index()
	{
		$data["listadoServicio"]=$this->servicio->obtenerTodos();
		$this->load->view('header');
		$this->load->view('servicios/index',$data);
		$this->load->view('footer');
// renderiza la vista nueva de estudiante
	}
  public function nuevo(){
    $this->load->view('header');
		$this->load->view('servicios/nuevo');
		$this->load->view('footer');

}
	// funcian para capturar los valores de la clase nuevo
	public function guardarServicio(){
		$datosNuevoServicio=array(
      "numero_serhab"=>$this->input->post('numero_serhab'),
      "detalle_serhab"=>$this->input->post('detalle_serhab'),
      "pedido_serhab"=>$this->input->post('pedido_serhab'),
			"piso_serhab"=>$this->input->post('piso_serhab'),
			"precio_serhab"=>$this->input->post('precio_serhab'),
      "estado_serhab"=>$this->input->post('estado_serhab')

		);
		print_r($datosNuevoServicio);
		if($this->servicio->insertar($datosNuevoServicio)){
			redirect('servicios/index');
		}else{
			echo "<h1>error</h1>";
		}
	}
	//funcion para eliminar estudiantes
	public function borrar($id_serhab){
		if ($this->servicio->eliminarPorId($id_serhab)) {
			redirect('servicios/index');
		} else {
			echo "Error al Eliminar :(";
		}
	}
	public function actualizar($id){
		$data["servicioEditar"]=$this->servicio->obtenerPorId($id);
		$this->load->view("header");
		$this->load->view("servicios/actualizar",$data);
		$this->load->view("footer");
	}
	public function procesarActualizacion(){
		$datosServicioEditado=array(
      "numero_serhab"=>$this->input->post('numero_serhab'),
      "detalle_serhab"=>$this->input->post('detalle_serhab'),
      "pedido_serhab"=>$this->input->post('pedido_serhab'),
			"piso_serhab"=>$this->input->post('piso_serhab'),
			"precio_serhab"=>$this->input->post('precio_serhab'),
      "estado_serhab"=>$this->input->post('estado_serhab')

		);
	 $id=$this->input->post("id_serhab");
		if($this->servicio->actualizar($id,$datosServicioEditado)){
			redirect('servicios/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
}
