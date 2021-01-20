<section class="expPropCss">
  <article class="propDescription">
    <header><h1>Description générale de la propriété Animations</h1></header>
    <p>La propriété animation permet de changer graduellement le style css d'un élément html sans faire recours à Javascript. Avec animation, il est possible de changer autant de style et autant de fois que possible. Pour utiliser CSS Animation, il est indispensable d'appliquer <code>@keyframe</code> pour définir le style de départ et le style de fin, et <code>animation-duration</code> pour démarrer l'animation. Cliquez les boutons suivants pour voir les détails de différentes propriétés Animation ainsi que leur démonstration.
    </p>
  </article>
  <nav class="subnav">
    <p class="btnNav">Keyframe et animation-duration</p>
    <p class="btnNav">Animation-delay</p>
    <p class="btnNav">Animation-iteration-count</p>
    <p class="btnNav">Animation-direction</p>
    <p class="btnNav">Animation-timing-function</p>
    <p class="btnNav">Animation-fill-mode</p>
  </nav>
  <section class="propContenu">
    <article>
      <dl>
        <dt>Keyframes</dt>
        <dd>La propriété <code>@keyframes</code>, suivi par le nom d'animation, contient à changer. Nous pouvons soit définir les styles de départ et de fin à travers "from" et "to", soit les styles intermédiaires à travers le pourcentage "%".
          <code>
            <pre>
              @keyframes demo{
                0% {background-color:yellow;}
                25% {background-color:orange;}
                50% {background-color:red;}
                75% {background-color:purple;}
                100% {background-color:black;}
              }
            </pre>
          </code>
          Pour faire fonctionner l'animation, il faut l'attacher à un élément html à travers la propriété <code>animation-name</code>.
          <code>
            <pre>
              .demo{
                animation-name:demo;
              }
            </pre>
          </code>
        </dd>
        <dt>Animation duration</dt>
        <dd>La proprité <code>animation-duration</code> définit la durée d'action de l'animation, sans laquelle aucunne animation n'aura lieu car sa valeur par défait est 0.
          <code>
            <pre>
              .demo{
                animation-name:demo;
                animation-duration:5s;
              }
            </pre>
          </code>
        </dd>
      </dl>
    </article>
    <button onclick='changeDuration("2s")'>Changer de couleur en 2s</button>
    <button onclick='changeDuration("3s")'>Changer de couleur en 3s</button>
  </section>
  <section class="propContenu">
    <article>La propriété <code>animation-delay</code> définit la temporisation pour démarrer l'animation. La valeur peut être positive et négative.
      <dl>
        <dt>Valeur positive N</dt>
        <dd>L'animation démarre dans un temps de N.
          <code>
            <pre>
              .demo{
                animation-name:demo;
                animation-duration:5s;
                animation-delay:2s;
              }
            </pre>
          </code>
        </dd>
        <dt>Valeur négative -N</dt>
        <dd>L'animation démarre comme si elle avait déjà fonctionné pour un temps de N.
          <code>
            <pre>
              .demo{
                animation-name:demo;
                animation-duration:5s;
                animation-delay:-2s;
              }
            </pre>
          </code>
        </dd>
      </dl>
    </article>
    <button onclick='changeDelay("2s")'>Démarrer dans 2s</button>
    <button onclick='changeDelay("-2s")'>Démarrer dans -2s</button>
  </section>
  <section class="propContenu">
    <article>La proprité <code>animation-iteration-count</code> définit le nombre de fois que l'animation se répète. En la définissant à infinite, l'animation se répète en permanence.
      <dl>
        <dt>N fois</dt>
        <dd>
          <code>
            <pre>
              .demo{
                animation-name:demo;
                animation-duration:5s;
                animation-iteration-count:3;
              }
            </pre>
          </code>
        </dd>
        <dt>infinite</dt>
        <dd>
          <code>
            <pre>
              .demo{
                animation-name:demo;
                animation-duration:5s;
                animation-iteration-count:infinite;
              }
            </pre>
          </code>
        </dd>
      </dl>
    </article>
    <button onclick="changeCount(2)">Répéter 2 fois</button>
    <button onclick='changeCount("infinite")'>Répéter en permanence</button>
  </section>
  <section class="propContenu">
    <article>La propriété <code>animation-direction</code> définit le sens d'animation avec les 4 valeurs suivantes.
      <dl>
        <dt>normal</dt>
        <dd>L'animation se joue comme ce qui est défini dans <code>@keyframes</code>. C'est la valeur par défaut.
          <code>
            <pre>
              .demo{
                animation-name:demo;
                animation-duration:5s;
                animation-direction:normal;
              }
            </pre>
          </code>
        </dd>
        <dt>reverse</dt>
        <dd>L'animation se joue dans le sens contraire à celui défini.
          <code>
            <pre>
              .demo{
                animation-name:demo;
                animation-duration:5s;
                animation-direction:reverse;
              }
            </pre>
          </code>
        </dd>
        <dt>alternate</dt>
        <dd>L'animation se joue d'abord au sens normal puis au sens contraire.
          <code>
            <pre>
              .demo{
                animation-name:demo;
                animation-duration:5s;
                animation-direction:reverse;
              }
            </pre>
          </code>
        </dd>
        <dt>alternate-reverse</dt>
        <dd>L'animation se joue d'abord au sens contraire puis au sens normal.
          <code>
            <pre>
              .demo{
                animation-name:demo;
                animation-duration:5s;
                animation-direction:alternate-reverse;
              }
            </pre>
          </code>
        </dd>
      </dl>
    </article>
    <button onclick='changeDirection("reverse")'>Reverse</button>
    <button onclick='changeDirection("alternate")'>alternate</button>
    <button onclick='changeDirection("alternate-reverse")'>alternate-reverse</button>
  </section>
  <section class="propContenu">
    <article>La propriété <code>animation-timing-function</code> définit la courbe de vitesse de l'animation avec les 6 valeurs suivantes.
      <dl>
        <dt>ease</dt>
        <dd>L'animation démarre lentement, puis s'accélère, et finalement se finit lentement.
          <code>
            <pre>
              .demo{
                animation-name:demo;
                animation-duration:5s;
                animation-timing-function:ease;
              }
            </pre>
          </code>
        </dd>
        <dt>linear</dt>
        <dd>L'animation se joue toujours à une vitesse constante du début à la fin.
          <code>
            <pre>
              .demo{
                animation-name:demo;
                animation-duration:5s;
                animation-timing-function:linear;
              }
            </pre>
          </code>
        </dd>
        <dt>ease-in</dt>
        <dd>L'animation démarre lentement.
          <code>
            <pre>
              .demo{
                animation-name:demo;
                animation-duration:5s;
                animation-timing-function:ease-in;
              }
            </pre>
          </code>
        </dd>
        <dt>ease-out</dt>
        <dd>L'animation se finit lentement.
          <code>
            <pre>
              .demo{
                animation-name:demo;
                animation-duration:5s;
                animation-timing-function:ease-out;
              }
            </pre>
          </code>
        </dd>
        <dt>ease-in-out</dt>
        <dd>L'animation démarre et se finit lentement.
          <code>
            <pre>
              .demo{
                animation-name:demo;
                animation-duration:5s;
                animation-timing-function:ease-in-out;
              }
            </pre>
          </code>
        </dd>
        <dt>cubic-bezier(n,n,n,n)</dt>
        <dd>Nous définissons nous-même la vitesse au début, en cours et à la fin, la valeur n est entre 0 et 1.
          <code>
            <pre>
              .demo{
                animation-name:demo;
                animation-duration:5s;
                animation-timing-function:cubic-bezier(0.5,0.1,1,0.1);
              }
            </pre>
          </code>
        </dd>
      </dl>
    </article>
    <button onclick='changeTiming("ease")'>Ease</button>
    <button onclick='changeTiming("linear")'>Linear</button>
    <button onclick='changeTiming("ease-in")'>Ease-in</button>
    <button onclick='changeTiming("ease-out")'>Ease-out</button>
    <button onclick='changeTiming("ease-in-out")'>Ease-in-out</button>
    <button onclick='changeTiming("cubic-bezier(0.5,0.1,1,0.1)")'>Cubic-bezier(0.5,0.1,1,0.1)</button>
  </section>
  <section class="propContenu">
    <article>La propriété <code>animation-fill-mode</code> décide le style que retient l'élément html au début ou/et à la fin de l'animation. Elle a 4 valeurs suivantes.
      <dl>
        <dt>none</dt>
        <dd>L'élément ne prend aucun style défini dans <code>@keyframes</code>. C'est la valeur par défaut.
          <code>
            <pre>
              .demo{
                animation-name:demo;
                animation-duration:5s;
                animation-fill-mode:none;
              }
            </pre>
          </code>
        </dd>
        <dt>forwards</dt>
        <dd>L'élément retient le style de fin défini dans <code>@keyframe</code> à la fin de l'animation.
          <code>
            <pre>
              .demo{
                animation-name:demo;
                animation-duration:5s;
                animation-fill-mode:forwards;
              }
            </pre>
          </code>
        </dd>
        <dt>backwards</dt>
        <dd>L'élément retient le style de départ défini dans <code>@keyframes</code> avant le démarrage de l'animation.
          <code>
            <pre>
              .demo{
                animation-name:demo;
                animation-duration:5s;
                animation-fill-mode:backwards;
              }
            </pre>
          </code>
        </dd>
        <dt>both</dt>
        <dd>L'élément prend le style de départ avant le démarrage de l'animation et retient le style de fin à la fin de l'animation.
          <code>
            <pre>
              .demo{
                animation-name:demo;
                animation-duration:5s;
                animation-fill-mode:both;
              }
            </pre>
          </code>
        </dd>
      </dl>
    </article>
    <button onclick='changeFill("none")'>None</button>
    <button onclick='changeFill("forwards")'>Forwards</button>
    <button onclick='changeFill("backwards")'>Backwards</button>
    <button onclick='changeFill("both")'>Both</button>
  </section>
  <section class="demo">
    <div id="demoAnimation"></div>
  </section>
</section>
