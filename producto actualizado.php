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
        <form action="producto general.html">
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

mysqli_query($conexion, "update producto set descripcion_producto='$_REQUEST[descripcionnueva]'
where descripcion_producto='$_REQUEST[descripcionvieja]'
and nombre_producto= '$_REQUEST[productoviejo]' 
and medida_producto= '$_REQUEST[tallavieja]'")
or die("Problemas en el select: C" .
mysqli_error($conexion)); 

mysqli_query($conexion,"update producto set precio= $_REQUEST[precionuevo] 
where precio = $_REQUEST[precioviejo]
and nombre_producto= '$_REQUEST[productoviejo]' 
and medida_producto= '$_REQUEST[tallavieja]'")
or die("Problemas en el select: D" .
mysqli_error($conexion));

mysqli_query($conexion, "update producto set cantidad= $_REQUEST[cant]
where cantidad= $_REQUEST[cantidadvieja]
and nombre_producto= '$_REQUEST[productoviejo]' 
and medida_producto= '$_REQUEST[tallavieja]'")
or die("Problemas en el select: E" .
mysqli_error($conexion));

mysqli_query($conexion, "update producto set medida_producto='$_REQUEST[tallanueva]'
where medida_producto='$_REQUEST[tallavieja]' 
and nombre_producto ='$_REQUEST[productoviejo]'")
or die("Problemas en el select: B" .
mysqli_error($conexion));


mysqli_query($conexion,"update producto set nombre_producto='$_REQUEST[productonuevo]'
where nombre_producto= '$_REQUEST[productoviejo]' 
and medida_producto= '$_REQUEST[tallavieja]'")
or die("Problemas en el select: A" .
mysqli_error($conexion));

echo "los datos fueron modificados con exito ";
?>

</div>
</body>
</html>
