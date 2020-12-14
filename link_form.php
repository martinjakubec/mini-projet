<form action="" method="POST">
  <label for="name">Votre nom:</label>
  <input type="text" name="name">
  <label for="link">Votre lien:</label>
  <input type="text" name="link">
  <label for="commment">Commentaire:</label>
  <textarea name="comment" cols="30" rows="10" placeholder="Pourquoi trouvez-vous que votre lien est util ? (max. 200 caractères)" maxlength="200"></textarea>
  <input type="submit" value="Envoyer">
</form>


<?php
if (isset($_POST['name']) && isset($_POST['link'])) {
  $name = trim($_POST['name']);
  $link = trim($_POST['link']);
  $comment = isset($_POST['comment']) ? trim($_POST['comment']) : ' ';

  $name = htmlentities($name);
  $link = htmlentities($link);
  $comment = htmlentities($comment);
  $newTime = time();

  
    $linkfile = fopen('links.txt', 'a+');
    fwrite($linkfile, "$name --- $link --- $comment --- $newTime" . 'ENDOFENTRY'. PHP_EOL);
    fclose($linkfile);
}
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