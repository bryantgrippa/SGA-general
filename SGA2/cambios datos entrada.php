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
<form action="cambios datos entrada.php">
    <h1>ENTRADA Y PRODUCTO BUSCAR</h1>
    <select name="productoEP">
    <option value="">NOMBRE</option>
    <option value="botas negras">botas negras</option>
    <option value="botas azules">botas azules</option>
    <option value="botas marrones">botas marrones</option>
    </select>

    <select name="medidaEP">
    <option value="">TALLA</option>
    <option value="30">30</option>
    <option value="32">32</option>
    <option value="34">34</option>
    <option value="36">36</option>
    <option value="38">38</option>
    <option value="40">40</option>
    <option value="42">42</option>
    </select>

    <input type="text" placeholder="nombre proveedor" name="nombreproveedorEP">

    <input type="submit" value = "BUSCAR">

</form>

<?php
$X=$_REQUEST["productoEP"];
$B=$_REQUEST['medidaEP']; 
$C=$_REQUEST["nombreproveedorEP"];
?>
<?php
if($X=="" and $B=="" and $C==""){    
    echo "<p>SELECCIONE DATOS PARA BUSCAR<br>";
}
if($X!="" and $B!="" and $C!=""){
    echo "<p>D<br>";
    $sql="select*from entrada where nombre_producto='$X' AND medida_producto='$B' and nombre_proveedor='$C'";
    $registros = mysqli_query($conexion,$sql ) or die("Problemas en el select abc:" . mysqli_error($conexion));
if ($A = mysqli_fetch_array($registros)) {
?>
        <h1>ENTRADA ACTUALIZAR</h1>
<form action="cambios realizado entrada.php">

<input type="hidden" name="X" value="<?php echo $X; ?>">
<input type="hidden" name="B" value="<?php echo $B; ?>">
<input type="hidden" name="C" value="<?php echo $C; ?>">


<select name="productoEPnuevo" required>
<option value="<?php echo $A['nombre_producto'] ?>"><?php echo $A['nombre_producto'] ?></option>
<option></option>
<option value="botas negras">botas negras</option>
<option value="botas azules">botas azules</option>
<option value="botas marrones">botas marrones</option>
</select>

<select name="medidaEPnuevo" required>
<option value="<?php echo $A['medida_producto'] ?>"><?php echo $A['medida_producto'] ?></option>
<option></option>
<option value="30">30</option>
<option value="32">32</option>
<option value="34">34</option>
<option value="36">36</option>
<option value="38">38</option>
<option value="40">40</option>
<option value="42">42</option>
</select>

<input type="text" required name="fechaEPnuevo" value="<?php echo $A['fecha_compra'] ?>">

<input type="number" required name="cantidadEPnuevo" value="<?php echo $A['cantidad'] ?>">

<input type="number" required name="precioEPnuevo" value="<?php echo $A['precio'] ?>">

<input type="text" required name="nombreproveedorEPnuevo" value="<?php echo $A['nombre_proveedor'] ?>">

<input type="number" required name="nitEPnuevo" value="<?php echo $A['nit'] ?>">

<input type="number" name="celEPnuevo" value="<?php echo $A['telefono_proveedor'] ?>">

<input type="text" required name="direccionproveedorEPnuevo" value="<?php echo $A['direccion_proveedor'] ?>">

<input type="text" required name="correoproveedorEPnuevo" value="<?php echo $A['correo_proveedor'] ?>">

<input type="text" name="observacionesEPnuevo" value="<?php echo $A['observaciones_entrada'] ?>">

<input type="submit" value = "ACTUALIZAR" name="ABC">
</form>

<form action="cambios eliminado entrada.php">
<input type="hidden" name="X" value="<?php echo $X; ?>">
<input type="hidden" name="B" value="<?php echo $B; ?>">
<input type="hidden" name="C" value="<?php echo $C; ?>">
<input type="submit" value = "ELIMINAR">
</form>

<?php

    }else {
        echo "No existe datos con esos documentos D.";
        mysqli_close($conexion);

        }
    
}
if($X!="" and $B=="" and $C==""){
    echo "SELECCION UNA MEDIDA Y UN PROVEDOR";
    echo "<p>G<br>";
}
if($X!="" and $B!="" and $C==""){
    echo "SELECCION UN PROVEDOR";
    echo "<p>A<br>";
}
if($X!="" and $B=="" and $C!=""){
    echo "SELECCION UNA MEDIDA";
    echo "<p>B<br>"; 
}
if($X=="" and $B!="" and $C!=""){
    echo "SELECCION UN NOMBRE";
    echo "<p>C<br>";
}

if($X=="" and $B=="" and $C!=""){
    echo "SELECCION UN NOMBRE Y UNA MEDIDA";
    echo "<p>E<br>";   
}
if($X=="" and $B!="" and $C==""){
    echo "SELECCION UN NOMBRE Y UN PROVEEDOR";
    echo "<p>F<br>";
}
?>


</body>
</html>
