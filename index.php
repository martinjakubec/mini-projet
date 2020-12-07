<?php 
  $page = isset($_GET['page']) ? $_GET['page'] : 'index';
  $cusine
  
  include 'header.php';

  echo '</br>';


  switch($page) {
    case 'cuisine': 
      include 'cuisine.php';
      break;
    case 'index':
      include 'frontpage.php';
      break;
    default: 
      include '404.php';
      break;
  }
  echo '</br>';

  include 'footer.php';
?>
