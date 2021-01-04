<?php
  $page = isset($_GET['page']) ? $_GET['page'] : 'index';
  $titre = isset($_GET['titre']) ? $_GET['titre'] : '';

  switch($page) {
    case 'animation':
      $titre = "CSS : Animation";
      $page_include = "animation";
      break;
    case 'index':
      $titre = "Accueil";
      $page_include = 'frontpage';
      break;
    case 'transformation' :
      $titre = "CSS : Transformation";
      $page_include = 'transformation';
      break;
    case 'imgdefond' :
      $titre = "CSS : Image de fond";
      $page_include = 'imgdefond';
      break;
    case 'link_form' :
      $titre = "Liens utiles";
      $page_include = 'link_form';
      break;
    default:
      $titre = "Oups";
      $page_include = '404';
      break;
    }


      $page_include = $page_include.".php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8"/>
  <title><?php echo $titre ?></title>
  <link id = "csslink" href="style1.css" rel="stylesheet">
  <script src="functions.js"></script>
</head>
<body>
  <header>
      <?php include 'header.php'; ?>
  </header>
  <main>
    <?php include $page_include; ?>
  </main>
  <footer>
      <?php include 'footer.php'; ?>
  </footer>
</body>
