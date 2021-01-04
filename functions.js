window.onload = function(){
    var btn = document.getElementsByClassName("btnNav");
    var block = document.getElementsByClassName("propContenu");

    /*Afficher seulement l'explication de la 1ère propriété*/
    for(let i = 1; i < block.length; i++){
      block[i].style.display = "none";
    }

    /*Function qui fait apparaître un bloc caché et cache d'autres blocs */
    function blockAppear(n){
      for(let i = 0; i < block.length; i++){
        block[i].style.display = "none";
        block[n].style.display = "block";
      }
    }

    /*Function qui changer la couleur de fond du bouton cliqué*/
    function bgColor(n){
      for(let i = 0; i<btn.length; i++){
        btn[i].style.backgroundColor = "yellow";
      }
      btn[n].style.backgroundColor = "orange";
    }

    /*Attacher function blockAppear et bgColor aux boutons de nav*/
    for(let i = 0; i < btn.length; i++){
      btn[i].onclick = function(){
        blockAppear(i);
        bgColor(i);
      }
    }
  }
