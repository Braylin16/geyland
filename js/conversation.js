$("#submit").click(function(e) {
    e.preventDefault();    
    /*Se crea el objeto vacío*/
    var formData = new FormData();


    var messege = document.getElementById('messege').value;
    var receptor = document.getElementById('receptor').value;
    /*OJO: No se usa value para los input file*/
    var photo = document.getElementById('photo').files[0];

    /*Agregamos los datos por separado*/
    formData.append('messege', messege);
    formData.append('receptor', receptor);  
    formData.append('photo', photo); 

    $.ajax({
        url: './messege/messege.php',
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false 

    })
    .done(function(res){
        $('#respuesta').html(res)
    })
    .fail(function(){
        console.log("error");
    })
    .always(function(){
        console.log(messege);
    });
});