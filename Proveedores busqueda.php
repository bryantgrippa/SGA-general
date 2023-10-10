<?php
    $conexion = mysqli_connect("localhost:3307","root", "", "SGA");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>proveedores</title>
    <link rel="stylesheet" href="estilo.css"> 
</head>

<body style="
margin: 0; 
padding: 0; 
background: linear-gradient(#A569BD,#82E0AA ); 
height: 100vh; font-family: Arial Black;"> 

<header style="    
background: linear-gradient(#82E0AA,#A569BD );  
color: hsl(0, 0%, 6%);
height: 10%;
display: flex;
justify-content: space-between;">

    
    <img src="SGAlogo.jpg" alt="Logo de la empresa" style="
        height: 100%; 
        width: 8%; 
        border-radius: 20px;
        margin-left: 5%;
        margin-top: 0.5%;">
    <form action="Menu principal.html">
        <input type="submit" value="Volver" style="width: 100%;height: 70%;margin-top: 20%;">
    </form>
    <span style="
        margin-right: 5%;
        margin-top: 2%;">
        USUARIO
    </span> 
</header>

<div class="contenedorprincipal">

<div class="contenedor2" style="
    width: 30%;
    height: 5%;
    margin-left: 33%;
    margin-right: 33%;
    border: none;
    font-size: 20px;">
Ingrese datos 
</div>

<form action="proveedores busqueda.php" method="post">
<div class="contenedor5" style="
    height: 5%;
    width: 25%;
    margin-top: 8%;">

Numero de nit
<input type="number" name="AAA" style="width: 45%;">
    </div>
    

<div class="contenedor7" style="
height: 5%;
width: 30%;
margin-top: 8%;
margin-left: 52%;">
NOMBRE proveedor
<input type="text" name="BBB" style="width: 45%;">
</div>

    
<div class="boton">
    <input type="submit" value = "BUSCAR" style="
    margin-top: 160%;
    margin-left: 70%;
    width:15%;
    width: 100px;
    height: 50px;
    ">
</div>
</form>   

<form action="proveedores crear.html" method="post">
    <div class="boton">
    <input type="submit" value = "CREAR" style="
    margin-top: 160%;
    margin-left: -50%;
    width: 100px;
    height: 50px;
    ">
</div>
</form>  

<form action="proveedor cambiar.html" method="post">
    <div class="boton">
    <input type="submit" value = "CAMBIAR" style="
    margin-top: 160%;
    margin-left: -150%;
    width: 100px;
    height: 50px;
    ">
</div>
</form>  
   

</div>

    <div class="contenedor4" style="height: 40%; margin-top:20%;">
    <table>
    <td>tabla 1</td>
    <td>tabla 2</td>
    <td>tabla 3</td>
    <td>tabla 4</td>
    <td>tabla 5</td>
    <td>tabla 6</td>
    <td>tabla 7</td>


<?php
$valor_numero_id= $_REQUEST['AAA'];
$valor_nombre=$_REQUEST["BBB"];

$sql="select * from proveedores";
$sql1="select * from proveedores where nit =$valor_numero_id";
$sql2="select * from proveedores where nombre_proveedor='$valor_nombre'";
$sql3="select * from proveedores where nombre_proveedor='$valor_nombre' and nit =$valor_numero_id";

if ($valor_numero_id==0 & $valor_nombre==''){
    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td> <?php echo $mostrar['nombre_proveedor'] ?> </td>
            <td> <?php echo $mostrar['nombre_producto2'] ?> </td>
            <td> <?php echo $mostrar['medida_producto2'] ?> </td>
            <td> <?php echo $mostrar['nit'] ?> </td>
            <td> <?php echo $mostrar['telefono_proveedor'] ?> </td>
            <td> <?php echo $mostrar['direccion_proveedor'] ?> </td>
            <td> <?php echo $mostrar['correo_proveedor'] ?> </td>
        <?php        
    }
}
if ($valor_numero_id!=0 & $valor_nombre==''){
    $result=mysqli_query($conexion,$sql1);
    while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td> <?php echo $mostrar['nombre_proveedor'] ?> </td>
            <td> <?php echo $mostrar['nombre_producto2'] ?> </td>
            <td> <?php echo $mostrar['medida_producto2'] ?> </td>
            <td> <?php echo $mostrar['nit'] ?> </td>
            <td> <?php echo $mostrar['telefono_proveedor'] ?> </td>
            <td> <?php echo $mostrar['direccion_proveedor'] ?> </td>
            <td> <?php echo $mostrar['correo_proveedor'] ?> </td>
        <?php        
    }
}
if ($valor_numero_id==0 & $valor_nombre!=''){
    $result=mysqli_query($conexion,$sql2);
    while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td> <?php echo $mostrar['nombre_proveedor'] ?> </td>
            <td> <?php echo $mostrar['nombre_producto2'] ?> </td>
            <td> <?php echo $mostrar['medida_producto2'] ?> </td>
            <td> <?php echo $mostrar['nit'] ?> </td>
            <td> <?php echo $mostrar['telefono_proveedor'] ?> </td>
            <td> <?php echo $mostrar['direccion_proveedor'] ?> </td>
            <td> <?php echo $mostrar['correo_proveedor'] ?> </td>
        <?php        
    }
}
if ($valor_numero_id!=0 & $valor_nombre!=''){
    $result=mysqli_query($conexion,$sql3);
    while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td> <?php echo $mostrar['nombre_proveedor'] ?> </td>
            <td> <?php echo $mostrar['nombre_producto2'] ?> </td>
            <td> <?php echo $mostrar['medida_producto2'] ?> </td>
            <td> <?php echo $mostrar['nit'] ?> </td>
            <td> <?php echo $mostrar['telefono_proveedor'] ?> </td>
            <td> <?php echo $mostrar['direccion_proveedor'] ?> </td>
            <td> <?php echo $mostrar['correo_proveedor'] ?> </td>
        <?php        
    }
}


?>


</table>
    </div>

</div>
</body>
</html>