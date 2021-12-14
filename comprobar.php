<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Tus Datos de suscripcion: </h1>
<p>Estos son los datos que nos has enviado:</p>
<?php

    error_reporting(0);

    echo "Nombre: ".$_POST['nombre']."<br>"; 
    echo "Apellidos: ".$_POST['apellidos']."<br>";
    echo "E-mail: ".$_POST['email']."<br>";
    echo "Contrasena: ".$_POST['cont']."<br>";
    echo "Sexo: ".$_POST['sexo']."<br>";
    echo "Estudios: ".$_POST['estudios']."<br>";
    echo "Aficiones: \"on\" seleccionado, sin marcar, no seleccionado<br>";
    echo "Musica: ".$_POST['musica']."<br>";
    echo "Deportes: ".$_POST['deportes']."<br>";
    echo "Cine: ".$_POST['cine']."<br>";
    echo "Libros: ".$_POST['libros']."<br>";
    echo "Ciencia: ".$_POST['ciencia']."<br>";
    echo "Día de la semana: ".$_POST['dia']."<br>";
    echo "Tu comentario: ".$_POST['comentario']."<br><br>";
?>
<p>Comprueba tus datos antes de enviarlos, si no estan bien vuelve a escribirlos.</p>
<p>Los datos son correctos: <a href="enviar.html">Enviar</a></p>
<p>Los datos no son correctos: <a href="form.html">Volver a escribirlos</a></p>


</body>
</html>
