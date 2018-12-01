<?php

date_default_timezone_set("America/Sao_Paulo");

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

//echo ucwords(strftime("%A"))." , dia ".ucwords(strftime("%e"))." de ".ucwords(strftime("%B"))." de ".ucwords(strftime("%Y"));

echo ucwords(strftime('%A, %d de %B de %Y'));

?>