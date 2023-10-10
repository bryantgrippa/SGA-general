<?php
    $conexion = mysqli_connect("localhost:3307","root", "", "SGA");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ingreso producto listo</title>
    <link rel="stylesheet" href="formulario.css"> 
</head>

<body style="
margin: 0; 
padding: 0; 
background: linear-gradient(#A569BD,#82E0AA ); 
height: 100vh; font-family: Arial Black;"> 

<header style="    
background: linear-gradient(#82E0AA,#A569BD );  
color: hsl(0, 0%, 6%);
height: 15%;
display: flex;
justify-content: space-between;">

    <img src="SGAlogo.jpg" alt="Logo de la empresa" style="
        height: 100%; 
        width: 15%; 
        border-radius: 20px;
        margin-left: 5%;
        margin-top: 0.5%;">
        <form action="proveedores general.html">
            <input type="submit" value="Volver" style="width: 100%;height: 70%;margin-top: 20%;">
            </form>      
    <span style="
        margin-right: 5%;
        margin-top: 2%;">
        USUARIO
    </span> 
</header>
<div class="contenedorprincipal">
<?php
mysqli_query($conexion,"update proveedores set nombre_proveedor ='$_REQUEST[nombrenuevo]'
where nombre_proveedor  ='$_REQUEST[nombreviejo]' 
and medida_producto2 ='$_REQUEST[tallavieja]' and nombre_producto2 ='$_REQUEST[productoviejo]'") 
or die("Problemas en el select: a" .
mysqli_error($conexion));;

mysqli_query($conexion, "update proveedores set medida_producto2  ='$_REQUEST[tallanueva]'
where medida_producto2  ='$_REQUEST[tallavieja]'
and nombre_proveedor ='$_REQUEST[nombrenuevo]' and nombre_producto2 ='$_REQUEST[productoviejo]'") 
or die("Problemas en el select: b" .
mysqli_error($conexion));

mysqli_query($conexion, "update proveedores set nombre_producto2  ='$_REQUEST[productonuevo]'
where nombre_producto2 ='$_REQUEST[productoviejo]' 
and nombre_proveedor ='$_REQUEST[nombrenuevo]' and medida_producto2  ='$_REQUEST[tallanueva]'") 
or die("Problemas en el select: c" .
mysqli_error($conexion));

mysqli_query($conexion, "update proveedores set nit ='$_REQUEST[nitnuevo]'
where nit ='$_REQUEST[nitviejo]' 
and nombre_proveedor ='$_REQUEST[nombrenuevo]' and nombre_producto2  ='$_REQUEST[productonuevo]'
and medida_producto2   ='$_REQUEST[tallanueva]'") 
or die("Problemas en el select: d" .
mysqli_error($conexion));

mysqli_query($conexion, "update proveedores set telefono_proveedor ='$_REQUEST[celnuevo]'
where telefono_proveedor ='$_REQUEST[celviejo]' 
and nombre_proveedor ='$_REQUEST[nombrenuevo]' and nombre_producto2  ='$_REQUEST[productonuevo]'
and medida_producto2   ='$_REQUEST[tallanueva]'") 
or die("Problemas en el select: e" .
mysqli_error($conexion));

mysqli_query($conexion, "update proveedores set direccion_proveedor ='$_REQUEST[direccionnueva]'
where direccion_proveedor ='$_REQUEST[direccionvieja]' 
and nombre_proveedor ='$_REQUEST[nombrenuevo]' and nombre_producto2  ='$_REQUEST[productonuevo]'
and medida_producto2   ='$_REQUEST[tallanueva]'") 
or die("Problemas en el select: f" .
mysqli_error($conexion));

mysqli_query($conexion, "update proveedores set correo_proveedor  ='$_REQUEST[correonuevo]'
where correo_proveedor  ='$_REQUEST[correoviejo]' 
and nombre_proveedor ='$_REQUEST[nombrenuevo]' and nombre_producto2  ='$_REQUEST[productonuevo]'
and medida_producto2   ='$_REQUEST[tallanueva]'") 
or die("Problemas en el select: g" .
mysqli_error($conexion));

echo "los datos fueron modificados con exito";
?>

</div>
</body>
</html>
