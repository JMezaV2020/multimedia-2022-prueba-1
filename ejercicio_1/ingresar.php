<?php
$titulo = $_POST['titulo'];
$cuerpo = $_POST['cuerpo'];
$categoria = $_POST['categoria'];
$foto = $_FILES['foto'];
$autor = $_POST['autor'];

$nombre_archivo = "imagen";

$target_dir = "img/";
$target_file = $target_dir . $nombre_archivo . '.jpg';
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//Validar IMG
if (isset($foto) && $foto != "") {
    //Obtengo datos para comprobacion y posterior inserción a la bd
    $tipo = $_FILES['foto']['type'];
    $tamano = $_FILES['foto']['size'];
    //Compruebo que es del tipo
    if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 1000000))) {
      echo "Error extensión o tamaño no valido, solo se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.";
    }
  }

move_uploaded_file($foto["tmp_name"], $target_file);
echo "Imagen " . $foto['name'];

//Conexión
$host = "localhost";
$user = "root";
$pass = "";
$db = "multimedia_prueba_1";

$conexion = mysqli_connect($host, $user, $pass, $db);

//Consulta de insercion
$consulta = "INSERT INTO noticia (titulo, cuerpo, categoria, img, autor) 
            VALUES('$titulo', '$cuerpo', '$categoria', '$target_file', '$autor')";

//Ejecutar consulta
if (mysqli_query($conexion, $consulta)) {
    header("Location: http://127.0.0.1/multimedia-2022-prueba-1/ejercicio_1/tabla.php");
}else{
    header("Location: http://127.0.0.1/multimedia-2022-prueba-1/ejercicio_1/index.html");
}
?>