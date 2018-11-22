<html>
<body> 
<div align="center">
<h2>API URL</h2>
<h4>Eliminar</h4>
<p>http://www.ipchileno2018.com/bgonzalez/wsproductos/controller/acceso.php?token=&id_producto=*ID_PRODUCTO*&opcion=eliminarproducto&enviar=aceptar</p>
<h4>Mostrar</h4>
<p>http://www.ipchileno2018.com/bgonzalez/wsproductos/controller/acceso.php?token=&opcion=mostrarproducto&enviar=aceptar</p>
<h4>Agregar</h4>
<p>www.ipchileno2018.com/bgonzalez/wsproductos/controller/acceso.php?token=&nombre=*NOMBRE*&descripcion=*DESCRIPCION*&cantidad=*CANTIDAD*&valor=*VALOR*&ruta=*RUTA*&id_categoria=*CATEGORIA*&opcion=ingresarproducto&enviar=aceptar</p>
<h4>Modificar</h4>
<p>www.ipchileno2018.com/bgonzalez/wsproductos/controller/acceso.php?token=&id_producto=*ID_PRODUCTO*&nombre=*NOMBRE*&descripcion=*DESCRIPCION*&cantidad=*CANTIDAD*&valor=*VALOR*&ruta=*RUTA*&id_categoria=*CATEGORIA*&opcion=actualizarproducto&enviar=aceptar</p>
</div>
<p align="center" >
<br>
<table align ="center">
<form method="get" action="../controller/acceso.php" align="center">
token del servicio
<br>
<input type="Text" name="token" >      
<br>
---------------------------------------------------------------------
<h4>Formulario para WebService: Productos</h4>
<table align ="center">
	<tr><td><input type="Text" name="id_producto" placeholder="Seleccionar Id"></td>
	</tr>
	<tr><td><input type="Text" name="nombre"  placeholder="Nombre Producto"></td>
    </tr>
<tr><td><textarea name="descripcion"cols="20" rows="10" placeholder="Descripcion Producto"></textarea></td>
    </tr>
    <tr><td><input type="number" name="cantidad"  placeholder="Cantidad"></td>
        <tr><td><input type="Text" name="valor"  placeholder="Valor $2000"></td>
        </tr>
        <tr><td><input type="url" name="ruta"  placeholder="Ruta Imagen"></td>
        </tr>
    </tr>
	<tr>
		<td>
			<select name="id_categoria">
				<option value="">Seleccione Categoria</option>
			<?php
			   require_once '../modell/funciones.php';
			   $lista = new funciones_bd(); 
                    $categoria = $lista->select_categoria();
                    foreach($categoria as $obj => $t)
                    {
                        ?>
	 <option value="<?php echo $t['id_categoria']?>"><?php echo $t['nombre']?></option>
	 <?php 
	}
	  ?>
			</select>
		</td>
	</tr>
</table>
-
---------------------------------------------------------------------
<br>
Opcion a Realizar
<br>
<select name="opcion">
<option value="ingresarproducto">ingresar Producto</option>
  <option value="mostrarproducto">mostrar Productos</option>
  <option value="eliminarproducto">Eliminar Producto</option>
  <option value="actualizarproducto">Modificar Productos</option>
</select>
<br>
<br>
<input type="Submit" name="enviar" value="aceptar">
</form>
</table>
 <!-- 
	  URL Api Productos 
 Eliminar : http://www.ipchileno2018.com/bgonzalez/wsproductos/controller/acceso.php?token=123&id_producto=*ID_PRODUCTO*&opcion=eliminarproducto&enviar=aceptar
 Mostrar : http://www.ipchileno2018.com/bgonzalez/wsproductos/controller/acceso.php?token=123&opcion=mostrarproducto&enviar=aceptar
 Agregar : www.ipchileno2018.com/bgonzalez/wsproductos/controller/acceso.php?token=123&nombre=*NOMBRE*&descripcion=*DESCRIPCION*&cantidad=*CANTIDAD*&valor=*VALOR*&ruta=*RUTA*&id_categoria=*CATEGORIA*&opcion=ingresarproducto&enviar=aceptar
 Modificar : www.ipchileno2018.com/bgonzalez/wsproductos/controller/acceso.php?token=123&id_producto=*ID_PRODUCTO*&nombre=*NOMBRE*&descripcion=*DESCRIPCION*&cantidad=*CANTIDAD*&valor=*VALOR*&ruta=*RUTA*&id_categoria=*CATEGORIA*&opcion=actualizarproducto&enviar=aceptar

  -->
</body>
</html>
