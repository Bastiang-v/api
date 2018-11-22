<?php
class funciones_bd {
    // constructor
    function __construct() {
        require_once '../conexion/connect.php';
		
        // conectando a la base de datos
        $this->db = new conexion();

    }    
	public function select_categoria(){
		$stmt = $this->db->connect()->query('select * from categoria');
		$datos = array();  
 
		while($fila = $stmt->fetch(PDO::FETCH_ASSOC)) 
		{
			$datos[] = $fila;
		}
		return $datos;
	}
	public function mostrar_productos(){
		$stmt = $this->db->connect()->query('select producto.id_producto,producto.Nombre,producto.Descripcion,producto.Cantidad,producto.Valor,producto.ruta,categoria.nombre as categoria  from producto inner join categoria on producto.id_categoria=categoria.id_categoria where producto.estado=1');
		$datos = array();  
 
		while($fila = $stmt->fetch(PDO::FETCH_ASSOC)) 
		{
			$datos[] = $fila;
		}
		return $datos;
	}
	public function ingresar_producto($nombre,$descripcion,$cantidad,$valor,$ruta,$id_categoria){
		$stmt = $this->db->connect()->exec("insert into producto(Nombre,Descripcion,Cantidad,Valor,ruta,id_categoria,estado) VALUES('".$nombre."','".$descripcion."','".$cantidad."','".$valor."','".$ruta."','".$id_categoria."',1);");
		$datos = array();
 
		if($stmt)
        {
            return true;
        }else
        {
            return false;
        }
	}
	public function actualizar_producto($id_producto,$nombre,$descripcion,$cantidad,$valor,$ruta,$id_categoria){
		$stmt = $this->db->connect()->exec("update producto set Nombre='".$nombre."',Descripcion='".$descripcion."',Cantidad='".$cantidad."',Valor='".$valor."',ruta='".$ruta."',id_categoria='".$id_categoria."' where id_producto='".$id_producto."'");
		$datos = array();
 
		if($stmt)
        {
            return true;
        }else
        {
            return false;
        }
	}
	public function eliminar_producto($id_producto){
		$stmt = $this->db->connect()->exec("update producto set estado=0 where id_producto='".$id_producto."'");
		$datos = array();
 
		if($stmt)
        {
            return true;
        }else
        {
            return false;
        }
	}
}
?>