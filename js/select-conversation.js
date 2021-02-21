function tiempoReal()
    {
        var tabla = $.ajax({
            url:'./messege/emisor.php',
            dataType:'text',
            async:false
        }).responseText;

        document.getElementById("sala").innerHTML = tabla;
    }
setInterval(tiempoReal, 1000);