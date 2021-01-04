<section class="expPropCss">
  <article class="propDescription">
    <header>Description générale de la propriété Animations</header>
    <p>La propriété animation permet de changer graduellement le style css d'un élément html sans faire recours à Javascript. Avec animation, il est possible de changer autant de style et autant de fois que possible. Pour utiliser CSS Animation, il est indispensable d'appliquer <code>@keyframe</code> pour définir le style de départ et le style de fin, et <code>animation-duration</code> pour démarrer l'animation. Cliquez les boutons suivants pour voir les détails de différentes propriétés Animation ainsi que leur démonstration.
    </p>
  </article>
  <nav>
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
          <pre>
            @keyframes demo{
              0% {background-color:yellow;}
              25% {background-color:orange;}
              50% {background-color:red;}
              75% {background-color:purple;}
              100% {background-color:black;}
            }
          </pre>
          Pour faire fonctionner l'animation, il faut l'attacher à un élément html à travers la propriété <code>animation-name</code>.
          <pre>
            div{
              animation-name:demo;
            }
          </pre>
        </dd>
        <dt>Animation duration</dt>
        <dd>La proprité <code>animation-duration</code> définit la durée d'action de l'animation, sans laquelle aucunne animation n'aura lieu car sa valeur par défait est 0.
          <pre>
            div{
              animation-name:demo;
              animation-duration:2s;
            }
          </pre>
        </dd>
      </dl>
    </article>
    <button>Changer de couleur en 2s</button>
    <button>Changer de couleur en 5s</button>
  </section>
  <section class="propContenu">
    <article>Explication Animation-delay</article>
    <button>Démarrer dans 2s</button>
    <button>Démarrer dans 5s</button>
  </section>
  <section class="propContenu">
    <article>Explication Animation-iteration-count</article>
    <button>Répéter 2 fois</button>
    <button>Répéter 3 fois</button>
  </section>
  <section class="propContenu">
    <article>Explication Animation-direction</article>
    <button>Reverse</button>
    <button>alternate</button>
    <button>alternate-reverse</button>
  </section>
  <section class="propContenu">
    <article>Explication Animation-timing-function</article>
    <button>Ease</button>
    <button>Linear</button>
    <button>Ease-in</button>
    <button>Ease-out</button>
    <button>Ease-in-out</button>
    <button>Cubic-bezier</button>
  </section>
  <section class="propContenu">
    <article>Explication Animation-fill-mode</article>
    <button>None</button>
    <button>Forwards</button>
    <button>Backwords</button>
    <button>Both</button>
  </section>
  <section class="demo">
    <div id="demoAnmation"></div>
  </section>
</section>
