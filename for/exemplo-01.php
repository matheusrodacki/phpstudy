<?php

// +=x -> incrementa x

for($i = 0; $i < 1000; $i+=5) {

	if($i >= 200 && $i <= 800) continue; // ignora a condição e continua o laço

	if($i === 900) break; // acaba o laço

	echo $i."<br/>";

}

?>