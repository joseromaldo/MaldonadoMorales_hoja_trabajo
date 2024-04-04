<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .row {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .cubo {
            height: 40px;
            width: 40px;
            background-color: white;
            border: solid;
            border-width: 3px;
            margin-right: 10px;
            /* Espacio entre cubos */
            float: right;
            /* Flotar a la izquierda para formar la escalera */
        }

        .contenedor {
            display: flex;
            justify-content: center;
            /* Centrar horizontalmente */
            text-align: right;
            /* Alinear el texto a la derecha*/

        }

        .escalera {
            margin-top: 20px;
            /* Espacio superior */
        }
        .input{
            display: flex;
            justify-content: center;
            /* Centrar el input del formulario */
        }
    </style>
</head>

<body class="bg-dark">
    <h1 class="text-center text-success mt-3">ESCALERA</h1>
    <h2 class="text-center text-success mt-6">El rango de los niveles para formar esta escalera es de 5 a 8</h2>
    
    <div class="row text-center">
        <form action="escalera.php" method="post">
            <label for="num">
                <p class="text-center">Ingrese el valor deseado para formar su escalera</p>
            </label>
            <br><br>
            <div class="input">
            <input class="form-control w-50 text-center" type="number" step="any" name="num" placeholder="5 - 8">
            </div>
            <br><br>
            <button type="button" class="btn btn-warning">ENVIAR</button>
        </form>
    </div>
    <br>
    <div class="row">
        <div class="col-12 contenedor">
            <div class="escalera">
                <?php
                // array para palabras en cada nivel
$frase1 = array("Y", "n", "u", "s", "o", "d", "é", "s", "o", "J", "a", "í", "r", "a", "M");
$frase2=array("Y", "n", "u", "s", "o", "d", "é", "s", "o", "J", "a", "í", "r", "a", "M", "a", "n", "i", "c", "o", "c");
$frase3=array("Y", "n", "u", "s", "o", "d", "é", "s", "o", "J", "a", "í", "r", "a", "M", "a", "n", "i", "c", "o", "c", "o", "d", "a", "c", "s", "e", "p");
$frase4=array("Y", "n", "u", "s", "o", "d", "é", "s", "o", "J", "a", "í", "r", "a", "M", "a", "n", "i", "c", "o", "c", "o", "d", "a", "c", "s", "e", "p", "!", "o", "c", "i", "r", "é", "u", "Q");
$key=0;

                $num = $_POST['num'];
                // 5 niveles
                if ($num == 5) {
                    for ($i = 1; $i <= $num; $i++) {
                        for ($j = 1; $j <= $num; $j++) {
                                
                            
                            if (($i + $j) >= 6 && ($i + $j) <= 10) {
                                echo "<div class='cubo ml-auto text-center'>";
                                
                                    echo $frase1[$key++];
                                
                                echo "</div>";
                            }
                        
                        }
                        echo "<br><br>";
                    }
                }

                // 6 niveles
                if ($num == 6) {
                    for ($i = 1; $i <= $num; $i++) {
                        for ($j = 1; $j <= $num; $j++) {

                            if (($i + $j) == 7 || ($i + $j) == 8 || ($i + $j) == 9 || ($i + $j) == 10 || ($i + $j) == 11 || ($i + $j) == 12) {
                                echo "<div class='cubo ml-auto text-center'>";
                                
                                echo $frase2[$key++];
                            
                            echo "</div>";
                            }
                        }
                        echo "<br><br>";
                    }
                }

                // 7 niveles
                if ($num == 7) {
                    for ($i = 1; $i <= $num; $i++) {
                        for ($j = 1; $j <= $num; $j++) {

                            if (($i + $j) == 8 || ($i + $j) == 9 || ($i + $j) == 10 || ($i + $j) == 11 || ($i + $j) == 12 || ($i + $j) == 13 || ($i + $j) == 14) {
                                echo "<div class='cubo ml-auto text-center'>";
                                
                                echo $frase3[$key++];
                            
                            echo "</div>";
                            }
                        }
                        echo "<br><br>";
                    }
                }
                // 8 niveles
                if ($num == 8) {
                    for ($i = 1; $i <= $num; $i++) {
                        for ($j = 1; $j <= $num; $j++) {

                            if (($i + $j) == 9 || ($i + $j) == 10 || ($i + $j) == 11 || ($i + $j) == 12 || ($i + $j) == 13 || ($i + $j) == 14 || ($i + $j) == 15 || ($i + $j) == 16) {
                                echo "<div class='cubo ml-auto text-center'>";
                                
                                echo $frase4[$key++];
                            
                            echo "</div>";
                            }
                        }
                        echo "<br><br>";
                    }
                }

                ?>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>