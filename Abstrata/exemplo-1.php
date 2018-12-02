<?php

interface Veiculo{

    public function acelerar ($velocidade);
    public function frenar ($velocidade);
    public function trocarMarcha ($marcha);

    
}

abstract class Automovel implements Veiculo {

    public function acelerar($velocidade){

        echo "O Veículo acelerou até " . $velocidade;
    }

    public function frenar($velocidade){

        echo "O veículo frenou até " . $velocidade;

    }

    public function trocarMarcha($marcha){

        echo "O veículo engatou a marcha " .$marcha;
    }


}

class DelRay extends Automovel {

    public function empurrar(){


    }

}

$carro = new DelRay();

$carro->acelerar(200);


?>