// Evento para anclas (con animacion)

//Cuando termine de cargar la pagina...
$(function() {

    // --------------------------------------
    // ANCLAS
    // --------------------------------------
    
    //Asignar evento click a los enlaces a del menu (nav)
    $('nav a').click(function(e){			
        e.preventDefault();		//evitar el eventos del enlace normal
        var strAncla=$(this).attr('href'); //id del ancla
            $('body,html').stop(true,true).animate({				
                scrollTop: $(strAncla).offset().top
            },1000);
    });

    // --------------------------------------
    // OTRAS COSAS 
    // --------------------------------------
  
});


