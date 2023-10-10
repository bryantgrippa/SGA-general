<?php
    $conexion = mysqli_connect("localhost:3307","root", "", "SGA");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Clientes</title>
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

<form action="Clientes busqueda.php" method="post">
<div class="contenedor5" style="
    height: 5%;
    width: 17%;
    margin-top: 8%;">

<div class="usuario" style="
margin-top: 2%;
margin-bottom: 0.1%;
margin-left: 0.1%;">
TIPO DE ID:<select name="AAA">
        <option value=""></option>
        <option value="CC">CC</option>
        <option value="CE">CE</option>
        <option value="PASAPORTE">PASAPORTE</option>
        <option value="NIT">NIT</option>
    </select>
</div>
</div>  
    

<div class="contenedor7" style="
height: 5%;
width: 30%;
margin-top: 8%;
margin-left: 23%;">
Numero de documento
<input type="number" name="BBB" style="width: 45%;">
</div>

<div class="contenedor7" style="
height: 5%;
width: 30%;
margin-top: 8%;
margin-left: 55%;">
NOMBRE
<input type="text" name="CCC" style="width: 45%;">
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

<form action="clientes crear.html" method="post">
    <div class="boton">
    <input type="submit" value = "CREAR" style="
    margin-top: 160%;
    margin-left: -50%;
    width: 100px;
    height: 50px;
    ">
</div>
</form>  

<form action="Clientes Cambiar.html" method="post">
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
</form>

    <div class="contenedor4" style="height: 40%; margin-top:20%;">
    <table>
    <td>tabla 1</td>
    <td>tabla 2</td>
    <td>tabla 3</td>
    <td>tabla 4</td>
    <td>tabla 5</td>
    <td>tabla 6</td>

    <?php
# valores request
$valor_tipo_id= $_REQUEST["AAA"];
$valor_numero_id= $_REQUEST['BBB'];
$valor_nombre=$_REQUEST["CCC"];


#general
$sql="select * from cliente";
#tipo id
$sql1="select * from cliente where tipo_id='$valor_tipo_id'";
#n° id
$sql2="select * from cliente where num_id=$valor_numero_id";
#n° y tipo ID
$sql3="select * from cliente where tipo_id='$valor_tipo_id' and num_id= $valor_numero_id";
#n° tipo y nombre
$sql4="select * from cliente where tipo_id='$valor_tipo_id' and num_id= $valor_numero_id and nombre_cliente='$valor_nombre'";
#solo nombre
$sql5="select * from cliente where nombre_cliente='$valor_nombre'";
#nombre y numero
$sql6="select * from cliente where nombre_cliente='$valor_nombre' and num_id= $valor_numero_id";
#nombre y tipo
$sql7="select * from cliente where tipo_id='$valor_tipo_id' and nombre_cliente='$valor_nombre'";




#general
if ($valor_numero_id==0 & $valor_tipo_id == '' & $valor_nombre=='' ){
    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td> <?php echo $mostrar['tipo_id'] ?> </td>
            <td> <?php echo $mostrar['num_id'] ?> </td>
            <td> <?php echo $mostrar['nombre_cliente'] ?> </td>
            <td> <?php echo $mostrar['telefono_cliente'] ?> </td>
            <td> <?php echo $mostrar['direccion_cliente'] ?> </td>
            <td> <?php echo $mostrar['correo_cliente'] ?> </td>
        <?php        
    }
}

# solo tipo id
if($valor_numero_id==0 & $valor_tipo_id != '' & $valor_nombre==''){
$result=mysqli_query($conexion,$sql1);
while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td> <?php echo $mostrar['tipo_id'] ?> </td>
        <td> <?php echo $mostrar['num_id'] ?> </td>
        <td> <?php echo $mostrar['nombre_cliente'] ?> </td>
        <td> <?php echo $mostrar['telefono_cliente'] ?> </td>
        <td> <?php echo $mostrar['direccion_cliente'] ?> </td>
        <td> <?php echo $mostrar['correo_cliente'] ?> </td>
    <?php        
}
}

# solo numero
    if($valor_numero_id!=0 & $valor_tipo_id == '' & $valor_nombre==''){       
$result=mysqli_query($conexion,$sql2);  
while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
    <td> <?php echo $mostrar['tipo_id'] ?> </td>
        <td> <?php echo $mostrar['num_id'] ?> </td>
        <td> <?php echo $mostrar['nombre_cliente'] ?> </td>
        <td> <?php echo $mostrar['telefono_cliente'] ?> </td>
        <td> <?php echo $mostrar['direccion_cliente'] ?> </td>
        <td> <?php echo $mostrar['correo_cliente'] ?> </td>
    <?php 
}
}

# tanto tipo id como numero
    if($valor_tipo_id != '' & $valor_numero_id != 0 & $valor_nombre==''){
    $result=mysqli_query($conexion,$sql3);  
    while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
        <td> <?php echo $mostrar['tipo_id'] ?> </td>
        <td> <?php echo $mostrar['num_id'] ?> </td>
        <td> <?php echo $mostrar['nombre_cliente'] ?> </td>
        <td> <?php echo $mostrar['telefono_cliente'] ?> </td>
        <td> <?php echo $mostrar['direccion_cliente'] ?> </td>
        <td> <?php echo $mostrar['correo_cliente'] ?> </td>
    <?php 
    }
}
# tipo, id y nombre
if($valor_tipo_id != '' & $valor_numero_id != 0 & $valor_nombre!=''){
    $result=mysqli_query($conexion,$sql4);  
    while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
        <td> <?php echo $mostrar['tipo_id'] ?> </td>
        <td> <?php echo $mostrar['num_id'] ?> </td>
        <td> <?php echo $mostrar['nombre_cliente'] ?> </td>
        <td> <?php echo $mostrar['telefono_cliente'] ?> </td>
        <td> <?php echo $mostrar['direccion_cliente'] ?> </td>
        <td> <?php echo $mostrar['correo_cliente'] ?> </td>
    <?php 
    }
}
#solo nombre
if($valor_tipo_id == '' & $valor_numero_id == 0 & $valor_nombre!=''){
    $result=mysqli_query($conexion,$sql5);  
    while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
        <td> <?php echo $mostrar['tipo_id'] ?> </td>
        <td> <?php echo $mostrar['num_id'] ?> </td>
        <td> <?php echo $mostrar['nombre_cliente'] ?> </td>
        <td> <?php echo $mostrar['telefono_cliente'] ?> </td>
        <td> <?php echo $mostrar['direccion_cliente'] ?> </td>
        <td> <?php echo $mostrar['correo_cliente'] ?> </td>
    <?php 
    }
}
#nombre y numero
if($valor_tipo_id == '' & $valor_numero_id != 0 & $valor_nombre!=''){
    $result=mysqli_query($conexion,$sql6);  
    while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
        <td> <?php echo $mostrar['tipo_id'] ?> </td>
        <td> <?php echo $mostrar['num_id'] ?> </td>
        <td> <?php echo $mostrar['nombre_cliente'] ?> </td>
        <td> <?php echo $mostrar['telefono_cliente'] ?> </td>
        <td> <?php echo $mostrar['direccion_cliente'] ?> </td>
        <td> <?php echo $mostrar['correo_cliente'] ?> </td>
    <?php 
    }
}
#nombre y tipo
if($valor_tipo_id != '' & $valor_numero_id == 0 & $valor_nombre!=''){
    $result=mysqli_query($conexion,$sql7);  
    while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
        <td> <?php echo $mostrar['tipo_id'] ?> </td>
        <td> <?php echo $mostrar['num_id'] ?> </td>
        <td> <?php echo $mostrar['nombre_cliente'] ?> </td>
        <td> <?php echo $mostrar['telefono_cliente'] ?> </td>
        <td> <?php echo $mostrar['direccion_cliente'] ?> </td>
        <td> <?php echo $mostrar['correo_cliente'] ?> </td>
    <?php 
    }
}


?>


</table>
    </div>

</div>
</body>
</html>
