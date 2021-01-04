<form action="" method="POST">
  <label for="name">Votre nom:</label>
  <input type="text" name="name" required>
  <label for="link">Votre lien:</label>
  <input type="text" name="link" required>
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
  fwrite($linkfile, "$name --- $link --- $comment --- $newTime" . 'ENDOFENTRY' . PHP_EOL);
  fclose($linkfile);
  header("Location: /mini-projet/?page=liens");
}
?>