<?php

interface ControleXbox {
    public function acionarSensorXbox();
}

class ControleXboxImpl implements ControleXbox {
    public function acionarSensorXbox() {
        echo "Acionando o Xbox\n";
    }
}
class ControlePlaystation {
    public function acionarSensorPlaystation() {
        echo "Acionando o do PlayStation\n";
    }
}
class AdapterControle implements ControleXbox {
    private $controlePlaystation;

    public function __construct(ControlePlaystation $controlePlaystation) {
        $this->controlePlaystation = $controlePlaystation;
    }

    public function acionarSensorXbox() {
        $this->controlePlaystation->acionarSensorPlaystation();
    }
}
class Cliente {
    public static function main() {
        echo "Usando controle de Xbox:\n";
        $controleXbox = new ControleXboxImpl();
        $controleXbox->acionarSensorXbox();

        echo "\nUsando controle de PlayStation adaptado para Xbox:\n";
        $controlePlaystation = new ControlePlaystation();
        $controleAdaptado = new AdapterControle($controlePlaystation);
        $controleAdaptado->acionarSensorXbox();
    }
}


Cliente::main();

?>
