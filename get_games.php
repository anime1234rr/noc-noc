<?php
// Simula una lista de juegos obtenida de una base de datos o cualquier otro origen de datos
$games = array(
    array('title' => 'Juego 1', 'author' => 'Autor 1', 'genre' => 'Género 1'),
    array('title' => 'Juego 2', 'author' => 'Autor 2', 'genre' => 'Género 2'),
    array('title' => 'Juego 3', 'author' => 'Autor 3', 'genre' => 'Género 3')
);

// Devuelve los juegos en formato JSON
header('Content-Type: application/json');
echo json_encode($games);
?>
