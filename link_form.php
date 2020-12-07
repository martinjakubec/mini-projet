<form action="formulaire.php" method="POST">
  <label for="name">Votre nom:</label>
  <input type="text" name="name">
  <label for="link">Votre lien:</label>
  <input type="text" name="link">
  <label for="commment">Commentaire:</label>
  <textarea name="comment" cols="30" rows="10" placeholder="Pourquoi trouvez-vous que votre lien est util ?"></textarea>
  <input type="submit" value="Envoyer">
</form>


<?php 
  if(isset($_POST['name']) && isset($_POST['link'])) {
    $name = $_POST['name'];
    $link = $_POST['link'];
    $comment = $_POST['comment'] || '';

    var_dump($name);
    var_dump($link);
    var_dump($comment);
  }
?>