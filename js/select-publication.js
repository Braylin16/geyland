function tiempoReal()
    {
        var tabla = $.ajax({
            url:'./publication/publication.php',
            dataType:'text',
            async:false
        }).responseText;

        document.getElementById("publication").innerHTML = tabla;
    }
    setInterval(tiempoReal, 1000);