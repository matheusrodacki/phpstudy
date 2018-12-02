<?php

interface Veiculo{

    public function acelerar ($velocidade);
    public function frenar ($velocidade);
    public function trocarMarcha ($marcha);

    
}

class Civic implements Veiculo {

    public function acelerar($velocidade){

        echo "O Veículo acelerou até " . $vevelocidade;
    }

    public function frenar($velocidade){

        echo "O veículo frenou até " . $vevelocidade;

    }

    public function trocarMarcha($marcha){

        echo "O veículo engatou a marcha " .$marcha;
    }


}
    
$carro = new Civic();

$carro->trocarMarcha(1);


?>