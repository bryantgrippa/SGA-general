<?php
    $conexion = mysqli_connect("localhost:3307","root", "", "SGA2");
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>cambios datos salida</title>
</head>
<body>

<?php
mysqli_query($conexion,"update 
salida set 
nombre_producto ='$_REQUEST[productoSnuevo]',
medida_producto ='$_REQUEST[medidaSnuevo]',
fecha = '$_REQUEST[fechaS]',
cantidad = $_REQUEST[cantidadSnuevo],
tipo_id = '$_REQUEST[tipoidSnuevo]',
num_id = $_REQUEST[numidSnuevo],
nombre_cliente = '$_REQUEST[nombresSnuevo]',
telefono_cliente = '$_REQUEST[celSnuevo]',
direccion_cliente = '$_REQUEST[direccionSnuevo]',
correo_cliente = '$_REQUEST[correoSnuevo]',
observaciones_salida = '$_REQUEST[observacionesSnuevo]'
where nombre_producto='$_REQUEST[X]' and medida_producto='$_REQUEST[B]' and fecha='$_REQUEST[C]'") 
or die("Problemas en el select: A" .
mysqli_error($conexion));
echo "<p>actualizacion salida completa<br>";

mysqli_query($conexion,"update 
producto set 
cantidad=(cantidad-$_REQUEST[cantidadSnuevo])
where nombre_producto='$_REQUEST[X]' and medida_producto='$_REQUEST[B]'") 
or die("Problemas en el select ABC: B" .
mysqli_error($conexion));

echo "<p>actualizacion producto completa<br>";

?>

</body>
</html>
