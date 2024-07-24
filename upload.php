<?php
// Verificar si se ha enviado algún archivo
if ($_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
    // Obtener los datos del archivo
    $archivo = $_FILES['archivo'];
    $nombre_archivo = $archivo['name'];
    $tipo_archivo = $archivo['type'];
    $tamanio_archivo = $archivo['size'];
    $nombre_temporal = $archivo['tmp_name'];

    // Verificar la extensión del archivo
    $extension = pathinfo($nombre_archivo, PATHINFO_EXTENSION);
    $extensiones_permitidas = array('jpg', 'jpeg', 'png', 'gif');
    if (!in_array(strtolower($extension), $extensiones_permitidas)) {
        echo 'Error: Solo se permiten archivos de imagen (JPEG, PNG, GIF).';
        exit();
    }

    // Directorio de destino para guardar el archivo
    $directorio_destino = 'uploads/';

    // Mover el archivo cargado al directorio de destino
    if (!move_uploaded_file($nombre_temporal, $directorio_destino . $nombre_archivo)) {
        echo 'Error al subir el archivo.';
        exit();
    }

    // Obtener otros datos relacionados con el juego (como el autor y el género) del formulario
    $autor = $_POST['autor'] ?? '';
    $genero = $_POST['genero'] ?? '';

    // Guardar los datos del juego en algún lugar (por ejemplo, en una base de datos o en un archivo JSON)
    // Aquí puedes escribir el código para guardar los datos en una base de datos o en un archivo JSON

    // Redirigir al usuario a la página de juegos después de procesar la carga
    header("Location: http://tu-sitio.com/juego.html");
    exit();
} else {
    echo 'Error al subir el archivo: ' . $_FILES['archivo']['error'];
}
?>
