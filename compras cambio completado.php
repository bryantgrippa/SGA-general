<?php
    $conexion = mysqli_connect("localhost:3307","root", "", "SGA");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>cambios compras</title>
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
        <form action="proveedores general.html">
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
INGRESE DATOS</div>
<div class="contenedor2">

<?php
$sql="select * from entrada where nombre_proveedor='$_REQUEST[proveedor]' and nombre_producto3 ='$_REQUEST[botas]' and medida_producto3='$_REQUEST[talla]' ";
$select = $_REQUEST['eleccion'];

if($select=='eliminar'){
    $registros = mysqli_query($conexion,$sql ) or die("Problemas en el select 123:" . mysqli_error($conexion));
if ($reg = mysqli_fetch_array($registros)) {

mysqli_query($conexion, "delete from entrada where nombre_proveedor='$_REQUEST[proveedor]' and nombre_producto3 ='$_REQUEST[botas]' and medida_producto3='$_REQUEST[talla]'") 
or die("Problemas en el select: select" . mysqli_error($conexion));

echo "<h1>los productos de este proveedor fueron eliminados </h1>";

} else {
echo "No existe productos en proveedores registrados .";
}
mysqli_close($conexion);

}else{ #actualizar


    $registros = mysqli_query($conexion,$sql ) or die("Problemas en el select 123:" . mysqli_error($conexion));


    if ($A = mysqli_fetch_array($registros)) {
        ?>
        <form action="compras actualizado.php" method="post"> 

        nuevo nombre:
        <input type="text " placeholder="Proveedor"  required name="nombrenuevo" value="<?php echo $A['nombre_proveedor'] ?>"></imput>
        <input type="hidden" name="nombreviejo" value="<?php echo $A['nombre_proveedor'] ?>">

        nuevo producto:
            <select name="productonuevo" required style="width: 140px;" >
            <option value="<?php echo $A['nombre_producto3'] ?>"><?php echo $A['nombre_producto3'] ?></option>
            <option value="botas rojas">botas rojas</option>
            <option value="botas azules">botas azules</option>
            <option value="botas marrones">botas marrones</option>
            </select>
        <input type="hidden" name="productoviejo" value="<?php echo $A['nombre_producto3'] ?>">

        nueva talla:
        <select name="tallanueva" required style="width: 140px;" ">
        <option value="<?php echo $A['medida_producto3'] ?>"><?php echo $A['medida_producto3'] ?></option>
            <option value="30">30</option>
            <option value="32">32</option>
            <option value="34">34</option>
            <option value="36">36</option>
            <option value="38">38</option>
            <option value="40">40</option>
            <option value="42">42</option>
            </select>
        <input type="hidden" name="tallavieja" value="<?php echo $A['medida_producto3'] ?>">
        
        nuevo precio:
        <input type="number " placeholder="precio"  required name="precionuevo" value="<?php echo $A['precio'] ?>"></imput>
        <input type="hidden" name= "precioviejo" value="<?php echo $A['precio'] ?>">        
        
        nueva fecha:
        <input type="datetime-local" name="fechanueva" style="width: 180px;" value="<?php echo $A['fecha_compra'] ?>"></imput>
        <input type="hidden" name="fechavieja" style="width: 180px;" value="<?php echo $A['fecha_compra'] ?>">        

        nueva cantidad:
        <input type="number " placeholder="cantidad"  required name="cantidadnueva" value="<?php echo $A['cantidad'] ?>"></imput>
        <input type="hidden" name="cantidadvieja" value="<?php echo $A['cantidad'] ?>">        

        <div class="boton">
    <input type="submit" value="Modificar">
        </div>
        </form>
        <?php
        }else {
            echo "No existe cliente con esos documentos .";
            }  
}
?>

</div>
</div>

</body>
</html>