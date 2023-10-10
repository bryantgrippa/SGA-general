<?php
    $conexion = mysqli_connect("localhost:3307","root", "", "SGA");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>cambios PROVEEDOR</title>
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
$sql="select * from proveedores where nombre_proveedor ='$_REQUEST[name]' 
and nombre_producto2='$_REQUEST[producto]' and medida_producto2 ='$_REQUEST[talla]'";
$select = $_REQUEST['eleccion'];

if($select=='eliminar'){
    $registros = mysqli_query($conexion,$sql ) or die("Problemas en el select 123:" . mysqli_error($conexion));
if ($reg = mysqli_fetch_array($registros)) {

mysqli_query($conexion, "delete from proveedores where nombre_proveedor='$_REQUEST[name]' and 
nombre_producto2='$_REQUEST[producto]' and medida_producto2 ='$_REQUEST[talla]'") 
or die("Problemas en el select: select" . mysqli_error($conexion));

echo "<h1>este proveedor fue eliminado</h1>";

} else {
echo "No existe proveedor con estos valores o nombre.";
}
mysqli_close($conexion);

}else{ #actualizar

    $registros = mysqli_query($conexion,$sql ) or die("Problemas en el select 123:" . mysqli_error($conexion));


    if ($A = mysqli_fetch_array($registros)) {
        ?>
        <form action="proveedor actualizado.php" method="post"> 

        cambiar nombre:
        <input type="text " placeholder="nombre"  required name="nombrenuevo" value="<?php echo $A['nombre_proveedor'] ?>"></imput>
        <input type="hidden" name="nombreviejo" value="<?php echo $A['nombre_proveedor'] ?>">

        cambiar producto:
        <select name="productonuevo" required style="width: 140px;">
        <option value="<?php echo $A['nombre_producto2'] ?>"><?php echo $A['nombre_producto2'] ?></option>
        <option value="botas rojas">botas rojas</option>
        <option value="botas azules">botas azules</option>
        <option value="botas marrones">botas marrones</option>
        </select>
        <input type="hidden" name="productoviejo" value="<?php echo $A['nombre_producto2'] ?>">

        nueva talla:
        <select name="tallanueva" required style="width: 140px;" >
        <option value="<?php echo $A['medida_producto2'] ?>"><?php echo $A['medida_producto2'] ?></option>
        <option value="30">30</option>
        <option value="32">32</option>
        <option value="34">34</option>
        <option value="36">36</option>
        <option value="38">38</option>
        <option value="40">40</option>
        <option value="42">42</option>
        </select>
        <input type="hidden" name="tallavieja" value="<?php echo $A['medida_producto2'] ?>">
        
        cambiar nit:
        <input type="number " placeholder="NIT"  required name="nitnuevo" value="<?php echo $A['nit'] ?>"></imput>
        <input type="hidden" name= "nitviejo" value="<?php echo $A['nit '] ?>">        
        
        nuevo cel:
        <input type="text " placeholder="CELULAR" name="celnuevo" value="<?php echo $A['telefono_proveedor'] ?>"></imput>
        <input type="hidden" name="celviejo" style="width: 180px;" value="<?php echo $A['telefono_proveedor'] ?>">        

        nueva direccion:
        <input type="text " placeholder="DIRECCION" name="direccionnueva" value="<?php echo $A['direccion_proveedor'] ?>"></imput>
        <input type="hidden" name="direccionvieja" value="<?php echo $A['direccion_proveedor'] ?>">        

        cambiar correo:
        <input type="text " placeholder="CORREO"  name="correonuevo" value="<?php echo $A['nit'] ?>"></imput>
        <input type="hidden" name= "correoviejo" value="<?php echo $A['nit'] ?>">     

        <div class="boton">
    <input type="submit" value="Modificar">
        </div>
        </form>
        <?php
        }else {
            echo "No existe proveedor con estos valores o nombre.";
            }  
}
?>

</div>
</div>

</body>
</html>