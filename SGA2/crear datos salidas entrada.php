<?php
    $conexion = mysqli_connect("localhost:3307","root", "", "SGA2");
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>crear datos generales</title>
</head>
<body>
<form action="crear datos salidas entrada.php">
    <h1>SALIDA</h1>
    <select name="productoS" required value="">
    <option></option>
    <option value="botas negras">botas negras</option>
    <option value="botas azules">botas azules</option>
    <option value="botas marrones">botas marrones</option>
    </select>

    <select name="medidaS" required value="">
    <option></option>
    <option value="30">30</option>
    <option value="32">32</option>
    <option value="34">34</option>
    <option value="36">36</option>
    <option value="38">38</option>
    <option value="40">40</option>
    <option value="42">42</option>
    </select>

    <input type="date" require name="fechaS" value="">

    <input type="number" placeholder="cantidad" require name="cantidadS" value=""></imput>

    <select name="tipoidS" >
    <option></option>
    <option value="CC">CC</option>
    <option value="CE">CE</option>
    <option value="PASAPORTE">PASAPORTE</option>
    <option value="DE">DOCUMENTO EXTRANJERO</option>
    <option value="NIT">NIT</option>
    </select>

    <input type="number" placeholder="numero de id" name="numidS" value=""></imput>

    <input type="text" placeholder="nombre"   name="nombresS" value=""></imput>

    <input type="number" placeholder="telefono" name="celS" value=""></imput>

    <input type="text" placeholder="direccion" name="direccionS" value=""></imput>
    
    <input type="text" placeholder="correo" name="coreoS" value=""></imput>

    <input type="text" placeholder="observaciones" name="observacionesS" value=""></imput>

    <input type="submit" value = "REGISTRAR">

</form>

<?php
$conexion = mysqli_connect("localhost:3307","root", "", "SGA2") 
or die("Problemas con la conexión");

mysqli_query($conexion,"
insert into 
salida(
nombre_producto,medida_producto,fecha,cantidad,observaciones_salida,tipo_id,num_id,nombre_cliente,
telefono_cliente,direccion_cliente,correo_cliente)
values
('$_REQUEST[productoS]','$_REQUEST[medidaS]','$_REQUEST[fechaS]',$_REQUEST[cantidadS],
'$_REQUEST[observacionesS]','$_REQUEST[tipoidS]',$_REQUEST[numidS],'$_REQUEST[nombresS]',
'$_REQUEST[celS]','$_REQUEST[direccionS]','$_REQUEST[coreoS]')
")
or die ("Problemas en el select" . mysqli_error($conexion));

mysqli_query($conexion,"
update producto 
set cantidad =(cantidad-($_REQUEST[cantidadS]))
where nombre_producto='$_REQUEST[productoS]' and medida_producto ='$_REQUEST[medidaS]'")
or die ("Problemas en el select" . mysqli_error($conexion));


echo "<h1>la salida se realizo correctamente</h1>";
mysqli_close($conexion);

?>

</body>
</html>