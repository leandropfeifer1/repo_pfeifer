
<?php
extract($_REQUEST);

$enlace = mysqli_connect("localhost", "root", "root", "prueba");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Éxito: Se realizó una conexión apropiada a la base de datos!" . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;
$consulta = "SELECT * FROM alumno";
$resultado = $enlace->query($consulta);

//Insertar datos
mysqli_query($enlace, "INSERT INTO alumno (nombre, apellido, dni, cuota) VALUES ('$nombre', '$apellido', '$dni','$cuota')");

//Ejemplo para imprimir los datos. El bucle recorre todos los registros.

?>
<html>
<head>
    <title></title>
</head>
<body>
    <h1 align="center">LISTADO DE PRUEBA</h1>
    <table width="70%" border="1px" align="center">

    <tr align="center">
        <td>nombre</td>
        <td>apellido</td>
        <td>dni</td>
        <td>cuota</td>
    </tr>
    <?php 
        while($datos=$resultado->fetch_array()){
        ?>
            <tr>
                <td><?php echo $datos["nombre"]?></td>
                <td><?php echo $datos["apellido"]?></td>
                <td><?php echo $datos["dni"]?></td>
                <td><?php echo $datos["cuota"]?></td>
            </tr>
            <?php   
        }

     ?>
    </table>
<?    
mysqli_close($enlace);
?>

<form action="filtro.php" method="get">
Nombre: <input type="text" name="buscar">
<input type=submit value="submit" />
</form>




