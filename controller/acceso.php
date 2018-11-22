<?php
$opcion   = $_REQUEST['opcion'];
$token 		= trim($_REQUEST['token']);
switch($opcion){
  
	case "prueba":
		$prueba = "prueba";
		$ok = "ok";
	    $resultado = array($prueba => $ok);
		echo json_encode($resultado);
	break;	
	
	case "mostrarproducto":
		 require_once '../modell/funciones.php';
		 $consultar = new funciones_bd();
		 
		$tk = "token";
		if($token == "123") 
		{
			/* envío de un arreglo compuesto */
			//$resultado[]=array("logstatus"=>"1");
			//$resultado[] = $consultar->mostrar_datos();
			
			/*Envío de arreglo simple*/
			$resultado = $consultar->mostrar_productos();
			
		}
		else{
			$resultado=array($tk=>"sin clave");
		}
		echo json_encode($resultado);
		/*echo("<pre>");
					    print_r($resultado);
	   echo("</pre>");*/
	break;		
	case "ingresarproducto":
		 require_once '../modell/funciones.php';
		 $ingresar = new funciones_bd();
        $nombre 		= trim($_REQUEST['nombre']);
        $descripcion 		= trim($_REQUEST['descripcion']);
		$cantidad 	= trim($_REQUEST['cantidad']);
		$valor 		= trim($_REQUEST['valor']);
        $ruta 		= trim($_REQUEST['ruta']);
        $id_categoria 	= trim($_REQUEST['id_categoria']);
        
		$tk = "token";
		if($token == "123") 
		{
			$resultado = $ingresar->ingresar_producto($nombre,$descripcion,$cantidad,$valor,$ruta,$id_categoria);	
            if($resultado)
            {
                $resultado=array($tk=>"Datos ingresados");
            }else
            {
                $resultado=array($tk=>"Datos no ingresados");
            }
		}
		else{
			$resultado=array($tk=>"sin clave");
		}
		echo json_encode($resultado);
		
	break;	
	case "actualizarproducto":
		 require_once '../modell/funciones.php';
		 $ingresar = new funciones_bd();
		 $id_producto = trim($_REQUEST['id_producto']);
        $nombre 		= trim($_REQUEST['nombre']);
        $descripcion 		= trim($_REQUEST['descripcion']);
		$cantidad 	= trim($_REQUEST['cantidad']);
		$valor 		= trim($_REQUEST['valor']);
        $ruta 		= trim($_REQUEST['ruta']);
        $id_categoria 	= trim($_REQUEST['id_categoria']);
        
		$tk = "token";
		if($token == "123") 
		{
			$resultado = $ingresar->actualizar_producto($id_producto,$nombre,$descripcion,$cantidad,$valor,$ruta,$id_categoria);	
            if($resultado)
            {
                $resultado=array($tk=>"Datos Actualizados");
            }else
            {
                $resultado=array($tk=>"Datos no Actualizados");
            }
		}
		else{
			$resultado=array($tk=>"sin clave");
		}
		echo json_encode($resultado);
		
	break;				
	case "eliminarproducto":
		 require_once '../modell/funciones.php';
		 $ingresar = new funciones_bd();
		 $id_producto = trim($_REQUEST['id_producto']);
        
		$tk = "token";
		if($token == "123") 
		{
			$resultado = $ingresar->eliminar_producto($id_producto);	
            if($resultado)
            {
                $resultado=array($tk=>"Datos Eliminados");
            }else
            {
                $resultado=array($tk=>"Datos no Eliminados");
            }
		}
		else{
			$resultado=array($tk=>"sin clave");
		}
		echo json_encode($resultado);
		
	break;				
}
?>
