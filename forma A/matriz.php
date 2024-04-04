<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz Dinámica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background-color: #f0f0f0;
            padding-top: 50px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            text-align: center;
            max-width: 400px;
            margin: auto;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .celda {
            height: 40px;
            width: 40px;
            border: 3px solid #ccc;
            text-align: center;
            background-color: #fff;
            box-shadow: 2px 2px 5px #888888;
            margin: 5px;
        }

        .contenedor {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .resultado {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <h1>Matriz con filas, forma A</h1>
    <form action="matriz.php" method="get">
        <div class="mb-3">
            <label for="filas" class="form-label">Número de filas:</label>
            <input type="number" step="any" class="form-control" id="filas" name="filas">
        </div>
        <div class="mb-3">
            <label for="columnas" class="form-label">Número de columnas:</label>
            <input type="number" step="any" class="form-control" id="columnas" name="columnas">
        </div>
        <div class="mb-3">
            <label for="suma" class="form-label">Número de columna para sumar:</label>
            <input type="number" step="any" class="form-control" id="suma" name="suma">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <div class="contenedor">
        <?php
        $key = 0;
        $filas = $_GET['filas'] ?? 0;
        $columnas = $_GET['columnas'] ?? 0;
        $suma = $_GET['suma'] ?? 0;
        $total = 0;

        if ($filas > 0 && $columnas > 0) {
            echo "<div class='container'>";
            for ($i = 1; $i <= $filas; $i++) {
                echo "<div class='row'>";
                for ($j = 1; $j <= $columnas; $j++) {
                    echo "<div class='col celda'>" . ++$key . "</div>";
                    if ($j == $suma) {
                        $total = $total + $key;
                    }
                }
                echo "</div>";
            }
            echo "</div>";
        }
        ?>
    </div>

    <?php
    if ($filas > 0 && $columnas > 0) {
        echo "<div class='resultado'>El total de la suma de los dígitos de la columna $suma es igual a $total</div>";
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
