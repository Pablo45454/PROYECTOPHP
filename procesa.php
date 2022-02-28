<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Página HTML 5 válida</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estil.css" title="Color">
</head>
<body>
<main>
<?php 
$nombre = $_POST['nombre'];
$equipo = $_POST['equipo'];
$tema = $_POST['tema'];
$texto = $_POST['textarea'];
$premios = $_POST['premios'];
$puntuacion = $_POST['puntuacion'];

if(empty($_POST['nombre'])){
  print "<div class=hola>
  No ha escrito su nombre</div>";
} else {
   print "<div class=hola>
   Nombre y apellidos: $nombre</div>";
}

if(($_POST['equipo']=='default')){
  print "<p>No ha escrito su equipo favorito</p>";
}else print"<div class=hola>Su equipo favorito es: $equipo <br>
  <img width=330px height=200px class=eq src=img/".$equipo.".jpg>
</div>";

if(empty($_POST['premios'])){
  print "<div class=hola>
  No ha visto ningun gran premio</div>";
} else {
  print "<div class=hola>Ha visto un total de $premios grandes premios<br>";
  for ($i=0; $i<$premios; $i++){
    print "<img width=80px height=80px src=img/bahrein.jpg>";
  } 
  print "</div>";
}

if(empty($_POST['textarea'])){
  print "<div class=hola>
  No has escrito tu opinion</div>";
} else {
   print "<div class=hola>
   Tu opinión es: <br>
   $texto
   </div>";
}
print "<div class=hola>Puntuación: $puntuacion <br>";
for ($i=0;$i<$puntuacion;$i++){
 print "<img width=60px height=60px src=img/estrella.jpg>";
}
print "</div>";

if (!isset($_POST['tema'])){
  print "<div class=hola>
  No ha seleccionado ningun tema</div>";
} else {
  print "<div class=hola>
  Ha seleccionado el tema $tema</div>";
  switch ($tema){
    case "azul":
    print "
    <style>
    body {
      background-color: hsl(241,100%,50%);
    }
    </style>
    ";
    break;
    case "rojo":
      print "
    <style>
    body {
      background-color: hsl(0,100%,50%);
    }
    </style>
    ";
    break;
    case "plata":
      print "
    <style>
    body {
      background-color: hsl(0,1%,50%);
    }
    </style>
    ";
    break;
  }
}

  print "<div class=hola>";
  if(!empty($_POST['checkArr'])){
  foreach($_POST['checkArr'] as $checked){
    print "$checked";
    print "<img width=200px height=200px src=img/".$checked.".jpg>";
  }
  print "</div>";
}


?>







<br><br>
<a href="index.php">Volver al formulario<a>
</main>
</body>
</html>