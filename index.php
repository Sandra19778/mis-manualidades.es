<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $textoProducto = $_POST['texto-chapa'] ?? $_POST['texto-imanes'] ?? $_POST['texto-llavero'] ?? $_POST['texto-abrebotellas'];
    $color = $_POST['color'];
    $cantidad = $_POST['cantidad'];

    // Manejo de la imagen subida (si hay alguna)
    if (isset($_FILES['imagen-chapa']) || isset($_FILES['imagen-imanes']) || isset($_FILES['imagen-llavero']) || isset($_FILES['imagen-abrebotellas'])) {
        $imagen = $_FILES['imagen-chapa'] ?? $_FILES['imagen-imanes'] ?? $_FILES['imagen-llavero'] ?? $_FILES['imagen-abrebotellas'];
        $imagenRuta = 'uploads/' . basename($imagen['name']);
        move_uploaded_file($imagen['tmp_name'], $imagenRuta);
    }

    // Guardar o enviar los datos (puedes guardarlo en una base de datos o enviarlo por email)
    echo "¡Gracias $nombre! Tu pedido ha sido recibido.";
}
?>
