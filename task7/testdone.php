<?php

header('Content-Type: image/png');
$name = $_POST['name'];

$im = imagecreatetruecolor(640, 464);
$textColor = imagecolorallocate($im, 0, 0, 0);
$fontFile = __DIR__ . '/assets/font.ttf';
$imBox = imagecreatefrompng(__DIR__ . '/assets/certificate.png');
imagecopy($im, $imBox, 0, 0, 0, 0, 640, 464);
imagettftext($im, 30, 0, 143, 182, $textColor, $fontFile, $name);
$right = 'Зачет!';
$mistake = 'Не зачет!';


if ($testNum == $_POST[$key]) { //Здесь не могу разобраться
    imagettftext($im, 18, 0, 80, 390, $textColor, $fontFile, $right);
} else {
    imagettftext($im, 18, 0, 80, 390, $textColor, $fontFile, $mistake);
}
imagepng($im);