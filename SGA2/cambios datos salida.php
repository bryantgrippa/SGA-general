<?php
    $conexion = mysqli_connect("localhost:3307","root", "", "SGA2");
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>actualizar datos generales</title>
</head>
<body>
<form action="cambios datos salida.php">
    <h1>SALIDA BUSCAR</h1>
    <select name="productoS" >
    <option></option>
    <option value="botas negras">botas negras</option>
    <option value="botas azules">botas azules</option>
    <option value="botas marrones">botas marrones</option>
    </select>

    <select name="medidaS" >
    <option></option>
    <option value="30">30</option>
    <option value="32">32</option>
    <option value="34">34</option>
    <option value="36">36</option>
    <option value="38">38</option>
    <option value="40">40</option>
    <option value="42">42</option>
    </select>

    <input type="date" name="fechaS">

    <input type="submit" value = "BUSCAR">

</form>

<?php
$X=$_REQUEST["productoS"];
$B=$_REQUEST['medidaS']; 
$C=$_REQUEST["fechaS"];
?>


<?php

if($X=="" and $B=="" and $C==""){    
    echo "<p>SELECCIONE DATOS PARA BUSCAR<br>";
}
if($X!="" and $B!="" and $C!=""){
    echo "<p>D<br>";
    $sql="select*from salida where nombre_producto='$X' and medida_producto='$B' and fecha='$C'";
    $registros = mysqli_query($conexion,$sql ) or die("Problemas en el select abc:" . mysqli_error($conexion));
if ($A = mysqli_fetch_array($registros)) {
?>
        <h1>SALIDA ACTUALIZAR</h1>
<form action="cambios realizado salida.php">

<input type="hidden" name="X" value="<?php echo $X; ?>">
<input type="hidden" name="B" value="<?php echo $B; ?>">
<input type="hidden" name="C" value="<?php echo $C; ?>">

<select name="productoSnuevo" required value="">
<option value="<?php echo $A['nombre_producto'] ?>"><?php echo $A['nombre_producto'] ?></option>
    <option value="botas negras">botas negras</option>
    <option value="botas azules">botas azules</option>
    <option value="botas marrones">botas marrones</option>
    </select>

    <select name="medidaSnuevo" required value="">
    <option value="<?php echo $A['medida_producto'] ?>"><?php echo $A['medida_producto'] ?></option>
    <option value="30">30</option>
    <option value="32">32</option>
    <option value="34">34</option>
    <option value="36">36</option>
    <option value="38">38</option>
    <option value="40">40</option>
    <option value="42">42</option>
    </select>

    <input type="date" require name="fechaS" 
    value="<?php echo $A['fecha'] ?>">
    <input type="number" placeholder="cantidad" require name="cantidadSnuevo" 
    value="<?php echo $A['cantidad'] ?>"></imput>

    <select name="tipoidSnuevo" >
    <option value="<?php echo $A['tipo_id'] ?>"><?php echo $A['tipo_id'] ?></option>
    <option value="CC">CC</option>
    <option value="CE">CE</option>
    <option value="PASAPORTE">PASAPORTE</option>
    <option value="DE">DOCUMENTO EXTRANJERO</option>
    <option value="NIT">NIT</option>
    </select>

    <input type="number" placeholder="numero de id" name="numidSnuevo" 
    value="<?php echo $A['num_id'] ?>"></imput>

    <input type="text" placeholder="nombre"   name="nombresSnuevo" 
    value="<?php echo $A['nombre_cliente'] ?>"></imput>

    <input type="number" placeholder="telefono" name="celSnuevo" 
    value="<?php echo $A['telefono_cliente'] ?>"></imput>

    <input type="text" placeholder="direccion" name="direccionSnuevo" 
    value="<?php echo $A['direccion_cliente'] ?>"></imput>
    
    <input type="text" placeholder="correo" name="correoSnuevo" 
    value="<?php echo $A['correo_cliente'] ?>"></imput>

    <input type="text" placeholder="observaciones" name="observacionesSnuevo" 
    value="<?php echo $A['observaciones_salida'] ?>"></imput>


<input type="submit" value = "ACTUALIZAR">
</form>

<form action="cambio eliminado salida.php">
<input type="hidden" name="X" value="<?php echo $X; ?>">
<input type="hidden" name="B" value="<?php echo $B; ?>">
<input type="hidden" name="C" value="<?php echo $C; ?>">
<input type="hidden" name="cantidadSnuevo" value="<?php echo $A['cantidad'] ?>">

<input type="submit" value = "ELIMINAR">
</form>

<?php

    }else {
        echo "No existe datos con esos documentos D.";
        mysqli_close($conexion);

        }
    
}
if($X!="" and $B=="" and $C==""){
    echo "SELECCIONA UNA MEDIDA Y UNA FECHA";
    echo "<p>G<br>";
}
if($X!="" and $B!="" and $C==""){
    echo "SELECCIONA UNA FECHA";
    echo "<p>A<br>";
}
if($X!="" and $B=="" and $C!=""){
    echo "SELECCIONA UNA MEDIDA";
    echo "<p>B<br>"; 
}
if($X=="" and $B!="" and $C!=""){
    echo "SELECCIONA UN NOMBRE";
    echo "<p>C<br>";
}

if($X=="" and $B=="" and $C!=""){
    echo "SELECCIONA UN NOMBRE Y UNA MEDIDA";
    echo "<p>E<br>";   
}
if($X=="" and $B!="" and $C==""){
    echo "SELECCION UN NOMBRE Y UNA FECHA";
    echo "<p>F<br>";
}
?>


</body>
</html>