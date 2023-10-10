<?php
    $conexion = mysqli_connect("localhost:3307","root", "", "SGA2");
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>actualizar datos generales</title>
</head>
<body>

<?php
mysqli_query($conexion,"update 
entrada set 
nombre_producto ='$_REQUEST[productoEPnuevo]',
medida_producto ='$_REQUEST[medidaEPnuevo]',
fecha_compra = '$_REQUEST[fechaEPnuevo]',
cantidad = $_REQUEST[cantidadEPnuevo],
precio = $_REQUEST[precioEPnuevo],
nombre_proveedor = '$_REQUEST[nombreproveedorEPnuevo]',
nit = $_REQUEST[nitEPnuevo],
telefono_proveedor = '$_REQUEST[celEPnuevo]',
direccion_proveedor = '$_REQUEST[direccionproveedorEPnuevo]',
correo_proveedor = '$_REQUEST[correoproveedorEPnuevo]',
observaciones_entrada = '$_REQUEST[observacionesEPnuevo]'
where nombre_producto='$_REQUEST[X]' AND medida_producto='$_REQUEST[B]' and nombre_proveedor='$_REQUEST[C]'") 
or die("Problemas en el select: A" .
mysqli_error($conexion));
echo "<p>actualizacion entrada completa<br>";

mysqli_query($conexion,"update 
producto set 
nombre_producto ='$_REQUEST[productoEPnuevo]',
medida_producto ='$_REQUEST[medidaEPnuevo]',
cantidad = $_REQUEST[cantidadEPnuevo],
precio = $_REQUEST[precioEPnuevo],
nombre_proveedor = '$_REQUEST[nombreproveedorEPnuevo]',
observaciones_producto = '$_REQUEST[observacionesEPnuevo]'
where nombre_producto='$_REQUEST[X]' AND medida_producto='$_REQUEST[B]' and nombre_proveedor='$_REQUEST[C]'") 
or die("Problemas en el select: B" .
mysqli_error($conexion));

echo "<p>actualizacion producto completa<br>";

?>

</body>
</html>
