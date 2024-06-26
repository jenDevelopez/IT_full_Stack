<?php 
enum Tema {
  case PHP;
  case CSS;
  case HTML;
  case SQL;
  case Laravel;

  public function getName(): string {
    return match ($this) {
      $this::PHP => "PHP",
      $this::CSS => 'CSS',
      $this::HTML => 'HTML',
      $this::SQL => 'SQL',
      $this::Laravel => 'Laravel',
    };
  }

}

enum Tipo {
  case Archivo;
  case ArticuloWeb;
  case Video;
  public function getName(): string {
    return match ($this){
      $this::Archivo => 'Archivo',
      $this::ArticuloWeb => 'Artículo web',
      $this::Video => 'Video',
    };
  }
 
}
class Recurso {
public $nombre;
public Tema $tema;
public Tipo $tipo;
public $url;

function __construct($nombre,Tema $tema, Tipo $tipo,$url){
  $this->nombre=$nombre;
  $this->tema=$tema;
  $this->tipo=$tipo;
  $this->url=$url;

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

function get_url(){
  return $this->url;
}


function get_info(){
  $datos = array($this->nombre,
  $this->tema->getName(),
  $this->tipo->getName(),
  $this->url);
  return $datos;
}
};

$phpTutorial = new Recurso('PHP para principiantes',Tema::PHP,Tipo::ArticuloWeb,'https://www.php.net/manual/es/intro-whatis.php');

foreach($phpTutorial->get_info() as $key => $value){
  echo $key."-".$value. "\n";
}
