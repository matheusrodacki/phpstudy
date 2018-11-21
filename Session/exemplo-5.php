<?php

require_once("config.php");

echo session_save_path();

echo "<br>";

var_dump(session_status());

echo "<br>";

switch(session_status()){

    case PHP_SESSION_DISABLED:
    echo "As sessões estão desabiltadas";
    break;

    case PHP_SESSION_NONE:
    echo "As sessões estão habiliatadas mas não existem";
    break;

    case PHP_SESSION_ACTIVE:
    echo "As sessões estão habiltadas e existem";
    break;
}

?>