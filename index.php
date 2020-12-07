<?php
  $page = isset($_GET['page']) ? $_GET['page'] : 'index';
  $cuisine = isset($_GET['cuisine']) ? $_GET['cuisine'] : '';

  include 'header.php';

  echo '</br>';


  switch($page) {
    case 'cuisine':
      include 'cuisine.php';
      break;
    case 'index':
      include 'frontpage.php';
      break;
    case 'liens' :
      include 'liens.php';
      break;
    default:
      include '404.php';
      break;
  }
  echo '</br>';

  include 'footer.php';
?>
