<?php
    $conexion = mysqli_connect("localhost:3307","root", "", "SGA");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ingreso Clientes listo</title>
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
        <form action="Clientes general.html">
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
mysqli_query($conexion,"update cliente set tipo_id ='$_REQUEST[tipidnuevo]'
where tipo_id ='$_REQUEST[tipidviejo]' and num_id  =$_REQUEST[idviejo]") 
or die("Problemas en el select:" .
mysqli_error($conexion));;

mysqli_query($conexion, "update cliente set num_id  =$_REQUEST[idnuevo]
where num_id  =$_REQUEST[idviejo] and tipo_id ='$_REQUEST[tipidnuevo]'") 
or die("Problemas en el select:" .
mysqli_error($conexion));

mysqli_query($conexion, "update cliente set nombre_cliente ='$_REQUEST[nombrenuevo]'
where nombre_cliente ='$_REQUEST[nombreviejo]' and tipo_id ='$_REQUEST[tipidnuevo]' and num_id  =$_REQUEST[idnuevo]") 
or die("Problemas en el select:" .
mysqli_error($conexion));

mysqli_query($conexion, "update cliente set telefono_cliente ='$_REQUEST[celnuevo]'
where telefono_cliente ='$_REQUEST[celviejo]' and tipo_id ='$_REQUEST[tipidnuevo]' and num_id  =$_REQUEST[idnuevo]") 
or die("Problemas en el select:" .
mysqli_error($conexion));

mysqli_query($conexion, "update cliente set direccion_cliente ='$_REQUEST[direcnuevo]'
where direccion_cliente ='$_REQUEST[direcviejo]' and tipo_id ='$_REQUEST[tipidnuevo]' and num_id  =$_REQUEST[idnuevo]") 
or die("Problemas en el select:" .
mysqli_error($conexion));

mysqli_query($conexion, "update cliente set correo_cliente ='$_REQUEST[correonuevo]'
where correo_cliente ='$_REQUEST[correoviejo]' and tipo_id ='$_REQUEST[tipidnuevo]' and num_id  =$_REQUEST[idnuevo]") 
or die("Problemas en el select:" .
mysqli_error($conexion));



echo "los datos fueron modificados con exito";
?>

</div>
</body>
</html>
