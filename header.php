<nav>
  <p class="<?php echo ($page == '') ? 'active':''; ?>"><a href="?">Accueil</a>
  <p class="<?php echo (($page == 'cuisine') && ($cuisine == 'chinoise')) ? 'active':''; ?>"><a href="?page=cuisine&cuisine=chinoise">Cuisine Chinoise</a>
  <p class="<?php echo (($page == 'cuisine') && ($cuisine == 'slovaque')) ? 'active':''; ?>"><a href="?page=cuisine&cuisine=slovaque">Cuisine Slovaque</a>
  <p class="<?php echo ($page == 'liens') ? 'active':''; ?>"><a href="?page=liens">Liens utiles</a>
</nav>
