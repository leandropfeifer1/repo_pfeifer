<html><head><title>Processing First Form</title>
</head>
<body bgcolor = "lightgreen"><font size="+1">
<h2>Esta es la pantalla de tu formulario:</h2>
<?php
  extract($_REQUEST, EXTR_SKIP); // Extracting the form input
 print "Bienvenido a PHP $your_name<br>"; // register_globals
// is off
print "Puedo llamarte al $your_phone<br>";
print "¿Está bien enviarle un correo electrónico a $your_email_addr<br>";
?>
</body>
</html>
