<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventario_controlador extends CI_Controller {
    protected function load_view($content_view, $data = array()) 
    {
        $this->load->view('include/header');
        $this->load->view($content_view, $data);
        $this->load->view('include/footer');
    }
    public function __construct() {
        parent::__construct();
        $this->load->model('Inventario_model');
        $this->load->database();
        session_start();
    }

	public function index()
	{
		$this->load->view('index');
	}

    public function NombreHerramienta() 
    {  
        $this->load->view('index/nombre');
    }

    public function buscarHerramienta()
    {
        $nombre = $this->input->post('nombreherramienta');
        $codigo = $this->input->post('codigounico');

        $resultados = $this->Inventario_model->buscarHerramienta($nombre, $codigo);
        echo json_encode($resultados);
    }

    public function sistema() 
    {  
        @session_start();
        $this->load->view('login/login');
        $this->load->model('Inventario_model');
        $usuario = $this->input->post('usuario');
        $clave = $this->input->post('clave');

        $usuarios = $this->Inventario_model->obtenerUsuario($usuario);

        if ($usuarios) {
            if ($clave == $usuarios['clave']) {
                $_SESSION['id']= $usuarios['id_usuario'];
                var_dump($_SESSION['id']);
                $response['success'] = true;
                redirect(base_url('home').'');

            } else {
                $response['success'] = false;
                $response['message'] = 'Inicio de sesión fallido. Por favor, verifique su correo electrónico y contraseña.';
            }
        } else {
            $response['success'] = false;
            $response['message'] = 'Usuario no encontrado. Por favor, verifique su correo electrónico.';
        }
    }  

    public function salir()
    {
        session_start();
        $_SESSION = array();
        session_destroy();
        header("Location: ".base_url());
    }

    public function home()
    {
        if (!isset($_SESSION['id'])) {
        redirect(base_url());
        }

        $herramienta = $this->Inventario_model->rowHerramientas();
        $movimiento = $this->Inventario_model->rowMovimiento();

        $totalHerramientas = count($herramienta);
        $totalMovimiento = count($movimiento);

        $CantidadHerramienta = 0;
        foreach ($herramienta as $herra) {
            if ($herra['status_herramienta'] === 'AC') {
                $CantidadHerramienta++;
            }
        }
        $procentajeCantidad = ($totalHerramientas > 0) ? ($CantidadHerramienta / $totalHerramientas) * 100 : 0;

        $HerramientaPrestada = 0;
        foreach ($movimiento as $movi) {
            if ($movi['tipo_movimiento'] === 'Salida') {
                $HerramientaPrestada++;
            }
        }
        $procentajePrestada = ($totalMovimiento > 0) ? ($HerramientaPrestada / $totalMovimiento) * 100 : 0;

        $HerramientaBuen = 0;
        foreach ($herramienta as $herra) {
            if ($herra['estadoencuentraherramienta'] === 'BuenEstado') {
                $HerramientaBuen++;
            }
        }
        $procentajeBuen = ($totalHerramientas > 0) ? ($HerramientaBuen / $totalHerramientas) * 100 : 0;

        $HerramientaMal = 0;
        foreach ($herramienta as $herra) {
            if ($herra['estadoencuentraherramienta'] === 'MalEstado') {
                $HerramientaMal++;
            }
        }
        $procentajeMal = ($totalHerramientas > 0) ? ($HerramientaMal / $totalHerramientas) * 100 : 0;

        $soldadura = 0;
        foreach ($herramienta as $herra) {
            if ($herra['almacenherramienta'] === 'Soldadura') {
                $soldadura++;
            }
        }

        $mantenimiento = 0;
        foreach ($herramienta as $herra) {
            if ($herra['almacenherramienta'] === 'Mantenimiento') {
                $mantenimiento++;
            }
        }

        $data['soldadura'] = $soldadura;
        $data['mantenimiento'] = $mantenimiento;

        $data['HerramientaMal'] = $HerramientaMal;
        $data['HerramientaBuen'] = $HerramientaBuen; 
        $data['HerramientaPrestada'] = $HerramientaPrestada;
        $data['CantidadHerramienta'] = $CantidadHerramienta;

        $data['procentajeMal'] = round($procentajeMal, 2);
        $data['procentajeBuen'] = round($procentajeBuen, 2);
        $data['procentajePrestada'] = round($procentajePrestada, 2);
        $data['procentajeCantidad'] = round($procentajeCantidad, 2); 
        $this->load_view('inicio/inicio', $data);
    }

    public function cargar_registro()
    {
        if (!isset($_SESSION['id'])) {
        redirect(base_url());
        }
        $this->load_view('registrar/registrarHerramienta');
    }

    public function registrar_herramienta()
    {
        if (!isset($_SESSION['id'])) {
        redirect(base_url());
        }

        $herramienta = $this->input->post('herramienta');

        $post['codigounico'] = $this->generar_codigo_alfanumerico(4); 
        $post['almacenherramienta'] = $this->input->post('almacenherramienta');        
        $post['nombreherramienta'] = $this->input->post('nombreherramienta');
        $post['serieherramienta'] = $this->input->post('serieherramienta');
        $post['fechaderegistroherramienta'] = date('Y-m-d H:i:s');        
        $post['descripcionherramienta'] = $this->input->post('descripcionherramienta');
        $post['cantidad_herramienta'] = $this->input->post('cantidad_herramienta');
        $post['id_usuario'] = $_SESSION['id'];
        $post['status_herramienta'] = 'AC';        

        if ($herramienta == 'SI') {
            $post['estadoencuentraherramienta'] = $this->input->post('estadoencuentraherramienta');
            $this->Inventario_model->insert_herramientas($post);
        } else {
            $post['estadoencuentraherramienta'] = 'BuenEstado';
            $post['id_proveedor'] = $this->input->post('id_proveedor');
            $this->Inventario_model->insert_herramientas($post);            
        }

        if ($post['almacenherramienta'] == 'Soldadura') {
            redirect(base_url('soldadura'));
        } elseif ($post['almacenherramienta'] == 'Mantenimiento') {
            redirect(base_url('mantenimiento'));
        } else {
            redirect(base_url('home'));
        }
    }   

    private function generar_codigo_alfanumerico($length) 
    {        
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $characters_length = strlen($characters);
        $codigo = '';
        for ($i = 0; $i < $length; $i++) {
            $codigo .= $characters[rand(0, $characters_length - 1)];
        }
        return $codigo;
    }

    public function registro_soldadura()
    {
        if (!isset($_SESSION['id'])) {
        redirect(base_url());
        }
        $this->load->helper('my_helper'); 
        $data['grid'] = $this->Inventario_model->obtenerDatosSoldadura();
        $this->load_view('almacen/soldadura', $data);
    }

    public function registro_mantenimiento()
    {
        if (!isset($_SESSION['id'])) {
        redirect(base_url());
        }
        $this->load->helper('my_helper'); 
        $data['grid'] = $this->Inventario_model->obtenerDatosMantenimiento();
        $this->load_view('almacen/mantenimiento', $data);
    } 

    public function mantMovimiento($id_herramienta = '', $action = 'salida')
    {
        if (!isset($_SESSION['id'])) {
        redirect(base_url());
        }
        $data['inventario'] = $this->Inventario_model->rowInventario($id_herramienta); 
        $data['titulofrm'] = ($action == 'salida') ? ' Salida Herramienta' : ' Editar Herramienta';
        $data['editar'] = ($action == 'editar') ? 'SI' : 'NO';
        $this->load->view('registrar/mantmovimiento', $data);
    }

    public function insertarMovimiento()
    {
        if (!isset($_SESSION['id'])) {
        redirect(base_url());
        }
        $editar = $this->input->post('editar');

        if ($editar == 'NO') {
            $post['id_herramienta'] = $this->input->post('herramienta'); 
            $post['id_usuario'] = $this->input->post('responsable'); 
            $post['nombreentrega'] = $this->input->post('nombreentrega'); 
            $post['fecha_movimiento'] = $this->input->post('fecha_movimiento'); 
            $post['almaceninventario'] = $this->input->post('almaceninventario');
            $post['tipo_movimiento'] ='Salida';
            $this->Inventario_model->insertarMovimientos($post);
            redirect(base_url('movimiento'));
        }else {
            $ruta = $this->input->post('almaceninventario');

            $post['id_herramienta'] = $this->input->post('id_herramienta');
            $post['status_herramienta'] = $this->input->post('status_herramienta');
            $post['cantidad_herramienta'] = $this->input->post('cantidad_herramienta');
            $this->Inventario_model->updateHerramienta($post['id_herramienta'], $post);

            if ($ruta == 'Soldadura') {
                redirect(base_url('soldadura'));
            } elseif ($ruta == 'Mantenimiento') {
                redirect(base_url('mantenimiento'));
            }          
        }
    }

    public function deleteHerramienta() 
    {
    if (!isset($_SESSION['id'])) {
        redirect(base_url());
        }       
        $id_herramienta = $this->input->post('id_herramienta');
        $motivo = $this->input->post('motivo');
        $eliminado = $this->Inventario_model->deleteHerra($id_herramienta, $motivo);
        if ($eliminado) {
            echo json_encode(array("success" => true, "message" => "Documento eliminado"));
        } else {
            echo json_encode(array("success" => false, "message" => "Error al eliminar el documento"));
        }
    }

    public function updateMovimiento()
    {
        if (!isset($_SESSION['id'])) {
        redirect(base_url());
        }
        $id_movimiento = $this->input->post('id_movimiento');

        $poste['tipo_movimiento'] = 'Devuelto';
        $poste['fecha_devolucion'] = date('Y-m-d H:i:s');
        $poste['descripcionmovimiento'] = $this->input->post('descripcionmovimiento');
        $poste['Recepcionado'] = $this->input->post('id_usuario');

        $resultado = $this->Inventario_model->updateMovimiento($id_movimiento, $poste);

        if ($resultado) {
            echo json_encode(['success' => true, 'message' => 'Movimiento actualizado correctamente.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error al actualizar el movimiento.']);
        }
    }

    public function historialmovimiento()
    {
        if (!isset($_SESSION['id'])) {
        redirect(base_url());
        }
        $data['grid'] = $this->Inventario_model->obtenerDatosMovimiento();
        $this->load_view('registrar/historialmovimiento', $data);
    }

    public function historialdevolucion()
    {
        if (!isset($_SESSION['id'])) {
        redirect(base_url());
        }
        $data['grid'] = $this->Inventario_model->obtenerDatosDevolucion();
        $this->load_view('registrar/historialdevolucion', $data);
    }

    public function listaproveedor()
    {
        if (!isset($_SESSION['id'])) {
        redirect(base_url());
        }
        $this->load->helper('my_helper');
        $data['grid'] = $this->Inventario_model->obtenerDatosProveedor();
        $this->load_view('administracion/proveedor', $data);
    }

    public function proveedordata($id_proveedor = '', $action = 'insertar')
    { 
        if (!isset($_SESSION['id'])) {
        redirect(base_url());
        }
        $data['proveedor'] = $this->Inventario_model->rowProveedor($id_proveedor); 
        $data['titulofrm'] = ($action == 'insertar') ? ' Nuevo Proveedor' : ' Editar Proveedor';
        $data['editar'] = ($action == 'editar') ? 'SI' : 'NO';
        $this->load->view('administracion/proveedormodal', $data);
    }

    public function insertProveedor()
    {
        if (!isset($_SESSION['id'])) {
        redirect(base_url());
        }
        $editar = $this->input->post('editar');

        $post['nombreproveedor'] = $this->input->post('nombreproveedor');
        $post['rucproveedor'] = $this->input->post('rucproveedor');
        $post['razonsocialproveedor'] = $this->input->post('razonsocialproveedor');
        $post['direccionproveedor'] = $this->input->post('direccionproveedor');

        if ($editar == 'NO') {
            $post['statusproveedor'] = 'AC';
            $post['fchregisproveedor'] = $this->input->post('fchregisproveedor');
            $this->Inventario_model->insertProveedor($post);
        } else {
            $post['id_proveedor'] = $this->input->post('id_proveedor');
            $post['statusproveedor'] = $this->input->post('statusproveedoredit');
            $this->Inventario_model->updateProveedor($post['id_proveedor'], $post);            
        }
        redirect(base_url('proveedor'));
    }

    public function listausuarios()
    {
        if (!isset($_SESSION['id'])) {
        redirect(base_url());
        }
        $this->load->helper('my_helper');
        $data['grid'] = $this->Inventario_model->obtenerDatosUsuarios();
        $this->load_view('usuarios/usuario', $data);
    }

    public function usuariodata($id_usuario = '', $action = 'insertar')
    { 
        if (!isset($_SESSION['id'])) {
        redirect(base_url());
        }
        $data['usuario'] = $this->Inventario_model->rowUsuario($id_usuario); 
        $data['titulofrm'] = ($action == 'insertar') ? ' Nuevo Usuario' : ' Editar Usuario';
        $data['editar'] = ($action == 'editar') ? 'SI' : 'NO';
        $this->load->view('usuarios/usuariomodal', $data);
    }

    public function insertUsuario()
    {
        if (!isset($_SESSION['id'])) {
        redirect(base_url());
        }
        $editar = $this->input->post('editar');

        $post['usuario'] = $this->input->post('usuario');
        $post['email'] = $this->input->post('email');
        $post['clave'] = $this->input->post('clave');

        if ($editar == 'NO') {
            $post['fch_reggem'] = $this->input->post('fch_reggem');
            $post['rol'] = $this->input->post('rol');
            $post['statuUsuario'] = 'AC';

            $this->Inventario_model->insertUsuario($post);
        } else {
            $post['id_usuario'] = $this->input->post('id_usuario');
            $post['rol'] = $this->input->post('rol');
            $post['statuUsuario'] = $this->input->post('statuUsuario');

            $this->Inventario_model->updateUsuario($post['id_usuario'], $post);
        }
        redirect(base_url('usuarios'));
    }

    public function compraherramienta()
    {
        if (!isset($_SESSION['id'])) {
        redirect(base_url());
        }
        $data['proveedores'] = $this->Inventario_model->obtenerProveedor();
        $this->load_view('administracion/compraherramienta', $data);
    }
}
