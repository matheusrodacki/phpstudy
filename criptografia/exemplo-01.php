<?php

##Esta função está OBSOLETA a partir do PHP 7.1.0 e foi REMOVIDA a partir do PHP 7.2.0. 
## Depender dessa função é altamente desencorajado.



##$data = [
##	"nome" => "Hcode"
##];
##
##define('SECRET', pack('a16', 'senha'));
##
##$mcrypt = mcrypt_encrypt(
##	MCRYPT_RIJNDAEL_128,
##	SECRET,
##	json_encode($data),
##	MCRYPT_MODE_ECB
##);
##
##$final = base64_encode($mcrypt);
##
##var_dump($final);
##
##$string = mcrypt_decrypt(
##	MCRYPT_RIJNDAEL_128,
##	SECRET,
##	base64_decode($final),
##	MCRYPT_MODE_ECB
##);
##
##var_dump(json_decode($string, true));