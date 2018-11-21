<?php

function ola($texto = "Mundo", $periodo = "Bom dia!"){

    return "Olá $texto!!!11 $periodo<br>";
}

echo ola();
echo ola("Matheus");
echo ola("Thiago", "Boa Tarde!" );
echo ola("Glaucio", "Boa Noite!");
?>