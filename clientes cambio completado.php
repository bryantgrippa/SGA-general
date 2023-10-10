<?php
    $conexion = mysqli_connect("localhost:3307","root", "", "SGA");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>cambios Clientes</title>
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
        <form action="Clientes general.html">
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
    $y= $_REQUEST["tipoid"];
    $x= $_REQUEST['numeroid'];

$sql="select * from cliente where tipo_id='$y' and num_id =$x";

$select = $_REQUEST['eleccion'];

if($select=='eliminar'){
    $registros = mysqli_query($conexion,$sql ) or die("Problemas en el select 123:" . mysqli_error($conexion));
if ($reg = mysqli_fetch_array($registros)) {

mysqli_query($conexion, "delete from cliente where tipo_id='$y' and num_id =$x;") 
or die("Problemas en el select: select" . mysqli_error($conexion));

echo "<h1>EL CLIENTE FUE ELIMINADO CORRECTAMENTE </h1>";

} else {
echo "No existe cliente con esos documentos .";
}
mysqli_close($conexion);

}else{ #actualizar


    $registros = mysqli_query($conexion,$sql ) or die("Problemas en el select 123:" . mysqli_error($conexion));


    if ($A = mysqli_fetch_array($registros)) {
        ?>
        <form action="clientes actualizado.php" method="post" > 
            
        nuevo tipo id:
    <select name="tipidnuevo" required style="width: 140px;" value="<?php echo $A['tipo_id'] ?>">
        <option value="<?php echo $A['tipo_id'] ?>"><?php echo $A['tipo_id'] ?></option>
        <option value="CC">CC</option>
        <option value="CC">CC</option>
        <option value="CE">CE</option>
        <option value="PASAPORTE">PASAPORTE</option>
        <option value="NIT">NIT</option>
    </select>
        <input type="hidden" name="tipidviejo" value="<?php echo $A['tipo_id'] ?>">

        nuevo id:
        <input type="number" name="idnuevo" value="<?php echo $A['num_id'] ?>">
        <input type="hidden" name="idviejo" value="<?php echo $A['num_id'] ?>">

        nuevo nombre:
        <input type="text" name="nombrenuevo" value="<?php echo $A['nombre_cliente'] ?>">
        <input type="hidden" name="nombreviejo" value="<?php echo $A['nombre_cliente'] ?>">
        
        nuevo cel:
        <input type="text" name="celnuevo" value="<?php echo $A['telefono_cliente'] ?>">
        <input type="hidden" name="celviejo" value="<?php echo $A['telefono_cliente'] ?>">        
        
        nueva direccion:
        <input type="text" name="direcnuevo" value="<?php echo $A['direccion_cliente'] ?>">
        <input type="hidden" name="direcviejo" value="<?php echo $A['direccion_cliente'] ?>">        

        nuevo correo:
        <input type="text" name="correonuevo" value="<?php echo $A['correo_cliente'] ?>">
        <input type="hidden" name="correoviejo" value="<?php echo $A['correo_cliente'] ?>">        

        <div class="boton">
    <input type="submit" value="Modificar">
        </div>
        </form>
        <?php
        }else {
            echo "No existe cliente con esos documentos .";
            }
            mysqli_close($conexion);
    
}
?>

</div>
</div>

</body>
</html>