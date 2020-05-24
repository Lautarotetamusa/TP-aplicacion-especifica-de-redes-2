<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="estilos.css">
  <link rel="stylesheet" href="estilosTabla.css">
  <script type="text/javascript" src="funciones.js"></script>

</head>

<body>

  <!--<h2>Datos enviados con el método
    <b style="font-weight: bold; color: rgba(0,102,255,0.25)">POST</b>
  </h2>-->
  <header class="cabecera border_shadow">
    <a href="https://www.ips.edu.ar"><img class="imagen" src="media/logo.jpg" alt="" id="logo_del_poli"></a>
    <div class="botonera_grande center" id="botonera_grande" >
      <ul style="padding: 0; margin: 0">
        <li class="boton"  onclick="location.href='index.html'">Inicio</li>
        <li class="boton"  onclick="location.href='tabla.html'">Nosotros</li>
        <li class="boton"  onclick="location.href='https://www.github.com'">Github</li>
        <li class="boton"  onclick="location.href='https://www.instagram.com'">Instagram</li>
        <li class="boton"  onclick="location.href='https://www.youtube.com'">Youtube</li>
      </ul>
    </div>

    <div class="botonera_chica" id="botonera_chica" >
      <h2 class="menu_text">Menu</h2>
      <img class="imagen_botonera" src="media/boton_desplegable.png" id="boton">

      <div class="dropdown border_shadow" style="display: none;" id="dropdown">
        <ul style="padding: 0; margin: 0" >
          <li class="boton_dropdown center" onclick="location.href='index.html'">Inicio</span></li>
          <li class="boton_dropdown center" onclick="location.href='tabla.html'">Nosotros</a></li>
          <li class="boton_dropdown center" onclick="location.href='https://www.github.com'">Github</a></li>
          <li class="boton_dropdown center" onclick="location.href='https://www.instagram.com'">Instagram</a></li>
          <li class="boton_dropdown center" onclick="location.href='https://www.youtube.com'">Youtube</a></li>
        </ul>
      </div>
    </div>

  </header>


  <div class="cont_tabla">
    <table style="background: white" class="tabla">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Edad</th>
          <th>Genero</th>
          <th>Correo</th>
          <th>Ultima p</th>
          <th>Fecha</th>
          <th>Pass</th>
          <th>Volumen</th>
          <th>Navegador</th>
        </tr>
      </thead>
      <tbody>
      <?php
          $mysqli = new mysqli('localhost', 'dosdos', 'dosseba', 'dos');
          $mysqli->set_charset("utf8");

          if ($mysqli->connect_errno) {
            echo "Error: Fallo al conectarse a MySQL debido a: \n";
            echo "Errno: " . $mysqli->connect_errno . "\n";
            echo "Error: " . $mysqli->connect_error . "\n";
            exit();
          }

          $sentencia = "SELECT * FROM datos";

          if( $datos = $mysqli->query($sentencia) ){
              //guardar el contenido de los campos
              while ($fila = $datos->fetch_assoc()) {
                //rrecorremos todos los campos
                echo "<tr>";
                foreach ($fila as $a) {
                    echo "<td>" . $a . "</td>";
                }
                echo "</tr>";
              }
          }
       ?>
     </tbody>
    </table>
  </div>

  <footer class="footer center">
     <span class="integrantes">Rodrigo Mar&iacute</span>
     <span class="integrantes"> Ignacio Roca</span>
     <span class="integrantes">Lautaro Teta Musa</span>
  </footer>

  <script type="text/javascript">

    var botoneraG = document.getElementById("botonera_grande");
    var botoneraC = document.getElementById("botonera_chica");

    var imagen = document.getElementById("logo_del_poli");
    imagen.addEventListener("mouseover", function(){init(imagen.id); vibracion()});
    imagen.addEventListener("mouseout", function(){novibracion(imagen)});

    if(window.innerWidth > 720){ //Desktop
      botonera_grande();
    }
    else{
      botonera_chica();

      var boton = document.getElementById("boton");

      boton.addEventListener("mouseenter", verDropdown);
    }

    window.addEventListener('resize', resize);
  </script>
</body>

</html>
