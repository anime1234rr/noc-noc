// Función para cambiar el color de fondo de una sección al hacer clic en ella
function cambiarColorFondo(seccionId) {
    var seccion = document.getElementById(seccionId);
    seccion.style.backgroundColor = getRandomColor(); // Cambia el color de fondo de la sección
}

// Función para generar un color aleatorio en formato hexadecimal
function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

// Función para manejar la redirección de búsqueda
function redirectSearch() {
    var input = document.getElementById('searchInput').value.toLowerCase();
    var page = '';

    switch (input) {
        case 'anime':
            page = 'anime.html';
            break;
        case 'juegos':
            page = 'juegos.html';
            break;
        case 'musica':
            page = 'musica.html';
            break;
        case 'descargas':
            page = 'descargas.html';
            break;
        case 'noticias':
            page = 'noticias.html';
            break;
        case 'foro':
            page = 'foro.html';
            break;
        case 'recompensas':
            page = 'recompensas.html';
            break;
        default:
            alert('No se encontró ninguna página relacionada con la búsqueda.');
            return;
    }

    window.location.href = page;
}
