<?php     
class Inventario_model extends CI_Model {
  public function __construct() {
      parent::__construct();
      $this->load->database();
  }
  
  public function obtenerUsuario($usuario) 
  {
      $query = $this->db->get_where('usuariosinventario', array('usuario' => $usuario));
      return $query->row_array();
  }

  public function insert_herramientas($post)
  {
    $this->db->insert("herramientasregistradas", $post);
  }

  public function obtenerDatosSoldadura() {
      $this->db->join("usuariosinventario", "usuariosinventario.id_usuario = herramientasregistradas.id_usuario", "left");
      $this->db->join("listaproveedor", "listaproveedor.id_proveedor = herramientasregistradas.id_proveedor", "left");

      $this->db->where('almacenherramienta', 'Soldadura');
      $this->db->where('status_herramienta !=', 'EL');
      $query = $this->db->get("HerramientasRegistradas");
      if ($query->num_rows() > 0) {
          foreach ($query->result() as $fila) {
              $data[] = $fila;
          }
      } else {
          $data = array();
      }
      $query->free_result();
      return $data;
  }

  public function obtenerDatosMantenimiento() {
      $this->db->join("usuariosinventario", "usuariosinventario.id_usuario = herramientasregistradas.id_usuario", "left");
      $this->db->join("listaproveedor", "listaproveedor.id_proveedor = herramientasregistradas.id_proveedor", "left");
      
      $this->db->where('almacenherramienta', 'Mantenimiento');
      $this->db->where('status_herramienta !=', 'EL');
      $query = $this->db->get("HerramientasRegistradas");
      if ($query->num_rows() > 0) {
          foreach ($query->result() as $fila) {
              $data[] = $fila;
          }
      } else {
          $data = array();
      }
      $query->free_result();
      return $data;
  }  

  public function rowInventario($id_herramienta) { 
    $this->db->join("usuariosinventario", "usuariosinventario.id_usuario = herramientasregistradas.id_usuario", "left");
    $this->db->where("HerramientasRegistradas.id_herramienta", $id_herramienta);
    $query = $this->db->get("HerramientasRegistradas");
    if ($query->num_rows() > 0) {
        $data = $query->row();
    } else {
        $data = "";
    }
    return $data;
  }

  public function insertarMovimientos($post)
  {
    $this->db->insert("HistorialMovimientos", $post);
  }

  public function updateHerramienta($id_herramienta, $data)
  {
    $this->db->where('id_herramienta', $id_herramienta);
    return $this->db->update('HerramientasRegistradas', $data);
  }

  public function deleteHerra($id_herramienta, $motivo) 
  {
      $data = array(
        'id_herramienta' => $id_herramienta,
        'deletemotivo' => $motivo,
        'status_herramienta' => 'EL',
      );
      $this->db->where('id_herramienta', $id_herramienta);
      $this->db->update('HerramientasRegistradas', $data);

      if ($this->db->affected_rows() > 0) {
          return true;
      } else {
          return false;
      }
  }

  public function updateMovimiento($id_movimiento, $data) 
  {
    $this->db->where('id_movimiento', $id_movimiento);
    return $this->db->update('HistorialMovimientos', $data);
  }

  public function obtenerDatosMovimiento()
  {
      $this->db->where('tipo_movimiento', 'Salida');
      $query = $this->db->get("HistorialMovimientos");
      if ($query->num_rows() > 0) {
          foreach ($query->result() as $fila) {
              $data[] = $fila;
          }
      } else {
          $data = array();
      }
      $query->free_result();
      return $data;    
  }

  public function obtenerDatosDevolucion()
  {
      $this->db->where('tipo_movimiento', 'Devuelto');
      $query = $this->db->get("HistorialMovimientos");
      if ($query->num_rows() > 0) {
          foreach ($query->result() as $fila) {
              $data[] = $fila;
          }
      } else {
          $data = array();
      }
      $query->free_result();
      return $data;    
  }

  public function insertProveedor($post)
  {
    $this->db->insert("listaproveedor", $post);
  }

  public function updateProveedor($id_proveedor, $post)
  {
    $this->db->where("id_proveedor", $id_proveedor);
    $this->db->update("listaproveedor", $post);
  }

  public function obtenerDatosProveedor()
  {
      $query = $this->db->get("listaproveedor");
      if ($query->num_rows() > 0) {
          foreach ($query->result() as $fila) {
              $data[] = $fila;
          }
      } else {
          $data = array();
      }
      $query->free_result();
      return $data;    
  }

  public function rowProveedor($id_proveedor) 
  { 
    $this->db->where("listaproveedor.id_proveedor", $id_proveedor);
    $query = $this->db->get("listaproveedor");
    if ($query->num_rows() > 0) {
        $data = $query->row();
    } else {
        $data = "";
    }
    return $data;
  } 

  public function obtenerDatosUsuarios()
  {
      $query = $this->db->get("UsuariosInventario");
      if ($query->num_rows() > 0) {
          foreach ($query->result() as $fila) {
              $data[] = $fila;
          }
      } else {
          $data = array();
      }
      $query->free_result();
      return $data;    
  }

  public function rowUsuario($id_usuario) 
  { 
    $this->db->where("UsuariosInventario.id_usuario", $id_usuario);
    $query = $this->db->get("UsuariosInventario");
    if ($query->num_rows() > 0) {
        $data = $query->row();
    } else {
        $data = "";
    }
    return $data;
  } 

  public function insertUsuario($post)
  {
    $this->db->insert("UsuariosInventario", $post);
  }

  public function updateUsuario($id_usuario, $post)
  {
    $this->db->where("id_usuario", $id_usuario);
    $this->db->update("UsuariosInventario", $post);
  }

  public function obtenerProveedor() 
  { 
      $this->db->where("listaproveedor.statusproveedor", 'AC');
      $query = $this->db->get("listaproveedor");
      if ($query->num_rows() > 0) {
          return $query->result();
      } else {
          return array();
      }
  }

  public function rowHerramientas()
  {
    $query = $this->db->get("HerramientasRegistradas");
    return $query->result_array();
  }

  public function rowMovimiento()
  {
    $query = $this->db->get("HistorialMovimientos");
    return $query->result_array();
  }

  public function buscarHerramienta($nombre, $codigo)
  {
      $this->db->select('*');
      $this->db->from('HerramientasRegistradas');
      $this->db->where('status_herramienta', 'AC');
      
      if (!empty($nombre)) {
          $this->db->like('nombreherramienta', $nombre);
      }
      if (!empty($codigo)) {
          $this->db->where('codigounico', $codigo);
      }
      $query = $this->db->get();
      if ($query->num_rows() === 0) {
          return null;
      }
      return $query->result_array();
  }


}