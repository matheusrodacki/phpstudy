<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "Anthony Rafael Ribeiro", $titleColor);
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

header("Content-Type: image/jpeg");

imagejpeg($image, "certificado-".date("Y-m-d").".jpg", 10); // segundo parâmetro espera o caminho para salvar esse arquivo como físico; terceiro parâmetro recebe a qualidade da imagem, em uma escala de 0 a 100

imagedestroy($image);

?>