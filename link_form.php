<form action="formulaire.php" method="POST">
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
  $name = $_POST['name'];
  $link = $_POST['link'];
  $comment = isset($_POST['comment']) ? $_POST['comment'] : '';

  $name = htmlentities($name);
  $link = htmlentities($link);
  $comment = htmlentities($comment);

  $newTime = time();
  setcookie('spamprevent', $newTime, 10*60*1000);

  if(!isset($_COOKIE['spamprevent'])) {
    $linkfile = fopen('links.txt', 'a+');
    fwrite($linkfile, "$name --- $link --- $comment --- $newTime" . PHP_EOL);
    fclose($linkfile);

  } else {
    echo 'dont spam here, plz';
  }
}
?>