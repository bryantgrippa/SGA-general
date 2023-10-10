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

<form action="crear datos producto entrada.php">
        <h1>ENTRADA Y PRODUCTO</h1>

    <select name="productoEP" required>
    <option></option>
    <option value="botas negras">botas negras</option>
    <option value="botas azules">botas azules</option>
    <option value="botas marrones">botas marrones</option>
    </select>
    
    <select name="medidaEP" required>
    <option></option>
    <option value="30">30</option>
    <option value="32">32</option>
    <option value="34">34</option>
    <option value="36">36</option>
    <option value="38">38</option>
    <option value="40">40</option>
    <option value="42">42</option>
    </select>

    <input type="date" require name="fechaEP">

    <input type="number" placeholder="cantidad" name="cantidadEP"></imput>
    
    <input type="number" placeholder="precio" name="precioEP"></imput>

    <input type="text" placeholder="nombre proveedor"  required name="nombreproveedorEP"></imput>

    <input type="number" placeholder="NIT" name="nitEP"></imput>

    <input type="number" placeholder="telefono" name="celEP"></imput>

    <input type="text" placeholder="direccion proveedor"  required name="direccionproveedorEP"></imput>

    <input type="text" placeholder="correo proveedor"  required name="correoproveedorEP"></imput>

    <input type="text" placeholder="observaciones"  required name="observacionesEP"></imput>

    <input type="submit" value = "INGRESAR">

</form>
    

<?php
# INGRESA LAS ENTRADAS Y LOS PRODUCTOS DE UNA VEZ

$conexion = mysqli_connect("localhost:3307","root", "", "SGA2") 
or die("Problemas con la conexión");

mysqli_query($conexion,"
insert into 
entrada(
nombre_producto,medida_producto,fecha_compra,cantidad,precio,nombre_proveedor,nit,telefono_proveedor,
direccion_proveedor,correo_proveedor,observaciones_entrada)
values
('$_REQUEST[productoEP]','$_REQUEST[medidaEP]','$_REQUEST[fechaEP]',$_REQUEST[cantidadEP],$_REQUEST[precioEP],
'$_REQUEST[nombreproveedorEP]',$_REQUEST[nitEP],'$_REQUEST[celEP]','$_REQUEST[direccionproveedorEP]',
'$_REQUEST[correoproveedorEP]','$_REQUEST[observacionesEP]')")
or die ("Problemas en el select" . mysqli_error($conexion));

echo "<h1>la entrada se realizo correctamente</h1>";

mysqli_query($conexion,"
insert into 
producto(
nombre_producto,medida_producto,nombre_proveedor,precio,cantidad,observaciones_producto)
values
('$_REQUEST[productoEP]','$_REQUEST[medidaEP]','$_REQUEST[nombreproveedorEP]',
($_REQUEST[precioEP]+($_REQUEST[precioEP]*0.30)),$_REQUEST[cantidadEP],'$_REQUEST[observacionesEP]')
")
or die ("Problemas en el select" . mysqli_error($conexion));

echo "<h1>el producto se ingreso correctamente</h1>";

mysqli_close($conexion);

?>

</body>
</html>