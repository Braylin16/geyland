$("#submit").click(function(e) {
    e.preventDefault();    
    /*Se crea el objeto vacío*/
    var formData = new FormData();


    var publicacion = document.getElementById('post').value;
    /*OJO: No se usa value para los input file*/
    var photo = document.getElementById('img').files[0];

    /*Agregamos los datos por separado*/
    formData.append('public', publicacion); 
    formData.append('img', photo); 

    $.ajax({
        url: './backend/publication.php',
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false 

    })
    .done(function(res){
        $('#respuesta').html(res);
        $('#post').val('');
        $('#img').val('');
    })
    .fail(function(){
        console.log("error");
    })
    .always(function(){
        console.log(publicacion);
    });
});