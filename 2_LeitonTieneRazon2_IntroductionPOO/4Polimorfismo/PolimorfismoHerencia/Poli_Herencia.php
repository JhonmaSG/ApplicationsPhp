<?php

class Operaciones {

    private $decimal;

    public function __construct() {
        
    }

    public function operacion() {
        return "Operacion";
    }

    public function getDecimal() {
        return $this->decimal;
    }

    public function setDecimal($decimal): void {
        $this->decimal = $decimal;
    }

}

class OperacionDecBin extends Operaciones {

    public function operacion() {
        return "El Decimal convertido a Binario es : " . decbin(parent::getDecimal());
    }

}

class OperacionDecHex extends Operaciones {

    public function operacion() {
        return "El Decimal convertido a Hexadecimal es : " . dechex(parent::getDecimal());
    }

}

class OperacionDecOct extends Operaciones {

    public function operacion() {
        return "El Decimal convertido a Octal es : " . decoct(parent::getDecimal());
    }

}
?> 

