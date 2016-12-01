<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style>
    body {
      font-family: sans-serif;
      text-align: center;
      background-color: #2f3431;
      color: white;
    }
    p {
      color: red;
    }
    a {
      color: white;
      font-size: 12px;
    }
  </style>
  <body>

<h3>Login </h3>
<p><?php echo $_COOKIE['login'];?></p>

<h3>Mot de passe</h3>
<p><?php echo $_COOKIE['mdp'];?>
  </br><a href="exo5.php">modifier</a></p>





  </body>
</html>
