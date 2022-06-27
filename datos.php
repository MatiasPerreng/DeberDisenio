<?php

class datos{

public function __contruct(){
}

private $Nombre;
private $Apellido;
private $Direccion;
private $Numero;


public function getNombre(){
return $this->Nombre;
}

public function setNombre($Nombre){
$this->Nombre = $Nombre;
return $this;
}

public function getApellido(){
return $this->Apellido;
}

public function setApellido($Apellido){
$this->Apellido = $Apellido;
return $this;
}

public function getDireccion(){
return $this->Direccion;
}

public function setDireccion($Direccion){
$this->Direccion = $Direccion;
return $this;
}


public function getNumero(){
return $this->Numero;
}

public function setNumero($Numero){
$this->Numero = $Numero;
return $this;
}
}


?>