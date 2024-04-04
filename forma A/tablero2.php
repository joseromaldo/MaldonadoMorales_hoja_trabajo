<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tablero de Damas</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Agregar fondo al documento */
    body {
      background-image: url(/images/fondo.avif);
    }

    /* Agregar ancho y altura a cada celda */
    .celda {
      width: 50px;
      height: 50px;
    }

    /* Ajustar alto y ancho para cada imagen y hacerlos fichas */
    img {
      border-radius: 1cm;
      height: 60px;
      width: 60px;
    }

    .fila-4 {
      /* Poner prioridad al color verde ante otras funciones que intenten cambiar color */
      background-color: green !important;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1 class="text-center text-warning mt-5">Tablero de Damas</h1>
    <div class="row justify-content-center">

      <div class="d-flex justify-content-center">
        <table class="border border-dark">

          <?php
          $blackImage = '/images/foto.jpg'; // Imagen para las fichas negras
          $whiteImage = '/images/perfil.jpeg'; // Imagen para las fichas blancas

          $rows = 8;
          $columns = 8;
          for ($i = 0; $i < $rows; $i++) {
            echo '<tr>';
            for ($j = 0; $j < $columns; $j++) {
              // Determinar si la celda es negra o blanca
              $class = ($i + $j) % 2 == 0 ? 'bg-white' : 'bg-dark';
              // Añadir la clase para la fila 4 para que quede en success
              if ($i == 3) {
                $class = ' fila-4';
              }
              echo "<td class='$class celda'>";
              // Asignar imagen dependiendo de la fila
              if (($i + $j) % 2 == 0) {
                // Fila par
                if ($i < 3) {
                  echo "<img src='$blackImage' alt='Ficha Negra'>";
                } elseif ($i > 4) {
                  echo "<img src='$whiteImage' alt='Ficha Blanca'>";
                }
              }
              echo '</td>';
            }
            echo '</tr>';
          }
          ?>
        </table>
      </div>
    </div>
  </div>
</body>

</html>