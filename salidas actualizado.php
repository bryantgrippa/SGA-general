<?php
    $conexion = mysqli_connect("localhost:3307","root", "", "SGA");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>cambios salidas</title>
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
        <form action="salidas general.html">
            <input type="submit" value="Volver" style="width: 100%;height: 70%;margin-top: 20%;">
            </form>      
    <span style="
        margin-right: 5%;
        margin-top: 2%;">
        USUARIO
    </span> 
</header>

<div class="contenedorprincipal">
    <div class="contenedor1" style="
    text-align:center;
    width: 38%;
    height: 14%;
    font-size: 25px;
    margin-left: 3.5%;
    margin-right: 3.5%;
    border: none;">
INGRESE DATOS</div>
<div class="contenedor2">
<?php
mysqli_query($conexion,"update salida set medida_producto4 ='$_REQUEST[tallanueva]'
where medida_producto4 ='$_REQUEST[tallavieja]'
and nombre_producto4 ='$_REQUEST[productoviejo]'") 
or die("Problemas en el select: a" .
mysqli_error($conexion));;

mysqli_query($conexion, "update salida set nombre_producto4 ='$_REQUEST[productonuevo]'
where nombre_producto4 ='$_REQUEST[productoviejo]'
and medida_producto4 ='$_REQUEST[tallanueva]'") 
or die("Problemas en el select: b" .
mysqli_error($conexion));

mysqli_query($conexion, "update salida set fecha ='$_REQUEST[fechanueva]'
where fecha ='$_REQUEST[fechavieja]' 
and nombre_producto4 ='$_REQUEST[productonuevo]'and medida_producto4 ='$_REQUEST[tallanueva]'") 
or die("Problemas en el select: c" .
mysqli_error($conexion));

mysqli_query($conexion, "update salida set cantidad ='$_REQUEST[cantidadnueva]'
where cantidad ='$_REQUEST[cantidadvieja]' 
and nombre_producto4 ='$_REQUEST[productonuevo]'and medida_producto4 ='$_REQUEST[tallanueva]'") 
or die("Problemas en el select: d" .
mysqli_error($conexion));

mysqli_query($conexion, "update salida set precio ='$_REQUEST[precionuevo]'
where precio ='$_REQUEST[precioviejo]' 
and nombre_producto4 ='$_REQUEST[productonuevo]'and medida_producto4 ='$_REQUEST[tallanueva]'") 
or die("Problemas en el select: e" .
mysqli_error($conexion));

mysqli_query($conexion, "update salida set descripcion_salida ='$_REQUEST[descripcionnueva]'
where descripcion_salida ='$_REQUEST[descripcionvieja]' 
and nombre_producto4 ='$_REQUEST[productonuevo]'and medida_producto4 ='$_REQUEST[tallanueva]'") 
or die("Problemas en el select: f" .
mysqli_error($conexion));

echo "los datos fueron modificados con exito";
?>

</div>
</div>

</body>
</html>