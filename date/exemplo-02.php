<?php

// $ts = strtotime("2001-09-11");
$ts = strtotime("+1 week +3 hours");

echo date("l, d/m/Y H:i:s", $ts);

?>