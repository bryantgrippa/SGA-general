<?php
    $conexion = mysqli_connect("localhost:3307","root", "", "SGA");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ingreso entrada listo</title>
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
        <form action="compras general.html">
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
mysqli_query($conexion,"update entrada set nombre_proveedor ='$_REQUEST[nombrenuevo]'
where nombre_proveedor ='$_REQUEST[nombreviejo]' 
and medida_producto3 ='$_REQUEST[tallavieja]' and nombre_producto3 ='$_REQUEST[productoviejo]'") 
or die("Problemas en el select:" .
mysqli_error($conexion));;

mysqli_query($conexion, "update entrada set nombre_producto3 ='$_REQUEST[productonuevo]'
where nombre_producto3 ='$_REQUEST[productoviejo]' 
and nombre_proveedor ='$_REQUEST[nombrenuevo]' and medida_producto3 ='$_REQUEST[tallavieja]'") 
or die("Problemas en el select:" .
mysqli_error($conexion));

mysqli_query($conexion, "update entrada set medida_producto3  ='$_REQUEST[tallanueva]'
where medida_producto3  ='$_REQUEST[tallavieja]' 
and nombre_proveedor ='$_REQUEST[nombrenuevo]' and nombre_producto3 ='$_REQUEST[productonuevo]'") 
or die("Problemas en el select:" .
mysqli_error($conexion));

mysqli_query($conexion, "update entrada set precio  =$_REQUEST[precionuevo]
where precio  =$_REQUEST[precioviejo] 
and nombre_proveedor ='$_REQUEST[nombrenuevo]' and nombre_producto3 ='$_REQUEST[productonuevo]'
and medida_producto3  ='$_REQUEST[tallanueva]'") 
or die("Problemas en el select:" .
mysqli_error($conexion));

mysqli_query($conexion, "update entrada set fecha_compra  ='$_REQUEST[fechanueva]'
where fecha_compra ='$_REQUEST[fechavieja]' 
and nombre_proveedor ='$_REQUEST[nombrenuevo]' and nombre_producto3 ='$_REQUEST[productonuevo]'
and medida_producto3  ='$_REQUEST[tallanueva]'")
or die("Problemas en el select:" .
mysqli_error($conexion));

mysqli_query($conexion, "update entrada set cantidad =$_REQUEST[cantidadnueva]
where cantidad =$_REQUEST[cantidadvieja] 
and nombre_proveedor ='$_REQUEST[nombrenuevo]' and nombre_producto3 ='$_REQUEST[productonuevo]'
and medida_producto3  ='$_REQUEST[tallanueva]'")
or die("Problemas en el select:" .
mysqli_error($conexion));



echo "los datos fueron modificados con exito";
?>

</div>
</body>
</html>
