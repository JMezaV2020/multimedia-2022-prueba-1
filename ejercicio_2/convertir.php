<?php

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];

//solicito libreria
require 'phpqrcode/qrlib.php';

$nom = 'temp/';

if(!file_exists($nom))
    mkdir($nom);

$nombreArch = $nom.'nombreApellido.png'; //crea png con nombreApellido

$tamanio = 10;
$nivel = 'M';
$marco = 3;
$contenido = $nombre.' '.$apellido; //agrega nombre y apellido al qr

QRcode::png($contenido, $nombreArch, $nivel, $tamanio, $marco);

echo "<b>".'Nombre: '."</b>".$nombre.' '."<b>".'Apellido: '."</b>".$apellido;
echo'<img src="'.$nombreArch.'"/>';
?>