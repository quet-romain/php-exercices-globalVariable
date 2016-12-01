<?php
$mdp = $_POST['password'];

setcookie('mdp', $mdp, time() + 365*24*3600, null, null, false, true);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style>
    body {
      text-align: center;
      font-family: sans-serif;
      background-color: #2f3431;
    }
    form{
      color: white;
      align-items: center;
      display: flex;
      flex-direction: column;
      margin:40px;
    }

    input{
      margin: 10px;
      height: 30px;
      width: 400px;
      padding: 10px;
      background-color: rgba(0, 0, 0, 0.5);
      border:0;
      font-size: 18px;
      color: white;
    }
    button{
      margin: 10px;
      height: 40px;
      width:100px;
      border-radius: 3px;
      font-size: 18px;
      background-color: rgba(0, 0, 0, 0.5);
      color: white;
      border:0;
    }

    a {
      font-family: sans-serif;
      text-decoration: none;
      color: white;
      font-size: 20px;

    }
  </style>
  <body>
  <form action="exo5.php" method="post">
    <label>Nouveau mot de passe</label>
    <input type="password" name="password" value="">
    <button type="submit" name="sudmit">valide</button>
  </form>
  <a href="exo4.php">Afficher Cookie</a>
  </body>
</html>
