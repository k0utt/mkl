$(document).ready(function(){

    /* 1. Init: Add class "active" to show menu  */

    function showSideFloat(){
        $('#side-float').addClass('active');
    }

    if(localStorage.sideFloat == 'hide-mode'){
        setTimeout(showSideFloat,200); 
    }else{
        setTimeout(showSideFloat,2000); 
    }
       


    
    /* 2. Add Class hide-mode if LocalStorage */

    if(localStorage.sideFloat == 'hide-mode'){
        $('#side-float').addClass('hide-mode');
    }


    /* 3. Add Class hide-mode, change HTML & LocalStorage onClick #minimize */
    
    $('#minimize').click(function(){
        $('#side-float').addClass('hide-mode');
        localStorage.sideFloat = 'hide-mode';
        

        if($('#side-float').hasClass('hide-mode')){

            var main   = document.createElement('div'),
                pargh  = document.createElement('p'),
                link   = document.createElement('a'),
                linkTxt = "Hablemos";

                link.textContent = linkTxt;
                link.setAttribute('id','hideModeLink'),
                main.setAttribute('id','hideMode');
                pargh.appendChild(link);
                main.appendChild(pargh);                       


            $('#side-float .txt').remove();
            $('#side-float .txt h5').remove();
            $('#side-float .txt p').remove();
            $('#side-float .txt p a').remove();
            $('#side-float').append(main);
            $('#hideModeLink').addClass('form-trigg');
            $('#hideMode p').addClass('form-trigg');
            $('#hideMode').addClass('txt--hide-mode');
            $('#hideMode').addClass('form-trigg');
            


        }
        
    
    });


});

