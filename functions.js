  var btn = document.getElementsByClassName('btnNav');
  var block = document.getElementsByClassName('propContenu');
  var demoAnimation = document.getElementById("demoAnimation");

  /*Afficher seulement l'explication de la 1ère propriété*/
  for (let i = 1; i < block.length; i++) {
    block[i].style.display = 'none';
  }

  /*Function qui fait apparaître un bloc caché et cache d'autres blocs */
  function blockAppear(n) {
    for (let i = 0; i < block.length; i++) {
      block[i].style.display = 'none';
      block[n].style.display = 'block';
    }
  }

  /*Function qui changer la couleur de fond du bouton cliqué*/
  function bgColor(n) {
    for (let i = 0; i < btn.length; i++) {
      btn[i].style.backgroundColor = 'yellow';
    }
    btn[n].style.backgroundColor = 'orange';
  }

  /*Attacher function blockAppear et bgColor aux boutons de nav*/
  for (let i = 0; i < btn.length; i++) {
    btn[i].onclick = function () {
      blockAppear(i);
      bgColor(i);
    };
  }

  // s'il y a une
  (function(){
    document.getElementById('csslink').href = localStorage.getItem('css');
  })()



function changeCss(name) {
  const link = `scss/${name}/${name}.css?v=${Date.now()}`;
  document.getElementById('csslink').href = link;
  localStorage.setItem('css', link);
}

// remettre toutes les propriétés animation à vide
  function reset(){
    demoAnimation.style.removeProperty("animation-name");
    demoAnimation.style.removeProperty("animation-duration");
    demoAnimation.style.removeProperty("animation-iteration-count");
    demoAnimation.style.removeProperty("animation-delay");
    demoAnimation.style.removeProperty("animation-direction");
    demoAnimation.style.removeProperty("animation-timing-function");
    demoAnimation.style.removeProperty("animation-fill-mode");
  }

  // montrer l'animation duration
  function changeDuration(n){
    demoAnimation.style.animationName ="color";
    demoAnimation.style.animationDuration=n;
    if(n=="2s"){
      setTimeout(reset,2000)
    }else if(n=="3s"){
      setTimeout(reset,3000)
    }
  }

  // montrer l'animation delay
    function changeDelay(n){
      demoAnimation.style.animationName ="color";
      demoAnimation.style.animationDelay=n;
      if(n=="2s"){
        setTimeout(reset,5000)
      }else if(n=="-2s"){
        setTimeout(reset,1000)
      }
    }

    //montrer l'animation iteration-count
    function changeCount(n){
      demoAnimation.style.animationName ="color";
      demoAnimation.style.animationIterationCount= n;
      if(!n=="infinite"){
        setTimeout(reset,6000);
          }
    }

    //montrer l'animation direction
    function changeDirection(n){
      demoAnimation.style.animationName="color";
      demoAnimation.style.animationDirection=n;
      if(n=="alternate" || n=="alternate-reverse"){
        demoAnimation.style.animationIterationCount="2";
        setTimeout(reset,6000)
      }else{
        setTimeout(reset,3000)
      }
    }

    //montrer l'animation timing function
    function changeTiming(n){
      demoAnimation.style.animationName="color";
      demoAnimation.style.animationTimingFunction=n;
      setTimeout(reset,3000)
    }

    //montrer l'animation fill mode
    function changeFill(n){
      demoAnimation.style.animationName="color";
      demoAnimation.style.animationFillMode=n;
      if(n=="backwards" || n=="both"){
        demoAnimation.style.animationDelay="2s";
        setTimeout(reset,5000);
      }else{
        setTimeout(reset,4000);
      }
    }
