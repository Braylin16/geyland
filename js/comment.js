// Formulario de comentario de para las publicaciones

// Seleccionar la caja de publicar el comentario
var formComent = document.getElementById('view-comment');

// Icono que al hacer click mostrara la caja de comentarios
var iconComment = document.getElementById('click-comment');

// Seleccionar el textarea para crear un focus
var focusTextArea = document.getElementById('comment');

// Si se ejecuta el click, entonces mostramos
iconComment.addEventListener('click', () => {
    formComent.className = "show row";
    focusTextArea.focus();
});