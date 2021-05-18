<?php
extract($_REQUEST);
$enlace = mysqli_connect("localhost", "root", "root", "prueba");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Éxito: Se realizó una conexión apropiada a la base de datos!" . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;
$consulta = "SELECT * FROM alumno";
$resultado = $enlace->query($consulta);


$result = mysqli_query ($enlace, "select * from alumno where nombre LIKE '%$buscar%'" )

or die("Error en la consulta SQL");


?>

 

<table>

 
<table width="70%" border="1px" align="center">
<?php

#Mostramos los resultados obtenidos dentro de una tabla
?>
<h1 align="center">Listado Filtrado</h1>
<table width="70%" border="1px" align="center">
<?php
while( $row = mysqli_fetch_array ( $result )) {

   echo "<tr>";

   echo "<td>".$row["nombre"]."</td>";

   echo "<td>".$row["apellido"]."</td>";
  
   echo "<td>".$row["dni"]."</td>";
   
   echo "<td>".$row["cuota"]."</td>";


   echo "<tr>";

}

?>

</table>

</body>

 

</html>

<?php

#Cerramos la conexión con la base de datos

mysqli_close($enlace);

?>


