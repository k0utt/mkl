(function(){
  var cookieAcptBtn = document.getElementById('cookieAcptBtn'),
      cookieB       = document.getElementById('cookiebar');

  if(localStorage.cookieBar == true){
    cookieB.style.display = 'none';
  }else{
    cookieB.style.display = 'block';
  }

  var cookieAcpt =  function(){
    localStorage.cookieBar = 'none';
    cookieB.style.display = localStorage.cookieBar;
  }

  cookieB.style.display = localStorage.cookieBar;

  cookieAcptBtn.addEventListener('click', cookieAcpt);

})();
