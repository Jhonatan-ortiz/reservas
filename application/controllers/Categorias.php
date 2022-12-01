<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Categorias extends CI_Controller {
		public function __construct(){
			parent ::__construct();
			$this->load-> model("categoria");
}
// rendereza la vista index de estudiantes
	public function index()
	{
		$data["listadoCategoria"]=$this->categoria->obtenerTodos();
		$this->load->view('header');
		$this->load->view('categorias/index',$data);
		$this->load->view('footer');
// renderiza la vista nueva de estudiante
	}
  public function nuevo(){
    $this->load->view('header');
		$this->load->view('categorias/nuevo');
		$this->load->view('footer');

}
	// funcian para capturar los valores de la clase nuevo
	public function guardarCategoria(){
		$datosNuevaCategoria=array(
			"descripcion_cat"=>$this->input->post('descripcion_cat'),
			"estado_cat"=>$this->input->post('estado_cat'),
			"tipo_cat"=>$this->input->post('tipo_cat')

		);
		print_r($datosNuevaCategoria);
		if($this->categoria->insertar($datosNuevaCategoria)){
			redirect('categorias/index');
		}else{
			echo "<h1>error</h1>";
		}
	}
	//funcion para eliminar estudiantes
	public function borrar($id_cat){
		if ($this->categoria->eliminarPorId($id_cat)) {
			redirect('categorias/index');
		} else {
			echo "Error al Eliminar :(";
		}
	}
	public function actualizar($id){
		$data["categoriaEditar"]=$this->categoria->obtenerPorId($id);
		$this->load->view("header");
		$this->load->view("categorias/actualizar",$data);
		$this->load->view("footer");
	}
	public function procesarActualizacion(){
		$datosCategoriaEditado=array(
      "descripcion_cat"=>$this->input->post('descripcion_cat'),
      "estado_cat"=>$this->input->post('estado_cat'),
      "tipo_cat"=>$this->input->post('tipo_cat')
		);
	 $id=$this->input->post("id_cat");
		if($this->categoria->actualizar($id,$datosCategoriaEditado)){
			redirect('categorias/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
}
