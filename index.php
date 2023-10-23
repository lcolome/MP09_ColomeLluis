<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página de prueba</title>
</head>
<body>
<h1>Formulario de prueba</h1>
<?php
// Creamos un formulario
echo "<form action='' method='post'>";
echo "<input type='text' name='nombre' placeholder='Nombre' maxlength='20'>";
echo "<input type='number' name='edad' placeholder='Edad'>";
echo "<input type='submit' value='Enviar'>";
echo "</form>";

// Si el formulario se ha enviado, procesamos los datos
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtenemos los datos del formulario
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];

    // Imprimimos los datos en el navegador
    echo "Tu nombre es: $nombre <br>";
    echo "Tu edad es: " . $edad . "<br>";
    echo "Tu edad es: " . $edad;
}
?>
</body>
</html>
