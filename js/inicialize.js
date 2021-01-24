// Iniciallizar los elementos de materialize

// Inicializar modal
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, {
        dismissible: false
    });

    //  Inicializar el Dropdown
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems);

    // Sidenav, menu responsive
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);

  });