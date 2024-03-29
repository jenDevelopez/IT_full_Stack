<?php 
enum Tema {
  case PHP;
  case CSS;
  case HTML;
  case SQL;
  case Laravel;

}

enum Tipo {
  case Archivo;
  case ArticuloWeb;
  case Video;
}
class Recurso {
public $nombre;
public Tema $tema;
public Tipo $tipo;

function __construct($nombre,$tema,$tipo){
  $this->nombre=$nombre;
  $this->tema=$tema;
  $this->tipo=$tipo;
}

function get_nombre(){
  return $this->nombre;
}

function get_tema(): Tema {
  return $this->tema;
}

function get_tipo(): Tipo {
  return $this->tipo;
}
};

$phpTutorial = new Recurso('PHP para principiantes',Tema::PHP,Tipo::ArticuloWeb);

print_r("Nombre Recurso: " . $phpTutorial->nombre . "\n")  ;
print_r("Tema Recurso: " . $phpTutorial->get_tema()->name. "\n") ;
print_r("Tipo Recurso: " . $phpTutorial->get_tipo()->name. "\n") ;
