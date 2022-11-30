<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Resepciones extends CI_Controller {
		public function __construct(){
			parent ::__construct();
			$this->load-> model("resepcion");
}
// rendereza la vista index de estudiantes
	public function index()
	{
		$data["listadoResepciones"]=$this->resepcion->obtenerTodos();
		$this->load->view('header');
		$this->load->view('resepciones/index',$data);
		$this->load->view('footer');
// renderiza la vista nueva de estudiante
	}
  public function nuevo(){
    $this->load->view('header');
		$this->load->view('resepciones/nuevo');
		$this->load->view('footer');

}
	// funcian para capturar los valores de la clase nuevo
	public function guardarResepcion(){
		$datosNuevoResepcion=array(
      "nombre_res"=>$this->input->post('nombre_res'),
			"lugar_res"=>$this->input->post('lugar_res'),
			"detalle_res"=>$this->input->post('detalle_res'),
			"precio_res"=>$this->input->post('precio_res')

		);
		print_r($datosNuevoCliente);
		if($this->resepcion->insertar($datosNuevaResepcion)){
			redirect('resepciones/index');
		}else{
			echo "<h1>error</h1>";
		}
	}
	//funcion para eliminar estudiantes
	public function borrar($id_res){
		if ($this->resepcion->eliminarPorId($id_res)) {
			redirect('resepciones/index');
		} else {
			echo "Error al Eliminar :(";
		}
	}
	public function actualizar($id){
		$data["resepcionEditar"]=$this->resepcion->obtenerPorId($id);
		$this->load->view("header");
		$this->load->view("resepciones/actualizar",$data);
		$this->load->view("footer");
	}
	public function procesarActualizacion(){
		$datosresepcionEditado=array(
      "nombre_res"=>$this->input->post('nombre_res'),
			"lugar_res"=>$this->input->post('lugar_res'),
			"detalle_res"=>$this->input->post('detalle_res'),
			"precio_res"=>$this->input->post('precio_res')

		);
	 $id=$this->input->post("id_res");
		if($this->resepcion->actualizar($id,$datosresepcionEditado)){
			redirect('resepciones/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
}
