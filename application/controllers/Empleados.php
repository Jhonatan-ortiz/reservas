<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Empleados extends CI_Controller {
		public function __construct(){
			parent ::__construct();
			$this->load-> model("empleado");
}
// rendereza la vista index de estudiantes
	public function index()
	{
		$data["listadoEmpleados"]=$this->empleado->obtenerTodos();
		$this->load->view('header');
		$this->load->view('empleados/index',$data);
		$this->load->view('footer');
// renderiza la vista nueva de estudiante
	}
  public function nuevo(){
    $this->load->view('header');
		$this->load->view('empleados/nuevo');
		$this->load->view('footer');

}
	// funcian para capturar los valores de la clase nuevo
	public function guardarEmpleado(){
		$datosNuevoEmpleado=array(
			"cedula_emp"=>$this->input->post('cedula_emp'),
			"apellido_emp"=>$this->input->post('apellido_emp'),
			"nombre_emp"=>$this->input->post('nombre_emp'),
			"telefono_emp"=>$this->input->post('telefono_emp'),
			"direccion_emp"=>$this->input->post('direccion_emp'),
			"estado_emp"=>$this->input->post('estado_emp')
		);
		print_r($datosNuevoEmpleado);
		if($this->empleado->insertar($datosNuevoEmpleado)){
			redirect('empleados/index');
		}else{
			echo "<h1>error</h1>";
		}
	}
	//funcion para eliminar estudiantes
	public function borrar($id_emp){
		if ($this->empleado->eliminarPorId($id_emp)) {
			redirect('empleados/index');
		} else {
			echo "Error al Eliminar :(";
		}
	}
	public function actualizar($id){
		$data["empleadoEditar"]=$this->empleado->obtenerPorId($id);
		$this->load->view("header");
		$this->load->view("empleados/actualizar",$data);
		$this->load->view("footer");
	}
	public function procesarActualizacion(){
		$datosEmpleadoEditado=array(
			"cedula_emp"=>$this->input->post('cedula_emp'),
			"apellido_emp"=>$this->input->post('apellido_emp'),
			"nombre_emp"=>$this->input->post('nombre_emp'),
			"telefono_emp"=>$this->input->post('telefono_emp'),
			"direccion_emp"=>$this->input->post('direccion_emp'),
			"estado_emp"=>$this->input->post('estado_emp')
		);
	 $id=$this->input->post("id_emp");
		if($this->empleado->actualizar($id,$datosEmpleadoEditado)){
			redirect('empleados/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
}
