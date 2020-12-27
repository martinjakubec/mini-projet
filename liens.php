<?php
  require_once 'link_form.php';
 ?>


<?php 
  $readingLinkFile = fopen('links.txt', 'r');
  $links = fread($readingLinkFile, filesize('links.txt') === 0 ? 1 : filesize('links.txt'));
  $links = explode('ENDOFENTRY', $links);
  foreach($links as $singleLink) :
    if($singleLink === PHP_EOL) {
      continue;
    }
    $linkParts = explode(' --- ', $singleLink);
    list($name, $link, $comment, $time) = $linkParts;
  ?>
    <div style="border: 1px solid black;">
      <p>Nom: <span><?php echo $name?></span></p>
      <p>Lien: <span><?php echo $link?></span></p>
      <p>Comment: <span><?php echo $comment?></span></p>
      <p>Time: <span><?php echo $time?></span></p>
    </div>
  <?php
  endforeach;
  fclose($readingLinkFile);
?>