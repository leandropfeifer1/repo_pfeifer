<html><head><title>Counting Elements in a Multidimensional Array
</title>
</head>
<body bgcolor="blue">
<div align="center">
<table border="2">
<tr><td bgcolor="cornflowerblue">
<img src="cosmos.jpg" align="right"><br />
<?php
   $plants= array('perennials' => array('Day Lilies',
                                          'Coral Bells',
					  'Goldenrod',
					  'Russian Sage'),
		    'annuals' => array('Begonia',
			   	       'Sweet Alyssum',
			               'Cosmos',
				       'Helioptrope')
                   ) ;
  // Recursive count
  echo "El número de los elementos: ",
  count($plants, COUNT_RECURSIVE), "\n<br />"; // output 10
  echo "El número de arrays: ", count($plants), "\n<br />"; // output 2

?>
</td></tr>
</table>
</body>
</html>
