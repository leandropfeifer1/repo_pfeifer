
				
<?php

    list($usec, $sec) = explode(" ", microtime());

    srand((float)$usec + (float)$sec * 1000000);

    

    $string = md5(rand(0,9999));

    $code_string = strtoupper(substr($string, rand(0,26), 5));

    session_start();

    $_SESSION['TouringTest'] = $code_string;

    session_write_close();

    

    $im = imagecreate(61,25);

    

    $color_back = imagecolorallocate($im, 255,255,255);

    imagefill($im, 0, 0, $color_back);

    

    $text_color = imagecolorallocate($im, 225,0,0);

    imagettftext($im, 13, 0, 3, 19, $text_color, "Arial.ttf", $code_string);



    // if your server does not support TTF fonts, use this snippet

    // instead of upper line

    // for ($i=0, $x=7; $i < strlen($code_string); $i++, $x+=10)

    //     imagechar($im, 5, $x, 4, $code_string[$i], 123456);



    $color_line = imagecolorallocate($im, rand(0,225), rand(0,225), rand(0,225));

    for($i=0;$i<=24;$i+=8)

        imageline ($im,0,$i,80,$i,$color_line);

    

    for($i=0;$i<=60;$i+=6)

        imageline ($im,$i,0,$i,30,$color_line);

    

    header("Content-type: image/jpeg");

    imagejpeg($im);

    imagedestroy($im);

?>

				