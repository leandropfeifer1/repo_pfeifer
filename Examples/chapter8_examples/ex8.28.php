<html>
<head><title>Array of Associative Arrays</title></head>
<body bgcolor="9999CC"><font face="arial">
<b>
<?php

  $teachers=array(
                array('Nombre' => "John Doe",
                      'Asignatura' =>array('Etica','Ingles'),
                      'Salario'=> 56000,
                ),
                array('Nombre' => "Steven Lee",
                      'Asignatura' => array("Matematicas", "Ciencias", "PE"),
                      'Salario'=> 65000,
                ),
                array('Nombre' => "Jean Perot",
                      'Asignatura' => array("Frances", "Literatura"),
                      'Salario'=> 57000,
                ),
           );
  foreach( $teachers as $value){
    echo "<hr>";
    foreach( $value as $key=>$val){
      if ( $key == "Asignatura"){
          echo "$key: ";
          foreach( $val as $subjects){
            echo "$subjects ";
          }
      }
      else{
          echo "<br />$key: $val<br />";
      }
   }
 }

?>
</b>
</body>
</html>
