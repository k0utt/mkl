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
        

        var hideModeTxt    = document.createElement('div'),
            txtEl          = document.createElement('span'),
            txt            = "Hablemos";

            txtEl.textContent = txt;
            hideModeTxt.setAttribute('id','hideModeTxt');
            hideModeTxt.appendChild(txtEl);                       


        $('#side-float .txt').remove();
        $('#side-float').append(hideModeTxt);

        
    
    });


});

