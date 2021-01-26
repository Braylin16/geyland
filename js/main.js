// Seleccionar el icono search
var btnSearch = document.getElementById('btn-icon-search');

// Seleccionar formulario search
var formSearch = document.getElementById('input-search');

// Seleccionar el input search para crear el focus
var inputFocus = document.getElementById('search-header');

// Si oprime el boton, oculta el icono y aparece el formulario
btnSearch.addEventListener('click', () => {
    formSearch.className = "show messenger-search";
    inputFocus.focus();
    btnSearch.className = "hide";
});