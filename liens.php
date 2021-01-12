<h1>Liens utiles</h1>

<?php
require_once 'link_form.php';
?>

<div class="links-list-wrapper container">
<?php
if (file_exists('links.txt') && filesize('links.txt') !== 0) {
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
      <?php if($comment !== '') :?>
      <p>Commentaire: <span><?php echo $comment ?></span></p>
      <?php endif;?>
      <p>Date: <span><?php echo date('d/m/Y', $time) ?></span></p>
    </div>
  <?php
  endforeach;
  fclose($readingLinkFile);
} else {
  ?>
  <div class="no-link-found">
    <p>Aucun lien n'a été ajouté encore, n'hésitez pas et soyez le premier à le faire!</p>
  </div>
<?php
}
?>

</div>
