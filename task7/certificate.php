<?php

header('Content-Type: image/png');
$name = $_GET['name'];

$im = imagecreatetruecolor(640, 464);
$textColor = imagecolorallocate($im, 0, 0, 0);
$fontFile = __DIR__ . '/assets/font.ttf';
$imBox = imagecreatefrompng(__DIR__ . '/assets/certificate.png');
imagecopy($im, $imBox, 0, 0, 0, 0, 640, 464);
imagettftext($im, 30, 0, 143, 182, $textColor, $fontFile, $name);
$perfect = 5;
$done = 3;
$wrong = 2;

if ($_GET['right'] == 2) {
    imagettftext($im, 18, 0, 125, 390, $textColor, $fontFile, $perfect);
} elseif ($_GET['right'] == 1) {
    imagettftext($im, 18, 0, 125, 390, $textColor, $fontFile, $done);
} else {
    imagettftext($im, 18, 0, 125, 390, $textColor, $fontFile, $wrong);
}
imagepng($im);