<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoja de calculo</title>
    <link rel="stylesheet" href="formulario.css">
</head>
<body>
    <h2>Calculo de ecuacion cuadratica</h2>
    <hr>
    <div class="calculo">
        <?php

            $a=$_POST['a'];
            $b=$_POST['b'];
            $c=$_POST['c'];

            echo "<h2>"."Con positivo"."</h2>";
            echo "(-b + Raiz(b^2 - 4ac)/2a): ".  (-$b + sqrt($b**2 - 4*$a*$c))/2*$a;
            echo "<br>";
            echo "<hr>";
            echo "<h2>"."Con negativo"."</h2>";
            echo "(-b - Raiz(b^2 - 4ac)/2a): ".(-$b - sqrt($b**2 - 4*$a*$c))/2*$a;
            echo "<br>";
        ?>
    </div>
    <a href = "index.html"><input type="button" value="VOLVER"/></a>
</body>
</html>