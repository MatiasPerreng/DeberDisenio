<?php

class celular{


private $modelo;
private $precio;

public function __construct($modelo,$precio){
    $this->modelo = $modelo;
    $this->precio = $precio;

}

public function getModelo(){
return $this->modelo;
}

public function setModelo($modelo){
$this->modelo = $modelo;
return $this;
}

public function getPrecio(){
return $this->precio;
}

public function setPrecio($precio){
$this->precio = $precio;
return $this;
}
}
    ?>