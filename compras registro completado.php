<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ingreso compras</title>
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
        <form action="Compras general.html">
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
</div>

<?php
$conexion = mysqli_connect("localhost:3307","root", "", "SGA") 
or die("Problemas con la conexión");

mysqli_query($conexion,"
insert into 
entrada(nombre_proveedor,nombre_producto3,medida_producto3,precio,fecha_compra,cantidad)
values
('$_REQUEST[name]','$_REQUEST[producto]','$_REQUEST[talla]',$_REQUEST[precio],'$_REQUEST[fecha]',$_REQUEST[cant])")
or die ("Problemas en el select" . mysqli_error($conexion));

mysqli_close($conexion);

echo "<h1>La compra fue registrada</h1>";
?>
</div>

</body>
</html>
