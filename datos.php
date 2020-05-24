<?php
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $edad = $_POST["edad"];
  $genero = $_POST["genero"];
  $correo = $_POST["correo"];
  $ult_paja = $_POST["ult_paja"];
  $fecha = $_POST["fecha"];
  $pass = $_POST["pass"];
  $volumen = $_POST["volumen"];
  $navegador = $_POST["navegador"];
  $color = $_POST["color"];
  $cricket = $_POST["cricket"];
  $tiempo = $_POST["c_tiempo"];
  $enano = $_POST["enano"];
  $vieja = $_POST["vieja"];
  $limones = $_POST["limones"];
  $otaku = $_POST["otaku"];



  if(isset($_POST["hijos"]))
    $hijos = True;
  else
    $hijos = False;

  if($hijos)
    $cant_hijos = $_POST["cant_hijos"];
  else
    $cant_hijos = null;


  //connect to the database
  //mysqli (host, username, pasword, DB_name)
  $mysqli = new mysqli('localhost', 'dosdos', 'dosseba', 'dos');

  //chekck connection errors
  if ($mysqli->connect_errno) {
    echo "Error: Fallo al conectarse a MySQL debido a: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    exit;
  }
  $mysqli->set_charset("utf8");

  //SQL sentence
  $sentecia = "INSERT INTO datos (
                nombre, apellido, edad, hijos, cant_hijos, genero, mail, ult_paja, cumpleaños, contraseña, volumen, navegador
                )
              VALUES(
                '$nombre', '$apellido', $edad, $hijos, $cant_hijos, '$genero', '$correo', '$ult_paja', '$fecha', '$pass', $volumen, '$navegador'
                )
              ";

  if(!$mysqli->query($sentecia)){
    printf("Errormessage: %s\n", $mysqli->error);
    echo $sentecia;
  }
  else{
    echo "<h1> datos subidos con exito </h1>";
    echo $sentecia."<br>";
    echo ($nombre."<br>");
    echo ($apellido."<br>");
    echo ($edad."<br>");
    echo ($hijos."<br>");
    echo ($cant_hijos."<br>");
    echo ($genero."<br>");
    echo ($correo."<br>");
    echo ($archivo."<br>");
    echo ($ult_paja."<br>");
    echo ($fecha."<br>");
    echo ($pass."<br>");
    echo ($voluen."<br>");
    echo ($navegador."<br>");
  }


    $mysqli->close();
 ?>
