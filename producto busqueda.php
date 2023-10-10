<?php
    $conexion = mysqli_connect("localhost:3307","root", "", "SGA");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Producto</title>
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
Ingrese datos de producto
</div>

<form action="producto busqueda.php" method="post">
    
<div class="contenedor5" style="
    height: 5%;
    width: 17%;
    margin-top: 8%;">

    <div class="usuario" style="
    margin-top: 2%;
    margin-bottom: 0.1%;
    margin-left: 0.1%;">
    nombre:<select name="AAA" style="

    width: 100px;">
        <option value=""></option>
        <option value="botas rojas">botas rojas</option>
        <option value="botas azules">botas azules</option>
        <option value="botas marrones">botas marrones</option>
        </select>
    </div>
</div>  


<div class="contenedor7" style="
height: 5%;
width: 30%;
margin-top: 8%;
margin-left: 30%;"> talla:
    <select name="BBB" style="width: 140px;">
        <option value=""></option>
        <option value="30">30</option>
        <option value="32">32</option>
        <option value="34">34</option>
        <option value="36">36</option>
        <option value="38">38</option>
        <option value="40">40</option>
        <option value="42">42</option>
        </select>
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

<form action="Producto crear.html" method="post">
    <div class="boton">
    <input type="submit" value = "CREAR" style="
    margin-top: 160%;
    margin-left: -50%;
    width: 100px;
    height: 50px;
    ">
</div>
</form>  

<form action="productos cambiar.html" method="post">
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

    <?php
# valores request
$valor_nombre=$_REQUEST["AAA"];
$valor_talla=$_REQUEST["BBB"];


$sql="select * from producto";
$sql1="select * from producto where nombre_producto='$valor_nombre'";
$sql2="select * from producto where medida_producto ='$valor_talla'";
$sql3="select * from producto where medida_producto ='$valor_talla' and nombre_producto='$valor_nombre'";


if($valor_nombre!= "" & $valor_talla==""){
    $result=mysqli_query($conexion,$sql1);
    while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
        <td> <?php echo $mostrar['codigo_producto'] ?> </td>
        <td> <?php echo $mostrar['nombre_producto'] ?> </td>
        <td> <?php echo $mostrar['medida_producto'] ?> </td>
        <td> <?php echo $mostrar['precio'] ?> </td>
        <td> <?php echo $mostrar['cantidad'] ?> </td>
        <td> <?php echo $mostrar['descripcion_producto'] ?> </td>
    <?php 
    }
}
if($valor_nombre=="" & $valor_talla == ""){
    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
        <td> <?php echo $mostrar['codigo_producto'] ?> </td>
        <td> <?php echo $mostrar['nombre_producto'] ?> </td>
        <td> <?php echo $mostrar['medida_producto'] ?> </td>
        <td> <?php echo $mostrar['precio'] ?> </td>
        <td> <?php echo $mostrar['cantidad'] ?> </td>
        <td> <?php echo $mostrar['descripcion_producto'] ?> </td>
    <?php 
    }
}
if($valor_nombre== "" & $valor_talla!=""){
    $result=mysqli_query($conexion,$sql2);
    while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
        <td> <?php echo $mostrar['codigo_producto'] ?> </td>
        <td> <?php echo $mostrar['nombre_producto'] ?> </td>
        <td> <?php echo $mostrar['medida_producto'] ?> </td>
        <td> <?php echo $mostrar['precio'] ?> </td>
        <td> <?php echo $mostrar['cantidad'] ?> </td>
        <td> <?php echo $mostrar['descripcion_producto'] ?> 
    </td>
    <?php 
    }
}
if($valor_nombre!= "" & $valor_talla!=""){
    $result=mysqli_query($conexion,$sql3);
    while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
        <td> <?php echo $mostrar['codigo_producto'] ?> </td>
        <td> <?php echo $mostrar['nombre_producto'] ?> </td>
        <td> <?php echo $mostrar['medida_producto'] ?> </td>
        <td> <?php echo $mostrar['precio'] ?> </td>
        <td> <?php echo $mostrar['cantidad'] ?> </td>
        <td> <?php echo $mostrar['descripcion_producto'] ?> </td>
    <?php 
    }
}
?>


</table>

</div>
</body>
</html>
