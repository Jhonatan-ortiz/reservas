<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Productos extends CI_Controller {
		public function __construct(){
			parent ::__construct();
			$this->load-> model("producto");
}
// rendereza la vista index de estudiantes
	public function index()
	{
		$data["listadoProductos"]=$this->producto->obtenerTodos();
		$this->load->view('header');
		$this->load->view('productos/index',$data);
		$this->load->view('footer');
// renderiza la vista nueva de estudiante
	}
  public function nuevo(){
    $this->load->view('header');
		$this->load->view('productos/nuevo');
		$this->load->view('footer');

}
	// funcian para capturar los valores de la clase nuevo
	public function guardarProducto(){
		$datosNuevoProducto=array(
      "nombre_pro"=>$this->input->post('nombre_pro'),
			"detalle_pro"=>$this->input->post('detalle_pro'),
			"precio_pro"=>$this->input->post('precio_pro'),
			"cantidad_pro"=>$this->input->post('cantidad_pro'),
			"descripcion_pro"=>$this->input->post('descripcion_pro')
		);
		print_r($datosNuevoProducto);
		if($this->producto->insertar($datosNuevoProducto)){
			redirect('productos/index');
		}else{
			echo "<h1>error</h1>";
		}
	}
	//funcion para eliminar estudiantes
	public function borrar($id_pro){
		if ($this->producto->eliminarPorId($id_pro)) {
			redirect('productos/index');
		} else {
			echo "Error al Eliminar :(";
		}
	}
	public function actualizar($id){
		$data["productoEditar"]=$this->producto->obtenerPorId($id);
		$this->load->view("header");
		$this->load->view("productos/actualizar",$data);
		$this->load->view("footer");
	}
	public function procesarActualizacion(){
		$datosProductoEditado=array(
      "nombre_pro"=>$this->input->post('nombre_pro'),
			"detalle_pro"=>$this->input->post('detalle_pro'),
			"precio_pro"=>$this->input->post('precio_pro'),
			"cantidad_pro"=>$this->input->post('cantidad_pro'),
			"descripcion_pro"=>$this->input->post('descripcion_pro')
		);
	 $id=$this->input->post("id_pro");
		if($this->producto->actualizar($id,$datosProductoEditado)){
			redirect('productos/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
}
