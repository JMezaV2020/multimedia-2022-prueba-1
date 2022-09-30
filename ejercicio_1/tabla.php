<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
    <link rel="stylesheet" href="formulario.css">
</head>
<body>
<h2>Tabla de noticias</h2>
<hr>

<?php
//Conexion con bd
    $conexion=mysqli_connect('localhost','root', '','multimedia_prueba_1');

?>   
    <table border = "1">
        <tr>
            <td>id</td>
            <td>titulo</td>
            <td>cuerpo</td>
            <td>categoria</td>
            <td>img</td>
            <td>autor</td>
        </tr>

        <?php
        //Seleciono todo de la tabla noticia
        $sql="SELECT * FROM noticia";
        $result=mysqli_query($conexion, $sql);

        //ordeno imprimir
        while($mostrar=mysqli_fetch_array($result)){
        ?>

        <tr>
            <td><?php echo $mostrar['id']?></td>
            <td><?php echo $mostrar['titulo']?></td>
            <td><?php echo $mostrar['cuerpo']?></td>
            <td><?php echo $mostrar['categoria']?></td>
            <td><?php echo $mostrar['img']?></td>
            <td><?php echo $mostrar['autor']?></td>
        </tr>

        <?php
        }
        ?>

    </table>
    <br>
    <a href = "index.html"><input type="button" value="VOLVER"/></a>
</body>
</html>