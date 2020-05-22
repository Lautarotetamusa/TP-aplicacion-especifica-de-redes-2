<?php
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $edad = $_POST["edad"];
  $genero = $_POST["genero"];
  $correo = $_POST["correo"];
  $archivo = $_POST["archivo"]; //no lo estoy subiendo
  $ult_paja = $_POST["ult_paja"];
  $fecha = $_POST["fecha"];
  $pass = $_POST["pass"];
  $volumen = $_POST["volumen"];
  $navegador = $_POST["navegador"];

  if(isset($_POST["hijos"]))
    $hijos = True;
  else
    $hijos = False;

  if($hijos)
    $cant_hijos = $_POST["cant_hijos"];
  else
  $cant_hijos = 0;


  //connect to the database
  //mysqli (host, username, pasword, DB_name)
  $mysqli = new mysqli('http://3.130.9.8/dba5fnhn83p/index.php', 'dosdos', 'dosseba.', 'dos');
  $mysqli->set_charset("utf8");

  $sentecia = "INSERT INTO datos (
                nombre, apellido, edad, hijos, cant_hijos, genero, mail, ult_paja, cumpleaños, contraseña, volumen, navegador
                )
              VALUES(
                '$nombre', '$apellido', $edad, $hijos, $cant_hijos, '$genero', '$correo', '$ult_paja', '$fecha', '$pass', $volumen, '$navegador'
                )
              ";

  if($mysqli->query($sentencia)){
    echo "<h1> datos subidos con exito </h1>";
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
  else{
    echo "<h1> error al subir los datos </h1><br>";
    echo $sentecia;
  }



 ?>
