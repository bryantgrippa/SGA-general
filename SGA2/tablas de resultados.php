<?php
    $conexion = mysqli_connect("localhost:3307","root", "", "SGA2");
    $sql="select*from entrada";
    $sql1="select*from producto";
    $sql2="select*from salida";
    $sql3="select*from usuario";
    $sql4="select*from stock";
    $sql5="select*from venta";
?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>tablas generales</title>
</head>
<body>

<h3>ENTRADA</h3>
<table>
    <TD>CODIGO DE ENTRADA</TD>
    <TD>NOMBRE </TD>
    <td>MEDIDA</td>
    <td>FECHA DE INGRESO</td>
    <td>CANTIDAD</td>
    <td>PRECIO</td>
    <td>PROVEEDOR</td>
    <td>NIT</td>
    <td>TELEFONO</td>
    <td>DIRECCION</td>
    <td>CORREO</td>
    <td>OBSERVACIONES</td>    
<?php
# TABLAS ENTRADA

$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td> <?php echo $mostrar['codigo_entrada'] ?> </td>
        <td> <?php echo $mostrar['nombre_producto'] ?> </td>
        <td> <?php echo $mostrar['medida_producto'] ?> </td>
        <td> <?php echo $mostrar['fecha_compra'] ?> </td>
        <td> <?php echo $mostrar['cantidad'] ?> </td>
        <td> <?php echo $mostrar['precio'] ?> </td>
        <td> <?php echo $mostrar['nombre_proveedor'] ?> </td>
        <td> <?php echo $mostrar['nit'] ?> </td>
        <td> <?php echo $mostrar['telefono_proveedor'] ?> </td>
        <td> <?php echo $mostrar['direccion_proveedor'] ?> </td>
        <td> <?php echo $mostrar['correo_proveedor'] ?> </td>
        <td> <?php echo $mostrar['observaciones_entrada'] ?> </td>
    <?php        
}
?>
</table>

<h3>PRODUCTO</h3>

<BR>
<table>
    <td>CODIGO DE PRODUCTO</td>
    <td>NOMBRE</td>
    <td>MEDIDA</td>
    <td>PROVEEDOR</td>
    <td>PRECIO</td>
    <td>CANTIDAD</td>
    <td>OBSERVACIONES</td>
   
<?php
# TABLAS PRODUCTO

$result=mysqli_query($conexion,$sql1);
while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td> <?php echo $mostrar['codigo_producto'] ?> </td>
        <td> <?php echo $mostrar['nombre_producto'] ?> </td>
        <td> <?php echo $mostrar['medida_producto'] ?> </td>
        <td> <?php echo $mostrar['nombre_proveedor'] ?> </td>
        <td> <?php echo $mostrar['precio'] ?> </td>
        <td> <?php echo $mostrar['cantidad'] ?> </td>
        <td> <?php echo $mostrar['observaciones_producto'] ?> </td>
    <?php        
}
?>
</table>
<h3>SALIDA</h1>

<BR>
<table>
    <td>CODIGO DE SALIDA</td>
    <td>NOMBRE</td>
    <td>MEDIDA</td>
    <td>FECHA DE SALIDA</td>
    <td>CANTIDAD</td>
    <td>TIPO DE ID</td>
    <td>N° ID</td> 
    <td>NOMBRE CLIENTE</td>
    <td>TELEFONO CLIENTE</td>
    <td>DIRECCION CLIENTE</td>
    <td>CORREO CLIENTE</td>
    <td>OBSERVACIONES</td>

<?php
# TABLAS SALIDA

$result=mysqli_query($conexion,$sql2);
while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td> <?php echo $mostrar['codigo_salida'] ?> </td>
        <td> <?php echo $mostrar['nombre_producto'] ?> </td>
        <td> <?php echo $mostrar['medida_producto'] ?> </td>
        <td> <?php echo $mostrar['fecha'] ?> </td>
        <td> <?php echo $mostrar['cantidad'] ?> </td>
        <td> <?php echo $mostrar['tipo_id'] ?> </td>
        <td> <?php echo $mostrar['num_id'] ?> </td>
        <td> <?php echo $mostrar['nombre_cliente'] ?> </td>
        <td> <?php echo $mostrar['telefono_cliente'] ?> </td>
        <td> <?php echo $mostrar['direccion_cliente'] ?> </td>
        <td> <?php echo $mostrar['correo_cliente'] ?> </td>
        <td> <?php echo $mostrar['observaciones_salida'] ?> </td>
    <?php        
}
?>
</table>
<h3>USUARIO</h3>

<BR>
<table>
    <td>ID</td>
    <td>TIPO ID</td>
    <td>NOMBRE</td>
    <td>NOMBRE N°2</td>
    <td>APELLIDOS</td>
    <td>FECHA DE NACIMIENTO</td>
    <td>CORREO</td>
    <td>USUARIO</td> 
    <td>CONTRASEÑA</td>    
<?php
# TABLAS USUARIO

$result=mysqli_query($conexion,$sql3);
while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td> <?php echo $mostrar['ID'] ?> </td>
        <td> <?php echo $mostrar['tipo_ID'] ?> </td>
        <td> <?php echo $mostrar['nombre'] ?> </td>
        <td> <?php echo $mostrar['nombre2'] ?> </td>
        <td> <?php echo $mostrar['apellidos'] ?> </td>
        <td> <?php echo $mostrar['fecha_nacimiento'] ?> </td>
        <td> <?php echo $mostrar['correo'] ?> </td>
        <td> <?php echo $mostrar['usuario'] ?> </td>
        <td> <?php echo $mostrar['contraseña'] ?> </td>
    <?php        
}
?>
</table>
<h3>STOCK</h3>

<BR>
<table>
    <td>PRODUCTO</td>
    <td>MEDIDA</td>
    <td>PROVEEDOR</td>
    <td>VALOR DE LA COMPRA</td>
    <td>GANANCIAS</td>
    <td>IVA</td>
    <td>VALOR TOTAL</td> 
    <td>STOCK TOTAL</td>
    <td>FECHA DE INGRESO</td>
    <td>OBSERVACIONES</td>

<?php
# TABLAS STOCK

$result=mysqli_query($conexion,$sql4);
while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td> <?php echo $mostrar['PRODUCTO'] ?> </td>
        <td> <?php echo $mostrar['MEDIDA'] ?> </td>
        <td> <?php echo $mostrar['PROVEEDOR'] ?> </td>
        <td> <?php echo $mostrar['VALOR DE LA COMPRA'] ?> </td>
        <td> <?php echo $mostrar['GANANCIAS (11%)'] ?> </td>
        <td> <?php echo $mostrar['IVA(19%)'] ?> </td>
        <td> <?php echo $mostrar['VALOR TOTAL'] ?> </td>
        <td> <?php echo $mostrar['STOCK TOTAL'] ?> </td>
        <td> <?php echo $mostrar['FECHA DE INGRESO'] ?> </td>
        <td> <?php echo $mostrar['OBSERVACIONES'] ?> </td>

    <?php        
}
?>
</table>
<h3>VENTA</h3>

<BR>
<table>
    <td>PRODUCTO</td>
    <td>MEDIDA</td>
    <td>PROVEEDOR</td>
    <td>FECHA DE VENTA</td>
    <td>VALOR TOTAL</td>
    <td>TIPO ID CLIENTE</td>
    <td>N° ID CLIENTE</td> 
    <td>NOMBRE</td>
    <td>TELEFONO</td>
    <td>DIRECCION</td>
    <td>CORREO</td>
    <td>OBSERVACIONES</td>

<?php
# TABLAS VENTA

$result=mysqli_query($conexion,$sql5);
while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td> <?php echo $mostrar['PRODUCTO'] ?> </td>
        <td> <?php echo $mostrar['MEDIDA'] ?> </td>
        <td> <?php echo $mostrar['PROVEEDOR'] ?> </td>
        <td> <?php echo $mostrar['FECHA DE VENTA'] ?> </td>
        <td> <?php echo $mostrar['VALOR TOTAL'] ?> </td>
        <td> <?php echo $mostrar['TIPO ID CLIENTE'] ?> </td>
        <td> <?php echo $mostrar['No ID CLIENTE'] ?> </td>
        <td> <?php echo $mostrar['NOMBRE'] ?> </td>
        <td> <?php echo $mostrar['TELEFONO'] ?> </td>
        <td> <?php echo $mostrar['DIRECCION'] ?> </td>
        <td> <?php echo $mostrar['CORREO'] ?> </td>
        <td> <?php echo $mostrar['OBSERVACIONES'] ?> </td>
    <?php        
}
?>
</table>


</body>
</html>