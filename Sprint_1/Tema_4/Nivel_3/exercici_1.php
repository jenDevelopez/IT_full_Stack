<?php
class Cinema
{
  public $nombre;
  public $poblacion;
  public $peliculas;

  public function __construct($nombre, $poblacion, $peliculas)
  {
    $this->nombre = $nombre;
    $this->poblacion = $poblacion;
    $this->peliculas = $peliculas;
  }

  function get_peliculas()
  {
    return $this->peliculas;
  }

  function get_pelicula_mas_larga($peliculas){
    for($i = 0; $i < count($peliculas); $i++){
      if($peliculas[$i] > $peliculas[$i+1]){
        $temp = $peliculas[$i];
      }else{
        $temp = $peliculas[$i+ 1];
      }
      $i++;
    }
    return $temp;
  }
}

class Pelicula
{
  public $nombre;
  public $duracion;
  public $director;
  public function __construct($nombre, $duracion, $director)
  {
    $this->nombre = $nombre;
    $this->duracion = $duracion;
    $this->director = $director;
  }
  function get_director()
  {
    return $this->director;
  }
  function get_nombre()
  {
    return $this->nombre;
  }
  function get_duracion()
  {
    return $this->duracion;
  }

 

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cines</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php

  $listaPeliculas1 = array(
    new Pelicula('Los vengadores', 143, 'Josh Whedon'),
    new Pelicula('Viuda Negra', 134, 'Cate Shortland'),
    new Pelicula('Guardianes de la galaxia', 122, 'James Gunn'),
  );
  $cine1 = new Cinema('Park Valles', 'Terrassa', $listaPeliculas1);

  $listaPeliculas2 = array(
    new Pelicula('Capitan America', 124, 'Joe Joshnston'),
    new Pelicula('Iron man', 126, 'Jon Favreau'),
    new Pelicula('Guardianes de la galaxia vol II', 137, 'James Gunn'),
  );
  $cine2 = new Cinema('Heron City', 'Barcelona', $listaPeliculas2);
  $listaPeliculas3 = array(
    new Pelicula('Thor: Love and Thumder', 119, 'Taika Waititi'),
    new Pelicula('Eternals', 156, 'Chloé Zhao'),
    new Pelicula('Guardianes de la galaxia vol III', 150, 'James Gunn'),
  );
  $cine3 = new Cinema('La Farga', 'Hospitalet de Llobregat', $listaPeliculas3);

  $listadoCines = array($cine1, $cine2, $cine3);

  ?>
  <div>
    <h2>Cines</h2>
    <table>
      <tr>
        <th>Cine</th>
        <th>Cartelera</th>
        <th>Película mas larga</th>
      </tr>
      <tr <?php foreach ($listadoCines as $cine) { ?>>
          <td>
            <?php echo $cine->nombre ?>
          </td>
          <td>
                <p <?php foreach ($cine->peliculas as $pelicula) { ?> >
                  <?php echo $pelicula->nombre ?>
                </p <?php } ?> >
              
          </td>
          <td>
            <?php $peliculaMasLarga = $cine->get_pelicula_mas_larga($cine->peliculas); echo $peliculaMasLarga->nombre;?>
            <span>
              <?php echo $peliculaMasLarga->duracion; ?> min
            </span>
          </td>
        </tr <?php } ?>>
    </table>
</body>

</html>