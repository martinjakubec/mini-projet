<nav id="mobile-header">
  <p id="menu-toggle" class="menu-button">Menu</p>
</nav>
<nav id="menu">
  <div class="container">
    <p><a class="<?php echo ($page == '') ? 'active' : ''; ?> menu-button" href="?"><span class="menu-button__text">Accueil</span></a>
    <p><a class="<?php echo ($page == 'animation') ? 'active' : ''; ?> menu-button" href="?page=animation"><span class="menu-button__text">Animation</span></a>
    <p><a class="<?php echo ($page == 'transformation') ? 'active' : ''; ?> menu-button" href="?page=transformation"><span class="menu-button__text">Transformation</span></a>
    <p><a class="<?php echo ($page == 'imgdefond') ? 'active' : ''; ?> menu-button" href="?page=imgdefond"><span class="menu-button__text">Image de fond</span></a>
    <p><a class="<?php echo ($page == 'liens') ? 'active' : ''; ?> menu-button" href="?page=liens"><span class="menu-button__text">Liens</span></a>
  </div>
</nav>