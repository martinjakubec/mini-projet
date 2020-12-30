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
    case 'liens' :
      $titre = "Liens utiles";
      $page_include = 'liens';
      break;
    default:
      $titre = "Oups";
      $page_include = '404';
      header("HTTP/1.0 404 Not Found");
      break;
    }


      $page_include = $page_include.".php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8"/>
  <title><?php echo $titre ?></title>
  <link id = "csslink" href="scss/style1/style1.css?v=<?php echo rand(1,20) ?>" rel="stylesheet">
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
  <script src="js.js"></script>
</body>
