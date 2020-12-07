<?php
  echo "cuisine";

  switch($cuisine){
    case 'chinoise':
      include 'chinoise.php';
      break;
    case 'slovaque':
      include 'slovaque.php';
      break;
  }
?>
