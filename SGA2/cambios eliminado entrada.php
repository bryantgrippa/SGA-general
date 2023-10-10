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
delete from producto 
where nombre_producto='$_REQUEST[X]' 
and medida_producto ='$_REQUEST[B]' and nombre_proveedor='$_REQUEST[C]'") 
or die("Problemas en el select: select" . mysqli_error($conexion));

echo "<h1>EL producto FUE ELIMINADO CORRECTAMENTE </h1>";

mysqli_query($conexion, "
delete from entrada 
where nombre_producto='$_REQUEST[X]' 
and medida_producto ='$_REQUEST[B]' and nombre_proveedor='$_REQUEST[C]'") 
or die("Problemas en el select: select" . mysqli_error($conexion));

echo "<h1>la entrada FUE ELIMINADO CORRECTAMENTE </h1>";
}
mysqli_close($conexion);
?>
</body>
</html>
