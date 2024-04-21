<?php
$alumnos = array(
  "Juan" => array(8.5, 7.2, 6.8, 9.0, 8.7),
  "María" => array(6.0, 7.8, 8.2, 7.5, 9.3),
  "Carlos" => array(9.2, 8.0, 7.5, 8.8, 9.5),
  "Laura" => array(7.5, 6.8, 8.0, 7.2, 8.5)
);

function mediaNotasAlumnos($alumnos){
  $mediaPorAlumno = [];
  foreach($alumnos as $alumno => $notas){
    $media = array_reduce($notas, fn($acc,$curr) => $acc + $curr) / 5;
    print "La media de $alumno es $media \n";
    $mediaPorAlumno[] = $media;
  }

  $mediaAlumnos = array_reduce($mediaPorAlumno, fn($acc,$curr) => $acc + $curr) /count($alumnos);
  print "La media de nota de los alumnos es $mediaAlumnos";
}

mediaNotasAlumnos($alumnos);