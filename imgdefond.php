<section class="expPropCss">
  <article class="propDescription">
    <header><h1>Description générale de l'image de fond</h1></header>
    <p>Dans CSS, il est possible de personnaliser l'image de fond d'un block en fonction d'images, façon de répétiton, position d'image, et façon de couverture du fond via plusieurs propriétés.
    </p>
  </article>
  <nav class="subnav">
    <p class="btnNav">Background-image</p>
    <p class="btnNav">Background-repeat</p>
    <p class="btnNav">Background-position</p>
    <p class="btnNav">Background-size</p>
  </nav>
  <section class="propContenu">
    <article>
      La propriété <code>background-image</code> établit au fond d'un bloc soit une image choisie par l'utilisateur soit un dégradé de couleur.
      <dl>
        <dt>url</dt>
        <dd>En précisant l'url, une image choisie par l'utilisateur est insérée au fond de bloc.
          <code>
            <pre>
              .demo{
                background-image:url("image.jpg")
              }
            </pre>
          </code>
        </dd>
        <dt>linear-gradient</dt>
        <dd>Cette propriété permet d'affecter un dégradé de couleur de haut en bas au fond de bloc. Deux couleurs minimum sont requis.
          <code>
            <pre>
              .demo{
                background-image:linear-gradient(green, blue);
              }
            </pre>
          </code>
        </dd>
        <dt>repeating-linear-gradient</dt>
        <dd>Sur la base de <code>linear-gradient</code>, cette propriété permet de répéter le dégradé. Plusieurs valeurs sont possibles pour définir la direction et la longeur de répétition.
          <ul>
            <li>Les valeurs <code>to top</code>, <code>to bottom</code>, <code>to left</code>, <code>to right</code> définissement la direction dans laquelle le dégradé progresse, par exemple avec <code>to top</code>, le  dégradé progresse de bas en haut.
            </li>
            <li>Les valeurs de degré définissent l'axe sur lequel le dégradé progresse. Par exemple, <code>45deg</code> permet au dégradé de progresser sur l'axe de 45°.
            </li>
            <li>les couleurs sont suivies du point d'arrêt optionnel en % ou unité de longueur. Par exemple <code>green 10%, blue 20%</code> signifie que le dégradé commence avec le vert jusqu'au 10%, puis continue avec le blue jusqu'au 20%, comme un dégradé occupe 20%, il va se répéter 5 fois.
            </li>
          </ul>
          <code>
            <pre>
              .demo{
                background-image:repeating-linear-gradient(45deg, green 10%, blue 20%);
              }
            </pre>
          </code>
        </dd>
        <dt>radial-gradient</dt>
        <dd>Cette propriété permet d'affecter un dégradé de couleur de centre vers l'extérieur au fond de bloc. Deux couleurs minimum sont requis.
          <code>
            <pre>
              .demo{
                background-image:radial-gradient(green, blue);
              }
            </pre>
          </code>
        </dd>
        <dt>repeating-radial-gradient</dt>
        <dd>Sur la base de <code>radial-gradient</code>, cette propriété permet au dégradé de se répéter. Les couleurs sont suivies du point d'arrêt en % ou unité de longueur.
          <code>
            <pre>
              .demo{
                background-image:repeating-radial-gradient(green 10%, blue 20%);
              }
            </pre>
          </code>
        </dd>
      </dl>
    </article>
    <button onclick='changeClass("imgfond")'>Image de fond</button>
    <button onclick='changeClass("degradelineaire")'>Dégradé linéaire</button>
    <button onclick='changeClass("degradelineairerepeat")'>Dégradé linéaire répété</button>
    <button onclick='changeClass("degraderadial")'>Dégradé radial</button>
    <button onclick='changeClass("degraderadialrepeat")'>Dégradé radial répété</button>
  </section>
  <section class="propContenu">
    <article>
      La proprété <code>background-repeat</code> permet à l'image de fond de se répéter de façoon définie.
      <dl>
        <dt>no-repeat</dt>
        <dd>L'image ne s'affiche qu'une seule fois sans répétition.
          <code>
            <pre>
              .demo{
                background-image:url("image.jpg");
                background-repeat:no-repeat;
              }
            </pre>
          </code>
        </dd>
        <dt>repeat</dt>
        <dd>L'image de fond se répète à la fois horizontalement et verticalement. Les dernières images sont coupées en cas de dépassement. C'est la valeur par défaut.
          <code>
            <pre>
              .demo{
                background-image:url("image.jpg");
                background-repeat:repeat;
              }
            </pre>
          </code>
        </dd>
        <dt>repeat-x</dt>
        <dd>L'image de fond ne se répète que sur l'axe x.
          <code>
            <pre>
              .demo{
                background-image:url("image.jpg");
                background-repeat:repeat-x;
              }
            </pre>
          </code>
        </dd>
        <dt>repeat-y</dt>
        <dd>L'image de fond ne se répète que sur l'axe y.
          <code>
            <pre>
              .demo{
                background-image:url("image.jpg");
                background-repeat:repeat-y;
              }
            </pre>
          </code>
        </dd>
        <dt>space</dt>
        <dd>Les images se répète autant que possible sans être coupées. Les premières et les dernière images sont collées aux bords du bloc, et les images de fond sont espacées de manière équivalente.
          <code>
            <pre>
              .demo{
                background-image:url("image.jpg");
                background-repeat:space;
              }
            </pre>
          </code>
        </dd>
        <dt>round</dt>
        <dd>Les images se répètent. Elles s'élargissent ou se rétrécissent le cas échéant pour remplir toute l'espace (sans intervalle entre les images).
          <code>
            <pre>
              .demo{
                background-image:url("image.jpg");
                background-repeat:round;
              }
            </pre>
          </code>
        </dd>
      </dl>
    </article>
    <button onclick='changeClass("norepeat")'>No-Repeat</button>
    <button onclick='changeClass("repeat")'>Repeat</button>
    <button onclick='changeClass("repeatx")'>Repeat-x</button>
    <button onclick='changeClass("repeaty")'>Repeat-y</button>
    <button onclick='changeClass("space")'>Space</button>
    <button onclick='changeClass("round")'>Round</button>
  </section>
  <section class="propContenu">
    <article>
      La proprété <code>background-position</code> permet de définir la position de départ de l'image de fond. Par défaut, l'image est placé en haut à gauche.
      <dl>
        <dt>top, left, right, bottom,center</dt>
        <dd>Utiliser les mots-clés dont le premier est la position horizontale, la deuxième verticale. En cas d'un seul mot-clé défini, l'autre est automatiquement à center.
          <code>
            <pre>
              .demo{
                background-image:url("image.jpg");
                background-repeat:no-repeat;
                bakcground-position:center top;
              }
            </pre>
          </code>
        </dd>
        <dt>x% y%</dt>
        <dd>La première valeur est la position horizontale, la deuxième verticale. Le coin en haut à gauche est 0% 0%, alors que le coin en bas à droit est 100% 100%. En cas d'une seule valeur définie, l'autre est automatiquement à 50%. Les valeurs par défaut sont 0% 0%.
          <code>
            <pre>
              .demo{
                background-image:url("image.jpg");
                background-repeat:no-repeat;
                bakcground-position:25% 75%;
              }
            </pre>
          </code>
        </dd>
        <dt>xpos ypos</dt>
        <dd>La première valeur est la position horizontale, la deuxième verticale. Le coin en haut à gauche est 0 0. L'unité peut être px ou d'autres unités CSS. En cas d'une seule valeur définie, l'autre est automatiquement à 50%. La position peut être mélangée avec %.
          <code>
            <pre>
              .demo{
                background-image:url("image.jpg");
                background-repeat:no-repeat;
                background-position:25px,75px;
              }
            </pre>
          </code>
        </dd>
      </dl>
    </article>
    <button onclick='changeClass("center")'>Center</button>
    <button onclick='changeClass("pourcentage")'>25% 75%</button>
    <button onclick='changeClass("unite")'>25px 75px</button>
  </section>
  <section class="propContenu">
    <article>
      La propriété <code>background-size</code> définit la taille de l'image de fond qui décide également la façon dont l'image couvre le fond.
      <dl>
        <dt>auto</dt>
        <dd>La valeur par défaut <code>auto</code> permet à l'image de fond de garder sa taille originale.
          <code>
            <pre>
              .demo{
                background-image:url("image.jpg");
                background-repeat:no-repeat;
                background-size:auto;
              }
            </pre>
          </code>
        </dd>
        <dt>longueur</dt>
        <dd>Attribuer une largeur et une hauteur en unité de longueur à l'image. La première valeur correspond à la largeur, la deuxième hauteur.
          <code>
            <pre>
              .demo{
                background-image:url("image.jpg");
                background-repeat:no-repeat;
                background-size:100px,50px;
              }
            </pre>
          </code>
        </dd>
        <dt>pourcentage</dt>
        <dd>Définir la largeur et la hauteur de l'image en pourcentage par rapport à l'élément parent. La première valeur correspond à la largeur, la deuxième hauteur.
          <code>
            <pre>
              .demo{
                background-image:url("image.jpg");
                background-repeat:no-repeat;
                background-size:50% 50%;
            }
            </pre>
          </code>
        </dd>
        <dt>cover</dt>
        <dd>Redimensionner l'image pour remplir entièrement le bloc, même s'il faut élargir, rétrécir l'image ou couper un peu de bordure.
          <code>
            <pre>
              .demo{
                background-image:url("image.jpg");
                background-repeat:no-repeat;
                background-size:cover;
            }
            </pre>
          </code>
        </dd>
      </dl>
      <dt>contain</dt>
      <dd>Redimensionner l'image pour que l'ensemble de l'image est visible.
        <code>
          <pre>
            .demo{
              background-image:url("image.jpg");
              background-repeat:no-repeat;
              background-size:contain;
          }
          </pre>
        </code>
      </dd>
    </article>
    <button onclick='changeClass("auto")'>auto</button>
    <button onclick='changeClass("width300")'>300px 200px</button>
    <button onclick='changeClass("demi")'>50% 50%</button>
    <button onclick='changeClass("cover")'>cover</button>
    <button onclick='changeClass("contain")'>contain</button>
  </section>
  <section class="demo">
    <div id="demoBgimg"><p>Image de fond</p></div>
  </section>
</section>
