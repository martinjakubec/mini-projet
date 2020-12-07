<?php
  $page = isset($_GET['page']) ? $_GET['page'] : 'index';
  $cuisine = isset($_GET['cuisine']) ? $_GET['cuisine'] : '';
  $titre = isset($_GET['titre']) ? $_GET['titre'] : '';

  switch($page) {
    case 'cuisine':
      $titre = "Cuisine";
      $page_include = "cuisine";
      break;
    case 'index':
      $titre = "Accueil";
      $page_include = 'frontpage';
      break;
    case 'liens' :
      $titre = "Liens utiles";
      $page_include = 'liens';
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
