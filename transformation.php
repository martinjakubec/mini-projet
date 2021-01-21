<section class="expPropCss">
  <article class="propDescription">
    <header><h1>Description générale de la propriété Transform</h1></header>
    <p>La propriété <code>transform</code> permet à un élément html de déplacer, pivoter, aggrandire ou réduire, et s'incliner. La transformation peut se faire à deux ou trois dimensions.
    </p>
  </article>
  <nav class="subnav">
    <p class="btnNav">Translate</p>
    <p class="btnNav">Rotate</p>
    <p class="btnNav">Scale</p>
    <p class="btnNav">Skew</p>
    <p class="btnNav">3D transform</p>
  </nav>
  <section class="propContenu">
    <article>
      La méthode <code>translate(x,y)</code> permet à un élément html de déplacer de sa position actuelle selon les valeurs données à l'axe X et Y. L'élément peut également se déplacement seulement sur l'axe X ou l'axe Y en appliquant <code>translateX()</code> et <code>translateY()</code>. Les valeurs sont en unité de longueur.
    <code>
      <pre>
      .demo{
        transform: translate(50px,50px)
      }

      .demo{
        transform: translateX(50px)
      }

      .demo{
        transform: translateY(50px)
      }
      </pre>
  </code>
  </article>
    <button onclick='changeDemoFrames("translate")'>Déplacer sur l'axe X et Y</button>
    <button onclick='changeDemoFrames("translatex")'>Déplacer sur l'axe X</button>
    <button onclick='changeDemoFrames("translatey")'>Déplacer sur l'axe Y</button>
  </section>
  <section class="propContenu">
    <article>
      La méthode <code>rotate(n)</code> permet à un élément html de pivoter dans le sens des aiguilles d'une montre (valeur positive) ou au contraire (valeur négative). Les valeurs sont en unité de degré.
      <code>
        <pre>
          .demo{
            transform: rotate(360deg)
          }

          .demo{
            transform: rotate(-360deg)
          }
        </pre>
      </code>
    </article>
    <button onclick='changeDemoFrames("rotater")'>Pivoter à droite</button>
    <button onclick='changeDemoFrames("rotatel")'>Pivoter à gauche</button>
  </section>
  <section class="propContenu">
    <article>
      La méthode <code>scale(x,y)</code> permet à un élément html d'élargir (x, y &gt 1) ou de réduire (0 &lt x, y &lt 1) la largeur (x) et la hauteur (y). L'élément peut également n'élargit (réduit) que la largeur ou la hauteur en appliquant <code>scaleX()</code> ou <code>scaleY()</code>
      <code>
        <pre>
          .demo{
            transform: scale(2,2)
          }

          .demo{
            transform: scaleX(0.5)
          }

          .demo{
            transform: scaleY(2)
          }
        </pre>
      </code>
    </article>
    <button onclick='changeDemoFrames("scaleg")'>2 fois plus grand</button>
    <button onclick='changeDemoFrames("scalew")'>2 fois moins long</button>
    <button onclick='changeDemoFrames("scaleh")'>2 fois plus haut</button>
  </section>
  <section class="propContenu">
    <article>
      La méthode <code>skew(x,y)</code> permet à un élément html de s'incliner à l'axe X et Y. L'élément peut également s'incliner seulement sur l'axe X ou Y en appliquant <code>skewX()</code> ou <code>skewY()</code>. Les valeurs sont en unité de  degré.
      <code>
        <pre>
          .demo{
            transform: skew(45deg,45deg)
          }

          .demo{
            transform: skewX(45deg)
          }

          .demo{
            transform: skewY(45deg)
          }
        </pre>
      </code>
    </article>
    <button onclick='changeDemoFrames("skew")'>S'incliner sur l'axe X et Y</button>
    <button onclick='changeDemoFrames("skewx")'>S'incliner sur l'axe X</button>
    <button onclick='changeDemoFrames("skewy")'>S'incliner sur l'axe Y</button>
  </section>
  <section class="propContenu">
    <article>
      3D Transform concerne la transformation d'élément sur l'axe Z. Toutes les transformations en 2D peuvent s'exercer sur l'axe Z sauf la transformation skew. Les propriétés spécifiques à la 3D transformation sont les suivantes.
      <dl>
        <dt>perspective</dt>
        <dd>Cette propriété définit la distance entre l'élément transformé et l'utilisateur. Plus petite est la valeur, plus intensif est l'effet 3D. La propriété <code>perspective</code> est attribuée à l'élément parent de l'élément transformé.
        </dd>
        <dt>perspective-origin</dt>
        <dd>La propriété <code>perspective-origin(x,y)</code> définit la position à partir de laquelle l'utilisateur observe la transformation. Les valeurs possibles sont comme suit :
          <ul>Axe x :
            <li>left</li>
            <li>center</li>
            <li>right</li>
            <li>length(px)</li>
            <li>%</li>
          </ul>
          <ul>Axe y :
            <li>top</li>
            <li>center</li>
            <li>bottom</li>
            <li>length(px)</li>
            <li>%</li>
          </ul>
        </dd>
        <dt>transform-style</dt>
        <dd>Cette propriété est attribuée à l'élément parent et décide si l'élément enfant transformé garde sa position en 3D. La valeur par défaut "flat" signifie "ne pas garder la position en 3D", la valeur "preserve-3d" "garder la position en 3D"
        </dd>
        <dt>transform-origin</dt>
        <dd>Cette propriété définit la position de l'élément transformé à la fin de transformation.</dd>
      </dl>
    </article>
    <button onclick='changeCubeFrames("translate3")'>Déplacer sur l'axe z</button>
    <button onclick='changeCubeFrames("rotate3")'>Pivoter sur l'axe z</button>
    <button onclick='changeCubeFrames("scale3")'>Elargir sur l'axe z</button>
  </section>
  <section class="demo">
    <div id="demo2d"></div>
    <div id="demoTransform">
      <div class="front">front</div>
      <div class="back">back</div>
      <div class="left">left</div>
      <div class="right">right</div>
      <div class="top">top</div>
      <div class="bottom">bottom</div>
    </div>
  </section>
</section>
