<?php

$conn = new PDO("sqlsrv:database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");

$stmt = $conn->prepare("SELECT * FROM tbUsuarios ORDER BY deslogin");

$stmt-> execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row){

    foreach ($row as $key => $value){

        echo "<strong>".$key.":</strong> ".$value."<br/>";

    }

    echo "=============================================<br/>";

}

//var_dump($results);

?>