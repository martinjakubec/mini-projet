<h1>Liens utiles</h1>

<?php
require_once 'link_form.php';
?>

<div class="links-list-wrapper container">
<?php
if (file_exists('links.txt')) {
  $readingLinkFile = fopen('links.txt', 'r');
  $links = fread($readingLinkFile, filesize('links.txt') === 0 ? 1 : filesize('links.txt'));
  $links = explode('ENDOFENTRY', $links);
  foreach ($links as $singleLink) :
    if ($singleLink === PHP_EOL) {
      continue;
    }
    $linkParts = explode(' --- ', $singleLink);
    list($name, $link, $comment, $time) = $linkParts;
?>
    <div class="link-singular">
      <p>Nom: <span><?php echo $name ?></span></p>
      <p>Lien: <span><a target="blank" class="underline-link" href="<?php
                              if (substr($link, 0, 7) != 'http://' || substr($link, 0, 8) != 'https://') {
                                echo 'http://' . $link;
                              }
                              ?>"><?php echo $link ?></a></span></p>
      <p>Commentaire: <span><?php echo $comment ?></span></p>
      <p>Date: <span><?php echo date('d/m/Y', $time) ?></span></p>
    </div>
  <?php
  endforeach;
  fclose($readingLinkFile);
} else {
  ?>
  <div style="border: 1px solid black;">
    <p>Pas de lien pour l'instant</p>
  </div>
<?php
}
?>

</div>
