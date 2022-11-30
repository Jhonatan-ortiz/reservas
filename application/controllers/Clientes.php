<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Clientes extends CI_Controller {
		public function __construct(){
			parent ::__construct();
			$this->load-> model("cliente");
}
// rendereza la vista index de estudiantes
	public function index()
	{
		$data["listadoClientes"]=$this->cliente->obtenerTodos();
		$this->load->view('header');
		$this->load->view('clientes/index',$data);
		$this->load->view('footer');
// renderiza la vista nueva de estudiante
	}
  public function nuevo(){
    $this->load->view('header');
		$this->load->view('clientes/nuevo');
		$this->load->view('footer');

}
	// funcian para capturar los valores de la clase nuevo
	public function guardarCliente(){
		$datosNuevoCliente=array(
			"cedula_cli"=>$this->input->post('cedula_cli'),
			"apellido_cli"=>$this->input->post('apellido_cli'),
			"nombre_cli"=>$this->input->post('nombre_cli'),
			"telefono_cli"=>$this->input->post('telefono_cli'),
			"direccion_cli"=>$this->input->post('direccion_cli'),
			"ciudad_cli"=>$this->input->post('ciudad_cli')
		);
		print_r($datosNuevoCliente);
		if($this->cliente->insertar($datosNuevoCliente)){
			redirect('clientes/index');
		}else{
			echo "<h1>error</h1>";
		}
	}
	//funcion para eliminar estudiantes
	public function borrar($id_cli){
		if ($this->cliente->eliminarPorId($id_cli)) {
			redirect('clientes/index');
		} else {
			echo "Error al Eliminar :(";
		}
	}
	public function actualizar($id){
		$data["clienteEditar"]=$this->cliente->obtenerPorId($id);
		$this->load->view("header");
		$this->load->view("clientes/actualizar",$data);
		$this->load->view("footer");
	}
	public function procesarActualizacion(){
		$datosClienteEditado=array(
      "cedula_cli"=>$this->input->post('cedula_cli'),
			"apellido_cli"=>$this->input->post('apellido_cli'),
			"nombre_cli"=>$this->input->post('nombre_cli'),
			"telefono_cli"=>$this->input->post('telefono_cli'),
			"direccion_cli"=>$this->input->post('direccion_cli'),
			"ciudad_cli"=>$this->input->post('ciudad_cli')
		);
	 $id=$this->input->post("id_cli");
		if($this->cliente->actualizar($id,$datosClienteEditado)){
			redirect('clientes/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
}
