				
<?php

function ValidEmailAddress($address) {

  $regex = '/^[A-z0-9][w.-]*@[A-z0-9][w-.]+.[A-z0-9]{2,6}$/\';

  return (preg_match($regex, $address));

}

?>

				