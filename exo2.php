<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
     $_SESSION['prenom'] = 'Romain';
     $_SESSION['nom'] = 'Quet';
     $_SESSION['age'] = 20;

     echo '<a href="exo2page2.php">page 2</a>'
    ?>
  </body>
</html>
