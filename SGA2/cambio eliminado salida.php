<?php
    $conexion = mysqli_connect("localhost:3307","root", "", "SGA2");
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>eliminar datos generales</title>
</head>
<body>
<?php

{
mysqli_query($conexion, "
delete from salida 
where nombre_producto='$_REQUEST[X]' 
and  medida_producto='$_REQUEST[B]' 
and fecha='$_REQUEST[C]'") 
or die("Problemas en el select: select" . mysqli_error($conexion));

echo "<h1>la salida FUE ELIMINADO CORRECTAMENTE </h1>";

mysqli_query($conexion,"update 
producto set 
cantidad=(cantidad + $_REQUEST[cantidadSnuevo])
where nombre_producto='$_REQUEST[X]' and medida_producto='$_REQUEST[B]'") 
or die("Problemas en el select ABC: B" .
mysqli_error($conexion));

echo "<p>actualizacion producto completo<br>";
}
mysqli_close($conexion);
?>
</body>
</html>
